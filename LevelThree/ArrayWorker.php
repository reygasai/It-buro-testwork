<?php
class ArrayWorker {
    protected $array = [];

    public function __construct() {
        $this->fill();
        $this->reindex();
    }

    protected function fill() {
        $iterations = rand(1, 10);
        for($i = 0; $iterations > $i; $i++) {
            array_push($this->array, rand(1, 100));
        }
    }

    protected function reindex() {
        $maxArrayKey = $minArrayKey = 0;
        $lastValue = 0;

        foreach($this->array as $key => $value) {
            if($value > $lastValue) {
                $maxArrayKey = $key;
            }

            $lastValue = $value;

            if($value <= $lastValue) {
                $minArrayKey = $key;
            }

        }

        list($this->array[$minArrayKey], $this->array[$maxArrayKey]) = array($this->array[$maxArrayKey], $this->array[$minArrayKey]);
    }

    public function dump() {
        $maxArrayKey = $minArrayKey = 0;
        $lastValue = 0;

        foreach($this->array as $key => $value) {
            if($value > $lastValue) {
                $maxArrayKey = $key;
            }

            $lastValue = $value;

            if($value <= $lastValue) {
                $minArrayKey = $key;
            }

        }

        echo $minArrayKey + $maxArrayKey;
    }
}