<?php
require_once 'vendor\autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesistem('templates');
$twig=new Twig_Environment($loader);
$template=$twig->loadTemplate('index.twig');
$title ="jgjflkgjlkfj";

$menu=array(
  array('title'=>'Маргарита','price'=>'350'),
  array('title'=>'4 сыра','price'=>'450'),
  array('title'=>'Грибная','price'=>'250'),
  array('title'=>'Пепперони','price'=>'450'),
  array('title'=>'Римская','price'=>'550'),
);
echo $template->render('nav.twig',array('menu'=>$menu));

?>
