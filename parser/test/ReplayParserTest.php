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
        $this->assertEquals(10032, $data["version"]);
        $this->assertEquals("soveliss#1418", $data["teams"][0][0]['name']);
        $this->assertEquals("human", $data["teams"][0][0]['raceDetected']);
        $this->assertEquals("Paladin", $data["teams"][0][0]['heroes'][0]['name']);
        $this->assertGreaterThan(0, count($data["teams"][0][0]['units']['summary']));
        $this->assertEquals("anXieTy#2932", $data["teams"][1][0]['name']);
        $this->assertEquals("human", $data["teams"][1][0]['raceDetected']);
        $this->assertEquals("Archmage", $data["teams"][1][0]['heroes'][0]['name']);
        $this->assertEquals("Mountain King", $data["teams"][1][0]['heroes'][1]['name']);
        $this->assertGreaterThan(0, count($data["teams"][1][0]['units']['summary']));
    }

    public function testReforged_2()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged2.w3g");
        $this->assertEquals(10032, $data["version"]);
        $this->assertEquals("Sindroxa#1176", $data["teams"][0][0]['name']);
        $this->assertEquals("orc", $data["teams"][0][0]['raceDetected']);
        $this->assertEquals("Far Seer", $data["teams"][0][0]['heroes'][0]['name']);
        $this->assertGreaterThan(0, count($data["teams"][0][0]['units']['summary']));
        $this->assertEquals("Naileth#2901", $data["teams"][1][0]['name']);
        $this->assertEquals("orc", $data["teams"][1][0]['raceDetected']);
        $this->assertEquals("Tauren Chieftain", $data["teams"][1][0]['heroes'][0]['name']);
        $this->assertEquals("Shadow Hunter", $data["teams"][1][0]['heroes'][1]['name']);
        $this->assertGreaterThan(0, count($data["teams"][1][0]['units']['summary']));
    }

    public function testReforged_3()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged3.w3g");
        $this->assertEquals(10032, $data["version"]);
        $this->assertEquals("anXieTy#2932", $data["teams"][0][0]['name']);
        $this->assertEquals("human", $data["teams"][0][0]['raceDetected']);
        $this->assertEquals("Archmage", $data["teams"][0][0]['heroes'][0]['name']);
        $this->assertGreaterThan(0, count($data["teams"][0][0]['units']['summary']));
        $this->assertEquals("IroNSoul#22724", $data["teams"][1][0]['name']);
        $this->assertEquals("undead", $data["teams"][1][0]['raceDetected']);
        $this->assertEquals("Death Knight", $data["teams"][1][0]['heroes'][0]['name']);
        $this->assertEquals("Lich", $data["teams"][1][0]['heroes'][1]['name']);
        $this->assertGreaterThan(0, count($data["teams"][1][0]['units']['summary']));
    }

    public function testReforged_4()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged4.w3g");
        $this->assertEquals(10032, $data["version"]);
        $this->assertEquals("BEARAND#1604", $data["teams"][0][0]['name']);
        $this->assertEquals("human", $data["teams"][0][0]['raceDetected']);
        $this->assertEquals("Archmage", $data["teams"][0][0]['heroes'][0]['name']);
        $this->assertGreaterThan(0, count($data["teams"][0][0]['units']['summary']));
        $this->assertEquals("Taro#1112", $data["teams"][1][0]['name']);
        $this->assertEquals("human", $data["teams"][1][0]['raceDetected']);
        $this->assertEquals("Archmage", $data["teams"][1][0]['heroes'][0]['name']);
        $this->assertEquals("Paladin", $data["teams"][1][0]['heroes'][1]['name']);
        $this->assertGreaterThan(0, count($data["teams"][1][0]['units']['summary']));
    }

    public function testReforged_5()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged5.w3g");
        $this->assertEquals(10032, $data["version"]);
        $this->assertEquals("pischner#2950", $data["teams"][0][0]['name']);
        $this->assertEquals("nightelf", $data["teams"][0][0]['raceDetected']);
        $this->assertEquals("Keeper of the Grove", $data["teams"][0][0]['heroes'][0]['name']);
        $this->assertGreaterThan(0, count($data["teams"][0][0]['units']['summary']));
        $this->assertEquals("Wartoni#2638", $data["teams"][1][0]['name']);
        $this->assertEquals("undead", $data["teams"][1][0]['raceDetected']);
        $this->assertEquals("Death Knight", $data["teams"][1][0]['heroes'][0]['name']);
        $this->assertEquals("Lich", $data["teams"][1][0]['heroes'][1]['name']);
        $this->assertGreaterThan(0, count($data["teams"][1][0]['units']['summary']));
    }

    public function testReforged_6()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged6.w3g");
        $this->assertEquals(10032, $data["version"]);
        $this->assertEquals("MisterWinner#21927", $data["teams"][0][0]['name']);
        $this->assertEquals("human", $data["teams"][0][0]['raceDetected']);
        $this->assertEquals("Archmage", $data["teams"][0][0]['heroes'][0]['name']);
        $this->assertGreaterThan(0, count($data["teams"][0][0]['units']['summary']));
        $this->assertEquals("Unique#22912", $data["teams"][1][0]['name']);
        $this->assertEquals("human", $data["teams"][1][0]['raceDetected']);
        $this->assertEquals("Archmage", $data["teams"][1][0]['heroes'][0]['name']);
        $this->assertEquals("Pandaren Brewmaster", $data["teams"][1][0]['heroes'][1]['name']);
        $this->assertGreaterThan(0, count($data["teams"][1][0]['units']['summary']));
    }

    public function testReforged_7()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged7.w3g");
        $this->assertEquals(10032, $data["version"]);
        $this->assertEquals("WaN#1734", $data["teams"][0][0]['name']);
        $this->assertEquals("undead", $data["teams"][0][0]['raceDetected']);
        $this->assertEquals("Death Knight", $data["teams"][0][0]['heroes'][0]['name']);
        $this->assertGreaterThan(0, count($data["teams"][0][0]['units']['summary']));
        $this->assertEquals("РозовыйПони#228941", $data["teams"][1][0]['name']);
        $this->assertEquals("undead", $data["teams"][1][0]['raceDetected']);
        $this->assertEquals("Death Knight", $data["teams"][1][0]['heroes'][0]['name']);
        $this->assertEquals("Pit Lord", $data["teams"][1][0]['heroes'][1]['name']);
        $this->assertGreaterThan(0, count($data["teams"][1][0]['units']['summary']));
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

    public function testNetease_132()
    {
        $parser = new ReplayParser();
        $data   = $parser->parseReplayFile(__DIR__ . "/replays/netease_132.nwg", "netease");
        $this->assertEquals(10032, $data["version"]);
        $this->assertEquals("HurricaneBo", $data["teams"][0][0]['name']);
        $this->assertEquals("nightelf", $data["teams"][0][0]['raceDetected']);
        $this->assertEquals("Demon Hunter", $data["teams"][0][0]['heroes'][0]['name']);
        $this->assertGreaterThan(0, count($data["teams"][0][0]['units']['summary']));
        $this->assertEquals("SimplyHunteR", $data["teams"][1][0]['name']);
        $this->assertEquals("nightelf", $data["teams"][1][0]['raceDetected']);
        $this->assertEquals("Demon Hunter", $data["teams"][1][0]['heroes'][0]['name']);
        $this->assertEquals("Naga Sea Witch", $data["teams"][1][0]['heroes'][1]['name']);
        $this->assertGreaterThan(0, count($data["teams"][1][0]['units']['summary']));
    }
}
