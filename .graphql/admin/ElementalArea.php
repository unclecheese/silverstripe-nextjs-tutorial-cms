<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class ElementalArea extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'ElementalArea',
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
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QueryFilter\QueryFilter', 'filter'], [array (
  'fieldName' => 'filter',
  'rootType' => 'Block',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\QuerySort', 'sort'], [array (
  'fieldName' => 'sort',
  'rootType' => 'Block',
)]),
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
        ])
;
                    $fields[] = [
                        'name' => 'elements',
                        'type' => Types::nonNull(Types::listOf(Types::nonNull(Types::Block()))),
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
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\CanViewPermission', 'permissionCheck'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::BlockFilterFields(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::BlockSortFields(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'version',
                        'type' => Types::Int(),
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
            call_user_func_array(['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionList'], [array (
  'sourceClass' => 'DNADesign\\Elemental\\Models\\ElementalArea',
)]),
            call_user_func_array(['SilverStripe\Versioned\GraphQL\Plugins\VersionedDataObject', 'sortVersions'], [array (
  'rootType' => 'ElementalAreaVersion',
  'fieldName' => 'sort',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
        ])
;
                    $fields[] = [
                        'name' => 'versions',
                        'type' => Types::ElementalAreaVersionConnection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionList'],
                                ],
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Plugins\VersionedDataObject', 'sortVersions'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'sort',
                                'type' => Types::VersionsSimpleSortFields(),
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
