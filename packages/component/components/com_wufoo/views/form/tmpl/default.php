<?php
/**
 * Com
 *
 * @author      Dave Li <dave@moyoweb.nl>
 * @category    Nooku
 * @package     Socialhub
 * @subpackage  ...
 * @uses        Com_
 */

defined('KOOWA') or die('Protected resource'); ?>

<style src="media://com_wufoo/css/jquery.loader.min.css" />
<script src="media://com_wufoo/js/jquery.loader.min.js" />
<script src="media://com_wufoo/js/jquery.validate.min.js" />

<script>
	jQuery.noConflict()(function($) {
		$('#<?= $form->slug; ?>').validate(
			{
				highlight: function(element) {
					$(element).closest('.control-group').removeClass('success').addClass('error');
				},
				success: function(element) {
					element
						.text('OK!').addClass('valid')
						.closest('.control-group').removeClass('error').addClass('success');
				}
			});
	});

	$('#<?= $form->slug; ?>').submit(function (e) {
		e.preventDefault();

		$('#loader').loader('show', { overlay: false });

		$.ajax({
			type: "POST",
			url: $(this).attr('action') + '&format=json',
			data: $(this).serialize(),
			success: function (data) {
				$('#loader').loader('hide');
				$('#messages').append('<div class="alert alert-success">' + data.item.message_success + '</div>');
				document.getElementById('<?= $form->slug; ?>').reset();
			},
			error: function (data) {
				$('#loader').loader('hide');
				$('#messages').append('<div class="alert alert-danger">' + data.item.message_error + '</div>');
			},
			cache: false
		});
	});
	});
</script>

<div id="loader">
	<h1><?= $form->title; ?></h1>
	<form action="" method="POST" class="ajaxified" id="<?= $form->slug; ?>">
		<? foreach($form->form_fields as $field) : ?>
			<?= @template('com://site/wufoo.view.types.'.$field['type'], array('form' => $form, 'field' => $field)); ?>
		<? endforeach; ?>
		<input type="hidden" name="action" value="submit" />
		<button type="submit" class="btn btn-primary submit"><?= $form->button_submit; ?></button>
	</form>
	<div id="messages"></div>
</div>