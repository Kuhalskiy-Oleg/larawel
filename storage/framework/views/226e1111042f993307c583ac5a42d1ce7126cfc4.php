
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
     		<!-- parent -->
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <li style="font-size: 25px;font-weight: 700;">
			    	<a href="<?php echo e(Route('V1.categories.show', $category->slug)); ?>">
			    		<?php echo e($category->title); ?>

			    	</a>
			    </li>

			    <ul>

				    <!-- children 1 -->
				    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				        <li style="font-size: 20px;font-weight: 500;">
				        	<a href="<?php echo e(Route('V1.categories.show', $childrenCategory->slug)); ?> ">
				        		<?php echo e($childrenCategory->title); ?>

				        	</a>
				        </li>

			            <ul>

				            <!-- children 2 -->
				            <?php $__currentLoopData = $childrenCategory->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                <li>
			                     	<a href="<?php echo e(Route('V1.categories.show', $childrenCategory->slug)); ?>">
				                     	<?php echo e($childrenCategory->title); ?>

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





<?php echo $__env->make('Api/welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\Larawel-first-task-company-echo\example-app\resources\views/api/categories/categories.blade.php ENDPATH**/ ?>