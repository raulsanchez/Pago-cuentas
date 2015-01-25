Views::create
<?= $this->Form->create(null, ['action' => 'store','class' =>'form-horizontal']); ?>
	<label for="pro_acc_id" class="control-label">Account</label>
		<?= $this->form->select('pro_acc_id',$accounts,['empty' => 'Select one','escape' => false,'class' =>'form-control', 'id' => 'pro_acc_id', 'requiered' => 'requiered','label' => 'pro_acc_id'] ); ?>
	<br>
	<label for="pro_typ_id" class="control-label">Type</label>
		<?= $this->form->select('pro_typ_id',$typeproducts,['empty' => 'Select one','escape' => false,'class' =>'form-control', 'id' => 'pro_typ_id','requiered' => 'requiered', 'label' => false]); ?>
	<br>
	<label for="pro_name" class="control-label">Product</label>
		<input type="text" name="pro_name" class="form-control" id="pro_name">
	<br>
	<label for="pro_amount" class="control-label">Amount</label>
	    <input type="number" min="1" name="pro_amount" onblur="calc()" class="form-control" id="pro_amount">
	<br>
	<label for="pro_payment" class="control-label">Fee</label>
		<input type="number" min="1" name="pro_payment" onblur="calc()" value="1" class="form-control" id="pro_payment">∞
	<br>
	<label for="pro_total" class="control-label">Total</label>
	    <input type="number" min="1" name="pro_total" readonly="readonly" class="form-control" id="pro_total">
	<br>
	<label for="pro_date_payment">Date Payment</label>
		<input type="date" name="pro_date_payment" id="pro_date_payment">
	<br>
	<input type="submit" value="save">
<?= $this->Form->end('save'); ?>

<script>
function calc(){
	var amount = document.getElementById('pro_amount').value;
	var fee = document.getElementById('pro_payment').value;

	if(0 < amount.length){
		if(fee != 0){
			document.getElementById('pro_total').value = amount * fee;
		}
	}
}
</script>