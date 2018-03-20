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
 * @property \EbaySdk\Api\Trading\Types\FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property boolean $VerifyOnly
 * @property string $SaleTemplateName
 * @property \EbaySdk\Api\Trading\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 */
class ReviseSellingManagerTemplateResponseType extends \EbaySdk\Api\Trading\Types\AbstractResponseType
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
        'Fees' => [
            'type' => 'EbaySdk\Api\Trading\Types\FeesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Fees'
        ],
        'CategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'Category2ID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Category2ID'
        ],
        'VerifyOnly' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VerifyOnly'
        ],
        'SaleTemplateName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleTemplateName'
        ],
        'SellingManagerProductDetails' => [
            'type' => 'EbaySdk\Api\Trading\Types\SellingManagerProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[\EbaySdk\Api\Trading\Types\AbstractResponseType::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
