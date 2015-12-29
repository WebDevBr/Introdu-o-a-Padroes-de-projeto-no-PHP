<?php

include 'vendor/autoload.php';

/*use WebDevBr\Html\Html as H;

echo H::a(H::img('log.png'), 'https://www.webdevbr.com.br/', ['class'=>'btn btn-primary']);*/

$html = new WebDevBr\Html\Html;

$img = $html->img('logo.png');
echo $html->a($img, 'https://www.webdevbr.com.br/', ['class'=>'btn btn-primary']);

/*$img = new WebDevBr\Html\Tags\Img;
$link = new WebDevBr\Html\Tags\A;
$attibutes = new WebDevBr\Html\Attributes(['https://www.webdevbr.com.br/']);

echo $link->get($img->get('logo.png'), $attibutes);*/

echo PHP_EOL;
