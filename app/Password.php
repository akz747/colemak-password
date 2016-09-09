<?php

namespace App;

use Illuminate\Support\Collection;
use App\Keyboard;


class Password
{
    protected $keyboard;
    public $code;

    private $shift;
    private $reach;
    private $letter;
    private $number;
    private $punctuation;
    private $special;

    private $groups;


    public function __construct () {
        $this->keyboard = new Keyboard();
        $this->code = collect([]);
        $this->groups = collect([]);
        $this->shift = true;
        $this->reach = 3;
    }

    // set character counts and options
    public function setOptions($option) {
        if ($option['reach'] == true) {
            $this->reach = 4;
        }
        else {
            $this->reach = 3;
        }

        $this->shift = $option['shift'];
        $this->letter = $option['letter'];
        $this->number = $option['number'];
        $this->punctuation = $option['punctuation'];
        $this->special = $option['special'];

        $this->sizeGroup('letter', $this->letter, 3);
        $this->sizeGroup('number', $this->number, 2);
        $this->sizeGroup('punctuation', $this->punctuation, 2);
        $this->sizeGroup('special', $this->special, 2);

        $this->groups = $this->groups->shuffle();
    }

    // determine sizing of groups
    private function sizeGroup ($charType, $totalChar, $maxSize) {
        if ($totalChar <= 0) {
            return null;
        }
        if ($totalChar < $maxSize) {
            $this->groups->push(['type' => $charType, 'count' => $totalChar]);
        }
        else {
            while ($totalChar % $maxSize != 0) {
                $this->groups->push(['type' => $charType, 'count' => $maxSize - 1]);
                $totalChar -= $maxSize - 1;
            }
            foreach (range(1, $totalChar / $maxSize) as $i) {
                $this->groups->push(['type' => $charType, 'count' => $maxSize]);
            }
        }
    }

    // get group's characters
    private function getGroup ($type, $size) {
        $char['shift'] = false;
        foreach (range (1,$size) as $i) {
            if ($this->code->last()['shift'] == true) {
                $this->code->push($this->keyboard->get()
                    ->reach($this->reach)
                    ->shift($this->shift)
                    ->limit($type)
                    ->jam($this->code->last())
                    ->available->random());
            }
            else {
                $this->code->push($this->keyboard->get()
                    ->reach($this->reach)
                    ->shift($this->shift)
                    ->limit($type)
                    ->available->random());
            }
        }
    }

    // assemble groups and return passcode as string
    public function generate () {
        $this->groups->each(function ($value) {
            $this->getGroup($value['type'], $value['count']);
        });
        return implode('',$this->code->pluck('key')->all());
    }
}
