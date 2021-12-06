<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class SiteConfig extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'SiteConfig',
                            'interfaces' => function () {
                return array_map(function ($interface) {
                    return call_user_func([__NAMESPACE__ . '\\Types', $interface]);
                }, array (
  0 => 'DataObject',
));
            },
        'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'id',
                        'type' => Types::nonNull(Types::ID()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'hashID',
                        'type' => Types::nonNull(Types::String()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'typeAncestry',
                        'type' => Types::listOf(Types::listOf(Types::String())),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'exists',
                        'type' => Types::nonNull(Types::Boolean()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'className',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBDatetimeArgs', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'lastEdited',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBDatetimeArgs', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBDatetimeFormattingOption(),
                                                        ], // arg
                                                    [
                                'name' => 'customFormat',
                                'type' => Types::String(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBDatetimeArgs', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'created',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBDatetimeArgs', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBDatetimeFormattingOption(),
                                                        ], // arg
                                                    [
                                'name' => 'customFormat',
                                'type' => Types::String(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'title',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'tagline',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'canViewType',
                        'type' => Types::SiteConfigCanViewTypeEnum(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'canEditType',
                        'type' => Types::SiteConfigCanEditTypeEnum(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'canCreateTopLevelType',
                        'type' => Types::SiteConfigCanEditTypeEnum(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Group',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Group',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'viewerGroups',
                        'type' => Types::nonNull(Types::GroupConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
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
                                'type' => Types::GroupFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::GroupSortFields(),
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
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Group',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Group',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'editorGroups',
                        'type' => Types::nonNull(Types::GroupConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
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
                                'type' => Types::GroupFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::GroupSortFields(),
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
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Group',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Group',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'createTopLevelGroups',
                        'type' => Types::nonNull(Types::GroupConnection()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
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
                                'type' => Types::GroupFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::GroupSortFields(),
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
                                return $fields;
            },
        ]);
    }
}
