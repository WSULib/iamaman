<?php
set_items_for_loop(get_items(array('range' => '224')));
?>

<div class="prev-next">
<p class="previous"><a href="panel2">Previous</a></p>
<p class="next"><a href="panel4">Next</a></p>
</div>

<div class="panel_text">

<p>On a rainy February afternoon, two black sanitation workers sat inside the back of a garbage truck to stay dry.  Old and poorly maintained, an electrical short in its wiring caused the compressor to start running, and Echol Cole and Robert Walker were crushed to death.  The Memphis Sanitation Department gave the families of each worker a month's pay plus $500 for funeral expenses.  No city official attended the funerals and no further compensation was extended.</p>

<p class="last">On the evening of February 11, T.O. Jones, president of Local 1733 of the American Federation of State County and Municipal Employees (AFSCME), held a meeting with sanitation workers to discuss the recent deaths, partial pay on rainy days and safety conditions.  They ultimately decided that enough was enough and voted to strike.  Taylor Rogers, an organizer with Local 1733 said, "If you bend your back, people can ride it.  But if you stand up straight, people can't ride your back.  And that's what we did.  We stood up straight."</p>

<?php include('videonest.php'); ?>


<?php
set_items_for_loop(get_items(array('range' => '148,149,150')));
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
<p class="previous"><a href="panel2">Previous</a></p>
<p class="next"><a href="panel4">Next</a></p>
</div>

</div>
