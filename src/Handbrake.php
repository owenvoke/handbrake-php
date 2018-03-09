<?php

namespace pxgamer\Handbrake;

/**
 * Class Handbrake
 */
class Handbrake
{
    /**
     * Default Handbrake CLI name.
     */
    public const HANDBRAKE_CLI = 'HandbrakeCLI';
    /**
     * @var Config
     */
    public $config;

    /**
     * Handbrake constructor.
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @return bool|string
     */
    public function run()
    {
        if (!isset($this->config) || !$this->config instanceof Config) {
            return false;
        }

        return exec($this->generateCommand());
    }

    /**
     * @return string
     */
    public function generateCommand()
    {
        $commandString = self::HANDBRAKE_CLI;

        if (isset($this->config->handbrakeBinary)) {
            $commandString = $this->config->handbrakeBinary;
        }

        if (isset($this->config->input)) {
            $commandString .= ' -i "'.$this->config->input.'"';
        }

        if (isset($this->config->output)) {
            $commandString .= ' -o "'.$this->config->output.'"';
        }

        if (isset($this->config->audioLanguage)) {
            $commandString .= ' -A "'.$this->config->audioLanguage.'"';
        }

        if (isset($this->config->bitRate)) {
            $commandString .= ' -B "'.$this->config->bitRate.'"';
        }

        if (isset($this->config->mixdown)) {
            $commandString .= ' --mixdown "'.$this->config->mixdown.'"';
        }

        if (isset($this->config->videoRate)) {
            $commandString .= ' -r "'.$this->config->videoRate.'"';
        }

        if (isset($this->config->audioRate)) {
            $commandString .= ' -R "'.$this->config->audioRate.'"';
        }

        if (isset($this->config->encodingScheme)) {
            $commandString .= ' -e "'.$this->config->encodingScheme.'"';
        }

        if (isset($this->config->audioEncodingScheme)) {
            $commandString .= ' -E "'.$this->config->audioEncodingScheme.'"';
        }

        if (isset($this->config->quality)) {
            $commandString .= ' -q "'.$this->config->quality.'"';
        }

        if (isset($this->config->frameRateType)) {
            switch ($this->config->frameRateType) {
                case 'vfr': // Variable frame rate
                case 'cfr': // Constant frame rate
                case 'pfr': // Peak frame rate
                    break;
                default:
                    $this->config->frameRateType = 'vfr';
            }
            $commandString .= ' --'.$this->config->frameRateType;
        }

        if (isset($this->config->additionalData)) {
            $commandString .= ' -x "'.$this->config->additionalData.'"';
        }

        return $commandString;
    }
}
