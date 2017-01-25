<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property string $caseId
 * @property \EbaySdk\Api\PostOrder\Types\ReturnEligibilityErrorDetailType[] $eligibilityErrorDetail
 * @property \EbaySdk\Api\PostOrder\Types\StatusType $eligibilityStatus
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $eligibleStartDate
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $returnCreationDate
 * @property \EbaySdk\Api\PostOrder\Types\DateTime $returnDeadline
 * @property string $returnId
 */
class EligibilityResultType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'caseId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseId'
        ],
        'eligibilityErrorDetail' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\ReturnEligibilityErrorDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'eligibilityErrorDetail'
        ],
        'eligibilityStatus' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\StatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eligibilityStatus'
        ],
        'eligibleStartDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eligibleStartDate'
        ],
        'returnCreationDate' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnCreationDate'
        ],
        'returnDeadline' => [
            'type' => 'EbaySdk\Api\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnDeadline'
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId'
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
