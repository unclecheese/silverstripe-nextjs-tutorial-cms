<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class Query extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'Query',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\NextJS\GraphQL\Resolver', 'resolveStaticBuild'],
        ])
;
                    $fields[] = [
                        'name' => 'staticBuild',
                        'type' => Types::nonNull(Types::StaticBuildPayload()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\NextJS\GraphQL\Resolver', 'resolveStaticBuild'],
                                ],
                                                    ],
                                            'description' => 'The list of link/type tuples that should be added to the static build',
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\NextJS\GraphQL\Resolver', 'resolveTypesForLinks'],
        ])
;
                    $fields[] = [
                        'name' => 'typesForLinks',
                        'type' => Types::nonNull(Types::listOf(Types::nonNull(Types::TypeResolution()))),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\NextJS\GraphQL\Resolver', 'resolveTypesForLinks'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'links',
                                'type' => Types::nonNull(Types::listOf(Types::nonNull(Types::String()))),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\NextJS\GraphQL\Resolver', 'resolveGenerateFragments'],
        ])
;
                    $fields[] = [
                        'name' => 'generateFragments',
                        'type' => Types::nonNull(Types::listOf(Types::nonNull(Types::GeneratedFragment()))),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\NextJS\GraphQL\Resolver', 'resolveGenerateFragments'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'baseClass',
                                'type' => Types::nonNull(Types::String()),
                                                        ], // arg
                                                    [
                                'name' => 'includeBase',
                                'type' => Types::Boolean(),
                                                        ], // arg
                                                    [
                                'name' => 'baseFields',
                                'type' => Types::listOf(Types::nonNull(Types::String())),
                                                        ], // arg
                                                    [
                                'name' => 'maxNesting',
                                'type' => Types::nonNull(Types::Int()),
                                                            'defaultValue' => 2,
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'gorriecoe\\Link\\Models\\Link',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Link',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Link',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readLinks',
                        'type' => Types::nonNull(Types::LinkConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::LinkFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::LinkSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'gorriecoe\\Link\\Models\\Link',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Link',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Link',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneLink',
                        'type' => Types::Link(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::LinkFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::LinkSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\CMS\\Model\\SiteTree',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'SiteTree',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'SiteTree',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readSiteTrees',
                        'type' => Types::nonNull(Types::SiteTreeInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::SiteTreeFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'links',
                                'type' => Types::listOf(Types::String()),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::SiteTreeSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\CMS\\Model\\SiteTree',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'SiteTree',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'SiteTree',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneSiteTree',
                        'type' => Types::SiteTreeInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::SiteTreeFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'link',
                                'type' => Types::String(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::SiteTreeSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\Assets\\File',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'File',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'File',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readFiles',
                        'type' => Types::nonNull(Types::FileInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::FileFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::FileSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\Assets\\File',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'File',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'File',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneFile',
                        'type' => Types::FileInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::FileFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::FileSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'App\\Models\\BlockPage',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'BlockPage',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'BlockPage',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readBlockPages',
                        'type' => Types::nonNull(Types::BlockPageInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::BlockPageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'links',
                                'type' => Types::listOf(Types::String()),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::BlockPageSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'App\\Models\\BlockPage',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'BlockPage',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'BlockPage',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneBlockPage',
                        'type' => Types::BlockPageInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::BlockPageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'link',
                                'type' => Types::String(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::BlockPageSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'DNADesign\\Elemental\\Models\\ElementalArea',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'ElementalArea',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'ElementalArea',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readElementalAreas',
                        'type' => Types::nonNull(Types::ElementalAreaConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ElementalAreaFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ElementalAreaSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'DNADesign\\Elemental\\Models\\ElementalArea',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'ElementalArea',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'ElementalArea',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneElementalArea',
                        'type' => Types::ElementalArea(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ElementalAreaFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ElementalAreaSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'Page',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Page',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Page',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readPages',
                        'type' => Types::nonNull(Types::PageInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::PageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'links',
                                'type' => Types::listOf(Types::String()),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::PageSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'Page',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Page',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Page',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOnePage',
                        'type' => Types::PageInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::PageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'link',
                                'type' => Types::String(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::PageSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'App\\Models\\ContactPage',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'ContactPage',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'ContactPage',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readContactPages',
                        'type' => Types::nonNull(Types::ContactPageInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ContactPageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'links',
                                'type' => Types::listOf(Types::String()),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ContactPageSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'App\\Models\\ContactPage',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'ContactPage',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'ContactPage',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneContactPage',
                        'type' => Types::ContactPageInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ContactPageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'link',
                                'type' => Types::String(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ContactPageSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\Assets\\Image',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Image',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Image',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readImages',
                        'type' => Types::nonNull(Types::ImageInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ImageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ImageSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\Assets\\Image',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Image',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Image',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneImage',
                        'type' => Types::ImageInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ImageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ImageSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'App\\Models\\ContentPage',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'ContentPage',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'ContentPage',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readContentPages',
                        'type' => Types::nonNull(Types::ContentPageInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ContentPageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'links',
                                'type' => Types::listOf(Types::String()),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ContentPageSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'App\\Models\\ContentPage',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'ContentPage',
)]),
            ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'ContentPage',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneContentPage',
                        'type' => Types::ContentPageInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\CMS\GraphQL\LinkablePlugin', 'applyLinkFilter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ContentPageFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'link',
                                'type' => Types::String(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ContentPageSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'DNADesign\\Elemental\\Models\\BaseElement',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'BaseElement',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'BaseElement',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readBaseElements',
                        'type' => Types::nonNull(Types::BaseElementInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::BaseElementFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::BaseElementSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'DNADesign\\Elemental\\Models\\BaseElement',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'BaseElement',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'BaseElement',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneBaseElement',
                        'type' => Types::BaseElementInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::BaseElementFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::BaseElementSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'DNADesign\\Elemental\\Models\\ElementContent',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'ElementContent',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'ElementContent',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readElementContents',
                        'type' => Types::nonNull(Types::ElementContentInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ElementContentFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ElementContentSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'DNADesign\\Elemental\\Models\\ElementContent',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'ElementContent',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'ElementContent',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneElementContent',
                        'type' => Types::ElementContentInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::ElementContentFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::ElementContentSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\Assets\\Shortcodes\\FileLink',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'FileLink',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'FileLink',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readFileLinks',
                        'type' => Types::nonNull(Types::FileLinkConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::FileLinkFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::FileLinkSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\Assets\\Shortcodes\\FileLink',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'FileLink',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'FileLink',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneFileLink',
                        'type' => Types::FileLink(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::FileLinkFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::FileLinkSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\Assets\\Folder',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Folder',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Folder',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readFolders',
                        'type' => Types::nonNull(Types::FolderInterfaceConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::FolderFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::FolderSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\Assets\\Folder',
)]),
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Folder',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Folder',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneFolder',
                        'type' => Types::FolderInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionedRead'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'versioning',
                                'type' => Types::VersionedInputType(),
                                                        ], // arg
                                                    [
                                'name' => 'filter',
                                'type' => Types::FolderFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::FolderSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\SiteConfig\\SiteConfig',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'SiteConfig',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'SiteConfig',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readSiteConfigs',
                        'type' => Types::nonNull(Types::SiteConfigConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::SiteConfigFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::SiteConfigSortFields(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ], // arg
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'], [array (
  'dataClass' => 'SilverStripe\\SiteConfig\\SiteConfig',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'SiteConfig',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'SiteConfig',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneSiteConfig',
                        'type' => Types::SiteConfig(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\ReadCreator', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::SiteConfigFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::SiteConfigSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                return $fields;
            },
        ]);
    }
}
