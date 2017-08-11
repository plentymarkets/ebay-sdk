<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\RelatedItemsManagement\Types;

/**
 *
 * @property integer $bundleID
 * @property string $bundleName
 * @property string[] $primarySKU
 * @property \DateTime $scheduledStartTime
 * @property \DateTime $scheduledEndTime
 * @property \EbaySdk\Api\RelatedItemsManagement\Types\RelatedProductGroup[] $relatedProductGroup
 * @property \EbaySdk\Api\RelatedItemsManagement\Enums\BundleStatusEnum $bundleStatus
 * @property integer $isoCurrencyCode
 * @property string $site
 */
class Bundle extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'bundleID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bundleID'
        ],
        'bundleName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bundleName'
        ],
        'primarySKU' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'primarySKU'
        ],
        'scheduledStartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'scheduledStartTime'
        ],
        'scheduledEndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'scheduledEndTime'
        ],
        'relatedProductGroup' => [
            'type' => 'EbaySdk\Api\RelatedItemsManagement\Types\RelatedProductGroup',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'relatedProductGroup'
        ],
        'bundleStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bundleStatus'
        ],
        'isoCurrencyCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'isoCurrencyCode'
        ],
        'site' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'site'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/sellerinventory/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
