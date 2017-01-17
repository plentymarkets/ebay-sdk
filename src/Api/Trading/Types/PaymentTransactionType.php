<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Trading\Enums\PaymentTransactionStatusCodeType $PaymentStatus
 * @property \EbaySdk\Trading\Types\UserIdentityType $Payer
 * @property \EbaySdk\Trading\Types\UserIdentityType $Payee
 * @property \DateTime $PaymentTime
 * @property \EbaySdk\Trading\Types\AmountType $PaymentAmount
 * @property \EbaySdk\Trading\Types\TransactionReferenceType $ReferenceID
 * @property \EbaySdk\Trading\Types\AmountType $FeeOrCreditAmount
 * @property \EbaySdk\Trading\Types\TransactionReferenceType[] $PaymentReferenceID
 */
class PaymentTransactionType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentStatus'
        ],
        'Payer' => [
            'type' => 'EbaySdk\Trading\Types\UserIdentityType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Payer'
        ],
        'Payee' => [
            'type' => 'EbaySdk\Trading\Types\UserIdentityType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Payee'
        ],
        'PaymentTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentTime'
        ],
        'PaymentAmount' => [
            'type' => 'EbaySdk\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentAmount'
        ],
        'ReferenceID' => [
            'type' => 'EbaySdk\Trading\Types\TransactionReferenceType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ],
        'FeeOrCreditAmount' => [
            'type' => 'EbaySdk\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeOrCreditAmount'
        ],
        'PaymentReferenceID' => [
            'type' => 'EbaySdk\Trading\Types\TransactionReferenceType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentReferenceID'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
