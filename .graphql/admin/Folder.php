<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class Folder extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'Folder',
                    'description' => 'Type for folders',
                            'interfaces' => function () {
                return array_map(function ($interface) {
                    return call_user_func([__NAMESPACE__ . '\\Types', $interface]);
                }, array (
  0 => 'FileInterface',
));
            },
        'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'id',
                        'type' => Types::nonNull(Types::Int()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'created',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'lastEdited',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'owner',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'parentId',
                        'type' => Types::Int(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'title',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFolderType'],
        ])
;
                    $fields[] = [
                        'name' => 'type',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFolderType'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFolderCategory'],
        ])
;
                    $fields[] = [
                        'name' => 'category',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFolderCategory'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'exists',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'name',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'filename',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'url',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'canView',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'canEdit',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'canDelete',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'hasRestrictedAccess',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'visibility',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'resolveFolderParents'],
        ])
;
                    $fields[] = [
                        'name' => 'parents',
                        'type' => Types::listOf(Types::FileInterface()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'resolveFolderParents'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'resolveFolderDescendantFileCount'],
        ])
;
                    $fields[] = [
                        'name' => 'descendantFileCount',
                        'type' => Types::Int(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'resolveFolderDescendantFileCount'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'resolveFolderFilesInUseCount'],
        ])
;
                    $fields[] = [
                        'name' => 'filesInUseCount',
                        'type' => Types::Int(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'resolveFolderFilesInUseCount'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'resolveFolderChildren'],
            call_user_func_array(['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'sortChildren'], [array (
  'rootType' => 'FileInterface',
  'fieldName' => 'sort',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'], [array (
  'maxLimit' => 100,
)]),
        ])
;
                    $fields[] = [
                        'name' => 'children',
                        'type' => Types::FileInterfaceConnection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'resolveFolderChildren'],
                                ],
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FolderTypeResolver', 'sortChildren'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'paginate'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::FileFilterInput(),
                                                        ], // arg
                                                    [
                                'name' => 'sort',
                                'type' => Types::FolderChildrenSortFields(),
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
