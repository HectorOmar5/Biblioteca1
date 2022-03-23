<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">AGREGAR LIBROS</div>
			<p><a href="books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;ATRAS</a></p>
	<div class="addstudent">
	<div class="details">INTRODUZCA INFORMACION DEL LIBRO</div>		
	<form class="form-horizontal" method="POST" action="books_save.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">TITULO DEL LIBRO:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title"  placeholder="TITULO DEL LIBRO" autocomplete="off" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">CATEGORIA</label>
			<div class="controls">
			<select name="category_id">
			<option></option>
			<?php
			$cat_query = mysqli_query($conn,"select * from category");
			while($cat_row = mysqli_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">AUTOR:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="AUTOR" autocomplete="off" required>
			</div>
		</div>
		

		
		

		<div class="control-group">
			<label class="control-label" for="iionputPassword">N° COPIAS:</label>
			<div class="controls">
			<input type="text" class="span1" id="inputPassword" name="book_copies"  placeholder="N° COPIAS" autocomplete="off" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">PUBLICACION DEL LIBRO:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="book_pub"  placeholder="PUBLICACION DEL LIBRO" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">EDITORIAL:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="publisher_name"  placeholder="EDITORIAL" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">ISBN:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="ISBN" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">AÑO PUBLICACION:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year"  placeholder="AÑO" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">ESTADO:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>Nuevo</option>
				<option>Antiguo</option>
				<option>Perdido</option>
				<option>Dañado</option>
				<option>Archivados</option>
			</select>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Guardar</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>