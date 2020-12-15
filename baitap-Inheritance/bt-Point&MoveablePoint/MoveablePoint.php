<?php
include_once "Point.php";

class MoveablePoint extends Point
{
    public function __construct($x, $y, $xSleep, $ySleep)
    {
        parent::__construct($x, $y);
        $this->xSleep = $xSleep;
        $this->ySleep = $ySleep;
    }

    public function getXSleep()
    {
        return $this->xSleep;
    }

    public function setXSleep($xSleep)
    {
        $this->xSleep = $xSleep;
    }

    public function getYSleep()
    {
        return $this->ySleep;
    }

    public function setYSleep($ySleep)
    {
        $this->ySleep = $ySleep;
    }

    public function toString()
    {
        return "(($this->x,$this->y),sleep=($this->xSleep,$this->ySleep))";
    }
    public function move(){
        $this->x += $this->xSleep;
        $this->y += $this->ySleep;
        return $this;
    }
}
