<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($conn,"select * from member where member_id='$get_id'")or die(mysqli_error($conn));
		$row=mysqli_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;EDITAR USUARIO</div>
			<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;ATRAS</a></p>
	<div class="addstudent">
	<div class="details">INTRODUZCA LA INFORMACION DEL USUARIO</div>	
	<form class="form-horizontal" method="POST" action="update_students.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">NOMBRE(S):</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="NOMBRE(S)" autocomplete="off" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="NOMBRE(S)" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">APELLIDO(S):</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="APELLIDO(S)" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">GENERO:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="gender" value="<?php echo $row['gender']; ?>" placeholder="GENERO" autocomplete="off" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">DIRECCION:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="DIRECCION" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">TELEFONO:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{10,10}" class="search" name="contact"  placeholder="TELEFONO"  autocomplete="off"  maxlength="10" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">TIPO:</label>
			<div class="controls">
			<select name="type" required>
			
			
<?php 
		$query=mysqli_query($conn,"select * from member where member_id='$get_id'")or die(mysqli_error($conn));
		$row1=mysqli_fetch_array($query);
		
		?>					
									
									<option> </option>
									<option>ESTUDIANTE</option>
									<option>DOCENTE</option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">AÑO:</label>
			<div class="controls">
				<select name="year_level" required>
					
	<?php 
		$query=mysqli_query($conn,"select * from member where member_id='$get_id'")or die(mysqli_error($conn));
		$row1=mysqli_fetch_array($query);
		
		?>					
								
									<option> </option>
									<option>PRIMER AÑO</option>
									<option>SEGUNDO AÑO</option>
									<option>TERCER AÑO</option>
									<option>CUARTO AÑO</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;ACTUALIZAR DATOS</button>
			</div>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>