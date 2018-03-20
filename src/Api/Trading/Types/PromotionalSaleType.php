<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property integer $PromotionalSaleID
 * @property string $PromotionalSaleName
 * @property \EbaySdk\Api\Trading\Types\ItemIDArrayType $PromotionalSaleItemIDArray
 * @property \EbaySdk\Api\Trading\Enums\PromotionalSaleStatusCodeType $Status
 * @property \EbaySdk\Api\Trading\Enums\DiscountCodeType $DiscountType
 * @property double $DiscountValue
 * @property \DateTime $PromotionalSaleStartTime
 * @property \DateTime $PromotionalSaleEndTime
 * @property \EbaySdk\Api\Trading\Enums\PromotionalSaleTypeCodeType $PromotionalSaleType
 */
class PromotionalSaleType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PromotionalSaleID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleID'
        ],
        'PromotionalSaleName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleName'
        ],
        'PromotionalSaleItemIDArray' => [
            'type' => 'EbaySdk\Api\Trading\Types\ItemIDArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleItemIDArray'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'DiscountType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountType'
        ],
        'DiscountValue' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountValue'
        ],
        'PromotionalSaleStartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleStartTime'
        ],
        'PromotionalSaleEndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleEndTime'
        ],
        'PromotionalSaleType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleType'
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
