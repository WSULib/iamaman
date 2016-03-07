<?php
set_items_for_loop(get_items(array('range' => '220')));
?>

<div class="prev-next">
<p class="previous"><a href="panel5">Previous</a></p>
<p class="next"><a href="panel7">Next</a></p>
</div>

<div class="panel_text">

<p>The day after the Macing March 150 black ministers formed the Community on the Move for Equality (COME) in support of the strikers.  COME called for a boycott of all downtown businesses - specifically businesses associated with Mayor Loeb and his family - and the two daily newspapers.  Soon, ministers, community activists and high school and college students marched alongside the striking sanitation workers.</p>  

<p class="last">Unmoved, the city council and the mayor still refused to negotiate.  On March 5 COME organized protests, resulting in mass arrests that filled the city's jails - in all 117 strikers and supporters were arrested.  Reverend James Lawson, who headed COME, began contacting national civil rights leaders in an effort to gain national attention on the crisis in Memphis.</p>

<?php include('videonest.php'); ?>


<?php
set_items_for_loop(get_items(array('range' => '165-171')));
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
<p class="previous"><a href="panel5">Previous</a></p>
<p class="next"><a href="panel7">Next</a></p>
</div>

</div>
