<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property boolean $GlobalShipping
 * @property \EbaySdk\Api\Trading\Types\CalculatedShippingRateType $CalculatedShippingRate
 * @property boolean $ChangePaymentInstructions
 * @property boolean $InsuranceWanted
 * @property boolean $PaymentEdited
 * @property string $PaymentInstructions
 * @property \EbaySdk\Api\Trading\Types\SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property \EbaySdk\Api\Trading\Enums\ShippingRateTypeCodeType $ShippingRateType
 * @property \EbaySdk\Api\Trading\Types\ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property \EbaySdk\Api\Trading\Types\InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
 * @property \EbaySdk\Api\Trading\Enums\ShippingTypeCodeType $ShippingType
 * @property integer $SellingManagerSalesRecordNumber
 * @property \EbaySdk\Api\Trading\Types\TaxTableType $TaxTable
 * @property string $ShippingServiceUsed
 * @property \EbaySdk\Api\Trading\Types\AmountType $DefaultShippingCost
 * @property \EbaySdk\Api\Trading\Types\InsuranceDetailsType $InsuranceDetails
 * @property \EbaySdk\Api\Trading\Types\InsuranceDetailsType $InternationalInsuranceDetails
 * @property string $ShippingDiscountProfileID
 * @property \EbaySdk\Api\Trading\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property \EbaySdk\Api\Trading\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property boolean $PromotionalShippingDiscount
 * @property string $InternationalShippingDiscountProfileID
 * @property \EbaySdk\Api\Trading\Types\FlatShippingDiscountType $InternationalFlatShippingDiscount
 * @property \EbaySdk\Api\Trading\Types\CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
 * @property boolean $InternationalPromotionalShippingDiscount
 * @property \EbaySdk\Api\Trading\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property \EbaySdk\Api\Trading\Types\AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 * @property boolean $SellerExcludeShipToLocationsPreference
 * @property \EbaySdk\Api\Trading\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \EbaySdk\Api\Trading\Types\RateTableDetailsType $RateTableDetails
 */
class ShippingDetailsType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'GlobalShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ],
        'CalculatedShippingRate' => [
            'type' => 'EbaySdk\Api\Trading\Types\CalculatedShippingRateType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingRate'
        ],
        'ChangePaymentInstructions' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ChangePaymentInstructions'
        ],
        'InsuranceWanted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceWanted'
        ],
        'PaymentEdited' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentEdited'
        ],
        'PaymentInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstructions'
        ],
        'SalesTax' => [
            'type' => 'EbaySdk\Api\Trading\Types\SalesTaxType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ],
        'ShippingRateErrorMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateErrorMessage'
        ],
        'ShippingRateType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateType'
        ],
        'ShippingServiceOptions' => [
            'type' => 'EbaySdk\Api\Trading\Types\ShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ],
        'InternationalShippingServiceOption' => [
            'type' => 'EbaySdk\Api\Trading\Types\InternationalShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
        ],
        'ShippingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingType'
        ],
        'SellingManagerSalesRecordNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSalesRecordNumber'
        ],
        'TaxTable' => [
            'type' => 'EbaySdk\Api\Trading\Types\TaxTableType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxTable'
        ],
        'ShippingServiceUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ],
        'DefaultShippingCost' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DefaultShippingCost'
        ],
        'InsuranceDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\InsuranceDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceDetails'
        ],
        'InternationalInsuranceDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\InsuranceDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceDetails'
        ],
        'ShippingDiscountProfileID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDiscountProfileID'
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
        'PromotionalShippingDiscount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscount'
        ],
        'InternationalShippingDiscountProfileID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalShippingDiscountProfileID'
        ],
        'InternationalFlatShippingDiscount' => [
            'type' => 'EbaySdk\Api\Trading\Types\FlatShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalFlatShippingDiscount'
        ],
        'InternationalCalculatedShippingDiscount' => [
            'type' => 'EbaySdk\Api\Trading\Types\CalculatedShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalCalculatedShippingDiscount'
        ],
        'InternationalPromotionalShippingDiscount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalPromotionalShippingDiscount'
        ],
        'PromotionalShippingDiscountDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\PromotionalShippingDiscountDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ],
        'CODCost' => [
            'type' => 'EbaySdk\Api\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ],
        'ExcludeShipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ],
        'SellerExcludeShipToLocationsPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationsPreference'
        ],
        'ShipmentTrackingDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\ShipmentTrackingDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ],
        'RateTableDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\RateTableDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RateTableDetails'
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