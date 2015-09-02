<?php
    // DEPENDENCIES
        require_once __DIR__."/../vendor/autoload.php"; // frameworks
        require_once __DIR__."/../src/Course.php";
        require_once __DIR__."/../src/Student.php";
    // INITIALIZE COOKIE SESSION
    // INITIALIZE APPLICATION
        $app = new Silex\Application();
        $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__."/../views"
        ));
    // ROUTES
        // display index webpage
        $app->get('/', function() use ($app) {
            return $app['twig']->render('index.html.twig');
        });
    return $app;
?>
