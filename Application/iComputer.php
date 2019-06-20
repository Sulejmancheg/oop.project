<?php

namespace application;

interface iComputer{
    public function Start();
    public function PrintParametrs();
    public function IdentifyUser();
    public function Shutdown();
    public function Restart();
}