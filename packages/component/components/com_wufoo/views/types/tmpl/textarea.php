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
	<textarea class="form-control" <?= $field['isrequired'] ? 'required': null; ?> name="<?= $field['id']; ?>" placeholder="<?= $field['instructions']; ?>"></textarea>
</div>