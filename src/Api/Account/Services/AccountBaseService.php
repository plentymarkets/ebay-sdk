<?php
namespace EbaySdk\Api\Account\Services;

use Plenty\Modules\Market\Ebay\Api\Services\BaseRestService;

/**
 * Base class for the Account service.
 */
class AccountBaseService extends BaseRestService
{
	/**
	 * HTTP header constant. The global ID of the eBay site on which the transaction took place.
	 */
	const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

	/**
	 * @var array $endPoints The API endpoints.
	 */
	protected static $endPoints = [
		'sandbox'    => 'https://api.sandbox.ebay.com/sell/account',
		'production' => 'https://api.ebay.com/sell/account'
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
			'apiVersion'    => [
				'valid'    => ['string'],
				'default'  => AccountService::API_VERSION,
				'required' => true
			],
			'marketplaceId' => [
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

		return $headers;
	}
}
