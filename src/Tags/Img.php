<?php

namespace WebDevBr\Html\Tags;

class Img extends Tag
{
    protected function validate()
    {
        if ($this->content === null) {
            throw new \Exception('URL da imagem é obrigatório');
        }
    }

    protected function create() :string
    {
        $content = $this->content;
        return "<img src=\"{$content}\"/>";
    }
}
