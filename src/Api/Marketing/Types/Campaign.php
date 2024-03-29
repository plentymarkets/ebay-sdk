<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Marketing\Types;

/**
 *
 * @property \EbaySdk\Api\Marketing\Types\CampaignCriterion $campaignCriterion
 * @property string $campaignId
 * @property string $campaignName
 * @property \EbaySdk\Api\Marketing\Enums\CampaignStatusEnum $campaignStatus
 * @property string $endDate
 * @property \EbaySdk\Api\Marketing\Types\FundingStrategy $fundingStrategy
 * @property \EbaySdk\Api\Marketing\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $startDate
 */
class Campaign extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'campaignCriterion' => [
            'type' => 'EbaySdk\Api\Marketing\Types\CampaignCriterion',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'campaignCriterion'
        ],
        'campaignId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'campaignId'
        ],
        'campaignName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'campaignName'
        ],
        'campaignStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'campaignStatus'
        ],
        'endDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'endDate'
        ],
        'fundingStrategy' => [
            'type' => 'EbaySdk\Api\Marketing\Types\FundingStrategy',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fundingStrategy'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'startDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'startDate'
        ],
        'campaignAdRatePreferences' => [
            'type' => 'EbaySdk\Api\Marketing\Types\CampaignAdRatePreferences',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'campaignAdRatePreferences'
        ],
        'autoAdRate' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'autoAdRate'
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
