<?php

namespace MemoryGame\Controllers;

class ScoreController extends CoreController {

    public function index() {
        $this->show('scores');
    }
}