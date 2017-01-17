<?php

namespace EbaySdk\Api\BusinessPoliciesManagement\Services;

use Plenty\Modules\Market\Ebay\Api\Services\BaseWsdlService;

/**
 * Base class for the BusinessPoliciesManagement service.
 */
class BusinessPoliciesManagementBaseService extends BaseWsdlService
{
	/**
	 * HTTP header constant. The API version your application supports.
	 */
	const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';

	/**
	 * HTTP header constant. The Authentication Token that is used to validate the caller has permission to access the
	 * eBay servers.
	 */
	const HDR_AUTH_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';

	/**
	 * HTTP header constant. The global ID of the eBay site the request is for.
	 */
	const HDR_GLOBAL_ID = 'X-EBAY-SOA-GLOBAL-ID';

	/**
	 * HTTP header constant. The name of the operation you are calling.
	 */
	const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';

	/**
	 * @var array
	 */
	protected static $endPoints = [
		'sandbox'    => 'http://svcs.sandbox.ebay.com/services/selling/v1/SellerProfilesManagementService',
		'production' => 'https://svcs.ebay.com/services/selling/v1/SellerProfilesManagementService'
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
				'valid'   => ['string'],
				'default' => BusinessPoliciesManagementService::API_VERSION
			],
			'globalId'   => [
				'valid'    => ['string'],
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

		// Add required headers first.
		$headers[ self::HDR_AUTH_TOKEN ]     = null;
		$headers[ self::HDR_GLOBAL_ID ]      = $this->getConfig('globalId');
		$headers[ self::HDR_OPERATION_NAME ] = $operationName;

		// Add optional headers.
		if($this->getConfig('apiVersion'))
		{
			$headers[ self::HDR_API_VERSION ] = $this->getConfig('apiVersion');
		}

		return $headers;
	}
}
