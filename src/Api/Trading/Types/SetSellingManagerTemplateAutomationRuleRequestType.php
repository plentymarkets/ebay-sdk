<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property integer $SaleTemplateID
 * @property \EbaySdk\Api\Trading\Types\SellingManagerAutoListType $AutomatedListingRule
 * @property \EbaySdk\Api\Trading\Types\SellingManagerAutoRelistType $AutomatedRelistingRule
 * @property \EbaySdk\Api\Trading\Types\SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
 */
class SetSellingManagerTemplateAutomationRuleRequestType extends \EbaySdk\Api\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SaleTemplateID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleTemplateID'
        ],
        'AutomatedListingRule' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerAutoListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedListingRule'
        ],
        'AutomatedRelistingRule' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerAutoRelistType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedRelistingRule'
        ],
        'AutomatedSecondChanceOfferRule' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerAutoSecondChanceOfferType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomatedSecondChanceOfferRule'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'SetSellingManagerTemplateAutomationRuleRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}