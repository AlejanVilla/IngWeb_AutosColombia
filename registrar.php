<?php
include ("con_db.php");


if (isset ($_POST['enviar'])){

    $tipo = $_POST['tipo'];
    $doc = $_POST['doc'];
    $nombre = $_POST['nombre'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $tipoc = $_POST['tipoc'];
    $tipov = $_POST['tipov'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $modelo = $_POST['modelo'];
    $cilind = $_POST['cilind'];
    $color = $_POST['color'];

    $consulta = "INSERT INTO `clientes`(tipodoc, doc, nombre, telefono, email, tipocliente, tipovehiculo, marca, categoria, modelo, cilindraje, color) 
    VALUES ('$tipo','$doc','$nombre','$phone','$email','$tipoc','$tipov','$marca','$categoria','$modelo','$cilind','$color')";
    $result = mysqli_query($conex, $consulta);
    if (!$result){
     
        echo 'Error';
    }else{
        echo 'usuario registrado';
    }

};


    if (isset ($_POST['enviar2'])){

        $documento = $_POST['documento'];
        $tipdocu = $_POST['tipdocu'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $tipocliente = $_POST['tipocliente'];
        $tipovehi = $_POST['tipovehi'];
        $marc = $_POST['marc'];
        $categori = $_POST['categori'];
        $model = $_POST['model'];
        $cilindraje = $_POST['cilindraje'];
        $colr = $_POST['colr'];
        $codcelda = $_POST['codcelda'];
        $sector = $_POST['sector'];
        $tcelda = $_POST['tcelda'];
        $respons = $_POST['respons'];
    
        $query = "INSERT INTO `solicitudes`(tipodoc, doc, nombre, telefono, email, tipocliente, tipovehiculo, marca, categoria, modelo, cilindraje, color, codcelda, sector, tipocelda, resposable) 
        VALUES ('$tipdocu','$documento','$nombre','$telefono','$email','$tipocliente','$tipovehi','$marc','$categori','$model','$cilindraje','$colr','$codcelda','$sector','$tcelda','$respons')";
        $resultado = mysqli_query($conex, $query);
        if (!$resultado){
         
            echo 'Error solicitud';
        }else{
            echo 'solicitud registrada';
        }

    };

    if (isset ($_POST['registrar'])){

        $codigocelda = $_POST['codigocelda'];
        $Sectr = $_POST['Sectr'];
        $capac = $_POST['capac'];
        $estad = $_POST['estad'];
        $tipocelda = $_POST['tipocelda'];
        $responsable = $_POST['responsable'];

        $consultaa = "INSERT INTO `inventario`(codcelda, sector, capacidad, estado, tipocelda, responsable)
        VALUES ('$codigocelda','$Sectr','$capac','$estad','$tipocelda','$responsable')";
        $resul = mysqli_query($conex, $consultaa);
        if (!$resul){
         
            echo 'Error solicitud';
        }else{
            echo 'Celda registrada';
        }
    
    mysqli_close($conex);
}

  ?> 


