@foreach ($response['articles'] as $value)
  <div class="col" style="width: 100%;max-width: 1000px;margin-left: auto;margin-right: auto;">
    <div class="card shadow-sm">
      <div class="home_link_author_name">
        <a class="card_header" 
           href="{{ Route('V1.articles.show', $value->slug) }}">
           {{ $value->title }}
        </a>
      </div>
      <a class="card_header" 
         href="{{ Route('V1.articles.show', $value->slug) }}">
         <img style="display: block;width: 100%;height: 200px" src="{{ $value->img }}" alt="">
      </a>
      <div class="card-body">
        <p class="card-text">Анонс статьи: {{ $value->announcement }}</p>
        <p class="card-text">Автор статьи: 
          <a class="author" 
             href="{{ Route('V1.authors.show', $value->authorArticle->slug) }}">
             {{$value->authorArticle->name}}
          </a>
        </p>
        <p class="card-text">Категория статьи: 
          <a class="author" 
             href="{{ Route('V1.categories.show', $value->categoryArticle->slug) }}">
             {{ $value->categoryArticle->title }}
          </a>
        </p>
        <p class="card-text">Дата публикации статьи: {{ $value->created_at }}</p>
      </div>
    </div>
  </div>
@endforeach

<div class="paginate">
  {{ $response['pagination'] }}
</div>