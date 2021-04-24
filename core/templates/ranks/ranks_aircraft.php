<section class="page-contents">
<div class="container">
<h3><i class="fa fa-star" fa-lg style="color:#04327F"></i> <?php echo $ranks->rank;?> </h3>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="blueIce_table">
	<tr>
		<td align="center">Rank ID</td>
		<td align="center">Rank</td>
		<td align="center">Image</td>
		<td align="center">min hours</td>
		<td align="center">Pay Rate</td>
	</tr>
	<tr>
		<td align="center"><?php echo $ranks->rankid;?></td>
		<td align="center"><?php echo $ranks->rank;?></td>
		<td align="center"><img src="<?php echo $ranks->rankimage;?>" alt="<?php echo $ranks->rank;?>"/></td>
		<td align="center"><?php echo $ranks->minhours;?></td>
		<td align="center"><?php echo MONEY_UNIT;?><?php echo $ranks->payrate;?></td>
	</tr>
</table>
<h3>Aircraft:</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="blueIce_table">


<tbody>
	<?php
	$aircrafts = RankStats::aircraft($ranks->rankid);
	if(!$aircrafts)
	{
		echo "At this rank you can fly the aircraft of the ranks preceeding it.";
	}
	else {


	foreach($aircrafts as $ac)
	{

	?>
<tr id="row">
	<td align="center"><?php echo $ac->icao;?></td>
	<td align="center"><?php echo $ac->fullname; ?></td>

	</tr>
<?php
}
}
?>
<tr>
	<td><a href="<?php SITE_URL?>/index.php/ranks">Back</a></td>
</tr>
</tbody>
</table>
</div>
</section>
<hr />
<?php
if(!$copyright){
echo '<span style="color:red;">Please put the strider table in your database as this is required.</span>';

}

else{
  foreach($copyright as $copy){
echo $copy->copyright .' '.date("Y").' '.$copy->name.' '.$copy->module.' '.$copy->version.'.';
}
}
 ?>
