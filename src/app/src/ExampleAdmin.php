<?php

use SilverStripe\Admin\ModelAdmin;

class ExampleAdmin extends ModelAdmin
{
    private static $managed_models = [
        'ExampleObject',
    ];

    private static $url_segment = 'example';

    private static $menu_title = 'Example';
}
