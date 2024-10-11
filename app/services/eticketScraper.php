<?php
class EticketScraper implements ScraperInterface
{

    public function getTickets(string $url): array
    {
        $html = $this->fetchData($url);

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);

        $dom->loadHTML($html);
        $xpath = new DOMXPath($dom);

        $image = $xpath->query("//div[@id='contenedor_principal']/div[3]/div/div/img/@data-src")->item(0)->nodeValue;
        $title = $xpath->query("//div[@id='contenedor_principal']/div[3]/div[3]/div/div")->item(0)->nodeValue;
        $address = $xpath->query("//div[@id='contenedor_principal']/div[3]/div[3]/div/div[3]")->item(0)->nodeValue;
        if (!$image || !$title || !$address) {
            echo "
            <h1>El url ingresado no está disponible.</h1>
            <p>Solo contamos disponibilidad para latiquetera y para Mas boletas, revisa el Link que ingresaste. </p>
            <a href='/'>Volver al inicio</a>
            ";
            die();
        }

        $scrap = [
            'ticketery' => 'eticket',
            'image' => $image,
            'title' => $title,
            'address' => $address,
        ];

        return $scrap;
    }

    public function fetchData(string $url): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $html = curl_exec($ch);

        if ($html === false) {
            echo "Error en cURL: " . curl_error($ch);
            curl_close($ch);
            exit;
        }

        curl_close($ch);
        return $html;
    }
}
