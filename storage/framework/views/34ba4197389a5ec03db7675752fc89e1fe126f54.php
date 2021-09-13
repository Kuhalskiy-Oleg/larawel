<?php $__currentLoopData = $response['articles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col" style="width: 100%;max-width: 1000px;margin-left: auto;margin-right: auto;">
    <div class="card shadow-sm">
      <div class="home_link_author_name">
        <a class="card_header" 
           href="<?php echo e(Route('V1.articles.show', $value->slug)); ?>">
           <?php echo e($value->title); ?>

        </a>
      </div>
      <a class="card_header" 
         href="<?php echo e(Route('V1.articles.show', $value->slug)); ?>">
         <img style="display: block;width: 100%;height: 200px" src="<?php echo e($value->img); ?>" alt="">
      </a>
      <div class="card-body">
        <p class="card-text">Анонс статьи: <?php echo e($value->announcement); ?></p>
        <p class="card-text">Автор статьи: 
          <a class="author" 
             href="<?php echo e(Route('V1.authors.show', $value->authorArticle->slug)); ?>">
             <?php echo e($value->authorArticle->name); ?>

          </a>
        </p>
        <p class="card-text">Категория статьи: 
          <a class="author" 
             href="<?php echo e(Route('V1.categories.show', $value->categoryArticle->slug)); ?>">
             <?php echo e($value->categoryArticle->title); ?>

          </a>
        </p>
        <p class="card-text">Дата публикации статьи: <?php echo e($value->created_at); ?></p>
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="paginate">
  <?php echo e($response['pagination']); ?>

</div><?php /**PATH C:\OpenServer\domains\Larawel-first-task-company-echo\example-app\resources\views/api/render/articles/render_articles.blade.php ENDPATH**/ ?>