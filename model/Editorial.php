<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_editorial,$descripcion,$sitio_web,$estatus){
        global $conexion;
        $estatus="Alta";
        $sql="INSERT INTO editoriales(id_editorial , descripcion, sitio_web, estatus) VALUES ('$id_editorial', '$descripcion','$sitio_web','$estatus')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $editorial=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM editoriales WHERE estatus='Alta'";  //cambiar a la s k estan en alta
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($menu = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $editorial[]=$menu;
            }
        }
        mysqli_close($conexion);
        return $editorial;
    }

    function modificar($id_editorial,$descripcion,$sitio_web){
        global $conexion;
        $sql="UPDATE editoriales SET descripcion='$descripcion' sitio_web='$sitio_web' WHERE id_editorial ='$id_editorial'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $editorial=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM editoriales WHERE estatus='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($valor= mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $editorial[]=$valor;
            }
        }
        mysqli_close($conexion);
        return $editorial;
    }


    function listar(){
        global $conexion;
        $editorial=array();//RELACION ES EL NOMBRE DE LA TABLA
        $sql2="SELECT * FROM editoriales WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($valor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $editorial[]=$valor;
            }
              mysqli_close($conexion);
            return $editorial;
        }


        function baja($id_editorial){ 
            $estatus='baja';
            global $conexion;
            $sql="UPDATE editoriales SET estatus='$estatus' WHERE id_editorial='$id_editorial'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM editoriales WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        } 
    
        function alta($id_editorial){ 
            $estatus='Alta';
            global $conexion;
            $sql="UPDATE editoriales SET estatus='$estatus' WHERE id_editorial='$id_editorial'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM editoriales WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        }

    /*
    function elimina($id,$descripcion,$estatus){  //ojo papi lo kambie, pero es baja
        global $conexion;
        $sql="UPDATE relacion SET estatus=$estatus WHERE id_editorial ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM editorial";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }
        }
    }*/
    

?>
