<?php

/**
 * Class Man
 */
class Man implements SleepInterface, EatInterface, WorkInterface {

    /** @var int */
    private $birth;

    /** @var int */
    private $happiness;

    /** @var int */
    private $energy;

    public function __construct() {
        $this->birth = time();
        $this->happiness = 50;
        $this->energy = 50;
    }

    /**
     * Sleep
     *
     * @param int $seconds
     * @return void
     */
    public function sleep($seconds) {
        // chnages happines and energy
    }

    /**
     * Eat
     *
     * @param array $food
     * @return void
     */
    public function eat(array $food) {
        // chnages happines and energy
    }

    /**
     * Work
     *
     * @param int $seconds
     * @return void
     */
    public function work($seconds) {
        // chnages happines and energy
    }

}