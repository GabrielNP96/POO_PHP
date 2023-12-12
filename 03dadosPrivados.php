<?php

class disk
{
    private string $artistName;
    private string $albumName;
    private int $yearOfLaunch;
    private static $numberOfAccounts;
    

    public function __construct(string $artistName, string $albumName, int $yearOfLaunch){
        $this -> artistName = $artistName;
        $this -> albumName = $albumName;
        $this -> yearOfLaunch = $yearOfLaunch;
        self:: $numberOfAccounts++;
    }

    public function getData(){
        echo $this -> artistName . PHP_EOL;
        echo $this -> albumName . PHP_EOL;
        echo $this -> yearOfLaunch . PHP_EOL;
    }

    public static function getNumberOfAccounts(){
        echo self::$numberOfAccounts;
    }
}