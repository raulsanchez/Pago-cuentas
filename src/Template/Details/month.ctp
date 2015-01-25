<?php $total = 0; ?>
<h3><?= strftime("%B",mktime(0, 0, 0, $month, 1, 2000)) ?></h3>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Account</th>
			<th>Type</th>
			<th>Payment</th>
			<th>Date Payment</th>
			<th>Amount</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($view_products as $product): ?>
		<?php if($product->number_payment != 999999): ?>
		<tr>
			<td><?= $product->pro_name ?></td>
			<td><?= $product->account->acc_name ?></td>
			<td><?= $product->type_product->typ_name ?></td>
			<?php if($product->pro_payment != 0 ): ?>
			<td><?= $product->number_payment ?>/<?= $product->pro_payment ?></td>
			<?php else: ?>
			<td>&infin;</td>
			<?php endif; ?>
			<td><?= date_format($product->pro_date_payment,'Y-m-d') ?></td>
			<td style="text-align:right">$ <?= number_format($product->pro_amount,'0',',','.'); ?></td>
			<?php
				$total += $product->pro_amount;
			?>
		</tr>
		<?php endif; ?>
	<?php endforeach; ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="5" style="text-align:right">Total</td>
			<td>$ <?= number_format($total,'0',',','.'); ?></td>
		</tr>
	</tfoot>
</table>
<?= $this->Html->link('New Product',['controller' => 'Products', 'action' => 'create']	); ?>
