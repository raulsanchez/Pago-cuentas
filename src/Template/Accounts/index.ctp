<!-- File: src/Template/Articles/index.ctp -->
<?php debug($accounts); ?>
<h1>Accounts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
     </tr>
    <?php foreach ($accounts as $account): ?>
    	<tr>
    		<td><?= $account->acc_id ?></td>
    		<td><?= $account->acc_name ?></td>
    	</tr>
	<?php endforeach; ?>
</table>