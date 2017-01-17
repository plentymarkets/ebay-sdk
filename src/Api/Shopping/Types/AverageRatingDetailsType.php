<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Shopping\Types;

/**
 *
 * @property \EbaySdk\Shopping\Enums\FeedbackRatingDetailCodeType $RatingDetail
 * @property double $Rating
 * @property integer $RatingCount
 */
class AverageRatingDetailsType extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'RatingDetail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RatingDetail'
        ],
        'Rating' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Rating'
        ],
        'RatingCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RatingCount'
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