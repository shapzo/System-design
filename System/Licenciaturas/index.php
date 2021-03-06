<!DOCTYPE html>
<html lang="Es">

<head>
    <!------------------------------------

    CABECERAS DE LA PAGINA, SU CONFIGURACION SE ENCUENTRA EN LA CARPETA
    DE ---  INCLUDES EN LOS ARCHIVOS DE CABESERAS{2,3,4} 

    --------------------------------------->

    <?php
    include('../../includes/cabeceras2.php');
    ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">



    <!----------------------------------------
    AREA DE LA BARRA DE NAVEGACION
    ----------------------------------------->
    <?php
    $activa = 'index.php">Licenciaturas<span class="sr-only">(current)</span>';
    global $activa;
    require('../../includes/menus.php'); ?>

    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../particles/js/particles.min.js"></script>
    <script src="../../particles/js/apps.js"></script>

    <!--lcontenedor-->
    <header class="contenedor">

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="../../img/ImgAutors.jpeg" loading="lazy" style="width: 85%;" class="img-responsive img-fluid rounded img3" />
                    </div>
                </div>
            </dir>
        </div>

        <div class="divT">
            <h1><span class="badge badge-info">Licenciaturas</span></h1>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="divtex">
            <p class="divtex">Licenciatura es el título que se obtiene tras realizar ciertos estudios de
                educación superior entre 4 y 6 años de duración. Por otro lado, cuando se
                obtiene esta titulación, quiere decir que se es una persona capacitada para
                cumplir con una serie de tareas en un ámbito determinado. El término deriva
                del latín medieval “Licenciatura”, que a la vez viene de “licentiare” que quiere
                decir licenciar. El licenciado es quien se hace acreedor de una licencia.</p>
        </div>
    </header>


    <!-- Footer-->
    <?php
    include('../../includes/footer.php');
    ?>
    
</body>

</html>