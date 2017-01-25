<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Analytics\Types;

/**
 *
 * @property \EbaySdk\Api\Analytics\Enums\StandardsLevelEnum $level
 * @property string $lookbackEndDate
 * @property string $lookbackStartDate
 * @property string $metricKey
 * @property string $name
 * @property mixed $thresholdLowerBound
 * @property string $thresholdMetaData
 * @property mixed $thresholdUpperBound
 * @property \EbaySdk\Api\Analytics\Enums\DataTypeEnum $type
 * @property mixed $value
 */
class Metric extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'level' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'level'
        ],
        'lookbackEndDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lookbackEndDate'
        ],
        'lookbackStartDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lookbackStartDate'
        ],
        'metricKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'metricKey'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'thresholdLowerBound' => [
            'type' => 'any',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'thresholdLowerBound'
        ],
        'thresholdMetaData' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'thresholdMetaData'
        ],
        'thresholdUpperBound' => [
            'type' => 'any',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'thresholdUpperBound'
        ],
        'type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'type'
        ],
        'value' => [
            'type' => 'any',
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
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
