<?php head(); ?>
<div id="primary">
<h1><?php echo settings('simple_contact_form_contact_page_title'); ?></h1>
    
<div id="simple-contact">

    <div class="credits">
    
    <h3>Curated by</h3>
    
    <p><a href="mailto:ad6292@wayne.edu">Dan Golodner</a>, American Federation of Teachers Archivist (AFT), W. P. Reuther Library</p>
    <p><a href="mailto:eb5801@wayne.edu">Johanna Russ</a>, American Federation of State, County and Municipal Employees Archivist (AFSCME), W. P. Reuther Library</p>
    
    <h3>Designed/Developed by</h3>
    
    <p><a href="mailto:dy5772@wayne.edu">Meghan Finch</a>, Metadata Librarian, Wayne State University Libraries</p>
    <p><a href="mailto:dp5745@wayne.edu">Joshua Neds-Fox</a>, Coordinator for Digital Publishing, Wayne State University Libraries</p>
    </div>
    
	<div id="form-instructions">
		<?php echo get_option('simple_contact_form_contact_page_instructions'); // HTML ?>
	</div>
	<?php echo flash(); ?>
	<form name="contact_form" id="contact-form"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
        
        <fieldset>
            
        <div class="field">
		<?php 
		    echo $this->formLabel('name', 'Your Name: ');
		    echo $this->formText('name', $name, array('class'=>'textinput')); ?>
		</div>
		
        <div class="field">
            <?php 
            echo $this->formLabel('email', 'Your Email: ');
		    echo $this->formText('email', $email, array('class'=>'textinput'));  ?>
        </div>
        
		<div class="field">
		  <?php 
		    echo $this->formLabel('message', 'Your Message: ');
		    echo $this->formTextarea('message', $message, array('class'=>'textinput')); ?>
		</div>    
		
		</fieldset>
		
		<fieldset>
		    
		<div class="field recaptcha">
		  <?php echo $captcha; ?>
		</div>		
		
		<div class="field send">
		  <?php echo $this->formSubmit('send', 'Send Message'); ?>
		</div>
	    
	    </fieldset>
	</form>
</div>

</div>
<?php foot(); ?>