<?php
$name = 'John';

class User {
    function get($arg) {
        return $arg;
    }

    function index($name) {
        return "Welcome, {$this->get($name)} and {$this->get($name)}!";
    }
}

$user = new User();
echo $user->index($name);
