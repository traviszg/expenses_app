<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController {
    /**
    * @Route("/")
    */
    public function homepage() {
        return new Response("My first page");
    }

    /**
    * @Route("/budget/{slug}")
    */
    public function show($slug) {
        return new Response(sprintf("Testing page: %s", $slug));
    }
}

?>
