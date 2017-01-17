<?php
namespace EbaySdk\Api\ReturnManagement\Services;

use Plenty\Modules\Market\Ebay\Api\Services\BaseWsdlService;

/**
 * Base class for the Return Management service.
 */
class ReturnManagementBaseService extends BaseWsdlService
{
	/**
	 * HTTP header constant. The API version your application supports.
	 */
	const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';

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
		'sandbox'    => 'https://svcs.sandbox.ebay.com/services/returns/v1/ReturnManagementService',
		'production' => 'https://svcs.ebay.com/services/returns/v1/ReturnManagementService'
	];

	/**
	 * @param array $config Optional configuration option values.
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
				'default' => ReturnManagementService::API_VERSION
			],
			'globalId'   => [
				'valid' => ['string']
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
		$headers[ self::HDR_OPERATION_NAME ] = $operationName;

		// Add optional headers.
		if($this->getConfig('apiVersion'))
		{
			$headers[ self::HDR_API_VERSION ] = $this->getConfig('apiVersion');
		}

		if($this->getConfig('globalId'))
		{
			$headers[ self::HDR_GLOBAL_ID ] = $this->getConfig('globalId');
		}

		return $headers;
	}
}
