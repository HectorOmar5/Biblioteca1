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
                <div class="alert alert-danger">¡REGISTRATE!</div>

                <form class="form-horizontal" method="post" action="register.php">
                  <?php include('errors.php'); ?>
                  <div class="control-group">
                    <label class="control-label">Usuario:&nbsp;</label>
                    <input type="text" name="username" placeholder="Usuario" autocomplete="off" value="<?php echo $username; ?>" required>
                  </div>

                  <div class="control-group">
                    <label class="control-label">E-mail:&nbsp;</label>
                    <input type="email" name="email" placeholder="E-mail" autocomplete="off" value="<?php echo $email; ?>" required>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Contraseña:&nbsp;</label>
                    <input type="password" name="password_1" placeholder="Contraseña" required>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Confirmar:&nbsp;</label>
                    <input type="password" name="password_2" placeholder="Confirmar Contraseña" required>
                  </div>

                  <!--<div class="input-group">
                    <button type="submit" class="btn" name="reg_user">Register</button>
                  </div>-->

                   <div class="controls">
                        <button type="submit" class="btn btn-danger" name="reg_user"><i class="icon-signin icon-large"></i>&nbsp;Registrarse</button>
                        <p>
                            <div>
                                ¿Ya Tienes Cuenta? <a href="login.php">Iniciar Sesion</a>
                            </div>
                        </p>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>

<?php include('footer.php') ?>