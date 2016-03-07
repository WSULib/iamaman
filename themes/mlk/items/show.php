<?php head(array('title' => item('Dublin Core', 'Title'), 'bodyid'=>'items','bodyclass' => 'show')); ?>

<div id="primary">
    
	<h1><?php echo item('Dublin Core', 'Title'); ?></h1>
	
	<!-- The following returns all of the files associated with an item. -->
	<div id="itemfiles" class="element">
		<div class="element-text"><?php echo display_files_for_item(array('imageSize' => 'fullsize', 'linkToFile' => false)); ?></div>
	</div>
    
    <?php /* echo custom_show_item_metadata(); */

$capDescription = item('Dublin Core', 'Description');
$capCreator = rtrim(item('Dublin Core', 'Creator'));
$capDate = item('Dublin Core', 'Date');
$capSource = item('Dublin Core', 'Source');
$capPartof = item('Dublin Core', 'Is Part Of');
	
	?>
    <div id="iteminfo">
    <p class="captionDescription"><em><?php echo($capDescription); ?></em></p>
    <p class="captionText"><?php if (!empty($capCreator)): ?><strong>Creator:</strong> <?php echo($capCreator); ?><br /><?php endif; ?>
    					   <?php if (!empty($capDate)): ?><strong>Date:</strong> <?php echo($capDate); ?> <br /><?php endif; ?>
                           <?php if (!empty($capSource)): ?><strong>Source:</strong> <?php echo($capSource); ?><br /><?php endif; ?>
                           <?php if (!empty($capPartof)): ?><strong>Collection:</strong> <?php echo($capPartof); ?><?php endif; ?></p>
    </div>
	
	<!-- If the item belongs to a collection, the following creates a link to that collection. -->
	<?php if (item_belongs_to_collection()): ?>
    <div id="collection" class="element">
        <h3>Collection</h3>
        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
    </div>
    <?php endif; ?>

    <!-- The following prints a list of all tags associated with the item -->
	<?php if (item_has_tags()): ?>
	<div id="item-tags" class="element">
		<h3>Tags</h3>
		<div class="element-text"><?php echo item_tags_as_string(); ?></div> 
	</div>
	<?php endif;?>
	
	<!-- The following prints a citation for this item. -->
	<div id="item-citation" class="element">
    	<h3>Citation</h3>
    	<div class="element-text"><?php echo item_citation(); ?></div>
	</div>
	
	<?php echo plugin_append_to_items_show(); ?>

	<ul class="item-pagination navigation">
	    <li id="previous-item" class="previous"><?php echo link_to_previous_item('Previous Item'); ?></li>
	    <li id="next-item" class="next"><?php echo link_to_next_item('Next Item'); ?></li>
	</ul>
	
</div><!-- end primary -->

<?php foot(); ?>