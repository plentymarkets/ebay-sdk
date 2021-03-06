<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Account\Types;

/**
 *
 * @property \EbaySdk\Api\Account\Types\CategoryType[] $categoryTypes
 * @property \EbaySdk\Api\Account\Types\Deposit $deposit
 * @property string $description
 * @property \EbaySdk\Api\Account\Types\TimeDuration $fullPaymentDueIn
 * @property boolean $immediatePay
 * @property \EbaySdk\Api\Account\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property string $paymentInstructions
 * @property \EbaySdk\Api\Account\Types\PaymentMethod[] $paymentMethods
 */
class PaymentPolicyRequest extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryTypes' => [
            'type' => 'EbaySdk\Api\Account\Types\CategoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryTypes'
        ],
        'deposit' => [
            'type' => 'EbaySdk\Api\Account\Types\Deposit',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deposit'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'fullPaymentDueIn' => [
            'type' => 'EbaySdk\Api\Account\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fullPaymentDueIn'
        ],
        'immediatePay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'immediatePay'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'paymentInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentInstructions'
        ],
        'paymentMethods' => [
            'type' => 'EbaySdk\Api\Account\Types\PaymentMethod',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'paymentMethods'
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
