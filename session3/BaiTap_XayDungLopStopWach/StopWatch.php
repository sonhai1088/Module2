<?php
include 'function.php';
class StopWatch{
    private $startTime;
    private $endTime;

    public function __construct(){
        $this ->startTime = microtime(true);
    }
    public function start(){
        $this ->startTime = microtime(true);
    }
    public function getStartTime(){
        return $this ->startTime;
    }
    public function getEndTime(){
        return $this->endTime;
    }
    public function stop(){
        $this->endTime = microtime(true);
    }
    public function getElapsedTime(){
        return $this->endTime - $this->startTime;
    }
}

$stopwatch = new StopWatch();
$stopwatch->start();
selectionSort();
$stopwatch->stop();



