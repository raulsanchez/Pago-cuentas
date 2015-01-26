<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Head -->
	<?php echo $this->Html->css(['foundation','responsive-tables']); ?>
	<title>
		Controls accounts ::
		<?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>
</head>
<body>
	<div class="row">
  		<div class="small-12 columns">
			<?= $this->Flash->render() ?>
  		</div>
	</div>
	<?= $this->fetch('content') ?>
</body>
<!-- Before body closing tag -->
<?php echo $this->Html->script(['vendor/modernizr.js',
								'vendor/jquery.js',
								'foundation.min.js',
								'vendor/responsive-tables'
								]); ?>

  <script>
    $(document).foundation();
  </script>
</html>