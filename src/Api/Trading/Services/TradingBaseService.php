<?php

namespace EbaySdk\Api\Trading\Services;

use Plenty\Modules\Market\Ebay\Api\Services\BaseWsdlService;

/**
 * Base class for the Trading service.
 */
class TradingBaseService extends BaseWsdlService
{
	/**
	 * HTTP header constant. The API version your application supports.
	 */
	const HDR_API_VERSION = 'X-EBAY-API-COMPATIBILITY-LEVEL';

	/**
	 * HTTP header constant. Your application ID.
	 */
	const HDR_APP_ID = 'X-EBAY-API-APP-NAME';

	/**
	 * HTTP header constant. Your certificate ID.
	 */
	const HDR_CERT_ID = 'X-EBAY-API-CERT-NAME';

	/**
	 * HTTP header constant. Your developer ID.
	 */
	const HDR_DEV_ID = 'X-EBAY-API-DEV-NAME';

	/**
	 * HTTP header constant. The name of the operation you are calling.
	 */
	const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';

	/**
	 * HTTP header constant. The site ID of the eBay site the request is for.
	 */
	const HDR_SITE_ID = 'X-EBAY-API-SITEID';

	/**
	 * @var array
	 */
	protected static $endPoints = [
		'sandbox' => 'https://api.sandbox.ebay.com/ws/api.dll',
		'production' => 'https://api.ebay.com/ws/api.dll'
	];

	/**
	 * @param array $config Configuration option values.
	 */
	public function __construct(array $config)
	{
		parent::__construct($config);
	}

	/**
	 * Returns definitions for each configuration option that is supported.
	 *
	 * @return array An associative array of configuration definitions.
	 */
	public static function getConfigDefinitions()
	{
		$definitions = parent::getConfigDefinitions();

		return $definitions + [
				'apiVersion' => [
					'valid' => ['string'],
					'default' => TradingService::API_VERSION,
					'required' => true
				],
				'siteId' => [
					'valid' => ['int', 'string'],
					'required' => true
				]
			];
	}

	/**
	 * Builds the needed eBay HTTP headers.
	 *
	 * @param string $operationName The name of the operation been called.
	 *
	 * @return array An associative array of eBay http headers.
	 */
	protected function getEbayHeaders(string $operationName):array
	{
		$headers = [];

		$headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
		$headers[self::HDR_OPERATION_NAME] = $operationName;
		$headers[self::HDR_SITE_ID] = $this->getConfig('siteId');

		$headers[self::HDR_APP_ID] = null;
		$headers[self::HDR_CERT_ID] = null;
		$headers[self::HDR_DEV_ID] = null;

		return $headers;
	}
}
