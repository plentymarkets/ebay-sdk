<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property \EbaySdk\Api\Trading\Types\SellingManagerFolderDetailsType $SellingManagerFolderDetails
 * @property string[] $DeletedField
 * @property \EbaySdk\Api\Trading\Types\SellingManagerProductSpecificsType $SellingManagerProductSpecifics
 */
class ReviseSellingManagerProductRequestType extends \EbaySdk\Api\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SellingManagerProductDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ],
        'SellingManagerFolderDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerFolderDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerFolderDetails'
        ],
        'DeletedField' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DeletedField'
        ],
        'SellingManagerProductSpecifics' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerProductSpecificsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductSpecifics'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\EbaySdk\Api\Trading\Types\AbstractRequestType::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'ReviseSellingManagerProductRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
