
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/gota__odapas.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styeleAnuncios.css">
    <title>Opdapas</title>
</head>
<body>
    <!-- Esta parte es el menu de temas de la derecha -->
    <section class="opci">
        <a href="index.html"class="opci__item opci__item--1"></a>
        <a href="cuidado-del-agua.html"class="opci__item opci__item--2"></a>
        <a href="anuncios.php"class="opci__item opci__item--3"></a>
  
    </section>

    <article>
    <h1>Avisos</h1>
    <section class="container">

    <?php
    $url = "sql9.freemysqlhosting.net:3306";
    $usuarioSer = "sql9601255";
    $passwordSer = "wnJU3xaVef";
    $base = "sql9601255";
    try
    {
        $con = mysqli_connect($url, $usuarioSer, $passwordSer, $base);
        mysqli_set_charset($con, "utf8mb4");

    }catch(Exception $u)
    {
        echo "Error".$u;
    }

        $consulta = "select Anuncio from anuncios";
        $resultado = mysqli_query($con, $consulta);
        if($resultado)
        {
            while($row = $resultado->fetch_array())
            {
                $anuncio = $row['Anuncio'];
?>
    
    <h2 class="anuncio">
        <?php $ac = $anuncio; 
        $ojos = "<Ojitos>";
        $ojosP = "👀";
        $Exclamacion = "<Exclamacion>";
        $ExclamacionP = "🚨";
        $ExcamacionAmarilla = "<ExclamacionAmarillo>";
        $ExcamacionAmarillaP = "🔱";
        $m = str_replace($ojos, $ojosP, $ac);
        $m1 = str_replace($Exclamacion, $ExclamacionP, $m);
        $m2 = str_replace($ExcamacionAmarilla, $ExcamacionAmarillaP, $m1);
        echo $m2;
                
        ?>
        </h2>

        <?php
        }
    }
?>
    </section>
</body>
</html>