<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property integer $listId
 * @property \EbaySdk\PostOrder\Types\RuleSummaryType[] $ruleAffected
 */
class ModifyCustomListResponse extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'listId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listId'
        ],
        'ruleAffected' => [
            'type' => 'EbaySdk\PostOrder\Types\RuleSummaryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ruleAffected'
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
