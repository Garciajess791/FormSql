<?php require('controller-sql.php');

?>

<!doctype html>
<html lang="en">
  <head>
  <title>Formulario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <meta content="" name="keywords">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <style type="text/css"></style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="canonical" href="https://mdbootstrap.com/snippets/standard/mdbootstrap/2958490/">
    <link rel="canonical" href="https://mdbootstrap.com/snippets/standard/temp/4628244/">
    <script src="https://kit.fontawesome.com/690c81679b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
    
    <!-- Bootstrap core CSS -->
<link href="bootstrap.css" rel="stylesheet">
    <style>
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }

        .container {
            margin-bottom: 5rem;
            margin-top: 5rem;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .footer{
        margin-bottom: 5rem;
        margin-top: 5rem;
      }
    </style>

<body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">INFO</h4>
          <p class="text-muted">Formulario conectado a una base de datos con lenguaje SQL</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
          <li><a href="https://github.com/Garciajess791"><i class="fa-brands fa-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/jessica-garcia-padilla-45660b223">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
          </a></li>
          <li><a href="mailto:jessicagp791@gmail.com">jessicagp791@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
        <h2 class="text-white">Inscripción Deportiva</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<main>
  <form action="controller-sql.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <label class="form-label" for="deporte"> Deporte: </label> 
            <select name="deporte" id="deporte" class="form-control">
              <option></option>
              <option value="atletismo">Atletismo</option>
              <option value="futbol">Fútbol</option>
              <option value="baloncesto">Baloncesto</option>
              <option value="voleibol">Voleibol</option>
              <option value="rugby">Rugby</option>
            </select>
        </div> 
        <div class="col-8">
          <label class="form-label" for="fecha">Fecha </label> 
          <input type="date" id="fecha" class="form-control" name="fecha">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label class="form-label" for="name"> Nombre Completo </label> 
          <input type="text" id="name" class="form-control" name="name" size="55">
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <label class="form-label" for="via">Tipo de Via</label>
            <select class="form-control" name="via">
              <option></option>
                <option>Calle</option>
                <option>Plaza</option>
              </select>
        </div>
        <div class="col-8">
          <label class="form-label" for="dir"> Dirección </label> 
          <input type="text" id="dir" class="form-control" name="dir" size="27">
        </div>
        <div class="col-2">
          <label class="form-label" for="ndir"> Numero </label> 
          <input type="text" id="ndir" class="form-control" name="ndir" size="5">      
        </div>
      </div> 
      <div class="row">
        <div class="col-6">
          <label class="form-label" for="pais">País</label>
            <select id="pais" class="form-control" name="pais">
              <option></option>
              <option value="ES">España</option>
              <option value="AD">Andoraa</option>

                
            </select>
        </div>
        <div class="col-6">
          <label class="form-label" for="prov"> Provincia </label>
          <input type="text" id="prov" class="form-control" name="prov" size="5">
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <label class="form-label" for="pobla"> Población </label>
          <input type="text" id="pobla" class="form-control" name="pobla" size="5">
        </div>
        <div class="col-4">
          <label class="form-label" for="zip"> Codigo Postal </label>  
            <input class="form-control" type="text" name="zip" id="zip"/>
        </div>
      </div> 
      <div class="row">
        <div class="col">
          <label class="form-label" for="tlf">Telefono </label>
          <input type="text" id="tlf" class="form-control" name="tlf" size="20">
        </div>
        <div class="col">
          <label class="form-label" for="nif"> Nif </label>
          <input type="text" class="form-control" name="nif" onchange="CalcularNif(this);" required></div>
      </div> 
      <div class="row">
        <div class="col">
          <label class="form-label" for="email"> E-mail </label>
          <input type="mail" id="email" class="form-control" name="email" size="50">
        </div>
      </div> 
      <div class="row">
        <div class="col">
          <label class="form-label" for="motvio"> Observaciones</label>
          <textarea rows="6" id="motivo" class="form-control" cols="40" name="motivo"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-check">
            <input type="radio" class ="form-check-input" name="terminos" value="lopd" id="terminos" required> 
            <label for="terminos" class="form-check-label">
              Estoy de acuerdo con la Ley de protección de datos
            </label>
          </div>
          <div class="form-check">
            <input type="radio" class ="form-check-input" name="terminos" value="desacuerdo" id="terminos"> 
            <label for="terminos" class="form-check-label">
             No autorizo la investigación de mis datos personales
            </label>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-8"> </div>
        <div class="col-2"> 
          <label for="enviar"></label>
          <input type="hidden" name="accion" value="ENVIO">
          <input type="submit" id="Enviar" class="btn btn-info" value="ENVIAR" /> 
        </div>
        <div class="col-2"> 
          <label for="reset"></label>
          <input type="reset" class="btn btn-danger" id="reset" name="reset" value="RESET">
        </div>
      </div>
    </div>
  </form>
  <?php
    if ($_GET) {
      if (isset($_GET['msn']) and !empty($_GET['msn'])) {
        echo $msn = '<div class="alert alert-danger text-center" role="alert">' . $_GET['msn'] . '</div>';
      }
    }
        ?>
</main>
  <script src="bootstrap.js"></script>
      
</body>
<footer>
<div class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <a href="https://github.com/Garciajess791"><i class="fa-brands fa-github"></i></a>
          <a href="https://www.linkedin.com/in/jessica-garcia-padilla-45660b223">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
          </a>
        </ul>

      </div>

      <p>&copy; Copyrights Jessica Garcia.</p>

      <div class="credits">
        Designed by <a href="">Bootstrap</a>
      </div>
      </div>
    </div>

</footer>

</html>