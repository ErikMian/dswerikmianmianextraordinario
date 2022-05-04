<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
 
</head>
<body >
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #006DFC">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BLOG DE ERIK MIAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="verpublicacion.php">VER PUBLICACIÓN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </header>
    <center>
    <h2 style="color: #006DFC;">BLOG DE ERIK MIAN</h2>
    <form  method="post">
    <br><br>
    <div class="entradas">
    <span class="input-group-addon requerido">TITULO:</span><br>
     <input type="text" id="TITULO" name="TITULO" /> <br><br>    
     <span class="input-group-addon requerido">LINK DEL SERVIDOR DE LA IMAGEN:</span><br>
     <input type="text" id="IMAGEN" name="IMAGEN" /><br><br>
     <span class="input-group-addon requerido">DESCRIPCIÓN:</span><br>
     <input type="text" id="DESCRIPCION" name="DESCRIPCION" /> <br><br> 
     <span class="input-group-addon requerido">AUTOR:</span><br>
     <input type="text" id="AUTOR" name="AUTOR" /> <br><br> 
     <span class="input-group-addon requerido">FECHA:</span><br>
     <input type="date" id="FECHA" name="FECHA" /> <br><br>   
    </div>
    
    <div class="boton">
        <input type="submit" name="AGREGARPUBLICACION" value="AGREGAR PUBLICACIÓN"/>
    </div>
 </form> 
 <hr> 
 <?php 
   
   if(isset($_POST['AGREGARPUBLICACION'])){
       $TITULO=$_POST['TITULO'];
       $IMAGEN=$_POST['IMAGEN'];
       $DESCRIPCION=$_POST['DESCRIPCION'];
       $AUTOR=$_POST['AUTOR'];
       $FECHA=$_POST['FECHA'];
       if($TITULO !="null" && $IMAGEN !="null" && $DESCRIPCION !="null" && $AUTOR !="null" && $FECHA !="null")
          {echo "Publicación guardada correctamente";
            array_push($_SESSION['json'],'{"TITULO":"'.$TITULO.'","IMAGEN":"'.$IMAGEN.'","DESCRIPCION":"'.$DESCRIPCION.'","AUTOR":"'.$AUTOR.'","FECHA":"'.$FECHA.'","Guardado":"SI"}');
            
            header('location:verpublicacion.php');
           }
          else{
            array_push($_SESSION['json'],'{"TITULO":"'.$TITULO.'","IMAGEN":"'.$IMAGEN.'","DESCRIPCION":"'.$DESCRIPCION.'","AUTOR":"'.$AUTOR.'","FECHA":"'.$FECHA.'","Guardado":"NO"}');
            echo "La publicación no se a guardado";
            
   }    }
 
 ?>
 </center>
</body>
</html>


