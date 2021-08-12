@extends('../welcome')
@section('content')
<section  class="py-5 text-center container">
	<div class="row py-lg-5">
		<div class="col-lg-6 col-md-8 mx-auto">
			<h1 class="fw-light">результаты поиска:</h1>       
		</div>
	</div>
</section>
<div class="album py-5 bg-light">
  <div class="container">       
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
     
      @foreach($search_author as $value)
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
   </div>
  </div>
</div>
@endsection











