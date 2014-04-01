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

<div class="form-group">
	<? if($form->show_titles) : ?>
	<label><?= $field['title']; ?></label>
	<? endif; ?>

	<? $i = 1; ?>
	<? foreach($field['choices'] as $value => $data) : ?>
		<div class="radio">
			<label>
				<input type="radio" name="<?= $field['id']; ?>" value="<?= $data['Label']; ?>" <?= $i ? "checked" : null; ?>>
				<?= $data['Label']; ?>
			</label>
		</div>
		<? $i = 0 ; ?>
	<? endforeach; ?>
</div>