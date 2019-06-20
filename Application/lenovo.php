<?php

namespace application;

use helpers\Helper;

class Lenovo extends Computer implements iComputer {
    const IS_DESKTOP = true;

    public function IdentifyUser()
    {
        Helper::PrintLine("Fingerprints\n",Helper::$note);
    }

}