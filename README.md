https://travis-ci.org/anXieTyPB/w3gphp.svg?branch=master
# Warcraft III Replay Parser

Based on the W3G-Parser for PHP created by Julas: http://w3rep.sourceforge.net/

This library should be fully compatible with existing versions, only enhancing its functionality. It adds another property called "json_parsed_full" to the PHP class object that allows retrieval of well-defined data structures.


#### Normalized JSON data structures
Can be accessed by using the json_parsed_full property of the Replay object. Currently still work in progress and not 100% reliable yet.
```php
$this->json_parsed_full["teams"] = $teams;
$this->json_parsed_full["game"]  = $this->game;
$this->json_parsed_full["teams_simple"]  =$teams_simple;
$this->json_parsed_full["julas"] = $this->players;
$this->json_parsed_full["w3gplus"]  =$this->arm;
```
Example usage in a simplified PHP backend script using an uploaded replay file as source.

```php
if (isset($_FILES['custom_replay'])) {
    $replay = new replay($_FILES["custom_replay"]['tmp_name']);    
    print (json_encode($replay->json_parsed_full));
    die;
}
```
