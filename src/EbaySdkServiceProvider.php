<?php

namespace EbaySdk;

use Plenty\Plugin\ServiceProvider;

/**
 * Class EbaySdkServiceProvider
 */
class EbaySdkServiceProvider extends ServiceProvider
{
	/**
	 * @return void
	 */
	public function register()
	{
		$this->getApplication()->register(EbaySdkRouteServiceProvider::class);
	}

	public function boot()
	{
	}
}
