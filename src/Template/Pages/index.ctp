<br>
<div class="row">
	<div class="large-4 columns">&nbsp;</div>
	<div class="large-4 columns">
		<h2 class="text-center"><?= strftime("%B",mktime(0, 0, 0, $month, 1, 2000)) ?></h2>
		<h1 class="text-center">$ <?= number_format($total_month,0,',','.'); ?></h1>
		<br>
		<div class="row">
			<div class="small-4 columns">&nbsp;</div>
			<div class="small-4 columns">
			<?= $this->Html->link('Detail',['controller' => 'Details', 'action' => 'month'],array('class' => 'button radius small center','style' => 'margin:0 auto' )	); ?>
			</div>
			<div class="small-4 columns">&nbsp;	</div>
		</div>

	</div>
  	<div class="large-4 columns">&nbsp;</div>
</div>
