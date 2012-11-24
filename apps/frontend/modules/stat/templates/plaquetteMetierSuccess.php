<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php if(isset($test)): ?>
	<pre><?php print_r($test) ?></pre>
<?php endif ?>

<h2>Plaquette Métier</h2>

<div class="form_stat">
<form action="<?php url_for('@plaquetteMetierSubmit') ?>" method='POST'>
	<table>
		<?php echo $form ?>
		<tr><td></td><td><input type="submit" value="prévisualiser" /><td></tr>
	</table>
</form>
</div>