<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\ResolutionCaseManagement\Types;

/**
 *
 * @property \EbaySdk\ResolutionCaseManagement\Enums\MoneyMovementType $type
 * @property \EbaySdk\ResolutionCaseManagement\Types\CaseUserType $fromParty
 * @property \EbaySdk\ResolutionCaseManagement\Types\CaseUserType $toParty
 * @property \EbaySdk\ResolutionCaseManagement\Types\Amount $amount
 * @property \EbaySdk\ResolutionCaseManagement\Enums\PaymentMethodType $paymentMethod
 * @property string $paypalTransactionId
 * @property \EbaySdk\ResolutionCaseManagement\Enums\MoneyMovementStatusType $status
 * @property \DateTime $transactionDate
 * @property string $id
 * @property string $parentId
 */
class MoneyMovementDetailType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'type'
        ],
        'fromParty' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\CaseUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fromParty'
        ],
        'toParty' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\CaseUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'toParty'
        ],
        'amount' => [
            'type' => 'EbaySdk\ResolutionCaseManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amount'
        ],
        'paymentMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentMethod'
        ],
        'paypalTransactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paypalTransactionId'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'transactionDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionDate'
        ],
        'id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'id'
        ],
        'parentId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'parentId'
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
