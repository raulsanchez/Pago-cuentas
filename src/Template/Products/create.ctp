<div class="row">
	<div class="small-12 large-12 columns">
		<h3 class="text-center">Create a Product</h3>
	</div>
</div>

<?= $this->Form->create(null, ['action' => 'store','class' =>'form-horizontal']); ?>

<div class="row">
	<div class="small-12 large-12 columns">
		<label for="pro_name" class="control-label">Product
			<input type="text" name="pro_name" required class="form-control" id="pro_name">
		</label>
	</div>
</div>
<div class="row">
	<div class="small-12 medium-3 large-3 columns">
		<label>Amount
			<div class="row collapse prefix-radius">
				<div class="small-2 columns">
					<span class="prefix">$</span>
				</div>
				<div class="small-10 columns">
					<input type="number" min="1" required name="pro_amount" onblur="calc()" class="form-control" id="pro_amount">
				</div>
			</div>
		</label>
	</div>
	<div class="small-12 medium-3 large-3 columns">
		<label for="pro_payment" data-tooltip aria-haspopup="true" class="has-tip" title="If you select 0 be an infinite quota">Payment </label>
			<input type="number" min="0" name="pro_payment" required onblur="calc()" value="1" class="form-control" id="pro_payment">
	</div>
	<div class="small-12 medium-3 large-3 columns ">
		<label>Date Payment
			<input type="month" name="pro_date_payment" required id="pro_date_payment">
		</label>
	</div>
	<div class="small-12 medium-3 large-3 columns">
		<label>Total
			<input type="number" min="1" name="pro_total" readonly="readonly" class="form-control" id="pro_total">
		</label>
	</div>
</div>
<div class="row">
	<div class="small-12 medium-3 large-4 columns">
		<label>Account
			<?= $this->form->select('pro_acc_id',$accounts,['empty' => 'Select one','escape' => false,'class' =>'form-control', 'id' => 'pro_acc_id', 'requiered' => 'requiered','label' => 'pro_acc_id'] ); ?>
		</label>
	</div>
	<div class="small-12 medium-3 large-4 columns end">
		<label>Type
			<?= $this->form->select('pro_typ_id',$typeproducts,['empty' => 'Select one','escape' => false,'class' =>'form-control', 'id' => 'pro_typ_id','requiered' => 'requiered', 'label' => false]); ?>
		</label>
	</div>

</div>
<div class="row">
	<div class="small-12 medium-2 large-2 columns">
		<input type="submit" value="save" class="button radius expand">
	</div>
	<div class="small-12 medium-2 large-2 columns end">
		<?= $this->Html->link('Back',['controller' => 'Details', 'action' => 'month'],array('class' => 'button radius secondary expand','style' => 'margin:0 auto' )	); ?>
	</div>
</div>
<?= $this->Form->end('save'); ?>
<br>


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