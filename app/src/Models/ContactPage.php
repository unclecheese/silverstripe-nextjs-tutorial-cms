<?php


namespace App\Models;

use Page;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class ContactPage extends Page
{
    /**
     * @var array
     */
    private static $db = [
        'PhoneNumber' => 'Varchar',
        'EmailAddress' => 'Varchar',
        'PhysicalAddress' => 'Varchar',
    ];

    /**
     * @var string
     */
    private static $table_name = 'ContactPage';

    /**
     * @var string
     */
    private static $singular_name = 'ContactPage';

    /**
     * @var string
     */
    private static $plural_name = 'ContactPages';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('PhoneNumber', 'Phone number'),
            EmailField::create('EmailAddress', 'Email address'),
            TextField::create('PhysicalAddress', 'Physical address'),
        ], 'Content');

        return $fields;
    }
}
