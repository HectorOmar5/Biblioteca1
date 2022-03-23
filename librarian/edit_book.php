<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($conn,"select * from book LEFT JOIN category on category.category_id  = book.category_id where book_id='$get_id'")or die(mysqli_error($conn));
		$row=mysqli_fetch_array($query);
		$category_id = $row['category_id'];
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;EDITAR LIBRO</div>
			<p><a class="btn btn-info" href="books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;ATRAS</a></p>
	<div class="addstudent">
	<div class="details">INTRODUZCA LA INFOMACION DEL LIBRO</div>	
	<form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">TITULO DEL LIBRO:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title" value="<?php echo $row['book_title']; ?>" placeholder="book_title" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="TITULO DEL LIBRO" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">CATEGORIA:</label>
			<div class="controls">
			<select name="category_id">
				<option value="<?php echo $category_id; ?>"><?php echo $row['classname']; ?></option>
				<?php $query1 = mysqli_query($conn,"select * from category where category_id != '$category_id'")or die(mysqli_error($conn));
				while($row1 = mysqli_fetch_array($query1)){
				?>
				<option value="<?php echo $row1['category_id']; ?>"><?php echo $row1['classname']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">AUTOR:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="author" value="<?php echo $row['author']; ?>" placeholder="AUTOR" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">N° COPIAS:</label>
			<div class="controls">
			<input class="span1" type="text" id="inputPassword" name="book_copies" value="<?php echo $row['book_copies']; ?>" placeholder="N° COPIAS" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">PUB:</label>
			<div class="controls">
			<input type="text" class="span4"  id="inputPassword" name="book_pub" value="<?php echo $row['book_pub']; ?>" placeholder="book_pub" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">EDITORIAL:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="EDITORIAL" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">ISBN:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="ISBN" autocomplete="off" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">AÑO DE PUBLICACION:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="AÑO DE PUBLICACION" autocomplete="off" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">ESTADO:</label>
			<div class="controls">
			<select name="status">
				<option><?php echo $row['status']; ?></option>
				<option>NUEVO</option>
				<option>ANTIGUO</option>
				<option>PERDIDO</option>
				<option>DAÑADO</option>
				<option>PARA REEMPLAZO</option>
			</select>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>