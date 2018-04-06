<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Api\Trading\Enums\CurrencyCodeType $CurrencyID
 * @property \EbaySdk\Api\Trading\Enums\CombinedPaymentPeriodCodeType $CombinedDuration
 * @property \EbaySdk\Api\Trading\Enums\ModifyActionCodeType $ModifyActionCode
 * @property \EbaySdk\Api\Trading\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property \EbaySdk\Api\Trading\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property \EbaySdk\Api\Trading\Types\CalculatedHandlingDiscountType $CalculatedHandlingDiscount
 * @property \EbaySdk\Api\Trading\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property \EbaySdk\Api\Trading\Types\ShippingInsuranceType $ShippingInsurance
 * @property \EbaySdk\Api\Trading\Types\ShippingInsuranceType $InternationalShippingInsurance
 */
class SetShippingDiscountProfilesRequestType extends \EbaySdk\Api\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CurrencyID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrencyID'
        ],
        'CombinedDuration' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CombinedDuration'
        ],
        'ModifyActionCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ModifyActionCode'
        ],
        'FlatShippingDiscount' => [
            'type' => 'EbaySdk\Api\Trading\Types\FlatShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ],
        'CalculatedShippingDiscount' => [
            'type' => 'EbaySdk\Api\Trading\Types\CalculatedShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingDiscount'
        ],
        'CalculatedHandlingDiscount' => [
            'type' => 'EbaySdk\Api\Trading\Types\CalculatedHandlingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CalculatedHandlingDiscount'
        ],
        'PromotionalShippingDiscountDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\PromotionalShippingDiscountDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ],
        'ShippingInsurance' => [
            'type' => 'EbaySdk\Api\Trading\Types\ShippingInsuranceType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsurance'
        ],
        'InternationalShippingInsurance' => [
            'type' => 'EbaySdk\Api\Trading\Types\ShippingInsuranceType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalShippingInsurance'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\EbaySdk\Api\Trading\Types\AbstractRequestType::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SetShippingDiscountProfilesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}