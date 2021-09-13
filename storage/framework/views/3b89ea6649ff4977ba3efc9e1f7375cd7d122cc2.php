
<?php $__env->startSection('content'); ?>
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Список категорий</h1>       
    </div>
  </div>
</section>
<div class="album py-5 bg-light">
  <div class="container">        
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
     	<ul>

		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    <li style="font-size: 25px;font-weight: 700;"><a href="<?php echo e(Route('categories_open_category', ['slug' => $category->slug])); ?>"><?php echo e($category->name); ?></a></li>
		    <ul>
		    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
		        <li style="font-size: 20px;font-weight: 500;"><a href="<?php echo e(Route('categories_open_category', ['slug' => $children_category->slug])); ?> "><?php echo e($children_category->name); ?></a></li>
		            <ul>
		            <?php $__currentLoopData = $children_category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li>
	                     	<a href="<?php echo e(Route('categories_open_category', ['slug' => $children_category->slug])); ?>">
		                     	<?php echo e($children_category->name); ?>

		                    </a>
		                </li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		            </ul>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </ul>		  
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</ul>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>





<?php echo $__env->make('../welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\Larawel-first-task-company-echo\example-app\resources\views/categories/categories.blade.php ENDPATH**/ ?>