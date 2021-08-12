@extends('../welcome')
@section('content')
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Список авторов</h1>       
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
            .img_card{
                display: block;
                width: 100px;
                height: 100px;
            }
        </style>
        <img class="img_card" src="{{$author->avatar}}" alt="">              
        <h2>{{$author->FIO}}</h2>
        <p style="text-indent: 30px;">{{$author->biography}}</p >
        <div class="block">
            <span>Год рождения: <b>{{$author->year_of_birth}}</b></span>
            <span>Дата регистрации : <b>{{$author->created_at}}</b></span>
        </div>
    </div>
</div>
@endsection


