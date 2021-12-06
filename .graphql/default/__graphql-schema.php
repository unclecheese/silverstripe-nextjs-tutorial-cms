<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use SilverStripe\GraphQL\Schema\Storage\AbstractTypeRegistry;
class Types extends AbstractTypeRegistry
{
    protected static $types = [];
    protected static function getSourceDirectory(): string
    {
        return __DIR__;
    }
    protected static function getSourceNamespace(): string
    {
        return __NAMESPACE__;
    }
    public static function CopyToStageInputType() { return static::get('CopyToStageInputType'); }
    public static function VersionedInputType() { return static::get('VersionedInputType'); }
    public static function StaticBuildPayload() { return static::get('StaticBuildPayload'); }
    public static function StaticBuildLink() { return static::get('StaticBuildLink'); }
    public static function TypeAncestry() { return static::get('TypeAncestry'); }
    public static function TypeResolution() { return static::get('TypeResolution'); }
    public static function GeneratedFragment() { return static::get('GeneratedFragment'); }
    public static function QueryFilterStringComparator() { return static::get('QueryFilterStringComparator'); }
    public static function QueryFilterBooleanComparator() { return static::get('QueryFilterBooleanComparator'); }
    public static function QueryFilterIntComparator() { return static::get('QueryFilterIntComparator'); }
    public static function QueryFilterFloatComparator() { return static::get('QueryFilterFloatComparator'); }
    public static function QueryFilterIDComparator() { return static::get('QueryFilterIDComparator'); }
    public static function PageInfo() { return static::get('PageInfo'); }
    public static function DBFileComposite() { return static::get('DBFileComposite'); }
    public static function DBPolymorphicForeignKeyComposite() { return static::get('DBPolymorphicForeignKeyComposite'); }
    public static function PageFilterFields() { return static::get('PageFilterFields'); }
    public static function SiteTreeFilterFields() { return static::get('SiteTreeFilterFields'); }
    public static function GroupFilterFields() { return static::get('GroupFilterFields'); }
    public static function PageSortFields() { return static::get('PageSortFields'); }
    public static function SiteTreeSortFields() { return static::get('SiteTreeSortFields'); }
    public static function GroupSortFields() { return static::get('GroupSortFields'); }
    public static function PageInterfaceConnectionEdge() { return static::get('PageInterfaceConnectionEdge'); }
    public static function PageInterfaceConnection() { return static::get('PageInterfaceConnection'); }
    public static function SiteTreeInterfaceConnectionEdge() { return static::get('SiteTreeInterfaceConnectionEdge'); }
    public static function SiteTreeInterfaceConnection() { return static::get('SiteTreeInterfaceConnection'); }
    public static function FileFilterFields() { return static::get('FileFilterFields'); }
    public static function MemberFilterFields() { return static::get('MemberFilterFields'); }
    public static function FileLinkFilterFields() { return static::get('FileLinkFilterFields'); }
    public static function FileSortFields() { return static::get('FileSortFields'); }
    public static function MemberSortFields() { return static::get('MemberSortFields'); }
    public static function FileLinkSortFields() { return static::get('FileLinkSortFields'); }
    public static function FileInterfaceConnectionEdge() { return static::get('FileInterfaceConnectionEdge'); }
    public static function FileInterfaceConnection() { return static::get('FileInterfaceConnection'); }
    public static function FileLinkConnectionEdge() { return static::get('FileLinkConnectionEdge'); }
    public static function FileLinkConnection() { return static::get('FileLinkConnection'); }
    public static function FolderFilterFields() { return static::get('FolderFilterFields'); }
    public static function FolderSortFields() { return static::get('FolderSortFields'); }
    public static function FolderInterfaceConnectionEdge() { return static::get('FolderInterfaceConnectionEdge'); }
    public static function FolderInterfaceConnection() { return static::get('FolderInterfaceConnection'); }
    public static function ImageFilterFields() { return static::get('ImageFilterFields'); }
    public static function ImageSortFields() { return static::get('ImageSortFields'); }
    public static function ImageInterfaceConnectionEdge() { return static::get('ImageInterfaceConnectionEdge'); }
    public static function ImageInterfaceConnection() { return static::get('ImageInterfaceConnection'); }
    public static function SiteConfigFilterFields() { return static::get('SiteConfigFilterFields'); }
    public static function SiteConfigSortFields() { return static::get('SiteConfigSortFields'); }
    public static function SiteConfigConnectionEdge() { return static::get('SiteConfigConnectionEdge'); }
    public static function SiteConfigConnection() { return static::get('SiteConfigConnection'); }
    public static function GroupConnectionEdge() { return static::get('GroupConnectionEdge'); }
    public static function GroupConnection() { return static::get('GroupConnection'); }
    public static function Page() { return static::get('Page'); }
    public static function SiteTree() { return static::get('SiteTree'); }
    public static function Group() { return static::get('Group'); }
    public static function File() { return static::get('File'); }
    public static function Member() { return static::get('Member'); }
    public static function FileLink() { return static::get('FileLink'); }
    public static function Folder() { return static::get('Folder'); }
    public static function Image() { return static::get('Image'); }
    public static function SiteConfig() { return static::get('SiteConfig'); }
    public static function Query() { return static::get('Query'); }
    public static function VersionedStage() { return static::get('VersionedStage'); }
    public static function VersionedQueryMode() { return static::get('VersionedQueryMode'); }
    public static function VersionedStatus() { return static::get('VersionedStatus'); }
    public static function DBTextFormattingOption() { return static::get('DBTextFormattingOption'); }
    public static function DBDecimalFormattingOptions() { return static::get('DBDecimalFormattingOptions'); }
    public static function DBFloatFormattingOptions() { return static::get('DBFloatFormattingOptions'); }
    public static function DBDateFormattingOptions() { return static::get('DBDateFormattingOptions'); }
    public static function DBDatetimeFormattingOption() { return static::get('DBDatetimeFormattingOption'); }
    public static function DBTimeFormattingOptions() { return static::get('DBTimeFormattingOptions'); }
    public static function SortDirection() { return static::get('SortDirection'); }
    public static function CanViewTypeEnum() { return static::get('CanViewTypeEnum'); }
    public static function CanEditTypeEnum() { return static::get('CanEditTypeEnum'); }
    public static function ParentClassEnum() { return static::get('ParentClassEnum'); }
    public static function SiteConfigCanViewTypeEnum() { return static::get('SiteConfigCanViewTypeEnum'); }
    public static function SiteConfigCanEditTypeEnum() { return static::get('SiteConfigCanEditTypeEnum'); }
    public static function DataObject() { return static::get('DataObject'); }
    public static function SiteTreeInterface() { return static::get('SiteTreeInterface'); }
    public static function PageInterface() { return static::get('PageInterface'); }
    public static function FileInterface() { return static::get('FileInterface'); }
    public static function FolderInterface() { return static::get('FolderInterface'); }
    public static function ImageInterface() { return static::get('ImageInterface'); }
    public static function JSONBlob() { return static::get('JSONBlob'); }
}
