<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">AGREGAR USUARIO</div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;ATRAS</a></p>
	<div class="addstudent">
	<div class="details">INTRUDUZCA INFORMACION DEL USUARIO</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">NOMBRE(S):</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="NOMBRE(S)" autocomplete="off" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">APELLIDO(S):</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="APELLIDO(S)" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">GENERO:</label>
			<div class="controls">
			<select name="gender" required>
				<option></option>
				<option>Masculino</option>
				<option>Femenino</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">DIRECCION:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="DIRECCION" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">TELEFONO:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{10,10}" class="search" name="contact"  placeholder="TELEFONO"  autocomplete="off"  maxlength="10" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">TIPO:</label>
			<div class="controls">
			<select name="type" required>
			
			
			
									<option></option>
									<option>Estudiante</option>
									<option>Docente</option>
									<option></option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">AÑO - NIVEL:</label>
			<div class="controls">
				<select name="year_level" >
					

									<option> </option>
									<option>PRIMER AÑO</option>
									<option>SEGUNDO AÑO</option>
									<option>TERCER AÑO</option>
									<option>CUARTO AÑO</option>
									<option>QUINTO AÑO</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;GUARDAR</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>