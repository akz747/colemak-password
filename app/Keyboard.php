<?php

namespace App;

use Illuminate\Support\Collection;

class Keyboard
{
    private $keys;
    public  $available;

    public function __construct() {
        $this->keys= collect([
            ['key' => '`', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 3, 'shift' => false ],
            ['key' => '1', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '2', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '3', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '4', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '5', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '6', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '7', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '8', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '9', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '0', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => true, 'punctuation' => false, 'special' => false, 'reach' => 2, 'shift' => false ],
            ['key' => '-', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => true, 'special' => true, 'reach' => 2, 'shift' => false ],
            ['key' => '=', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true ,'reach' => 2, 'shift' => false ],

            ['key' => '~', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 3, 'shift' => true ],
            ['key' => '!', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => true, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '@', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '#', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '$', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '%', 'hand' => 'left', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '^', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '&', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '*', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '(', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => ')', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '_', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '+', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 3, 'shift' => true ],

            ['key' => 'q', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'w', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'f', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'p', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'g', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'j', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'l', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'u', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'y', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => ';', 'hand' => 'right', 'letter' => false, 'common' => false, 'number' => false, 'punctuation' => true, 'special' => true, 'reach' => 1, 'shift' => false ],
            ['key' => '[', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => false ],
            ['key' => ']', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => false ],
            ['key' => '\\', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 3, 'shift' => false ],

            ['key' => 'Q', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'W', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'F', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'P', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'G', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'J', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'L', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'U', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'Y', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => ':', 'hand' => 'right', 'letter' => false, 'common' => false, 'number' => false, 'punctuation' => true, 'special' => true, 'reach' => 1, 'shift' => true ],
            ['key' => '{', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '}', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 2, 'shift' => true ],
            ['key' => '|', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 3, 'shift' => true ],

            ['key' => 'a', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => false ],
            ['key' => 'r', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => false ],
            ['key' => 's', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => false ],
            ['key' => 't', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => false ],
            ['key' => 'd', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'h', 'hand' => 'right', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'n', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => false ],
            ['key' => 'e', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => false ],
            ['key' => 'i', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => false ],
            ['key' => 'o', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => false ],
            ['key' => "'", 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => true, 'special' => false, 'reach' => 1, 'shift' => false ],

            ['key' => 'A', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => true ],
            ['key' => 'R', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => true ],
            ['key' => 'S', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => true ],
            ['key' => 'T', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => true ],
            ['key' => 'D', 'hand' => 'left', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'H', 'hand' => 'right', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'N', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => true ],
            ['key' => 'E', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => true ],
            ['key' => 'I', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => true ],
            ['key' => 'O', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 0, 'shift' => true ],
            ['key' => '"', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => true, 'special' => false, 'reach' => 1, 'shift' => true ],

            ['key' => 'z', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'x', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'c', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'v', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'b', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'k', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => 'm', 'hand' => 'right', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => false ],
            ['key' => ',', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => true, 'special' => true, 'reach' => 1, 'shift' => false ],
            ['key' => '.', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => true, 'special' => true, 'reach' => 1, 'shift' => false ],
            ['key' => '/', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 1, 'shift' => false ],

            ['key' => 'Z', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'X', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'C', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'V', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'B', 'hand' => 'left', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'K', 'hand' => 'right', 'letter' => true, 'common' => false, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => 'M', 'hand' => 'right', 'letter' => true, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => false, 'reach' => 1, 'shift' => true ],
            ['key' => '<', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 1, 'shift' => true ],
            ['key' => '>', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => false, 'special' => true, 'reach' => 1, 'shift' => true ],
            ['key' => '?', 'hand' => 'right', 'letter' => false, 'common' => true, 'number' => false, 'punctuation' => true, 'special' => true, 'reach' => 1, 'shift' => true ],
        ]);
    }

    public function limit ($element, $operator = '=', $state = true) {
        $this->available = $this->available->where($element, $operator, $state);
        return $this;
    }


    // initialize the available keys collection
    public function get () {
        $this->available = $this->keys->where('common', true);
        return $this;
    }

    // display the available keys collection
    public function show() {
        return $this->available;
    }

    // return either only non-shift keys or all keys
    public function shift($state=true) {
        if ($state == false) {
            $this->limit('shift', '=', $state);
        }
        return $this;
    }

    // return letter keys
    public function letter($state=true, $operator='=') {
        $this->limit('letter', $operator, $state);
        return $this;
    }

    // return number keys
    public function number($state=true, $operator='=') {
        $this->limit('number', $operator, $state);
        return $this;
    }

    // return punctuation keys
    public function punctuation($state=true, $operator='=') {
        $this->limit('punctuation', $operator, $state);
        return $this;
    }

    // return special keys
    public function special($state=true, $operator='=') {
        $this->limit('special', $operator, $state);
        return $this;
    }

    // return keys of a specific hand
    public function hand($state=true, $operator='=') {
        $this->limit('hand', $operator, $state);
        return $this;
    }

    // return hard to reach keys
    public function reach($state=3, $operator='<') {
        $this->limit('reach', $operator, $state);
        return $this;
    }

    // only allow keys that are unshifted or on the same hand
    // when the previous key requires the shift key
    public function jam($previous) {
        $this->available = $this->available->filter(function ($value) use ($previous) {
            return ($value['hand'] == $previous['hand'] || $value['shift'] == false);
        });
        return $this;
    }





}
