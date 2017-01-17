<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\ResolutionCaseManagement\Types;

/**
 *
 * @property \EbaySdk\ResolutionCaseManagement\Types\CaseIdType $caseId
 * @property \EbaySdk\ResolutionCaseManagement\Types\CaseUserType $user
 * @property \EbaySdk\ResolutionCaseManagement\Types\CaseUserType $otherParty
 * @property \EbaySdk\ResolutionCaseManagement\Types\CaseStatusType $status
 * @property \EbaySdk\ResolutionCaseManagement\Types\ItemType $item
 * @property integer $caseQuantity
 * @property \EbaySdk\ResolutionCaseManagement\Types\Amount $caseAmount
 * @property \DateTime $respondByDate
 * @property \DateTime $creationDate
 * @property \DateTime $lastModifiedDate
 */
class CaseSummaryType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'caseId' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\CaseIdType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseId'
        ],
        'user' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\CaseUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'user'
        ],
        'otherParty' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\CaseUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'otherParty'
        ],
        'status' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\CaseStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'item' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'item'
        ],
        'caseQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseQuantity'
        ],
        'caseAmount' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseAmount'
        ],
        'respondByDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'respondByDate'
        ],
        'creationDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'lastModifiedDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
