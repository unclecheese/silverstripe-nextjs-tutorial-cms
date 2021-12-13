<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class ElementalAreaVersion extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'ElementalAreaVersion',
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
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
        ])
;
                    $fields[] = [
                        'name' => 'author',
                        'type' => Types::Member(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
        ])
;
                    $fields[] = [
                        'name' => 'publisher',
                        'type' => Types::Member(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
        ])
;
                    $fields[] = [
                        'name' => 'published',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
        ])
;
                    $fields[] = [
                        'name' => 'liveVersion',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
        ])
;
                    $fields[] = [
                        'name' => 'deleted',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
        ])
;
                    $fields[] = [
                        'name' => 'draft',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
        ])
;
                    $fields[] = [
                        'name' => 'latestDraftVersion',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveVersionFields'],
                                ],
                                                    ],
                                                            ]; // field
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
                                return $fields;
            },
        ]);
    }
}
