<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;REGISTRO Y LISTADO DE LIBROS</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li><a href="books.php">TODOS</a></li>
										<li><a href="new_books.php">LIBROS NUEVOS</a></li>
										<li class="active"><a href="old_books.php">LIBROS ANTIGUOS</a></li>
										<li><a href="lost.php">LIBROS PERDIDOS</a></li>
										<li><a href="damage.php">LIBROS DAÑADOS</a></li>
										<li><a href="sub_rep.php">LIBROS ARCHIVADOS</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>LIBROS ANTIGUOS</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> EXPORTAR PDF</a>
								</div>
								<p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;AGREGAR LIBRO</a></p>
							
                                <thead>
                                    <tr>
									    <th>#</th>                                 
                                        <th>TITULO DEL LIBRO</th>                                 
                                        <th>CATEGORIA</th>
										<th>AUTOR</th>
										<th class="action">N° COPIAS</th>
										<th>PUB</th>
										<th>EDITORIAL</th>
										<th>ISBN</th>
										<th>AÑO DE PUBLICACION</th>
										<th>FECHA DE PUBLICACION</th>
										<th class="action">ELIMINAR/EDITAR</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysqli_query($conn,"select * from book where status = 'old'")or die(mysqli_error($conn));
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];

											$cat_query = mysqli_query($conn,"select * from category where category_id = '$cat_id'")or die(mysqli_error($conn));
											$cat_row = mysqli_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo $row['book_copies']; ?> </td>
                                     <td><?php echo $row['book_pub']; ?></td>
									 <td><?php echo $row['publisher_name']; ?></td>
									 <td><?php echo $row['isbn']; ?></td>
									 <td><?php echo $row['copyright_year']; ?></td>		
									 <td><?php echo $row['date_added']; ?></td>
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Eliminar" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_book_modal.php'); ?>
										<a  rel="tooltip"  title="Editar" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>