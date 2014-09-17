<?php

class users extends Controller {
    public $requires_auth = true;
    function index () {
        $user_id = $this->params[0];
        $this->users = get_all("SELECT * FROM user");

    }
    function view() {
        $user_id = $this->params[0];
        $this->user = get_first("SELECT * FROM user WHERE user_id = '$user_id'");

    }
}