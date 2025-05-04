<?php

class HomeController extends Controller {
    public function index() {
        $sections = json_decode(file_get_contents('../data/sections.json'), true);
        $this->view('home', ['sections' => $sections]);
    }
}
