<?php

namespace application;

use \helpers\Helper as Superhelper;

class Macbook extends Computer implements iComputer {
    const IS_DESKTOP = false;

    public function IdentifyUser()
    {
        Superhelper::PrintLine("AppleId\n",Helper::$note);
    }
}