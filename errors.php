<?php  
if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
<?php  
if (count($succes) > 0) : ?>
	<div class="success">
		<?php foreach ($succes as $succe) : ?>
			<p><?php echo $succe ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>