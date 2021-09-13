<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/documentation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.default.api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/oauth2-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.default.oauth2_callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/V1/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CpO1VUFUG9gjleHj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/V1/articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V1.articles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V1.articles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/V1/authors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V1.authors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V1.authors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/V1/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V1.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V1.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/V2/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eG2r7k9INIF5Hqah',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/V2/articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V2.articles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V2.articles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/V2/authors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V2.authors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V2.authors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/V2/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V2.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V2.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/docs(?|(?:/([^/]++))?(*:29)|/asset/([^/]++)(*:51))|/api/V(?|1/(?|a(?|rticles/([^/]++)(?|(*:96))|uthors/([^/]++)(?|(*:122)))|categories/([^/]++)(?|(*:154)))|2/(?|a(?|rticles/([^/]++)(?|(*:192))|uthors/([^/]++)(?|(*:219)))|categories/([^/]++)(?|(*:251)))))/?$}sDu',
    ),
    3 => 
    array (
      29 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.default.docs',
            'jsonFile' => NULL,
          ),
          1 => 
          array (
            0 => 'jsonFile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.default.asset',
          ),
          1 => 
          array (
            0 => 'asset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      96 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V1.articles.show',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V1.articles.update',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'V1.articles.destroy',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V1.authors.show',
          ),
          1 => 
          array (
            0 => 'author',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V1.authors.update',
          ),
          1 => 
          array (
            0 => 'author',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'V1.authors.destroy',
          ),
          1 => 
          array (
            0 => 'author',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V1.categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V1.categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'V1.categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V2.articles.show',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V2.articles.update',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'V2.articles.destroy',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V2.authors.show',
          ),
          1 => 
          array (
            0 => 'author',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V2.authors.update',
          ),
          1 => 
          array (
            0 => 'author',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'V2.authors.destroy',
          ),
          1 => 
          array (
            0 => 'author',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'V2.categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'V2.categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'V2.categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        3 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'l5-swagger.default.api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/documentation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'L5Swagger\\Http\\Middleware\\Config',
        ),
        'l5-swagger.documentation' => 'default',
        'as' => 'l5-swagger.default.api',
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@api',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@api',
        'namespace' => 'L5Swagger',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'l5-swagger.default.docs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs/{jsonFile?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'L5Swagger\\Http\\Middleware\\Config',
        ),
        'l5-swagger.documentation' => 'default',
        'as' => 'l5-swagger.default.docs',
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@docs',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@docs',
        'namespace' => 'L5Swagger',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'l5-swagger.default.asset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs/asset/{asset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'L5Swagger\\Http\\Middleware\\Config',
        ),
        'l5-swagger.documentation' => 'default',
        'as' => 'l5-swagger.default.asset',
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerAssetController@index',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerAssetController@index',
        'namespace' => 'L5Swagger',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'l5-swagger.default.oauth2_callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/oauth2-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'L5Swagger\\Http\\Middleware\\Config',
        ),
        'l5-swagger.documentation' => 'default',
        'as' => 'l5-swagger.default.oauth2_callback',
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@oauth2Callback',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@oauth2Callback',
        'namespace' => 'L5Swagger',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CpO1VUFUG9gjleHj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V1/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@jUGSpD6ZhBegtmfSgxyN9OHQdru98T9ZBw+BKNtzms0=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000377108a700000000415878ab";}}',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1',
        'where' => 
        array (
        ),
        'as' => 'generated::CpO1VUFUG9gjleHj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.articles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V1/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.articles.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@index',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.articles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/V1/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.articles.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.articles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V1/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.articles.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@show',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.articles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/V1/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.articles.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@update',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.articles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/V1/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.articles.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ArticleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.authors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V1/authors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.authors.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@index',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.authors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/V1/authors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.authors.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.authors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V1/authors/{author}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.authors.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@show',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.authors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/V1/authors/{author}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.authors.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@update',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.authors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/V1/authors/{author}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.authors.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthorController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V1/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.categories.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/V1/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.categories.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V1/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.categories.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@show',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/V1/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.categories.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@update',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V1.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/V1/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V1.categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/V1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eG2r7k9INIF5Hqah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V2/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":291:{@75Qg6KRMnH99ejc1LDEkg67ZZ9DK9iy0O6xsaSOLaNg=.a:5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000377108a300000000415878ab";}}',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2',
        'where' => 
        array (
        ),
        'as' => 'generated::eG2r7k9INIF5Hqah',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.articles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V2/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.articles.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@index',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.articles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/V2/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.articles.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.articles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V2/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.articles.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@show',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.articles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/V2/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.articles.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@update',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.articles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/V2/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.articles.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\ArticleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.authors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V2/authors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.authors.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@index',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.authors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/V2/authors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.authors.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.authors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V2/authors/{author}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.authors.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@show',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.authors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/V2/authors/{author}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.authors.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@update',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.authors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/V2/authors/{author}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.authors.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\AuthorController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V2/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.categories.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/V2/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.categories.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/V2/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.categories.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@show',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/V2/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.categories.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@update',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'V2.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/V2/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'V2.categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\CategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/V2/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
