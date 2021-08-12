@extends('../welcome')
@section('content')
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">результаты поиска:</h1>       
    </div>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">         
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
     
      @foreach($search_article as $value)
      <div class="col" style="width: 100%;max-width: 1000px;margin-left: auto;margin-right: auto;">
        <div class="card shadow-sm">
          <div class="home_link_author_name">
	          <a class="card_header" 
	             href="{{Route('open_article', ['slug' => $value->slug])}}">
	             {{$value->name_article}}
	          </a>
          </div>
          <a class="card_header" 
             href="{{Route('open_article', ['slug' => $value->slug])}}">
             <img style="display: block;width: 100%;height: 200px" src="{{$value->image}}" alt="">
          </a>
          <div class="card-body">
            <p class="card-text">{{$value->announcement}}</p>
            <p class="card-text">Автор статьи: 
              <a class="author" 
                 href="{{Route('open_author', ['slug' => $value->authorArticle->slug])}}">
                 {{$value->authorArticle->FIO}}
              </a>
            </p>
            <p class="card-text">Категория статьи: 
              <a class="author" 
                 href="{{Route('open_category', ['slug' => $value->categoryArticle->slug])}}">
                 {{$value->categoryArticle->name}}
              </a>
            </p>
            <p class="card-text">Дата публикации статьи: {{$value->created_at}}</p>
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
      {{$search_article->links()}}
    </div>
  </div> 
</div>
@endsection

