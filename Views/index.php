<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>Assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>Assets/css/font-awesome.min.css">
    <title>Iniciar | Sesión</title>
</head>
<style type="text/css">

#body_fonnd:before {
    content: '';
    position: fixed;
    width: 100vw;
    height: 100vh;
    /*background-image: url(https://i.postimg.cc/8cf6v1rk/1.jpg);*/
  background-image: url(Assets/img/background.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    -webkit-background-size: cover;
    filter: blur(3px);
}
   #namesistem{
  font-size: 13px;
}
    
</style>

<body id="body_fonnd">
    
    <section class="login-content">
        
        <div class="login-box" style="">
            <form class="login-form" id="frmLogin" onsubmit="frmLogin(event);">
                <h3 class="login-head">
            <img src="Assets/img/logo.png" style="width: 150px;height: 80px;">

            <p id="namesistem" class="semibold-text mb-2"><strong>Biblioteca</strong>- Sistema de gestión académico del Perú</p></h3>
             <div class="alert alert-danger d-none" role="alert" id="alerta">
                    
                </div>
                <div class="form-group">
                    <label class="control-label">USUARIO</label>
                    <input class="form-control" type="text" placeholder="Usuario" id="usuario" name="usuario" autofocus required>
                </div>
                <div class="form-group">
                    <label class="control-label">CONTRASEÑA</label>
                    <input class="form-control" type="password" placeholder="Contraseña" id="clave" name="clave" required>
                </div>
               
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url; ?>Assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
 
    <script>
        const base_url = '<?php echo base_url; ?>';
    </script>
    <script src="<?php echo base_url; ?>Assets/js/login.js"></script>
    
   
</body>

</html>