<?php

namespace EbaySdk;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use Etsy\Services\Order\OrderImportService;
use Etsy\Services\Taxonomy\TaxonomyImportService;

/**
 * Class EbaySdkRouteServiceProvider
 */
class EbaySdkRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('markets/ebay-sdk/test', [
			'uses'       => 'EbaySdk\Controllers\TestController@test',
		]);
	}
}
