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
 * @property \EbaySdk\Api\Trading\Types\SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
 * @property \EbaySdk\Api\Trading\Types\SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
 * @property \EbaySdk\Api\Trading\Types\SellingManagerProductSpecificsType $SellingManagerProductSpecifics
 */
class SellingManagerProductType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
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
        'SellingManagerTemplateDetailsArray' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerTemplateDetailsArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerTemplateDetailsArray'
        ],
        'SellingManagerProductInventoryStatus' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerProductInventoryStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductInventoryStatus'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\Plenty\Modules\Market\Ebay\Api\Types\BaseType::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}