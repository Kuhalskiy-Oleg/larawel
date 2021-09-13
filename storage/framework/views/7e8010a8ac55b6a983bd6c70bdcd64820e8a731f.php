
<?php $__env->startSection('content'); ?>
<div class="container">
<section class="section_form_author author">
	<form id="form_two" action="<?php echo e(Route('V1.authors.index')); ?>" method="post">
		<?php echo csrf_field(); ?>
		<input type="text" name="nameAuthor" placeholder="Введите Имя автора">
		<input type="submit" value="Поиск">
	</form>
</section>
<section id="sec" class="py-5 text-center">
  <div  class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Список авторов</h1>       
    </div>
  </div>
</section>
</div>
<div class="album py-5 bg-light">
   <div class="container">
      <?php 
         $authorsCollection = $authors['collection'] ?? null;
         $authorsResource = $authors['resource'] ?? null;
      ?>
      <div id="render_ajax" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

         <!-- если коллекция объектов с авторами -->
         <?php if(isset($authorsCollection)): ?>

            <?php $__currentLoopData = $authors['collection']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
               <?php echo e($authorsCollection->appends(request()->query())->links("pagination::bootstrap-4")); ?>

            </div>

         <!-- если один объект с автором -->
         <?php elseif(isset($authorsResource)): ?>

            <div class="col" >
               <div class="card shadow-sm">
                  <div class="card_linl_img">
                     <img class="img_card" src="<?php echo e($authorsResource['avatar']); ?>" alt="">
                     <div class="home_link_author_name">
                        <a class="card_header" 
                           href="<?php echo e(Route('V1.authors.show', $authorsResource['slug'])); ?>">
                           <?php echo e($authorsResource['name']); ?>

                        </a>
                     </div>
                  </div>
                  <div class="card-body">
                     <p class="card-text">Дод рождения: <?php echo e($authorsResource['date_of_birth']); ?></p>
                     <p class="card-text">Дата регистрации: <?php echo e($authorsResource['created_at']); ?></p>
                  </div>
               </div>
            </div>

         <?php endif; ?>

      </div>
   </div>
</div>

<script type="text/javascript">

   $( () => {
     // ПАГИНАЦИЯ
     $(document).on('click', 'a.page-link', function (e) {
         e.preventDefault();
         // разбиваем ссылку (на котрую был произведен клик) с url адресом на две части по делителю (page=) и забираем вторую часть строки [1]
         let number_page = $(this).attr('href').split('page=')[1];
         // забираем значения полей для поиска
         let nameAuthor = $("input[name='nameAuthor']").val();
         //console.log(nameAuthor)
         // забираем ссылку url той кнопки по которой нажали
         let url_from_page = $(this).attr('href');
         $.ajax({
            url: "<?php echo e(Route('V1.authors.index')); ?>",
            type: 'GET',
            dataType: "html",// dataType  какого ответа ожидать?
            contentType: "text",//contentType- это HTTP- заголовок, отправляемый на сервер, определяющий конкретный формат отправляемых данных.
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {   
               page : number_page, 
               nameAuthor : nameAuthor,  
            },
            success: (data) => {
               console.log(data)
               //добавляем в поисковую url строку параметры чтобы сортировка не сбивалась при перезагрузке страницы 
               //записываем новый адрес в адресную строку , который взяли по кнопки пагинации по которой был клик
               history.pushState({}, '', url_from_page);
               $('#render_ajax').html(data);
            },
            error: (data) => {
               console.log(data) 
            }
         });
      });


      // ПОИСК
      $('#form_two').on('submit', (e) => {
         e.preventDefault();
         // забираем значение (номер страницы на которой мы находимся) активного элемента пагинации
         let number_page = $('.pagination li.active span').text(); 
         // забираем значения полей для поиска
         let nameAuthor = $("input[name='nameAuthor']").val();
         //console.log(nameAuthor)
         $.ajax({
            url: "<?php echo e(Route('V1.authors.index')); ?>",
            type: 'GET',
            //dataType: "json/html",//dataType  какого ответа ожидать?
            contentType: "text",//contentType- это HTTP- заголовок, отправляемый на сервер, определяющий конкретный формат отправляемых данных.
            //при отправке всех запросов мы должны отправлять такие заголовки для безопасности
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
               page : number_page, 
               nameAuthor : nameAuthor,  
            },
            success: (data) => {
               console.log(data)
               $('#render_ajax').html(data);
               // забираем елементы пагинации
               let url_from_page = $('.pagination li a');
               // если элементов больше нуля то запишем адрес из ссылка пагинации в url адрес
               if (url_from_page.length > 0) {
                  // забираем url адрес у новых пагинационных ссылок с нужными параметрами строки
                  url_from_page = $(url_from_page).attr('href').split('page=')[0]; 
                  // добавляем к новому url адресу недостоющий параметр &page с номером текущей страницы
                  let newUrl = url_from_page + `page=${number_page}`;
                  // меняем url адрес
                  history.pushState({}, '', newUrl);
               // если элементов меньше нуля то сформируем адрес сами    
               } else {
                  //определяем url строку до знака ?
                  let positionParametersUrl = location.pathname.indexOf('?');
                  let url = location.pathname.substring(positionParametersUrl,location.pathname.length);                
                  let newUrl = url + '?' ;
                  newUrl += 
                           `&nameAuthor=${nameAuthor}` +
                           `&page=${number_page}` 
                  ;
                  //записываем новый адрес в адресную строку
                  history.pushState({}, '', newUrl);
               }
            },
            error: (data) => {
               console.log(data)
               // если число данные не прошли валидацию на сервере
               if( data.status === 422 ) {
                  let message_errors = data.responseJSON.errors;
                  let message_errors_array = []
                  //перебираем ассоциативный массив с ошибками
                  $(message_errors).each(function(key, data){
                     //перебираем вложенный ассоциативный массив с ошибками
                     $.each(data, function(index,value) {
                        console.log('index = ' + index +'\n'+ 'value = ' + value);
                        message_errors_array.push(value)  
                     });
                  });
                  //console.log(message_errors_array)
                  // выводим сообщения с ошибками
                  alert(message_errors_array.join('\n'))
                  // удаляем значения полей ввода чтобы пагинация не глючила
                  $("input[name='nameAuthor']").val('');
                  // забираем елементы пагинации
                  let url_from_page = $('.pagination li a');
                  // если элементов больше нуля то запишем адрес из ссылка пагинации в url адрес
                  if (url_from_page.length > 0) {
                     // забираем url адрес у новых пагинационных ссылок с нужными параметрами строки
                     url_from_page = $(url_from_page).attr('href').split('page=')[0]; 
                     // добавляем к новому url адресу недостоющий параметр &page с номером текущей страницы
                     let newUrl = url_from_page + `page=${number_page}`;
                     // меняем url адрес
                     history.pushState({}, '', newUrl);
                  // если элементов меньше нуля то сформируем адрес сами    
                  } else {
                     //определяем url строку до знака ?
                     let positionParametersUrl = location.pathname.indexOf('?');
                     let url = location.pathname.substring(positionParametersUrl,location.pathname.length);              
                     let newUrl = url + '?' ;
                     newUrl += 
                              `&nameAuthor=${nameAuthor}` +
                              `&page=${number_page}` 
                     ;
                     //записываем новый адрес в адресную строку
                     history.pushState({}, '', newUrl);
                  }
               }                
            }
         });
      });     
   });
</script>
<?php $__env->stopSection(); ?>












<?php echo $__env->make('Api/welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\Larawel-first-task-company-echo\example-app\resources\views/api/authors/authors.blade.php ENDPATH**/ ?>