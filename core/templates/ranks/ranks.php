<section class="page-contents">
<div class="container">
<h3><i class="fa fa-star" fa-lg style="color:#04327F"></i> Ranks</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="blueIce_table">
<thead>
<tr>
	<th>Rank Title</th>
    <th>Minimum Hours</th>
	<th>Rank Image</th>
	<th>Aircraft</th>
	</tr>
</thead>
<tbody>
<?php
foreach($ranks as $rank)
{
?>
<tr id="row<?php echo $rank->rankid;?>">
	<td align="center"><?php echo $rank->rank; ?></td>
    <td align="center"><?php echo $rank->minhours; ?></td>

	<td align="center"><img src="<?php echo $rank->rankimage; ?>"width="80"height="31" /></td>
	<td align="center"><a href="<?php echo SITE_URL?>/index.php/ranks/rank_details/<?php echo $rank->rankid;?>">Aircraft</a></td>
	</tr>
	
<?php
}
?>
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
