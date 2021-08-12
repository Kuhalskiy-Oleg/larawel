@extends('../welcome')
@section('content')
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Список новостей</h1>       
    </div>
  </div>
</section>
<div class="album py-5 bg-light">
  <div class="container">
        <style>
            h1{
                width: 100%;
                text-align: center;
            }
            .home_category{
                display: flex;
                align-items: flex-start;
            }
            span{
                font-size: 15px;
                color: black;
            }
            .a{  
                position: relative;
                margin-right: 25px;
            }
            .a:after{
                display: block;
                content: '->';
                position: absolute;
                top: 0;
                right: -20px;
            }
            .a:last-child:after{
                display: none;
                content: ''; 
            }
            a:hover{
                text-decoration: underline;
            }
            ul{
                display: inline-block;
                margin: 0;
                padding-inline-start: 25px;
            }
            
            .two{
                text-decoration: underline;
                font-weight: 700;
            }
            h2{
                width: 100%;
                text-align: center;
                margin-bottom: 25px;
            }
        </style>
        <h2>{{$category->name}}</h2>
        <p style="text-indent: 30px;">{{$category->description}}</p >
        <?php 
            $array_parents_category = [];
            foreach ($parents_category as $value) {
                $array_parents_category[] = $value->name;
            }
            $parents_category_revers = array_reverse($array_parents_category);
        ?>
        <div class="home_category">

        @foreach($parents_category_revers as $cat)
        <span class="one a">{{$cat}}</span>
        @endforeach 

        <span class="two a">{{$category->name}}</span>
        
        @if(count($category->children) > 1)
        <ul>
        @foreach($category->children as $cat)
            <li><span class="three">{{$cat->name}}</span></li>
            @if(count($cat->children) > 1)
                <ul>
            @foreach($cat->children as $cat)
                    <li><span class="three">{{$cat->name}}</span></li>
            @endforeach
                </ul>
            @endif
        @endforeach 
        </ul>
        @endif
        
        </div>
    </div>
</div>
@endsection





                  





                
