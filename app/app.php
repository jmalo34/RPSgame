
 <?php
     require_once __DIR__."/../vendor/autoload.php";
     require_once __DIR__."/../src/RockPaperScissors.php";

     $app = new Silex\Application();

     $app->register(new silex\Provider\TwigServiceProvider(), array(
         'twig.path' => __DIR__.'/../views'
     ));

     $app->get("/", function() use ($app) {
         return $app['twig']->render('form.html.twig');
     });
 






  ?>