<?php

namespace EbaySdk\Controllers;

use EbaySdk\Api\Trading\Services\TradingService;
use EbaySdk\Api\Trading\Types\GetUserRequestType;
use Plenty\Plugin\Controller;

class TestController extends Controller
{
	public function test()
	{
		/** @var TradingService $tradingService */
		$tradingService = pluginApp(TradingService::class, [
			'config' => [
				'credentialsId' => 21,
			],
		]);

		/** @var GetUserRequestType $getUserRequestType */
		$getUserRequestType = pluginApp(GetUserRequestType::class);


		$tradingService->getUser($getUserRequestType);
	}
}