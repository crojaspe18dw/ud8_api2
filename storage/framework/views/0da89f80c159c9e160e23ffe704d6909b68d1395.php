<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('bootstrap/css/bootstrap.min.css')); ?>">
	<title></title>
</head>
<body>
	
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<img src="<?php echo e($imagen); ?>" class="col-12">
				</div>
				<div class="col-6">
					<h1>nombre:<b><?php echo e($nombre); ?></b></h1>
					<h3>seguidores</h3>
					<?php $__empty_1 = true; $__currentLoopData = $seguidores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguidor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<label>nombre:<b><?php echo e($seguidor->login); ?></b></label><br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<label>no se han encontrado seguidores</label>
					<?php endif; ?>
					<h3>seguidos</h3>
					<?php $__empty_1 = true; $__currentLoopData = $seguidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<label>nombre:<b><?php echo e($seguido->login); ?></b></label><br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<label>no se han encontrado seguidos</label>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html><?php /**PATH /home/ubuntu/Desktop/ud8_api/resources/views/githubindex.blade.php ENDPATH**/ ?>