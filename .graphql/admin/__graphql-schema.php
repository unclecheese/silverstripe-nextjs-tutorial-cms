<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
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
    public static function FolderInput() { return static::get('FolderInput'); }
    public static function FileUsage() { return static::get('FileUsage'); }
    public static function FileInput() { return static::get('FileInput'); }
    public static function Folder() { return static::get('Folder'); }
    public static function File() { return static::get('File'); }
    public static function DescendantFileCount() { return static::get('DescendantFileCount'); }
    public static function FileFilterInput() { return static::get('FileFilterInput'); }
    public static function PublicationNotice() { return static::get('PublicationNotice'); }
    public static function PageInfo() { return static::get('PageInfo'); }
    public static function QueryFilterStringComparator() { return static::get('QueryFilterStringComparator'); }
    public static function QueryFilterBooleanComparator() { return static::get('QueryFilterBooleanComparator'); }
    public static function QueryFilterIntComparator() { return static::get('QueryFilterIntComparator'); }
    public static function QueryFilterFloatComparator() { return static::get('QueryFilterFloatComparator'); }
    public static function QueryFilterIDComparator() { return static::get('QueryFilterIDComparator'); }
    public static function BlockVersion() { return static::get('BlockVersion'); }
    public static function VersionsSimpleSortFields() { return static::get('VersionsSimpleSortFields'); }
    public static function BlockVersionConnectionEdge() { return static::get('BlockVersionConnectionEdge'); }
    public static function BlockVersionConnection() { return static::get('BlockVersionConnection'); }
    public static function ElementalAreaVersion() { return static::get('ElementalAreaVersion'); }
    public static function ElementalAreaVersionConnectionEdge() { return static::get('ElementalAreaVersionConnectionEdge'); }
    public static function ElementalAreaVersionConnection() { return static::get('ElementalAreaVersionConnection'); }
    public static function PageVersion() { return static::get('PageVersion'); }
    public static function PageVersionConnectionEdge() { return static::get('PageVersionConnectionEdge'); }
    public static function PageVersionConnection() { return static::get('PageVersionConnection'); }
    public static function BlockFilterFields() { return static::get('BlockFilterFields'); }
    public static function BlockSortFields() { return static::get('BlockSortFields'); }
    public static function ElementalAreaFilterFields() { return static::get('ElementalAreaFilterFields'); }
    public static function ElementalAreaSortFields() { return static::get('ElementalAreaSortFields'); }
    public static function MemberFilterFields() { return static::get('MemberFilterFields'); }
    public static function MemberSortFields() { return static::get('MemberSortFields'); }
    public static function PageFilterFields() { return static::get('PageFilterFields'); }
    public static function PageSortFields() { return static::get('PageSortFields'); }
    public static function FolderChildrenSortFields() { return static::get('FolderChildrenSortFields'); }
    public static function FileInterfaceConnectionEdge() { return static::get('FileInterfaceConnectionEdge'); }
    public static function FileInterfaceConnection() { return static::get('FileInterfaceConnection'); }
    public static function Block() { return static::get('Block'); }
    public static function ElementalArea() { return static::get('ElementalArea'); }
    public static function Member() { return static::get('Member'); }
    public static function Page() { return static::get('Page'); }
    public static function SiteTree() { return static::get('SiteTree'); }
    public static function Query() { return static::get('Query'); }
    public static function Mutation() { return static::get('Mutation'); }
    public static function VersionedStage() { return static::get('VersionedStage'); }
    public static function VersionedQueryMode() { return static::get('VersionedQueryMode'); }
    public static function VersionedStatus() { return static::get('VersionedStatus'); }
    public static function AppCategory() { return static::get('AppCategory'); }
    public static function DBTextFormattingOption() { return static::get('DBTextFormattingOption'); }
    public static function DBDecimalFormattingOptions() { return static::get('DBDecimalFormattingOptions'); }
    public static function DBFloatFormattingOptions() { return static::get('DBFloatFormattingOptions'); }
    public static function DBDateFormattingOptions() { return static::get('DBDateFormattingOptions'); }
    public static function DBDatetimeFormattingOption() { return static::get('DBDatetimeFormattingOption'); }
    public static function DBTimeFormattingOptions() { return static::get('DBTimeFormattingOptions'); }
    public static function SortDirection() { return static::get('SortDirection'); }
    public static function FileInterface() { return static::get('FileInterface'); }
    public static function DataObject() { return static::get('DataObject'); }
    public static function PublicationResult() { return static::get('PublicationResult'); }
    public static function FileResult() { return static::get('FileResult'); }
    public static function JSONBlob() { return static::get('JSONBlob'); }
    public static function ObjectType() { return static::get('ObjectType'); }
}
