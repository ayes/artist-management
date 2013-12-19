<br />
<?php if(validation_errors()) : ?>
	<div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php echo validation_errors(); ?>
    </div>
<?php endif; ?>