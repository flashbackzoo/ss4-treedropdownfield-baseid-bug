<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TreeDropdownField;

class ExampleObject extends DataObject
{
    private static $table_name = 'ExampleObject';

    private static $db = [
        'Name' => 'Varchar',
    ];

    private static $has_one = [
        'NestedObject' => NestedObject::class,
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab(
            'Root.Main',
            TreeDropdownField::create(
                'NestedObjectID',
                'Place',
                NestedObject::class
            )
            ->setTreeBaseID(2)
        );

        return $fields;
    }
}
