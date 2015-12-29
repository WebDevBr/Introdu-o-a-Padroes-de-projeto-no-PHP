<?php

namespace WebDevBr\Html\Tags;

class A extends Tag
{
    protected function validate()
    {
        if ($this->content === null) {
            throw new \Exception('Texto ancora é obrigatório');
        }

        if (!$this->attributes->offsetExists(0)) {
            throw new \Exception('Link é obrigatório');
        }
    }

    protected function create() :string
    {
        $content = $this->content;
        $href = $this->attributes->offsetGet(0);
        $this->attributes->offsetUnset(0);
        return "<a href=\"{$href}\"{$this->attributes}>{$content}</a>";
    }
}
