<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div class="container">
		<div class="margin-top">
			<div class="row">	
			<?php include('head.php'); ?>

<div class="col-main">
	<div class="cms">
	<div class="loader_success"></div>

	<h2>Otra Forma De Contactarnos</h2>

	
	<div class="Cotactform">
		<div class="personal_info">
			
			<label>NOMBRE: </label>
			<input type="text" name="fname" class="fname email_text" placeholder="NOMBRE" autocomplete="off" required />
			
			<label>APELLIDO: </label>
			<input type="text" name="lname" class="lname email_text" placeholder="APELLIDO" autocomplete="off" required />
			
			
			<label>CORREO ELECTRONICO: </label>
			<input type="text" id="validate" name="email" class="email email_text" placeholder="CORREO ELECTRONICO" autocomplete="off" required />
			
			<label>ESCRIBIR MENSAJE: </label>
			<textarea class="message" placeholder="ESCRIBIR MENSAJE..." required style="width: 580px; height: 225px;"></textarea>
			<p>
			<!--<button class="send"><span>ENVIAR</span></button>-->
			<button type="submit" value="SendMessage" class="btn btn-danger">ENVIAR MENSAJE</button>
			</p>
			
		</div>
	</div>
</div>
</div>

<?php include('footer.php') ?>