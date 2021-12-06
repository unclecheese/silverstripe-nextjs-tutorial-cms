<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
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
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveReadFileUsage'],
        ])
;
                    $fields[] = [
                        'name' => 'readFileUsage',
                        'type' => Types::listOf(Types::FileUsage()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveReadFileUsage'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'ids',
                                'type' => Types::nonNull(Types::listOf(Types::ID())),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveReadDescendantFileCounts'],
        ])
;
                    $fields[] = [
                        'name' => 'readDescendantFileCounts',
                        'type' => Types::listOf(Types::DescendantFileCount()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveReadDescendantFileCounts'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'ids',
                                'type' => Types::nonNull(Types::listOf(Types::ID())),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveReadFiles'],
        ])
;
                    $fields[] = [
                        'name' => 'readFiles',
                        'type' => Types::listOf(Types::FileResult()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveReadFiles'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::FileFilterInput(),
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
                        'type' => Types::Page(),
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
  'dataClass' => 'SilverStripe\\Security\\Member',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Member',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Member',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\FirstResult', 'firstResult'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'readOneMember',
                        'type' => Types::Member(),
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
                                'type' => Types::MemberFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::MemberSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                return $fields;
            },
        ]);
    }
}
