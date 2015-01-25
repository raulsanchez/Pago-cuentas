<?php $total = $total_payment = 0; ?>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Account</th>
			<th>Type</th>
			<th>Payment</th>
			<th>Date Payment</th>
			<th>Amount</th>
			<th>Total</th>
			<th>State</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($products as $product): ?>
		<tr>
			<td><?= $product->pro_name ?></td>
			<td><?= $product->account->acc_name ?></td>
			<td><?= $product->type_product->typ_name ?></td>
			<?php if($product->pro_payment != 0 ): ?>
			<td><?= $product->pro_payment ?></td>
			<?php else: ?>
			<?php $product->pro_payment = 1 ?>
			<td>&infin;</td>
			<?php endif; ?>
			<td><?= date_format($product->pro_date_payment,'Y-m-d') ?></td>
			<td style="text-align:right">$ <?= number_format($product->pro_amount,'0',',','.'); ?></td>

			<td style="text-align:right">$ <?= number_format($product->pro_amount * $product->pro_payment,0,',','.') ?></td>
			<td><?= $product->pro_state ?></td>
			<?php
				$total += $product->pro_amount;
				$total_payment += $product->pro_amount * $product->pro_payment;
			?>
		</tr>
	<?php endforeach; ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="5" style="text-align:right">Total</td>
			<td>$ <?= number_format($total,'0',',','.'); ?></td>
			<td>$ <?= number_format($total_payment,'0',',','.'); ?></td>
		</tr>
	</tfoot>
</table>
<?= $this->Html->link('New Product',['controller' => 'Products', 'action' => 'create']	); ?>
