@extends('Api/welcome')
@section('content')
<div class="container">
   <section class="section_form_author">

      <!-- form sort category -->
      <form id="form_one" action="{{ Route('V1.articles.index') }}" method="POST">

         @csrf

         <div class="align_center">
            <input type="submit" value="Cортировать">
            <select name="categories">

               <!-- value $sort from url -->
               @php 
                  $sort = isset($_GET['sort']) ? $_GET['sort'] : null; 
               @endphp

               <!-- если сортировка выбрана то убираем атрибут selected чтобы при перезагрузки страницы не подставлялось значение all вместо выбранной ранее сортировки-->
               @if (isset($sort)) 
                  <option value="all">Все категории</option>
               @else
                  <option value="all" selected>Все категории</option>
               @endif

               <!-- parents -->
               @foreach ($categoryArticle as $value)

                  @if ($value->slug == $sort)
                     <option value="{{ $value->slug }}" selected>{{ $value->title }}</option>
                  @else
                     <option value="{{ $value->slug }}">{{ $value->title }}</option>
                  @endif

                     <!-- children 1 -->
                     @foreach ($value->children as $value)

                        @if ($value->slug == $sort)
                           <option value="{{ $value->slug }}" selected>{{ $value->title }}</option>
                        @else
                           <option value="{{ $value->slug }}">{{ $value->title }}</option>
                        @endif

                        <!-- children 2 -->
                        @foreach ($value->children as $value)

                           @if ($value->slug == $sort)
                              <option value="{{ $value->slug }}" selected>{{ $value->title }}</option>
                           @else
                              <option value="{{ $value->slug }}">{{ $value->title }}</option>
                           @endif

                        @endforeach

                  @endforeach

               @endforeach

            </select>
         </div>
      </form>

      <!-- form search -->
      <form id="form_two" action="{{ Route('V1.articles.index') }}" method="POST">

         @csrf

         <input type="text" name="titleArticle" placeholder="Название статьи" value="{{ $_GET['titleArticle'] ?? ''}}">
         <input type="text" name="nameAuthor" placeholder="Имя автора" value="{{ $_GET['nameAuthor'] ?? ''}}">
         <input type="text" name="titleCategory" placeholder="Категория статьи" value="{{ $_GET['titleCategory'] ?? ''}}">
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
     
         @foreach ($articles as $value)
            <div class="col" style="width: 100%;max-width: 1000px;margin-left: auto;margin-right: auto;">
               <div class="card shadow-sm">

                  <div class="home_link_author_name">
                     <a class="card_header" 
                     href="{{ Route('V1.articles.show', $value->slug) }}">
                        {{ $value->title }}
                     </a>
                  </div>

                  <a class="card_header" href="{{ Route('V1.articles.show', $value->slug) }}">
                     <img style="display: block;width: 100%;height: 200px" src="{{ $value->img }}" alt="">
                  </a>

                  <div class="card-body">
                     <p class="card-text">Анонс статьи: {{ $value->announcement }}</p>
                     <p class="card-text">Автор статьи: 
                        <a class="author" href="{{ Route('V1.authors.show', $value->authorArticle->slug) }}"> 
                           {{$value->authorArticle->name}}
                        </a>
                     </p>
                     <p class="card-text">Категория статьи: 
                        <a class="author" href="{{ Route('V1.categories.show', $value->categoryArticle->slug) }}">                
                           {{ $value->categoryArticle->title }}
                        </a>
                     </p>
                     <p class="card-text">Дата публикации статьи: {{ $value->created_at }}</p>
                  </div>

              </div>
            </div>
         @endforeach

         <div class="paginate">
            {{ $articles->appends(request()->query())->links("pagination::bootstrap-4") }}
         </div>

      </div>
   </div>
</div>

<script type="text/javascript">

   $( () => {
      // СОРТИРОВКА
      $('#form_one').submit( (e) => {
         e.preventDefault();
         // забираем выбранную сортировку
         let select_value = $("select[name='categories']").val();
         // забираем значение (номер страницы на которой мы находимся) активного элемента пагинации
         let number_page = $('.pagination li.active span').text();
         // забираем значения полей для поиска
         let nameAuthor = $("input[name='nameAuthor']").val();
         let titleArticle = $("input[name='titleArticle']").val();
         let titleCategory = $("input[name='titleCategory']").val();
         $.ajax({
            url: "{{ Route('V1.articles.index') }}",
            type: 'GET',
            dataType: "html",
            contentType: "text",
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { 
               sort : select_value,  
               page : number_page, 
               nameAuthor : nameAuthor,  
               titleArticle : titleArticle, 
               titleCategory : titleCategory, 
            },
            success: (data) => {
               $('#row_ajax').html(data);
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
                           `&sort=${select_value}` + 
                           `&nameAuthor=${nameAuthor}` +
                           `&titleArticle=${titleArticle}` +
                           `&titleCategory=${titleCategory}` +
                           `&page=${number_page}` 
                  ;
                  //записываем новый адрес в адресную строку
                  history.pushState({}, '', newUrl);
               }    
            },
            error: (data) => {
               console.log(data)               
            }
         });        
      });


     // ПАГИНАЦИЯ
     $(document).on('click', 'a.page-link', function (e) {
         e.preventDefault();
         // забираем выбранную сортировку
         let select_value = $("select[name='categories']").val(); 
         // разбиваем ссылку (на котрую был произведен клик) с url адресом на две части по делителю (page=) и забираем вторую часть строки [1]
         let number_page = $(this).attr('href').split('page=')[1];
         // забираем значения полей для поиска
         let nameAuthor = $("input[name='nameAuthor']").val();
         let titleArticle = $("input[name='titleArticle']").val();
         let titleCategory = $("input[name='titleCategory']").val();
         // забираем ссылку url той кнопки по которой нажали
         let url_from_page = $(this).attr('href');
         $.ajax({
            url: "{{ Route('V1.articles.index') }}",
            type: 'GET',
            dataType: "html",
            contentType: "text",
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { 
               sort : select_value,  
               page : number_page, 
               nameAuthor : nameAuthor,  
               titleArticle : titleArticle, 
               titleCategory : titleCategory, 
            },
            success: (data) => {
               // добавляем в поисковую url строку параметры чтобы сортировка не сбивалась при перезагрузке страницы 
               // записываем новый адрес в адресную строку , который взяли по кнопки пагинации по которой был клик
               history.pushState({}, '', url_from_page);
               $('#row_ajax').html(data);
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
         // забираем выбранную сортировку
         let select_value = $("select[name='categories']").val(); 
         // забираем значения полей для поиска
         let nameAuthor = $("input[name='nameAuthor']").val();
         let titleArticle = $("input[name='titleArticle']").val();
         let titleCategory = $("input[name='titleCategory']").val();
         $.ajax({
            url: "{{ Route('V1.articles.index') }}",
            type: 'GET',
            contentType: "text",
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
               sort : select_value, 
               page : number_page, 
               nameAuthor : nameAuthor,  
               titleArticle : titleArticle, 
               titleCategory : titleCategory, 
            },
            success: (data) => {
               $('#row_ajax').html(data);
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
                           `&sort=${select_value}` + 
                           `&nameAuthor=${nameAuthor}` +
                           `&titleArticle=${titleArticle}` +
                           `&titleCategory=${titleCategory}` +
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
                  // перебираем ассоциативный массив с ошибками
                  $(message_errors).each(function(key, data){
                     //перебираем вложенный ассоциативный массив с ошибками
                     $.each(data, function(index,value) {
                        console.log('index = ' + index +'\n'+ 'value = ' + value);
                        message_errors_array.push(value)  
                     });
                  });
                  // выводим сообщения с ошибками
                  alert(message_errors_array.join('\n'))
                  // удаляем значения полей ввода чтобы пагинация не глючила
                  $("input[name='nameAuthor']").val('');
                  $("input[name='titleArticle']").val('');
                  $("input[name='titleCategory']").val('');
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
                     // определяем url строку до знака ?
                     let positionParametersUrl = location.pathname.indexOf('?');
                     let url = location.pathname.substring(positionParametersUrl,location.pathname.length);                
                     let newUrl = url + '?' ;
                     newUrl += 
                              `&sort=${select_value}` + 
                              `&nameAuthor=${nameAuthor}` +
                              `&titleArticle=${titleArticle}` +
                              `&titleCategory=${titleCategory}` +
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
@endsection
<!-- CОРТИРОВКА И ПАГИНАЦИЯ ДОЛЖНЫ РАБОТАТЬ В ПАРЕ ДЛЯ ПРАВИЛЬНОЙ РАБОТЫ -->



