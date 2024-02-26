<?php

namespace MemoryGame\Controllers;

class MainController extends CoreController {

    public function index() {
        $this->show('home');
    }

    public function about() {
        $this->show('about');
    }

}