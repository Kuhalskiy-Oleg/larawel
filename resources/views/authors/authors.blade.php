@extends('../welcome')
@section('content')
<div class="container">
<section class="section_form_author author">
	<form action="{{Route('search_author')}}" method="post">
		@csrf
		<input type="text" name="FIO" placeholder="Введите ФИО автора">
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
     
      @foreach($authors as $value)
        <div class="col" >
          <div class="card shadow-sm">
          	<div class="card_linl_img">
          		<img class="img_card" src="{{$value->avatar}}" alt="">
          		<div class="home_link_author_name">
		            <a class="card_header" 
		               href="{{Route('authors_open_author', ['slug' => $value->slug])}}">
		               {{$value->FIO}}
		            </a>
	            </div>
            </div>
            <div class="card-body">
              <p class="card-text">Дод рождения: {{$value->year_of_birth}}</p>
              <p class="card-text">Дата регистрации: {{$value->created_at}}</p>
            </div>
          </div>
        </div>
        @endforeach

    </div>
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
      {{$authors->links()}}
   </div>
  </div>
</div>
@endsection











