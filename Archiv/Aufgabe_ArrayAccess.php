<?php

class Entry implements ArrayAccess
{
    public $title = "test";

    public function offsetExists($offset)
    {
        if ($offset == "content") {
            return true;
        }
        var_dump("offsetExits: {$offset}");
    }

    public function offsetGet($offset)
    {
        if ($offset == "content") {
            return $this->title;
        }
        var_dump("offsetExits: {$offset}");
    }

    public function offsetSet($offset, $value)
    {
        if ($offset == "content") {
            $this->title =$value;
        }
    }

    public function offsetUnset($offset)
    {
        var_dump("offsetUnset: {$offset}");
    }
}

echo "<div style=\"background-color:black; width:30vw; height:30vh\"></div>";

$entry = new Entry();
$entry['content'] ="test123";
unset($entry['content']);
var_dump($entry['content']);
// var_dump($entry->['title']);
