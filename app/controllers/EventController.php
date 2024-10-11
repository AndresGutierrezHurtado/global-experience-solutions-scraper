<?php

class EventController {
    private ScraperInterface $scraper;

    public function __construct(ScraperInterface $scraper) {
        $this->scraper = $scraper;
    }

    public function showTickets(string $url) {
        $scrap = $this->scraper->getTickets($url);
        $content = __DIR__ . '/../views/tickets.php';
        require_once (__DIR__ . "/../views/layout/appLayout.php");
    }
}
?>
