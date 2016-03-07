<?php
set_items_for_loop(get_items(array('range' => '221')));
?>

<div class="prev-next">
<p class="previous"><a href="panel3">Previous</a></p>
<p class="next"><a href="panel5">Next</a></p>
</div>

<div class="panel_text">

<p>The strike began on a bitter note.  Mayor Loeb declared the strike illegal, delivered a back-to-work ultimatum and refused to negotiate.  National AFSCME officials P.J. Ciampa and William Lucy arrived on February 13 to lead negotiations for Local 1733 with Mayor Henry Loeb.  "I don't know of any law in Tennessee," said Ciampa, "that says you have to subject yourself to indentured servitude."</p>

<p>Concerned with growing racial tensions, a small group of black and white ministers urged the mayor to return to the negotiating table but was rebuffed.  This group organized all night vigils at Mason Temple Church of God and picket lines in front of city hall.</p>

<p>AFSCME President Jerry Wurf arrived on February 18 to assist with negotiations, and by February 20, he and Ciampa submitted the union's demands which included union recognition, 10% pay increase, sick leave and dues check off, to name a few.  Still Loeb refused to listen.</p>

<p class="last">At a city council committee meeting for public workers, council chair Fred Davis wanted to hear "what the men themselves have to say on the issues."  Seven hundred strikers quickly filled the room. Stunned, Davis ordered a recess.  The workers voiced their complaints with testimonies and songs.  Finally, the committee agreed to present a resolution recommending union recognition and some form of dues check off to the city council on the following day.
</p>

<?php include('videonest.php'); ?>


<?php
set_items_for_loop(get_items(array('range' => '151-159')));
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
<p class="previous"><a href="panel3">Previous</a></p>
<p class="next"><a href="panel5">Next</a></p>
</div>

</div>
