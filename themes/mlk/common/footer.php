</div><!-- end content -->

<div id="footer">


    <ul class="exhibit-navigation">
            <?php
			$links = array(	'Home' => uri(''),
							'Introductory Essay' => uri('memphis'),
							'Lives of the Sanitation Workers' => uri('panel2'),
							'The Strike Begins' => uri('panel3'),
							'Negotiations, Vigils, and Sandwiches' => uri('panel4'),
							'The Macing March' => uri('panel5'),
							'A Community Awakens' => uri('panel6'),
							'A Nation Awakens' => uri('panel7'),
							'Dr. King Arrives In Memphis' => uri('panel8'),
							'Terrible Thursday' => uri('panel9'),
							'The Men March, The Guards Watch' => uri('panel10'),
							"I've Been To The Mountain Top" => uri('panel11'),
							'Lorraine Motel' => uri('panel12'),
							'Mourning' => uri('panel13'),
							'Victory for Local 1733' => uri('panel14'),
							'Impact on the South, 1968-1970' => uri('panel15'),
							'Remembering Memphis' => uri('panel16'),
							'Resources' => uri('resources'),
							'Credits/Contact' => uri('contact') );
			echo nav($links);
			?>
    </ul>
    <!--
    <ul class="navigation">
		<?php echo public_nav_main(array('Home' => uri(''), 
										 'Browse Items' => uri('items'),
										 'Resources' => uri('resources') ));
    	?>
    </ul>
    -->
    <div id="footer-text">
        <?php echo get_theme_option('Footer Text'); ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = settings('copyright')): ?>
            <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <div><p id="waynecredit"><a href="http://www.lib.wayne.edu">Wayne State Library System</a></p></div>
        <div><p id="reuthercredit"><a href="http://www.reuther.wayne.edu">Walter P. Reuther Library</a></p></div>
        <div><p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" rel="license" class="cc_js_a"><img width="88" height="31" border="0" class="cc_js_cc-button" src="http://i.creativecommons.org/l/by-nc-sa/3.0//88x31.png" alt="Creative Commons License"/></a></p></div>
        <div><p>&copy; Wayne State University<br />Powered by <a href="http://omeka.org">Omeka</a>.</p></div>
        
    </div>

	<?php plugin_footer(); ?>
	
</div><!-- end footer -->
</div><!-- end wrap -->
</body>
</html>