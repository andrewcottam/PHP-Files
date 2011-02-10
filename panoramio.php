<?php
getPhotos();
function getPhotos()
{
header("Content-Type: text/json");
$set=$_POST["set"];
$from=$_POST["from"];
$to=$_POST["to"];
$minx=$_POST["minx"];
$miny=$_POST["miny"];
$maxx=$_POST["maxx"];
$maxy=$_POST["maxy"];
$size=$_POST["size"];
$mapfilter=$_POST["mapfilter"];
$url="http://www.panoramio.com/map/get_panoramas.php?set=public&from=" . $from . "&to=" . $to . "&minx=" . $minx . "&miny=" . $miny . "&maxx=" . $maxx . "&maxy=" . $maxy . "&size=" . $size . "&mapfilter=" . $mapfilter;
echo file_get_contents($url);
}
?>