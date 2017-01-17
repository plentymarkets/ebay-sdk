<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property \EbaySdk\Trading\Types\SellingManagerAutoListType $AutomatedListingRule
 * @property \EbaySdk\Trading\Types\SellingManagerAutoRelistType $AutomatedRelistingRule
 * @property \EbaySdk\Trading\Types\SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
 * @property \EbaySdk\Trading\Types\FeesType $Fees
 */
class DeleteSellingManagerTemplateAutomationRuleResponseType extends \EbaySdk\Api\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AutomatedListingRule' => [
            'type' => 'EbaySdk\Trading\Types\SellingManagerAutoListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedListingRule'
        ],
        'AutomatedRelistingRule' => [
            'type' => 'EbaySdk\Trading\Types\SellingManagerAutoRelistType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedRelistingRule'
        ],
        'AutomatedSecondChanceOfferRule' => [
            'type' => 'EbaySdk\Trading\Types\SellingManagerAutoSecondChanceOfferType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedSecondChanceOfferRule'
        ],
        'Fees' => [
            'type' => 'EbaySdk\Trading\Types\FeesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Fees'
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