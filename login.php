<!DOCTYPE html>
<html>
    
<head>
    <title>Acesso - Secretaria</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<style type="text/css">
    body{
        background-image: url(img/logo_comun.png);
        background-size: cover;
        color: white;
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
  background: #c0392b;
  color: white;
  cursor: pointer;
  transition: all 600ms ease-in-out;
  width: 300px;
}
input[type="submit"]:hover{
  background: #C0392B;
}
  </style>
<!--Coded with love by Mutiullah Samim-->
<body>
    <div id="container">
        <div class="col-md-10 offset-md-1">       
                <form action="">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="" class="form-control input_user" value="" placeholder="username">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="" class="form-control input_pass" value="" placeholder="password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox text-center">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Lembrar-me</label>
                            </div>
                        </div>
                            <div class="form-group">
                    <button type="submit"  id="Confirmar" class="btn btn-color" style="z-index=1">Entrar</button> 
                </div>
                    <p class="text-center">
                        <a class=" text-white" href="#">Esqueceu sua senha?</a>
                    </p>
                 </form>
                </div> 
            </div>
        </div>
</body>
</html>
