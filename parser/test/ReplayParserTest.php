<?php
declare (strict_types = 1);
error_reporting(E_ERROR);
require __DIR__ . "/../../vendor/autoload.php";
require __DIR__ . "/../ReplayParser.php";

use PHPUnit\Framework\TestCase;

class ReplayParserTest extends TestCase
{

  public function testReforged()
  {
    $parser = new ReplayParser();
    $data   = $parser->parseReplayFile(__DIR__ . "/replays/reforged_release.w3g");
    $this->assertEquals($data["version"], 1337);
  }

  public function testClassic()
  {
   $parser = new ReplayParser();
    $data   = $parser->parseReplayFile(__DIR__ . "/replays/1.w3g");
    $this->assertEquals($data["version"], 1337);
  }

}
