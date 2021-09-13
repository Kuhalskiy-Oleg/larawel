@extends('Api/welcome')
@section('content')
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Список категорий</h1>       
    </div>
  </div>
</section>
<div class="album py-5 bg-light">
  <div class="container">        
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

     	<ul>
     		<!-- parent -->
			@foreach ($categories as $category)
			    <li style="font-size: 25px;font-weight: 700;">
			    	<a href="{{ Route('V1.categories.show', $category->slug) }}">
			    		{{ $category->title }}
			    	</a>
			    </li>

			    <ul>

				    <!-- children 1 -->
				    @foreach($category->children as $childrenCategory) 
				        <li style="font-size: 20px;font-weight: 500;">
				        	<a href="{{  Route('V1.categories.show', $childrenCategory->slug) }} ">
				        		{{ $childrenCategory->title }}
				        	</a>
				        </li>

			            <ul>

				            <!-- children 2 -->
				            @foreach($childrenCategory->children as $childrenCategory)
				                <li>
			                     	<a href="{{  Route('V1.categories.show', $childrenCategory->slug) }}">
				                     	{{ $childrenCategory->title }}
				                    </a>
				                </li>
				            @endforeach

			            </ul>
				    @endforeach

			    </ul>	
			@endforeach

		</ul>

    </div>
  </div>
</div>


@endsection




