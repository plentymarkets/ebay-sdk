<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property boolean $eligible
 * @property string[] $eligibleCancelReason
 * @property \EbaySdk\Api\PostOrder\Enums\EligibilityFailureReasonEnum[] $failureReason
 * @property \EbaySdk\Api\PostOrder\Types\ItemEligibilityResult[] $itemEligibilityResult
 * @property string $legacyOrderId
 */
class OrderEligibilityResult extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'eligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eligible'
        ],
        'eligibleCancelReason' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'eligibleCancelReason'
        ],
        'failureReason' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'failureReason'
        ],
        'itemEligibilityResult' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ItemEligibilityResult',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'itemEligibilityResult'
        ],
        'legacyOrderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyOrderId'
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
