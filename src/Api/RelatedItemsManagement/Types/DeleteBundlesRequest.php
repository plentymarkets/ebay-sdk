<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\RelatedItemsManagement\Types;

/**
 *
 * @property integer[] $bundleID
 */
class DeleteBundlesRequest extends \EbaySdk\Api\RelatedItemsManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'bundleID' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'bundleID'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[\EbaySdk\Api\RelatedItemsManagement\Types\BaseRequest::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/sellerinventory/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'deleteBundlesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
