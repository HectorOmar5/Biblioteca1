<?php
session_start();

// initializando Variables
$username = "";
$email    = "";
$errors = array(); 

// conectar a la BD
$db = mysqli_connect('localhost', 'root', '', 'biblioteca1');

// Registro de usuario
if (isset($_POST['reg_user'])) {
  //recibir todos los valores de entrada del formulario
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // Validación del formulario: asegúrese de que el formulario esté correctamente rellenado...
  //agregando (array_push()) el error correspondiente a la matriz $errors
  if (empty($username)) { array_push($errors, "Usuario requerido"); }
  if (empty($email)) { array_push($errors, "E-mail requerido"); }
  if (empty($password_1)) { array_push($errors, "La contraseña es requerida"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Las contraseñas no coinciden");
  }

  // primero verifique la base de datos para asegurarse que el usario o email no esta registrado 
  $user_check_query = "SELECT * FROM students WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // si el suaurio ya existe
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "El nombre de usuario ya existe");
    }
    //si el e-mail ya existe

    if ($user['email'] === $email) {
      array_push($errors, "El e-mail ya existe");
    }
  }

  // Finalmente, registrar el usuario si es que no hay errores en el formulario
  if (count($errors) == 0) {
  	$password = md5($password_1);//cifrar la contraseña antes de guardarla en la base de datos

  	$query = "INSERT INTO students (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Registro Con Éxito";
  	header('location: download_files/index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Usuario Requerido");
  }
  if (empty($password)) {
  	array_push($errors, "Contraseña Requerida");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Haz Iniciado Sesion";
  	  header('location: download_files/index.php');
  	}else {
  		array_push($errors, "Nombre de usuario y/o contraseña incorrecta");
  	}
  }
}

?>