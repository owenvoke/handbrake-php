<?php

namespace pxgamer\Handbrake;

/**
 * Class Handbrake
 */
class Handbrake
{
    /**
     * @var Config
     */
    public $config;
    /**
     * @var bool
     */
    public $isComplete;

    /**
     * Handbrake constructor.
     * @param Config $Config
     */
    public function __construct(Config $Config)
    {
        $this->config = $Config;
        $this->isComplete = false;
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
    private function generateCommand()
    {
        $commandString = App::HANDBRAKE_CLI;

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

        if (isset($this->config->encodingSceme)) {
            $commandString .= ' -e "'.$this->config->encodingSceme.'"';
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
