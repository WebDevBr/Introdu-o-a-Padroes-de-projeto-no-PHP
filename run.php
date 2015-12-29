<?php

include 'vendor/autoload.php';

$html = new WebDevBr\Html\Html;

$img = $html->img('logo.png');
echo $html->a($img, 'https://www.webdevbr.com.br/', ['class'=>'btn btn-primary']);

echo PHP_EOL;
