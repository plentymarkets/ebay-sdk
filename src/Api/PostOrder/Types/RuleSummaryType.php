<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property integer $count
 * @property integer $countInTestMode
 * @property \EbaySdk\Api\PostOrder\Types\RuleActionDetailType $invalidAction
 * @property \EbaySdk\Api\PostOrder\Types\RuleConditionDetailType[] $invalidConditions
 * @property \DateTime $lastModifiedDate
 * @property integer $priority
 */
class RuleSummaryType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'count' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'count'
        ],
        'countInTestMode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'countInTestMode'
        ],
        'invalidAction' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\RuleActionDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'invalidAction'
        ],
        'invalidConditions' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\RuleConditionDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'invalidConditions'
        ],
        'lastModifiedDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
        ],
        'priority' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priority'
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
