<?php


namespace App\Models;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use Page;

class ContentPage extends Page
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
    private static $table_name = 'ContentPage';

    /**
     * @var string
     */
    private static $singular_name = 'ContentPage';

    /**
     * @var string
     */
    private static $plural_name = 'ContentPages';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('BannerText', 'Banner text'),
            UploadField::create('BannerImage', 'Banner image')
                ->setAllowedFileCategories('image'),
        ], 'Content');
        return $fields;
    }
}
