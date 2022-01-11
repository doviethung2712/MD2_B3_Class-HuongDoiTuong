<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = microtime();
//        $this->endTime = microtime();
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start(){
        $this->startTime = microtime();
    }

    public function stop(){
        $this->endTime = microtime();
    }

    public function getElapsedTime(){
        $time = ($this->stop() - $this->start());
        return $time;
    }

}