<?php
    include 'validaciones.php';
    if(!esUnico($_POST['codigo'])){   
    if(esImagen($_FILES["img"]["name"])){
    if(esCodigo($_POST['codigo'])){
    $productos=simplexml_load_file('productos.xml');
    $producto=$productos->addChild('producto');
    $producto->addChild('codigo',$_POST['codigo']);
    $producto->addChild('nombre',$_POST['nombre']);
    $producto->addChild('descripcion',$_POST['descripcion']);
    $producto->addChild('img',$_FILES["img"]["name"]);
    $producto->addChild('categoria',$_POST['categoria']);
    $producto->addChild('precio',$_POST['precio']);
    $producto->addChild('existencias',$_POST['existencias']);
    file_put_contents('productos.xml',$productos->asXML());
    header('location:index.php?exito=1');
    UploadImage();
    }
    else{
        header('location:index.php?errorcode=1');
    }
}else{
    header('location:index.php?errorimagen=1');
}
}else{
    header('location:index.php?errorcodigo=1');
}
?>