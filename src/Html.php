<?php

namespace WebDevBr\Html;

class Html
{
    public static function builder($method, $params)
    {
        $tag = (new Builder)
        ->params($params)
        ->call($method);

        return $tag;
    }

    public function __call($method, $params)
    {
        return $this->builder($method, $params);
    }

    public static function __callStatic($method, $params)
    {
        return self::builder($method, $params);
    }
}
