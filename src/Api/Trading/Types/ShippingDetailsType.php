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
 * @property \EbaySdk\Trading\Types\CalculatedShippingRateType $CalculatedShippingRate
 * @property boolean $ChangePaymentInstructions
 * @property \EbaySdk\Trading\Types\AmountType $InsuranceFee
 * @property \EbaySdk\Trading\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property boolean $InsuranceWanted
 * @property boolean $PaymentEdited
 * @property string $PaymentInstructions
 * @property \EbaySdk\Trading\Types\SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property \EbaySdk\Trading\Enums\ShippingRateTypeCodeType $ShippingRateType
 * @property \EbaySdk\Trading\Types\ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property \EbaySdk\Trading\Types\InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
 * @property \EbaySdk\Trading\Enums\ShippingTypeCodeType $ShippingType
 * @property integer $SellingManagerSalesRecordNumber
 * @property \EbaySdk\Trading\Types\TaxTableType $TaxTable
 * @property string $ShippingServiceUsed
 * @property \EbaySdk\Trading\Types\AmountType $DefaultShippingCost
 * @property \EbaySdk\Trading\Types\InsuranceDetailsType $InsuranceDetails
 * @property \EbaySdk\Trading\Types\InsuranceDetailsType $InternationalInsuranceDetails
 * @property string $ShippingDiscountProfileID
 * @property \EbaySdk\Trading\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property \EbaySdk\Trading\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property boolean $PromotionalShippingDiscount
 * @property string $InternationalShippingDiscountProfileID
 * @property \EbaySdk\Trading\Types\FlatShippingDiscountType $InternationalFlatShippingDiscount
 * @property \EbaySdk\Trading\Types\CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
 * @property boolean $InternationalPromotionalShippingDiscount
 * @property \EbaySdk\Trading\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property \EbaySdk\Trading\Types\AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 * @property boolean $SellerExcludeShipToLocationsPreference
 * @property \EbaySdk\Trading\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \EbaySdk\Trading\Types\RateTableDetailsType $RateTableDetails
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
            'type' => 'EbaySdk\Trading\Types\CalculatedShippingRateType',
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
        'InsuranceFee' => [
            'type' => 'EbaySdk\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceFee'
        ],
        'InsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
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
            'type' => 'EbaySdk\Trading\Types\SalesTaxType',
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
            'type' => 'EbaySdk\Trading\Types\ShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ],
        'InternationalShippingServiceOption' => [
            'type' => 'EbaySdk\Trading\Types\InternationalShippingServiceOptionsType',
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
            'type' => 'EbaySdk\Trading\Types\TaxTableType',
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
            'type' => 'EbaySdk\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DefaultShippingCost'
        ],
        'InsuranceDetails' => [
            'type' => 'EbaySdk\Trading\Types\InsuranceDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceDetails'
        ],
        'InternationalInsuranceDetails' => [
            'type' => 'EbaySdk\Trading\Types\InsuranceDetailsType',
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
            'type' => 'EbaySdk\Trading\Types\FlatShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ],
        'CalculatedShippingDiscount' => [
            'type' => 'EbaySdk\Trading\Types\CalculatedShippingDiscountType',
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
            'type' => 'EbaySdk\Trading\Types\FlatShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalFlatShippingDiscount'
        ],
        'InternationalCalculatedShippingDiscount' => [
            'type' => 'EbaySdk\Trading\Types\CalculatedShippingDiscountType',
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
            'type' => 'EbaySdk\Trading\Types\PromotionalShippingDiscountDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ],
        'CODCost' => [
            'type' => 'EbaySdk\Trading\Types\AmountType',
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
            'type' => 'EbaySdk\Trading\Types\ShipmentTrackingDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ],
        'RateTableDetails' => [
            'type' => 'EbaySdk\Trading\Types\RateTableDetailsType',
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
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}