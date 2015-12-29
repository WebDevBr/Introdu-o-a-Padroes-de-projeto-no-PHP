<?php

namespace WebDevBr\Html;

class Builder
{
    private $params;

    public function params(array $params)
    {
        $this->params[] = ($params[0]) ?? null;
        unset($params[0]);
        $this->params[] = new Attributes($params);
        return $this;
    }

    public function call($method)
    {
        $class = 'WebDevBr\Html\Tags\\'.ucfirst($method);

        return call_user_func_array([new $class, 'get'], $this->params);
    }
}
