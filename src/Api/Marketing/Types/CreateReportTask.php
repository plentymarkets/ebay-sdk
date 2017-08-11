<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Marketing\Types;

/**
 *
 * @property string[] $campaignIds
 * @property string $dateFrom
 * @property string $dateTo
 * @property \EbaySdk\Api\Marketing\Types\Dimension[] $dimensions
 * @property \EbaySdk\Api\Marketing\Types\InventoryReference[] $inventoryReferences
 * @property string[] $listingIds
 * @property \EbaySdk\Api\Marketing\Types\Bas:MarketplaceIdEnum $marketplaceId
 * @property string[] $metricKeys
 * @property \EbaySdk\Api\Marketing\Enums\ReportFormatEnum $reportFormat
 * @property \EbaySdk\Api\Marketing\Enums\ReportTypeEnum $reportType
 */
class CreateReportTask extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'campaignIds' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'campaignIds'
        ],
        'dateFrom' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dateFrom'
        ],
        'dateTo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dateTo'
        ],
        'dimensions' => [
            'type' => 'EbaySdk\Api\Marketing\Types\Dimension',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dimensions'
        ],
        'inventoryReferences' => [
            'type' => 'EbaySdk\Api\Marketing\Types\InventoryReference',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'inventoryReferences'
        ],
        'listingIds' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'listingIds'
        ],
        'marketplaceId' => [
            'type' => 'EbaySdk\Api\Marketing\Types\Bas:MarketplaceIdEnum',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'metricKeys' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'metricKeys'
        ],
        'reportFormat' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reportFormat'
        ],
        'reportType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reportType'
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