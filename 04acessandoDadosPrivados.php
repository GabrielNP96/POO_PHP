<?php
require '03dadosPrivados.php';


$newDisk = new Disk();
$newDisk -> setAristName('Angra');
$newDisk -> setAlbumName('Temple of Shadows');
$newDisk -> setYearOfLaunch(2004);
$newDisk -> getData();