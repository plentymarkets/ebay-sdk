<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace EbaySdk\Api\Taxonomy\Types;

/**
 *
 * @property \EbaySdk\Api\Taxonomy\Types\Category $category
 * @property integer $categoryTreeNodeLevel
 * @property \EbaySdk\Api\Taxonomy\Types\CategoryTreeNode[] $childCategoryTreeNodes
 * @property boolean $leafCategoryTreeNode
 * @property string $parentCategoryTreeNodeHref
 */
class CategoryTreeNode extends \Plenty\Modules\Market\Ebay\Api\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'category' => [
            'type' => 'EbaySdk\Api\Taxonomy\Types\Category',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'category'
        ],
        'categoryTreeNodeLevel' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryTreeNodeLevel'
        ],
        'childCategoryTreeNodes' => [
            'type' => 'EbaySdk\Api\Taxonomy\Types\CategoryTreeNode',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'childCategoryTreeNodes'
        ],
        'leafCategoryTreeNode' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'leafCategoryTreeNode'
        ],
        'parentCategoryTreeNodeHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'parentCategoryTreeNodeHref'
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
