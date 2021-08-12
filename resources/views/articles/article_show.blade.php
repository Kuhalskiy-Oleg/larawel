@extends('../welcome')
@section('content')
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Список cтатей</h1>       
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
        <h2>{{$sum_table_articles->name_article}}</h2>
        <p style="text-indent: 30px;">{{$sum_table_articles->text}}</p >
        <div class="block">
            <span>Автор статьи: <b>{{$sum_table_articles->authorArticle->FIO}}</b></span>
            <span>Категория статьи: <b>{{$sum_table_articles->categoryArticle->name}}</b></span>
            <span>Дата создания статьи: <b>{{$sum_table_articles->created_at}}</b></span>
        </div>
    </div>
</div>
@endsection

