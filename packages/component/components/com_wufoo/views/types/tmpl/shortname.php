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
	<div class="form-inline">
		<? foreach($field['subfields'] as $subfield) : ?>
			<div class="form-group">
				<input type="text" class="form-control" <?= $field['isrequired'] ? 'required': null; ?> name="<?= $subfield['ID']; ?>" value="<?= $subfield['DefaultVal']; ?>" placeholder="<?= $field['instructions']; ?>">
				<span style="display: block;"><?= @text(strtoupper($subfield['Label'])); ?></span>
			</div>
		<? endforeach; ?>
	</div>
	<? endif; ?>
</div>