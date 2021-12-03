<?php


namespace app\classess;

use eftec\bladeone\BladeOne;


class View {

  public static function render($view, $data = [])
  {
    // Convertir el array asociativo en objeto
    $d = to_object($data); // $data en array assoc o $d en objectos

    $views = __DIR__ . VIEWS;
	$cache = __DIR__ . '/resources/cache';
	$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
	echo $blade->run($view.'blade.php', $data); // it calls /views/hello.blade.php

    // if(!is_file(VIEWS.CONTROLLER.DS.$view.'View.php')) {
    //   die(sprintf('No existe la vista "%sView" en la carpeta "%s".', $view, CONTROLLER));
    // }

    // require_once VIEWS.CONTROLLER.DS.$view.'View.php';
    exit();
  }
}