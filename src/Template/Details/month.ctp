<?php $total = 0; ?>
<div class="row">
	<div class="large-12 columns">
		<br>
		<h3 class="text-center"><?= strftime("%B",mktime(0, 0, 0, $month, 1, 2000)) ?></h3>
		<div class="row ">
			<div class="small-6 medium-2 columns"><?= $this->Html->link('Home',['controller' => 'Pages', 'action' => 'index']	); ?></div>
			<div class="small-6 medium-2 columns  "><?= $this->Html->link('New Product',['controller' => 'Products', 'action' => 'create'],['class' => 'button round expand tiny']	); ?></div>
		</div>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
		<table width="100%" role="grid" class="responsive">
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
					<td><?= date_format($product->pro_date_payment,'F \o\f Y') ?></td>
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
		</div>
	</div>
</div>