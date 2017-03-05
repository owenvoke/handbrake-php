<?php

namespace pxgamer\Handbrake;

/**
 * Class Config
 * @package pxgamer\Handbrake
 */
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

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->{$name};
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public function __set($name, $value)
    {
        return $this->{$name} = $value;
    }

    /**
     * @return $this
     */
    public function getConfig()
    {
        return $this;
    }
}