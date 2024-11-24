<?php

$dom = new DOMDocument();
$html = file_get_contents("https://rozetka.com.ua/ua/mobile-phones/c80003/#search_text=%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD");
@$dom->loadHTML($html); // Use the @ to suppress warnings that might be generated due to malformed HTML.
$elements = $dom->getElementsByTagName('a');
$links = [];
$img = [];

foreach ($elements as $element) {
    //echo $element->nodeValue;
    $links[] = ['url' => $element->getAttribute('href'), 'text' => $element->nodeValue];
    $img[] = ['url' => $element->getAttribute('href'), 'img' => $element->nodeValue];
    $h[] = ['url' => $element->getAttribute('href'), 'h2' => $element->nodeValue];

}

print_r($links);
print_r($img);
print_r($h);
