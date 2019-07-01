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
 * @property string $endDate
 * @property \EbaySdk\Api\Marketing\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property \EbaySdk\Api\Marketing\Enums\PromotionPriorityEnum $priority
 * @property string $promotionHref
 * @property string $promotionId
 * @property string $promotionImageUrl
 * @property \EbaySdk\Api\Marketing\Enums\PromotionStatusEnum $promotionStatus
 * @property string $startDate
 */
class PromotionDetail extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
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
        'endDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'endDate'
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
        'promotionHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionHref'
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
        'promotionType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionType'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\Plenty\Modules\Market\Ebay\Api\Types\BaseType::class], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
