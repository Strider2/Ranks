<?php

class RanksData extends CodonData {
    static $lasterror;
    Public static function GetRanks()
    {
      	return DB::get_results("SELECT * FROM ".TABLE_PREFIX."ranks");
    }
    Public static function GetRank($rankid)
    {
      $query = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rankid='$rankid'";

      return DB::get_row($query);
    }
    public static function getAircraftRank($id)
   {
     $query = "SELECT * FROM ".TABLE_PREFIX."aircraft
         WHERE minrank ='$id'";

     return DB::get_row($query);
   }
    Public static function GetAircraft($rankid)
    {
      $query = "SELECT * FROM ".TABLE_PREFIX."aircraft WHERE minrank='$rankid'";

      return DB::get_row($query);
    }
    /////////////////////////////////
    // Do not remove this code!   //
    ///////////////////////////////
    public static function getVersion()
    {
     return DB::get_results("SELECT * FROM ".TABLE_PREFIX."strider WHERE id = 8");
    }


}
