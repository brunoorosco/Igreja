
<!DOCTYPE html>
<html>
    
<head>
    <title>Acesso - Secretaria</title>

    
    <link rel="stylesheet" href="../../_fonts/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_fonts/css/estilo.css">

    <link rel="stylesheet" type="text/css" href="../../_fonts/css/sweetalert2.min.css">
   
    <script type="text/javascript" src="../../_fonts/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../../_fonts/js/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<style type="text/css">
    body{
        background-image: url(../../img/logo_comun_desf_pret.png);
        background-size: cover;
        color: black;
        background-repeat: no-repeat;
        background-position: center; 
        background-attachment: fixed;
       

      }
     
#container{
  width: 400px;
  height: 400px;
  background: inherit;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  margin-left: -200px;
  margin-top: -250px;
  border-radius: 8px;
  padding-top: 100px;
}
#container:before{
  width: 450px;
  height: 450px;
  content: "";
  position: absolute;
  top: -25px;
  left: -25px;
  bottom: 0;
  right: 0;
  background: inherit;
  box-shadow: inset 0 0 0 200px rgba(255,255,255,0.2);
  filter: blur(15px);
 
}
 input[type="submit"]{
  border: 0;
  border-radius: 8px;
  padding-bottom: 0;
  height: 50px;
  background: #ff5c33;
  color: black;
  cursor: pointer;
  transition: all 600ms ease-in-out;
  width: 300px;
}
input[type="submit"]:hover{
  background: #ff5c33;
}
  </style>
<script type="text/javascript">

  </script>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
    <div id="container">
        <div class="col-md-10 offset-md-1">       
                <form  id="login_form" action="validaLogin.php" method="POST">
                  <?php 

                      require_once '../../_fonts/config/funcoes.php';
                     

                      /* inicia a sessão */
                      if (isset($_GET['getErro'])) {

                        echo "<script language = javascript>
                                swal({ title:'Senha ou/e Usuário não conferem!!!',
                                type:'error',
                                timer:4000});
                                </script>";}
                     ?>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control input_user" value="" placeholder="username">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox text-center">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Lembrar-me</label>
                            </div>
                        </div>
                            <div class="form-group">
                    <input type="submit"  name="entrar" id="entrar" class="btn btn-color" style="z-index=1" value="Entrar" />

                </div>
                    <p class="text-center">
                        <a class=" text-dark" href="#">Esqueceu sua senha?</a>
                    </p>
                 </form>
                </div> 
            </div>
        </div>
</body>
</html>


