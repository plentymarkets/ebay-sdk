<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Marketing\Types;

/**
 *
 * @property \EbaySdk\Api\Marketing\Types\Campaign[] $campaigns
 * @property string $href
 * @property integer $limit
 * @property string $next
 * @property integer $offset
 * @property string $prev
 * @property integer $total
 */
class CampaignPagedCollection extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'campaigns' => [
            'type' => 'EbaySdk\Api\Marketing\Types\Campaign',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'campaigns'
        ],
        'href' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'href'
        ],
        'limit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit'
        ],
        'next' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'next'
        ],
        'offset' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offset'
        ],
        'prev' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'prev'
        ],
        'total' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
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
