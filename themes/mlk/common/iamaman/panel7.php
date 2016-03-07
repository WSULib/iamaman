<?php
set_items_for_loop(get_items(array('range' => '172-174')));
?>

<div class="prev-next">
<p class="previous"><a href="panel6">Previous</a></p>
<p class="next"><a href="panel8">Next</a></p>
</div>

<div class="panel_text">

<p>Roy Wilkins, NAACP president and national labor and civil rights leader Bayard Rustin arrived in Memphis to lend their support and prestige to the strikers.  Speaking to a crowd of 10,000 people on March 14, Wilkins berated Mayor Loeb for not paying a living wage to sanitation workers: "If I were mayor of this city I would be ashamed."  Rustin added, "If you can't get a decent salary for men who are working, in the name of God, how the hell are you going to get rid of poverty?"  Rustin, bathed in sweat, led in the singing of "This Little Light of Mine."</p>

<p class="last">The strikers were completely rejuvenated. The meeting ended with garbage cans being passed around for the collection while they sung hymns and freedom songs.</p>


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
<p class="previous"><a href="panel6">Previous</a></p>
<p class="next"><a href="panel8">Next</a></p>
</div>

</div>
