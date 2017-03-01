<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Browse\Types;

/**
 *
 * @property string $field
 * @property boolean $negated
 * @property \EbaySdk\Api\Browse\Types\RangeValue $range
 * @property string[] $set
 * @property string $value
 */
class FilterField extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'field' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'field'
        ],
        'negated' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'negated'
        ],
        'range' => [
            'type' => 'EbaySdk\Api\Browse\Types\RangeValue',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'range'
        ],
        'set' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'set'
        ],
        'value' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'value'
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
