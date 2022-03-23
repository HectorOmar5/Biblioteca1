<!--<?php ob_start();?>-->	
<?php include('header.php'); ?>
<?php include('navbar2.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="../LMS/EST11.png" class="img-rounded">
					</div>
					<!--<br>
					<div class="span2">
						<?php //include('sidebar.php'); ?>
                	</div>
                	<br>-->

				<div class="login">
				<div class="log_txt">
				<p><strong>INTRODUZCA SUS CREDENCIALES DE ACCESO</strong></p>
				</div>

						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">USUARIO:</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Usuario" autocomplete="off" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">CONTRASEÑA:</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Contraseña" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;INICIAR SESION</button>

								</div>
								</div>

								<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
								$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
								$num_row = mysqli_num_rows($result);
									$row=mysqli_fetch_array($result);
									if( $num_row > 0 ) {
										//header('location:dashboard.php');
										echo '<script>alert("BIENVENIDO BIBLIOTECARIO")</script> ';
										echo "<script>location.href='dashboard.php'</script>";
								$_SESSION['id']=$row['user_id'];
									}
									else{ ?>
								<div class="alert alert-danger">Usuario o Contraseña Incorrecta</div>		
								<?php
								}}
								?>

								
						</form>
				</div>
			</div>		
			</div>
		</div>
    </div>

<?php include('../footer.php') ?>
<!--<?php ob_end_flush(); ?>-->
