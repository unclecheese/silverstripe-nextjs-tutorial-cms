<?php


namespace App\Models;

use Page;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class HomePage extends Page
{
    /**
     * @var array
     */
    private static $db = [
        'BannerText' => 'Varchar(255)',
    ];

    private static $has_one = [
        'BannerImage' => Image::class,
    ];

    private static $owns = [
        'BannerImage',
    ];

    /**
     * @var string
     */
    private static $table_name = 'HomePage';

    /**
     * @var string
     */
    private static $singular_name = 'HomePage';

    /**
     * @var string
     */
    private static $plural_name = 'HomePages';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('BannerText', 'Banner text'),
            UploadField::create('BannerImage', 'Banner image')
                ->setAllowedFileCategories('image')
        ], 'Content');

        return $fields;
    }
}
