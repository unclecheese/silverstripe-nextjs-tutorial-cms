<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class Block extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'Block',
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
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'absoluteLink',
                        'type' => Types::String(),
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
                        'name' => 'showTitle',
                        'type' => Types::Boolean(),
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
                        'name' => 'sort',
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
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'blockSchema',
                        'type' => Types::ObjectType(),
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
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'isPublished',
                        'type' => Types::Boolean(),
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
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'isLiveVersion',
                        'type' => Types::Boolean(),
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
                        'name' => 'canCreate',
                        'type' => Types::Boolean(),
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
                        'name' => 'canPublish',
                        'type' => Types::Boolean(),
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
                        'name' => 'canUnpublish',
                        'type' => Types::Boolean(),
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
                        'name' => 'canDelete',
                        'type' => Types::Boolean(),
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
  'sourceClass' => 'DNADesign\\Elemental\\Models\\BaseElement',
)]),
            call_user_func_array(['SilverStripe\Versioned\GraphQL\Plugins\VersionedDataObject', 'sortVersions'], [array (
  'rootType' => 'BlockVersion',
  'fieldName' => 'sort',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
        ])
;
                    $fields[] = [
                        'name' => 'versions',
                        'type' => Types::BlockVersionConnection(),
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
