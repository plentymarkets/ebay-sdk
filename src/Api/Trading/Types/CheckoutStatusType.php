<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Enums\PaymentStatusCodeType $eBayPaymentStatus
 * @property \DateTime $LastModifiedTime
 * @property \EbaySdk\Api\Trading\Enums\BuyerPaymentMethodCodeType $PaymentMethod
 * @property \EbaySdk\Api\Trading\Enums\CompleteStatusCodeType $Status
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \EbaySdk\Api\Trading\Types\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
 * @property \EbaySdk\Api\Trading\Enums\BuyerPaymentInstrumentCodeType $PaymentInstrument
 */
class CheckoutStatusType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'eBayPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ],
        'LastModifiedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastModifiedTime'
        ],
        'PaymentMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'eBayPaymentMismatchDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\EBayPaymentMismatchDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentMismatchDetails'
        ],
        'PaymentInstrument' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstrument'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
