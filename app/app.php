
 <?php
     require_once __DIR__."/../vendor/autoload.php";
     require_once __DIR__."/../src/RockPaperScissors.php";

     $app = new Silex\Application();

     $app->register(new Silex\Provider\TwigServiceProvider(), array(
         'twig.path' => __DIR__.'/../views'
     ));

     $app->get("/", function() use ($app) {
         return $app['twig']->render('form.html.twig');
     });


     $app->get("/results", function() use($app) {
         $rps_result= new RockPaperScissors;
         $new_game= $rps_result->playRockPaperScissors($_GET['first_input'], $_GET['second_input']);
         return $app['twig']->render('results.html.twig', array('result' => $new_game));
     });




    return $app;
  ?>
