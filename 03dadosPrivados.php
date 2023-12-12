<?php

class disk
{
    private string $artistName;
    private string $albumName;
    private int $yearOfLaunch;

    public function setAristName(string $artistName){
        $this -> artistName = $artistName;
    }
    public function setAlbumName(string $albumName){
        $this -> albumName = $albumName;
    }
    public function setYearOfLaunch(int $yearOfLaunch){
        $this -> yearOfLaunch = $yearOfLaunch;
    }
    public function getData(){
        echo $this -> artistName . PHP_EOL;
        echo $this -> albumName . PHP_EOL;
        echo $this -> yearOfLaunch . PHP_EOL;
    }
}