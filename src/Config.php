<?php

namespace pxgamer\Handbrake;

/**
 * Class Config
 */
class Config
{
    /**
     * @var string
     */
    public $handbrakeBinary;
    /**
     * @var string
     */
    public $input;
    /**
     * @var string
     */
    public $output;
    /**
     * @var string
     */
    public $audioLanguage;
    /**
     * @var string
     */
    public $bitRate;
    /**
     * @var string
     */
    public $mixdown;
    /**
     * @var string
     */
    public $videoRate;
    /**
     * @var string
     */
    public $audioRate;
    /**
     * @var string
     */
    public $encodingSceme;
    /**
     * @var string
     */
    public $quality;
    /**
     * @var string
     */
    public $frameRateType;
    /**
     * @var string
     */
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
