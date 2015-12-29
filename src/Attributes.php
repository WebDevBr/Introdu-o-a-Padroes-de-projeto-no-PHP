<?php

namespace WebDevBr\Html;

class Attributes extends \ArrayObject
{

    private $attributes = [];

    public function __construct($input = [])
    {
        foreach ($input as $v) {
            if (is_array($v)) {
                $this->setMany($v);
            } else {
                $this->append($v);
            }
        }
    }

    protected function setMany(Array $attributes)
    {
        foreach ($attributes as $k => $v) {
            $this->offsetSet($k, $v);
        }
        return $this;
    }

    protected function getAttributes()
    {
        $attr = [];
        foreach ($this->getArrayCopy() as $k => $v) {
            if (is_int($k)) {
                $attr[] = $v;
            } else {
                $attr[] = "{$k}=\"{$v}\"";
            }
        }
        return ' '.implode(" ", $attr);
    }

    public function __toString()
    {
        if (strlen($this->getAttributes())>1) {
            return $this->getAttributes();
        }
        return '';
    }
}
