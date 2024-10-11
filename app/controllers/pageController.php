<?php

class PageController
{

    public function showIndex()
    {
        $content = __DIR__ . '/../views/index.php';
        require_once(__DIR__ . "/../views/layout/appLayout.php");
    }

    public function showTickets()
    {
        $url = $_GET["url"] ?? "";

        if (strpos($url, 'eticket') !== false) {
            $scraper = new EticketScraper();
        } else if (strpos($url, 'masboleteria') !== false) {
            $scraper = new MoreTicket();
        } else {
            echo "
            <h1>El url ingresado no está disponible.</h1>
            <p>Solo contamos disponibilidad para latiquetera y para </p>
            <a href='/'>Volver al inicio</a>
            ";
            die();
        }

        $controller = new EventController($scraper);
        $controller->showTickets($url);
    }
}
