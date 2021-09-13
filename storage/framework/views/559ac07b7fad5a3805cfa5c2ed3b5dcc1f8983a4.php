
<?php $__env->startSection('content'); ?>
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Автор</h1>       
    </div>
  </div>
</section>
<div class="album py-5 bg-light">
  <div class="container">
        <style>
            h2{
                width: 100%;
                text-align: center;
                margin-bottom: 25px;
            }
            span{
                display: inline-block;
                width: 100%;
            }
            .block{
                display: flex;
                flex-direction: column;
                width: 100%;
                margin-top: 25px;
            }
        </style>
        <h2><?php echo e($author->name); ?></h2>
        <p style="text-indent: 30px;"><?php echo e($author->biography); ?></p >
        <div class="block">
            <span>Год рождения: <b><?php echo e($author->date_of_birth); ?></b></span>
            <span>Дата регистрации : <b><?php echo e($author->created_at); ?></b></span>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('Api/welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\Larawel-first-task-company-echo\example-app\resources\views/api/authors/author_show.blade.php ENDPATH**/ ?>