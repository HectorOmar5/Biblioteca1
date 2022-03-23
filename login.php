<?php include('server.php') ?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="row">
            <?php include('head.php'); ?>
            <div class="span2">
                <?php include('sidebar.php'); ?>
            </div>
            <div class="span10">
                <div class="alert alert-danger">INTRODUZCA SUS CREDENCIALES DE ACCESO</div>
                <!--<form class="form-horizontal" method="post" action="login.php">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">USUARIO: </label>
                        <div class="controls">
                            <input type="text" id="inputEmail" name="student_no" placeholder="USUARIO" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">CONTRASEÑA: </label>
                        <div class="controls">
                            <input type="password" id="inputPassword" name="password" placeholder="CONTRASEÑA" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="login" class="btn btn-success"><i
                                    class="icon-signin icon-large"></i>&nbsp;INICIAR SESION</button>
                                    <p>
                                    <div>
                                        ¿No tienes cuenta? <a href="register.php">¡Registrate!</a>
                                    </div>
                        </div>
                    </div>
                </form>-->
                <form class="form-horizontal" method="post" action="login.php">
                    <!--?php include('errors.php'); ?>-->
                    <div class="control-group">
                        <label class="control-label">USUARIO:&nbsp;</label>
                        <input type="text" name="username" autocomplete="off" placeholder="Usuario" required>
                    </div>
                    <div class="control-group">
                        <label class="control-label">CONTRASEÑA:&nbsp;</label>
                        <input type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="controls">
                        <button type="submit" class="btn btn-success" name="login_user"><i class="icon-signin icon-large"></i>&nbsp;Iniciar Sesion</button>
                        <p>
                            <div>
                                ¿No Tienes Cuenta? <a href="register.php">¡Registrate!</a>
                            </div>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>