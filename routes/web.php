<?php
$url = $_SERVER['REQUEST_URI'];
echo $url;
if ($url ==  "/examen/public/"){
require_once "../views/index.php";
}
 elseif($url == "/examen/public/ejercicio01"){
  
    require_once "../views/ejercicio01.php";
}
elseif($url == "/examen/public/ejercicio2"){
    require_once "../views/ejercicio02.php";
}
elseif($url == "/examen/public/ejercicio3"){
    require_once "../views/ejercicio03.php";
}