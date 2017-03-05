<?php

namespace pxgamer\Handbrake;

class Config
{
    public $input;
    public $output;
    public $audioLanguage;
    public $bitRate;
    public $mixdown;
    public $videoRate;
    public $audioRate;
    public $encodingSceme;
    public $quality;
    public $frameRateType;
    public $additionalData;

    public function __get($name)
    {
        return $this->{$name};
    }

    public function __set($name, $value)
    {
        return $this->{$name} = $value;
    }

    public function getConfig()
    {
        return $this;
    }
}