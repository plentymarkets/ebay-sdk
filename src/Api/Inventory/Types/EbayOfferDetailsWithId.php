<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Inventory\Types;

/**
 *
 * @property integer $availableQuantity
 * @property string $categoryId
 * @property string $listingDescription
 * @property \EbaySdk\Api\Inventory\Types\ListingPolicies $listingPolicies
 * @property string $merchantLocationKey
 * @property \EbaySdk\Api\Inventory\Types\PricingSummary $pricingSummary
 * @property integer $quantityLimitPerBuyer
 * @property string[] $storeCategoryNames
 * @property \EbaySdk\Api\Inventory\Types\Tax $tax
 */
class EbayOfferDetailsWithId extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'availableQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'availableQuantity'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'listingDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingDescription'
        ],
        'listingPolicies' => [
            'type' => 'EbaySdk\Api\Inventory\Types\ListingPolicies',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingPolicies'
        ],
        'merchantLocationKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'merchantLocationKey'
        ],
        'pricingSummary' => [
            'type' => 'EbaySdk\Api\Inventory\Types\PricingSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'quantityLimitPerBuyer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantityLimitPerBuyer'
        ],
        'storeCategoryNames' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'storeCategoryNames'
        ],
        'tax' => [
            'type' => 'EbaySdk\Api\Inventory\Types\Tax',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tax'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
