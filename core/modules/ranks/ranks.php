<?php


class Ranks extends CodonModule
{

		public function index()
{
		$this->set('ranks', RanksData::GetRanks());
		$this->render('ranks/ranks.php');

		}
		public function rank_details($rankid='')
		{
			//$this->set('copyright', CodeShareData::getVersion());
			$aircrafts = RankStats::aircraft($rankid);
			$ranks = RanksData::GetRank($rankid);
			$this->set('ranks', $ranks);
			$this->render('ranks/ranks_aircraft.php');
		}
		public function copyright()
		{
			$this->set('copyright', RanksData::getVersion());
			$this->render('radio/footer.php');
		}
}
?>
