<?php

namespace EbaySdk\Api\FileTransfer\Services;

use EbaySdk\Api\FileTransfer\Types\Data;
use EbaySdk\Api\FileTransfer\Types\FileAttachment;
use EbaySdk\Api\FileTransfer\Types\XopInclude;
use Plenty\Modules\Market\Ebay\Api\Services\BaseWsdlService;
use Plenty\Modules\Market\Ebay\Api\Types\BaseType;

/**
 * Base class for the FileTransfer service.
 */
class FileTransferBaseService extends BaseWsdlService
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
	 * HTTP header constant. The name of the operation you are calling.
	 */
	const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';

	/**
	 * @var array
	 */
	protected static $endPoints = [
		'sandbox'    => 'https://storage.sandbox.ebay.com/FileTransferService',
		'production' => 'https://storage.ebay.com/FileTransferService'
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
				'default' => FileTransferService::API_VERSION
			],
		];
	}

	/**
	 * Sends an API request.
	 *
	 * This method overrides the parent so that it can modify
	 * the request object before it is handled by the parent class.
	 *
	 * @param string   $name          The name of the operation.
	 * @param BaseType $request       Request object containing the request information.
	 * @param string   $responseClass The name of the PHP class that will be created from the XML response.
	 *
	 * @return BaseType
	 */
	protected function callOperation(string $name, BaseType $request, string $responseClass)
	{
		/**
		 * Modify the request object to add xop:Include element.
		 */
		if($name === 'uploadFile' && $request->hasAttachment())
		{
			/**
			 * Don't modify a request if the file attachment already exists.
			 */
			if(!isset($request->fileAttachment))
			{
				/** @var FileAttachment $fileAttachment */
				$fileAttachment = pluginApp(FileAttachment::class);

				$request->fileAttachment = $fileAttachment;
			}

			if(!isset($request->fileAttachment->Data))
			{
				/** @var XopInclude $xopInclude */
				$xopInclude = pluginApp(XopInclude::class, [
					'values' => [
						'href' => 'cid:attachment.bin@plentymarkets.eu'
					]
				]);

				$data = pluginApp(Data::class, [
					'values' => [
						'xopInclude' => $xopInclude
					]
				]);

				$request->fileAttachment->Data = $data;
			}

			if(!isset($request->fileAttachment->Size))
			{
				$attachment                    = $request->attachment();
				$request->fileAttachment->Size = strlen($attachment['data']);
			}
		}

		return parent::callOperation($name, $request, $responseClass);
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
		$headers[ self::HDR_OPERATION_NAME ] = $operationName;

		// Add optional headers.
		if($this->getConfig('apiVersion'))
		{
			$headers[ self::HDR_API_VERSION ] = $this->getConfig('apiVersion');
		}

		return $headers;
	}
}
