<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cabecera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class  ="cuerpo">
<div class = "navbar" style = "position:relative">
        <div class = "container"> 
            <a href="index.php" class = "logo" id = "logo">AutoCar<span>Service</span></a>
            <img class = "menu" id = "menu" src="imgProyecto/recurso 1.png"  alt="">
          
          <nav class = "principal-nav">
          
            <ul class = "primary-nav" id = "primary-nav">
              <li id = "verPubli"></li>
              <li id = "ventas"></li>
              <li id = "registrar"></li>
              <li class = "inicio"><a href="index.php">Inicio</a></li>
              <li><a href="">Sobre nosotros</a></li>
              <li><a href="catalogo.php">Catalogo</a></li>
              <li><a href="vendedores.php">Vendedores</a></li>
              <li><a href="login.php">Iniciar Sesion</a></li>
              
            </ul>
        
          </nav>
    
        </div>
      </div>
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
       
      </script>
    </body>
</html>
<?php if(isset($_SESSION["correo"]) && isset($_SESSION['contraseña'])){
      
        
        echo '<script>
        let unorderList = document.getElementById("primary-nav");

 unorderList.style.marginLeft = "-2";

 unorderList.innerHTML = `<li class = "inicio"><a href="index.php">Inicio</a></li>
  <li id = "registrar"></li>
 <li><a href="">Sobre nosotros</a></li>
 <li><a href="catalogo.php">Catalogo</a></li>
 <li><a href="vendedores.php">Vendedores</a></li>
 <li style = "margin-top:-0.3em; margin-left:1em;"> <div class="btn-group" >
 
<div class="dropdown">
<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Perfil
</button>
<ul class="dropdown-menu" id = "dd-menu" style = "display:block;" style = "margin-top:1em;">
  <li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="#">Action</a></li>
   <li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="verPedidos.php">Pedidos</a></li>
   <li style = "margin-left:-2em; width:130px;" ><a class="dropdown-item" href="configurarCuenta.php">Configuracion</a></li>
   <li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="cerrarSesion.php">Cerrar sesion</a></li>
</ul>
</div>

</div> </li>`;

        </script>';

      ?>
     
      
     

      <?php
    if($_SESSION["cont"]>=1){
      
      
    
     



      ?>
      <script >
          let divPrincipal22  = document.getElementById("registrar");
let divPrincipal  = document.getElementById("ventas");
let div = document.getElementById("primary-nav");

    div.style.marginLeft = "-0.1em";
    div.style.marginLeft = "6.1em";
 

 div.innerHTML = `<li class = "inicio"><a href="index.php">Inicio</a></li>
 <li><a href="registrarvendedor.php">Registrar vendedor</a></li>
 <a href="interfaz.php">Ver ventas</a>
 <li id = "registrar"></li>
<li><a href="">Sobre nosotros</a></li>
<li><a href="catalogo.php">Catalogo</a></li>
<li><a href="vendedores.php">Vendedores</a></li>
<li style = "margin-top:-0.3em; margin-left:1em;"> <div class="btn-group" >

<div class="dropdown">
<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
 Perfil
</button>
<ul class="dropdown-menu" id = "dd-menu" style = "display:block;" style = "margin-top:1em;">
 <li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="#">Action</a></li>
  <li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="verPedidos.php">Pedidos</a></li>
  <li style = "margin-left:-2em; width:130px;" ><a class="dropdown-item" href="configurarCuenta.php">Configuracion</a></li>
  <li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="cerrarSesion.php">Cerrar sesion</a></li>
</ul>
</div>

</div> </li>`;
      </script>
      <?php }else if($_SESSION["countVendedor"]>=1){
           ?>
       <script >
           let divPrincipal22  = document.getElementById("primary-nav");

divPrincipal22.style.marginLeft = "0.2em";

divPrincipal22.style.marginLeft = "6em";

divPrincipal22.innerHTML = ` 
<li class = "inicio"><a href="index.php">Inicio</a></li style = "margin-left:-20em;">
<li class = "inicio"><a href="registrarAuto.php">Publicar Vehiculo</a></li>
<li><a href="verPublicaciones.php">Mis Publicaciones</a></li>
<li><a href="catalogo.php">Catalogo</a></li>
<li><a href="vendedores.php">Vendedores</a></li>

<li style = "margin-top:-0.3em; margin-left:1em;"> <div class="btn-group" >
 
<div class="dropdown">
<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Perfil
</button>
<ul class="dropdown-menu" id = "dd-menu" style = "display:block;" style = "margin-top:1em;">
<li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="#">Action</a></li>
<li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="verPedidos.php">Pedidos</a></li>
<li style = "margin-left:-2em; width:130px;" ><a class="dropdown-item" href="configurarCuenta.php">Configuracion</a></li>
<li style = "margin-left:-2em;width:130px;"><a class="dropdown-item" href="cerrarSesion.php">Cerrar sesion</a></li>
</ul>
</div>

</div> </li>
`;

           
       </script>
    
  <?php
   
  }
    
}?>