<?php

class Entry implements ArrayAccess {

    public $title = "test";

    public function offsetExists($offset){
        if ($offset == "content") {
            return true;
        }
        // var_dump("offsetExists: {$offset}");
    }

    public function offsetGet($offset){
        if ($offset == "content") {
            return $this->title;
        }
        var_dump("offsetGet: {$offset}");
    }

    public function offsetSet($offset, $value){
        if ($offset == "content") {
            $this->title = $value;
        }
    }

    public function offsetUnset($offset){
        var_dump("offsetUnset: {$offset}");
    }
}

echo "<br>";

echo "<div style='border : 1px solid; background-color: black; color: white'>";
$entry = new Entry();
$entry['content'] = "test123";
var_dump(isset($entry['content']));

echo "<br>";

var_dump($entry['content']);
// var_dump($entry['title']);

echo "<br>";

unset($entry['content']);

echo "<br>";

var_dump($entry['content']);

echo "</div>";


?>