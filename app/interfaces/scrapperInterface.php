<?php

interface ScraperInterface {
    public function getTickets(string $url): array;
    
    public function fetchData(string $url): string; 
}

?>
