<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Analytics\Types;

/**
 *
 * @property string $endDate
 * @property \EbaySdk\Analytics\Types\Header $header
 * @property string $lastUpdatedDate
 * @property \EbaySdk\Analytics\Types\Record[] $records
 * @property string $startDate
 * @property \EbaySdk\Analytics\Types\ErrorDetailV3[] $warnings
 */
class Report extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'endDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'endDate'
        ],
        'header' => [
            'type' => 'EbaySdk\Analytics\Types\Header',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'header'
        ],
        'lastUpdatedDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastUpdatedDate'
        ],
        'records' => [
            'type' => 'EbaySdk\Analytics\Types\Record',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'records'
        ],
        'startDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'startDate'
        ],
        'warnings' => [
            'type' => 'EbaySdk\Analytics\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
