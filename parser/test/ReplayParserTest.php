<?php
declare(strict_types = 1);
error_reporting(E_ERROR);
require __DIR__ . "/../../vendor/autoload.php";
require __DIR__ . "/../ReplayParser.php";

use PHPUnit\Framework\TestCase;

class ReplayParserTest extends TestCase
{
    public function testReforged_1()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged1.w3g");
        $this->assertEquals($data["version"], 10032);
    }

    public function testReforged_2()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged2.w3g");
        $this->assertEquals($data["version"], 10032);
    }

    public function testReforged_3()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged3.w3g");
        $this->assertEquals($data["version"], 10032);
    }

    public function testReforged_4()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged4.w3g");
        $this->assertEquals($data["version"], 10032);
    }

    public function testClassic_1()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/1.w3g");
        $this->assertEquals($data["version"], 26);
    }

    public function testClassic_2()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/2.w3g");
        $this->assertEquals($data["version"], 26);
    }

    public function testClassic_3()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/3.w3g");
        $this->assertEquals($data["version"], 26);
    }

    public function testClassic_4()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/4.w3g");
        $this->assertEquals($data["version"], 26);
    }
}
