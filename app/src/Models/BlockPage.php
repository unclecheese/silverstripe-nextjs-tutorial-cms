<?php


namespace App\Models;

use Page;

class BlockPage extends Page
{
    /**
     * @var array
     */
    private static $db = [

    ];

    /**
     * @var string
     */
    private static $table_name = 'BlockPage';

    /**
     * @var string
     */
    private static $singular_name = 'BlockPage';

    /**
     * @var string
     */
    private static $plural_name = 'BlockPages';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }
}
