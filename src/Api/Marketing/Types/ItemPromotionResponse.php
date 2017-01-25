<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Marketing\Types;

/**
 *
 * @property string $description
 * @property \EbaySdk\Api\Marketing\Types\DiscountRule[] $discountRules
 * @property string $endDate
 * @property \EbaySdk\Api\Marketing\Types\InventoryCriterion $inventoryCriterion
 * @property \EbaySdk\Api\Marketing\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property \EbaySdk\Api\Marketing\Enums\PromotionPriorityEnum $priority
 * @property string $promotionId
 * @property string $promotionImageUrl
 * @property \EbaySdk\Api\Marketing\Enums\PromotionStatusEnum $promotionStatus
 * @property string $startDate
 */
class ItemPromotionResponse extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'discountRules' => [
            'type' => 'EbaySdk\Api\Marketing\Types\DiscountRule',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'discountRules'
        ],
        'endDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'endDate'
        ],
        'inventoryCriterion' => [
            'type' => 'EbaySdk\Api\Marketing\Types\InventoryCriterion',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryCriterion'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'priority' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priority'
        ],
        'promotionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionId'
        ],
        'promotionImageUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionImageUrl'
        ],
        'promotionStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionStatus'
        ],
        'startDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'startDate'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
