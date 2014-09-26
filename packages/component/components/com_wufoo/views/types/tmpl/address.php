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

<? $filter = $this->getService('koowa:filter.slug'); ?>

<div class="form-group-border">
	<? if($form->show_titles) : ?>
		<label><?= $field['title']; ?></label>
	<? endif; ?>

    <? foreach($field['subfields'] as $subfield) : ?>
        <div class="form-group">
            <div class="form-group">
                <? if($form->show_titles) : ?>
                    <label for="<?= $filter->sanitize($subfield['Label']); ?>"><?= @text(strtoupper(str_replace('-', '_', $subfield['Label']))); ?></label>
                <? endif; ?>
                <input id="<?= $filter->sanitize($subfield['Label']); ?>" type="text" class="form-control" <?= $subfield['isrequired'] ? 'required': ''; ?> name="<?= $subfield['ID']; ?>" value="<?= $subfield['DefaultVal']; ?>">

            </div>
        </div>
    <? endforeach; ?>
</div>