<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Trading\Types;

/**
 *
 * @property boolean $LinkedPayPalAccount
 * @property \EbaySdk\Trading\Types\MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations
 * @property \EbaySdk\Trading\Types\MaximumItemRequirementsDetailsType $MaximumItemRequirements
 * @property \EbaySdk\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo
 * @property \EbaySdk\Trading\Types\MinimumFeedbackScoreDetailsType $MinimumFeedbackScore
 * @property boolean $ShipToRegistrationCountry
 * @property \EbaySdk\Trading\Types\VerifiedUserRequirementsDetailsType $VerifiedUserRequirements
 * @property string $DetailVersion
 * @property \DateTime $UpdateTime
 */
class SiteBuyerRequirementDetailsType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'LinkedPayPalAccount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LinkedPayPalAccount'
        ],
        'MaximumBuyerPolicyViolations' => [
            'type' => 'EbaySdk\Trading\Types\MaximumBuyerPolicyViolationsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumBuyerPolicyViolations'
        ],
        'MaximumItemRequirements' => [
            'type' => 'EbaySdk\Trading\Types\MaximumItemRequirementsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumItemRequirements'
        ],
        'MaximumUnpaidItemStrikesInfo' => [
            'type' => 'EbaySdk\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumUnpaidItemStrikesInfo'
        ],
        'MinimumFeedbackScore' => [
            'type' => 'EbaySdk\Trading\Types\MinimumFeedbackScoreDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumFeedbackScore'
        ],
        'ShipToRegistrationCountry' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipToRegistrationCountry'
        ],
        'VerifiedUserRequirements' => [
            'type' => 'EbaySdk\Trading\Types\VerifiedUserRequirementsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VerifiedUserRequirements'
        ],
        'DetailVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
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