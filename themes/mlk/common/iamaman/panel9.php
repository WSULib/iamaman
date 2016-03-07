<?php
set_items_for_loop(get_items(array('range' => '225')));
?>

<div class="prev-next">
<p class="previous"><a href="panel8">Previous</a></p>
<p class="next"><a href="panel10">Next</a></p>
</div>

<div class="panel_text">

<p>Dr. King returned on March 28th to lead a march in support of the sanitation workers on Beale Street in downtown Memphis.  Minutes after the procession began, violence erupted.  Windows were broken and looting started.  Dr. King was quickly escorted away while 600 police dispersed the marchers with tear gas and nightsticks.  During the course of the day 62 people were injured and 1 was killed.  The FBI circulated a memo to newspaper editorial offices across the country citing a breakdown of the non-violence in Memphis and that this was a precursor to the Poor People's Campaign.  King and many others believed the march had been undermined and sabotaged.</p>

<p class="last">This was the first time in King's life he was forced to leave a civil rights march.  He felt compelled to return to Memphis to organize a truly non-violent march to put doubts about non-violent protests to rest, and to lay the groundwork for a successful mass demonstration in Washington DC with the Poor People's Campaign.</p>

<?php include('videonest.php'); ?>

<?php
set_items_for_loop(get_items(array('range' => '179-185')));
?>

<?php if(has_items_for_loop()): ?>
<?php $panel_counter = 1; ?>
   <!-- Loop for items -->
   <?php while(loop_items()):

	include('panel_items.php');
    $panel_counter++;
	
	endwhile;
	
	if (empty($panel_close)) { echo("</div>\r\n"); }
	
	?>
 
<?php else: ?>
 
    <!-- Message if there are no items -->
    <p>No images for display</p>
<?php endif; ?>

<div class="prev-next">
<p class="previous"><a href="panel8">Previous</a></p>
<p class="next"><a href="panel10">Next</a></p>
</div>

</div>
