<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Finding\Types;

/**
 *
 * @property \EbaySdk\Finding\Types\CategoryHistogramContainer $categoryHistogramContainer
 * @property \EbaySdk\Finding\Types\AspectHistogramContainer $aspectHistogramContainer
 * @property \EbaySdk\Finding\Types\ConditionHistogramContainer $conditionHistogramContainer
 */
class FindItemsByKeywordsResponse extends \EbaySdk\Api\Finding\Types\BaseFindingServiceResponse
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryHistogramContainer' => [
            'type' => 'EbaySdk\Finding\Types\CategoryHistogramContainer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryHistogramContainer'
        ],
        'aspectHistogramContainer' => [
            'type' => 'EbaySdk\Finding\Types\AspectHistogramContainer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'aspectHistogramContainer'
        ],
        'conditionHistogramContainer' => [
            'type' => 'EbaySdk\Finding\Types\ConditionHistogramContainer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'conditionHistogramContainer'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
