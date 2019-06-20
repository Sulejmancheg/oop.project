<?php

namespace application;

use \helpers\Helper;

abstract class Computer{
    protected $CPU;
    protected $RAM;
    protected $Video;
    protected $Memory;
    private $isWork = false;

    protected $computerName = 'Computer';

    public function __construct($CPU, $RAM, $Video, $Memory, $computerName)
    {
        $this->CPU = $CPU;
        $this->RAM = $RAM;
        $this->Video = $Video;
        $this->Memory = $Memory;
        $this->computerName = $computerName;
    }

    public function PrintParametrs()
    {
        $message = "cpu: $this->CPU,
             ram: $this->RAM, 
             video: $this->Video, 
             memory: $this->Memory,
             name: $this->computerName\n";
        if ($this->isWork)
        Helper::PrintLine($message,Helper::$note);
        else {
            throw new Exception('Exception!!!');}
//            echo( "Not Working!\n",Helper::$failure);}
    }

    abstract public function IdentifyUser();

    public function getCPU()
    {
        return $this->CPU;
    }

    public function setCPU($CPU)
    {
        $this->CPU = $CPU;
    }

    public function getRAM()
    {
        return $this->RAM;
    }

    public function setRAM($RAM)
    {
        $this->RAM = $RAM;
    }

    public function getVideo()
    {
        return $this->Video;
    }

    public function setVideo($Video)
    {
        $this->Video = $Video;
    }

    public function getMemory()
    {
        return $this->Memory;
    }

    public function setMemory($Memory)
    {
        $this->Memory = $Memory;
    }

    public function Start()
    {
        $this->isWork = true;
    }

    public function Shutdown()
    {
        $this->isWork = false;
    }

    public function Restart()
    {
        if ($this->isWork == true){
            $this->Shutdown();
            $this->Start();
        }
        else {throw new Exception('Exception');
            Helper::PrintLine( "Not Working!\n",Helper::$failure);
        }

    }
}
