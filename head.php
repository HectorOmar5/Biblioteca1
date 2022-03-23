		<div class="span12">
				<div class="header">
				<div class="pull-left">
				<img class="stilogo" src="LMS/EST11.png">
				</div>
				</div>

					<div class="alert alert-info"><Strong>¡ENHORABUENA!</strong>&nbsp;BIENVENIDO A LA BIBLIOTECA
					
					
					
	
								
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								/*$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;*/


								/*setlocale(LC_ALL,"es_ES");
								echo strftime("%A %d de %B del %Y")*/

								//no soporta la función  setlocale y sale en ingles, asi que lo hice de manera manual usando arrays
								$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
								$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
								echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
								?>
							</div>
					</div>
				
					
				</div>