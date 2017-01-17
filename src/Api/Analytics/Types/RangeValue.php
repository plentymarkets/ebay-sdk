<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Analytics\Types;

/**
 *
 * @property string $end
 * @property boolean $exclusiveEnd
 * @property boolean $exclusiveStart
 * @property boolean $range
 * @property string $start
 */
class RangeValue extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'end' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'end'
        ],
        'exclusiveEnd' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'exclusiveEnd'
        ],
        'exclusiveStart' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'exclusiveStart'
        ],
        'range' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'range'
        ],
        'start' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'start'
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
