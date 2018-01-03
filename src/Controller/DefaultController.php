<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
   /**
    * @Route("/")
    */
  public function index() {
    return new Response('<html><body>this is the index controller</body></html>');
  }
}

?>