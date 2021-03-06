<?php

namespace EbaySdk\Api\Order\Services;

use Plenty\Modules\Market\Ebay\Api\Services\BaseRestService;

/**
 * Base class for the Order service.
 */
class OrderBaseService extends BaseRestService
{
	/**
	 * @var array $endPoints The API endpoints.
	 */
	protected static $endPoints = [
		'sandbox'    => 'https://api.sandbox.ebay.com/buy/order',
		'production' => 'https://api.ebay.com/buy/order'
	];

	/**
	 * HTTP header constant. The global ID of the eBay site on which the transaction took place.
	 */
	const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

	/**
	 * HTTP header constant. This header specifies the risk correlation ID, which is provided by a security software
	 * library.
	 */
	const HDR_END_USER_CTX = 'X-EBAY-C-ENDUSERCTX';

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
	public static function getConfigDefinitions():array
	{
		$definitions = parent::getConfigDefinitions();

		return $definitions + [
			'apiVersion'        => [
				'valid'    => ['string'],
				'default'  => OrderService::API_VERSION,
				'required' => true
			],
			'marketplaceId'     => [
				'valid' => ['string']
			],
			'riskCorrelationId' => [
				'valid' => ['string']
			]
		];
	}

	/**
	 * Builds the needed eBay HTTP headers.
	 *
	 * @return array An associative array of eBay HTTP headers.
	 */
	protected function getEbayHeaders():array
	{
		$headers = [];

		// Add optional headers.
		if($this->getConfig('marketplaceId'))
		{
			$headers[ self::HDR_MARKETPLACE_ID ] = $this->getConfig('marketplaceId');
		}

		if($this->getConfig('riskCorrelationId'))
		{
			$headers[ self::HDR_END_USER_CTX ] = 'deviceId=' . $this->getConfig('riskCorrelationId');
		}

		return $headers;
	}
}
