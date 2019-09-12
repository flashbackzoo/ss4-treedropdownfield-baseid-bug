<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\Hierarchy\Hierarchy;

class NestedObject extends DataObject
{
    private static $table_name = 'NestedObject';

    private static $db = [
        'Name' => 'Varchar',
    ];

    private static $has_many = [
        'Children' => NestedObject::class,
    ];

    private static $has_one = [
        'Parent' => NestedObject::class,
    ];

    private static $extensions = [
        Hierarchy::class,
    ];
}
