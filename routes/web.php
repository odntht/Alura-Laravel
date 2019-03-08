 	<?php
		
		/*
		 * |--------------------------------------------------------------------------
		 * | Web Routes
		 * |--------------------------------------------------------------------------
		 * |
		 * | Here is where you can register web routes for your application. These
		 * | routes are loaded by the RouteServiceProvider within a group which
		 * | contains the "web" middleware group. Now create something great!
		 * |
		 */
		Route::get ( '/', function () {
			return '<h1>Primeira logica com laravel!"</h1>'; //rota que direciona pro Index.
		} );
		
		Route::get ( '/produtos', 'ProdutoController@lista' ); //Rota que direciona pras listas de produtos
		Route::get ( '/produtos/mostra/{id}', 'ProdutoController@mostra' ); //Rota que direciona pros detalhes dos produtos.
		Route::get ( '/produtos/novo', 'ProdutoController@novo' ); //Rota que direciona pro form de add produto.
		Route::get ( '/produtos/novo', 'ProdutoController@novo' ); //Rota que direciona pros detalhes dos produtos.