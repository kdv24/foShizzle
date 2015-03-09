<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/SnoopTranslator.php";

    $app new Silex\Application();
    $app['debug']= true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));






    return $app;
?>
