view::index
<h3><?= strftime("%B",mktime(0, 0, 0, $month, 1, 2000)) ?></h3>
<br>
$ <?= number_format($total_month,0,',','.'); ?>
<br>
<?= $this->Html->link('Detail',['controller' => 'Details', 'action' => 'month']	); ?>
