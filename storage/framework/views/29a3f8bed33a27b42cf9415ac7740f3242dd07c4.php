<!-- если придет коллекция объектов -->
<?php if($response['authors']['type'] == 'collection'): ?> 

  <?php $__currentLoopData = $response['authors']['collection']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="col" >
      <div class="card shadow-sm">
        <div class="card_linl_img">
          <img class="img_card" src="<?php echo e($value->avatar); ?>" alt="">
          <div class="home_link_author_name">
            <a class="card_header" 
               href="<?php echo e(Route('V1.authors.show', $value->slug)); ?>">
               <?php echo e($value->name); ?>

            </a>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Дод рождения: <?php echo e($value->date_of_birth); ?></p>
          <p class="card-text">Дата регистрации: <?php echo e($value->created_at); ?></p>
        </div>
      </div>
    </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <div class="paginate">
    <?php echo e($response['pagination']); ?>

  </div>

<!-- если придет один объект -->
<?php elseif($response['authors']['type']  == 'resource'): ?> 

  <div class="col" >
    <div class="card shadow-sm">
    	<div class="card_linl_img">
    		<img class="img_card" src="<?php echo e($response['authors']['resource']['avatar']); ?>" alt="">
    		<div class="home_link_author_name">
          <a class="card_header" 
             href="<?php echo e(Route('V1.authors.show', $response['authors']['resource']['slug'])); ?>">
             <?php echo e($response['authors']['resource']['name']); ?>

          </a>
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Дод рождения: <?php echo e($response['authors']['resource']['date_of_birth']); ?></p>
        <p class="card-text">Дата регистрации: <?php echo e($response['authors']['resource']['created_at']); ?></p>
      </div>
    </div>
  </div>

<?php endif; ?>


<?php /**PATH C:\OpenServer\domains\Larawel-first-task-company-echo\example-app\resources\views/api/render/authors/render_authors.blade.php ENDPATH**/ ?>