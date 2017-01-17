<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\PostOrder\Types;

/**
 *
 * @property integer $errorId
 * @property string $domain
 * @property string $severity
 * @property string $category
 * @property string $message
 * @property \EbaySdk\PostOrder\Types\ErrorParameter[] $parameter
 * @property string $longMessage
 * @property integer $httpStatusCode
 */
class Error extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'errorId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'errorId'
        ],
        'domain' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'domain'
        ],
        'severity' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'severity'
        ],
        'category' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'category'
        ],
        'message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'message'
        ],
        'parameter' => [
            'type' => 'EbaySdk\PostOrder\Types\ErrorParameter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'parameter'
        ],
        'longMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'longMessage'
        ],
        'httpStatusCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'httpStatusCode'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
