<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>

<!--
<script src="media://lib_koowa/js/koowa.js" />
-->

<form action="<?= @route() ?>" method="get" class="-koowa-grid" data-toolbar=".toolbar-list">
	<div class="btn-toolbar" id="filter-bar">
		<div class="filter-search btn-group pull-left">
			<input type="text" value="<?= $state->search; ?>" placeholder="Search" id="filter_search" name="search">
		</div>
		<div class="btn-group pull-left hidden-phone">
			<button title="" class="btn hasTooltip" type="submit" data-original-title="Search"><i class="icon-search"></i></button>
			<button onclick="document.id('filter_search').value='';this.form.submit();" title="" class="btn hasTooltip" type="button" data-original-title="Clear"><i class="icon-remove"></i></button>
		</div>
	</div>
	<table class="table table-striped">
		<thead>
		<tr>
			<th style="text-align: center;" width="1">
				<?= @helper('grid.checkall')?>
			</th>
			<th>
				<?= @helper('grid.sort', array('column' => 'title', 'title' => 'Title', 'direction' => 'asc')) ?>
			</th>
		</tr>
		</thead>
		<tbody
		<? foreach($forms as $form) : ?>
			<tr>
				<td style="text-align: center;">
					<?= @helper('grid.checkbox', array('row'=> $form)); ?>
				</td>
				<td>
					<a href="<?= @route('view=form&id='.$form->id)?>">
						<?= @escape($form->title) ?>
					</a>
				</td>
			</tr>
		<? endforeach ?>
		<? if(!count($forms)) : ?>
			<tr>
				<td colspan="2" style="text-align: center;">
					<?= @text('NO_ITEMS') ?>
				</td>
			</tr>
		<? endif ?>
		</tbody>

		<? if (count($forms)): ?>
			<tfoot>
			<tr>
				<td colspan="2">
					<?= @helper('paginator.pagination', array('total' => $total)) ?>
				</td>
			</tr>
			</tfoot>
		<? endif; ?>
	</table>
</form>