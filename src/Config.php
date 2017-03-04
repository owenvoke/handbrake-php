<?php

namespace pxgamer\Handbrake;

class Config
{
    private $input;
    private $output;
    private $audioLanguage;
    private $bitRate;
    private $mixdown;
    private $videoRate;
    private $audioRate;
    private $encodingSceme;
    private $quality;
    private $frameRateType;
    private $additionalData;

    public function __set($name, $value)
    {
        return $this->{$name} = $value;
    }

    public function __get($name)
    {
        return $this->{$name};
    }

    public function getConfig()
    {
        return $this;
    }
}