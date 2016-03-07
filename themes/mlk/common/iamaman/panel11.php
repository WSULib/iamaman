<?php
set_items_for_loop(get_items(array('range' => '188-189')));
?>

<div class="prev-next">
<p class="previous"><a href="panel10">Previous</a></p>
<p class="next"><a href="panel12">Next</a></p>
</div>

<div class="panel_text">

<p>As promised, Dr. King returned to Memphis. He intended on leading a march despite the injunction against it. On April 3 Dr. King spoke at the city's Mason Temple.  With the shutters banging from the wind and thunder rumbling in the distance, Dr. King gave one of his most stirring speeches, and what would ultimately be his last.</p>

<p class="last"><a href=" http://www.afscme.org/union/history/mlk/ive-been-to-the-mountaintop-by-dr-martin-luther-king-jr">The full text of Dr. King's "I've Been to the Mountaintop" speech can be read here</a>.</p>


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
<p class="previous"><a href="panel10">Previous</a></p>
<p class="next"><a href="panel12">Next</a></p>
</div>

</div>
