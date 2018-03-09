<?php

namespace pxgamer\Handbrake;

use PHPUnit\Framework\TestCase;

class HandbrakeTest extends TestCase
{
    public const TEST_STRING = 'test/path/to';

    public function testRunWithNoConfig()
    {
        $handbrake = new Handbrake(new Config());

        $handbrake->config = null;

        $this->assertFalse($handbrake->run());
    }

    public function testGenerateCommandCustomBinary()
    {
        $config = new Config();
        $config->handbrakeBinary = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            self::TEST_STRING,
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandInput()
    {
        $config = new Config();
        $config->input = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -i "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandOutput()
    {
        $config = new Config();
        $config->output = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -o "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandAudioLanguage()
    {
        $config = new Config();
        $config->audioLanguage = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -A "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandBitRate()
    {
        $config = new Config();
        $config->bitRate = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -B "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandMixdown()
    {
        $config = new Config();
        $config->mixdown = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' --mixdown "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandVideoRate()
    {
        $config = new Config();
        $config->videoRate = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -r "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandAudioRate()
    {
        $config = new Config();
        $config->audioRate = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -R "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandEncodingScheme()
    {
        $config = new Config();
        $config->encodingScheme = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -e "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandAudioEncodingScheme()
    {
        $config = new Config();
        $config->audioEncodingScheme = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -E "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandQuality()
    {
        $config = new Config();
        $config->quality = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -q "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandExistingFrameRateType()
    {
        $config = new Config();
        $config->frameRateType = 'vfr';
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' --vfr',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandFrameRateType()
    {
        $config = new Config();
        $config->frameRateType = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' --vfr',
            $handbrake->generateCommand()
        );
    }

    public function testGenerateCommandAdditionalData()
    {
        $config = new Config();
        $config->additionalData = self::TEST_STRING;
        $handbrake = new Handbrake($config);

        $this->assertEquals(
            Handbrake::HANDBRAKE_CLI.' -x "'.self::TEST_STRING.'"',
            $handbrake->generateCommand()
        );
    }
}
