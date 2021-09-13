<!-- если придет коллекция объектов -->
@if ($response['authors']['type'] == 'collection') 

  @foreach ($response['authors']['collection'] as $value)

    <div class="col" >
      <div class="card shadow-sm">
        <div class="card_linl_img">
          <img class="img_card" src="{{ $value->avatar }}" alt="">
          <div class="home_link_author_name">
            <a class="card_header" 
               href="{{ Route('V1.authors.show', $value->slug) }}">
               {{ $value->name }}
            </a>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Дод рождения: {{ $value->date_of_birth }}</p>
          <p class="card-text">Дата регистрации: {{ $value->created_at }}</p>
        </div>
      </div>
    </div>

  @endforeach

  <div class="paginate">
    {{ $response['pagination'] }}
  </div>

<!-- если придет один объект -->
@elseif ($response['authors']['type']  == 'resource') 

  <div class="col" >
    <div class="card shadow-sm">
    	<div class="card_linl_img">
    		<img class="img_card" src="{{ $response['authors']['resource']['avatar'] }}" alt="">
    		<div class="home_link_author_name">
          <a class="card_header" 
             href="{{ Route('V1.authors.show', $response['authors']['resource']['slug']) }}">
             {{ $response['authors']['resource']['name'] }}
          </a>
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Дод рождения: {{ $response['authors']['resource']['date_of_birth'] }}</p>
        <p class="card-text">Дата регистрации: {{ $response['authors']['resource']['created_at'] }}</p>
      </div>
    </div>
  </div>

@endif


