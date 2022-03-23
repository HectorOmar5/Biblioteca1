	<div id="delete_book<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">¿Estas Seguro De Eliminar Este Libro?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_books.php<?php echo '?id='.$id; ?>">SI</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;CERRAR</button>
		</div>
    </div>
	
