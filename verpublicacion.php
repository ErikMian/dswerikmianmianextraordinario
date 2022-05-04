

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>BLOG ERIK MIAN</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #006DFC;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BLOG DE ERIK MIAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="crearpublicacion.php">CREAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="borrarpublicacion.php">ELIMINAR</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      </header>
      <?php 
session_start();

if(!empty($_SESSION['json'])){
    foreach ($_SESSION['json'] as $item) {
        $josn=json_decode($item,true);
        if($josn['Guardado']=="SI")
        echo '<center><div class="uno"><h1>'.$josn['TITULO'].'<br>'.$josn['FECHA'].'</h1><br><br> <img src="'.$josn['IMAGEN'].'"/> <br><h4><br>'.$josn['DESCRIPCION'].'<br><br></h4><h2> '.$josn['AUTOR'].'<br><br><br></h2></div></center>';
        else
        echo '<h1>Fallo al guardar la publicació</h1>';
        
    }
     
}
?>
</body>
</html>
