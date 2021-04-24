<?php
class RankStats extends Codondata {

public static function aircraft($rankid) { //schedules details
$query = "SELECT * FROM ".TABLE_PREFIX."aircraft WHERE minrank = '".$rankid."'";
return DB::get_results($query);
}
public static function rank($rankid) { //schedules details
$query = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rankid = '".$rankid."'";
return DB::get_results($query);
}
}
?>
