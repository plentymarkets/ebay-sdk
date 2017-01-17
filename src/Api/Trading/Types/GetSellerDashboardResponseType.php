<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Trading\Types\SearchStandingDashboardType $SearchStanding
 * @property \EbaySdk\Trading\Types\SellerFeeDiscountDashboardType $SellerFeeDiscount
 * @property \EbaySdk\Trading\Types\PowerSellerDashboardType $PowerSellerStatus
 * @property \EbaySdk\Trading\Types\BuyerSatisfactionDashboardType $BuyerSatisfaction
 * @property \EbaySdk\Trading\Types\SellerAccountDashboardType $SellerAccount
 * @property \EbaySdk\Trading\Types\PerformanceDashboardType[] $Performance
 */
class GetSellerDashboardResponseType extends \EbaySdk\Api\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SearchStanding' => [
            'type' => 'EbaySdk\Trading\Types\SearchStandingDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchStanding'
        ],
        'SellerFeeDiscount' => [
            'type' => 'EbaySdk\Trading\Types\SellerFeeDiscountDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerFeeDiscount'
        ],
        'PowerSellerStatus' => [
            'type' => 'EbaySdk\Trading\Types\PowerSellerDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PowerSellerStatus'
        ],
        'BuyerSatisfaction' => [
            'type' => 'EbaySdk\Trading\Types\BuyerSatisfactionDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerSatisfaction'
        ],
        'SellerAccount' => [
            'type' => 'EbaySdk\Trading\Types\SellerAccountDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerAccount'
        ],
        'Performance' => [
            'type' => 'EbaySdk\Trading\Types\PerformanceDashboardType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Performance'
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
