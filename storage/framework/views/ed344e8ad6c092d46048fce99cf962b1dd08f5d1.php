<?php $__env->startSection('content'); ?>
<div class="container">
<section class="section_form_author">
  <form id="form_one" action="/articles" method="post">
      <?php echo csrf_field(); ?>
      <div class="align_center">
        <input type="submit" value="Cортировать">
        <select name="categories">
          <option value="all" selected>Все категории</option>
          <?php $__currentLoopData = $categoryArticle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($value->name); ?>"><?php echo e($value->name); ?></option>
              <?php $__currentLoopData = $value->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($value->name); ?>"><?php echo e($value->name); ?></option>
                <?php $__currentLoopData = $value->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value->name); ?>"><?php echo e($value->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
  </form>
  <form action="<?php echo e(Route('search_article')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <input type="text" name="name_article" placeholder="Название статьи">
      <input type="text" name="FIO" placeholder="Имя автора">
      <input type="text" name="name" placeholder="Категория статьи">
      <input type="submit" value="Поиск">
  </form>
</section>
<section id="sec" class="py-5 text-center">
  <div  class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Список статей</h1>       
    </div>
  </div>
</section>
</div>
<div class="album py-5 bg-light">
  <div class="container ajax">         
    <div id="row_ajax" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
     
      <?php $__currentLoopData = $sum_table_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col" style="width: 100%;max-width: 1000px;margin-left: auto;margin-right: auto;">
        <div class="card shadow-sm">
          <div class="home_link_author_name">
            <a class="card_header" 
               href="<?php echo e(Route('open_article', ['slug' => $value->slug])); ?>">
               <?php echo e($value->name_article); ?>

            </a>
          </div>
          <a class="card_header" 
             href="<?php echo e(Route('open_article', ['slug' => $value->slug])); ?>">
             <img style="display: block;width: 100%;height: 200px" src="<?php echo e($value->image); ?>" alt="">
          </a>
          <div class="card-body">
            <p class="card-text"><?php echo e($value->announcement); ?></p>
            <p class="card-text">Автор статьи: 
              <a class="author" 
                 href="<?php echo e(Route('open_author', ['slug' => $value->authorArticle->slug])); ?>">
                 <?php echo e($value->authorArticle->FIO); ?>

              </a>
            </p>
            <p class="card-text">Категория статьи: 
              <a class="author" 
                 href="<?php echo e(Route('open_category', ['slug' => $value->categoryArticle->slug])); ?>">
                 <?php echo e($value->categoryArticle->name); ?>

              </a>
            </p>
            <p class="card-text">Дата публикации статьи: <?php echo e($value->created_at); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <div class="paginate">
        <style>
            div.hidden{
                flex-direction: column;
            }
            span.relative.z-0.inline-flex.shadow-sm.rounded-md{
                display: flex;
            }
            div.flex.justify-between.flex-1{
                display: none;
            }
            div.hidden{
                display: flex;
            }
            span[aria-current]{
                display: flex;
            }
            span[aria-disabled]{
                display: flex;
            }
        </style>
        <?php echo e($sum_table_articles->appends(request()->query())->links("pagination::bootstrap-4")); ?>

     </div>

    </div>
  </div>
</div>
<script type="text/javascript">
  $(()=>{

    //_____________________________СОРТИРОВКА
    $('#form_one').submit((e)=>{
      e.preventDefault();

      let select_value = $("select[name='categories']").val();

      //забираем значение (номер страницы на которой мы находимся) активного элемента пагинации
      let number_page = $('.pagination li.active span').text();

      let select_value_obj = {
        "sort" : select_value,
        "page"  : number_page
      }



      
      $.ajax({
        url: "<?php echo e(Route('sort_article')); ?>",
        type: 'POST',
        dataType: "html",//dataType  какого ответа ожидать?
        contentType: "application/json",//contentType- это HTTP- заголовок, отправляемый на сервер, определяющий конкретный формат отправляемых данных.
        //при отправке всех запросов мы должны отправлять такие заголовки для безопасности
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        data: JSON.stringify({ 
          sort : select_value_obj.sort,  
          page : select_value_obj.page, 
        }),

        success:(data)=>{

          let positionParametersUrl = location.pathname.indexOf('?');
          let url = location.pathname.substring(positionParametersUrl,location.pathname.length);
          let newUrl = url + '?' ;
          newUrl += `sort=${select_value}` + `&page=${number_page}`;
          history.pushState({}, '', newUrl);

          $('.container.ajax').html(data);

        }
      });
      
      
    });



  //_____________________________ПАГИНАЦИЯ
  $(document).on('click', 'a.page-link', function(e){
      e.preventDefault();
      let select_value = $("select[name='categories']").val();

      //разбиваем ссылку (на котрую был произведен клик) с url адресом на две части по делителю (page=) и забираем вторую часть строки [1]
      let number_page = $(this).attr('href').split('page=')[1];

      let select_value_obj = {
        "sort" : select_value,
        "page"  : number_page
      }

      $.ajax({
        url: "<?php echo e(Route('sort_article')); ?>",
        type: 'POST',
        dataType: "html",//dataType  какого ответа ожидать?
        contentType: "application/json",//contentType- это HTTP- заголовок, отправляемый на сервер, определяющий конкретный формат отправляемых данных.
        //при отправке всех запросов мы должны отправлять такие заголовки для безопасности
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        data: JSON.stringify({ 
          sort : select_value_obj.sort,  
          page : select_value_obj.page, 
        }),

        success:(data)=>{

          //добавляем в поисковую url строку параметры чтобы сортировка не сбивалась при перезагрузке страницы 
          let positionParametersUrl = location.pathname.indexOf('?');
          let url = location.pathname.substring(positionParametersUrl,location.pathname.length);
          let newUrl = url + '?' ;
          newUrl += `sort=${select_value}` + `&page=${number_page}`;

          //записываем новый адрес в адресную строку
          history.pushState({}, '', newUrl);


          $('.container.ajax').html(data);
        }

      });

    });

    

  });
</script>
<?php $__env->stopSection(); ?>




<!-- CОРТИРОВКА И ПАГИНАЦИЯ ДОЛЖНЫ РАБОТАТЬ В ПАРЕ ДЛЯ ПРАВИЛЬНОЙ РАБОТЫ -->
<?php echo $__env->make('../welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\Larawel-first-task-company-echo\example-app\resources\views/articles/articles.blade.php ENDPATH**/ ?>