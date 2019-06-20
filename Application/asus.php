<?php

namespace application;

use \helpers\Helper;

class Asus extends Computer implements iComputer {
    const IS_DESKTOP = true;

    public function IdentifyUser(){
        Helper::PrintLine("Login and Password\n",Helper::$note);
}
}