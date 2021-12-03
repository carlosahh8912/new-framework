<?php 

// Developed for Carlos Hurtado
// Diciembre 2021 - Start the proyect
// Diciembre 2021 - Updated


// Require 
require_once 'app/classes/Framework.php';


// require __DIR__.'/app/vendor/autoload.php';

// Ejecutar el framework
Framework::run();

// use app\classess\View;
use eftec\bladeone\BladeOne;


class View {

  public static function render($view, $data = [])
  {
    // Convertir el array asociativo en objeto
    // $d = to_object($data); // $data en array assoc o $d en objectos

    $views = VIEWS;
	$cache = __DIR__ . '/resources/cache';
	$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
	echo $blade->run($view.'.blade.php', $data); // it calls /views/hello.blade.php

    // if(!is_file(VIEWS.CONTROLLER.DS.$view.'View.php')) {
    //   die(sprintf('No existe la vista "%sView" en la carpeta "%s".', $view, CONTROLLER));
    // }

    // require_once VIEWS.CONTROLLER.DS.$view.'View.php';
    exit();
  }
}

$hello = [
	'Lista_de_clientes'
];


View::render('home/index', compact('hello'));