<!DOCTYPE html>
<html lang="Es">

<head>
  <?php 
  include('../../includes/cabeceras2.php');
   ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    
    <?php
     $activa='index.php">usuarios<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus2.php'); ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../particles/js/particles.min.js"></script>
    <script src="../../particles/js/apps.js"></script>

        <!--lcontenedor-->
    <header class="contenedor">

    <div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="../../img/ImgAutors.jpeg" loading="lazy" style="width: 85%;"
                            class="img-responsive img-fluid rounded img3" />
                    </div>
                </div>
            </dir>
        </div>

        <div class="divT">
            <h1><span class="badge badge-info">Usuarios</span></h1>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        
        <div class="divtex">
            <p class="divtex">El usuario de la biblioteca es aquella persona que necesita información para el 
              desarrollo de sus actividades profesionales, de estudio, de ocio, etc., y recurre a la biblioteca 
              para localizar dicha información.</p>
        </div>
    </header>

    <!-- Footer-->
    <?php
    include('../../includes/footer.php');
    ?>
    
</body>

</html>