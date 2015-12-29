<?php

namespace WebDevBr\Html\Tags;

use WebDevBr\Html\Attributes;

abstract class Tag
{
    /**
     * Retorna a tag já criada e validada
     *
     * @param  string          $content
     * @param  Attributes $attributes
     * @return string
     */
    public function get(string $content, Attributes $attributes = null)
    {
        $this->attributes = $attributes;
        $this->content = $content;
        
        $this->validate();
        return $this->create();
    }

    /**
     * Valida os atributos e conteúdo
     *
     * @return void
     */
    abstract protected function validate();

    /**
     * cria e retorna a tag pronta
     *
     *  @return string
     */
    abstract protected function create():string;
}
