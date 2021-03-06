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
 * @property boolean $DeleteAutomatedListingRule
 * @property boolean $DeleteAutomatedRelistingRule
 * @property boolean $DeleteAutomatedSecondChanceOfferRule
 */
class DeleteSellingManagerTemplateAutomationRuleRequestType extends \EbaySdk\Api\Trading\Types\AbstractRequestType
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
        'DeleteAutomatedListingRule' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeleteAutomatedListingRule'
        ],
        'DeleteAutomatedRelistingRule' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeleteAutomatedRelistingRule'
        ],
        'DeleteAutomatedSecondChanceOfferRule' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeleteAutomatedSecondChanceOfferRule'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'DeleteSellingManagerTemplateAutomationRuleRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
