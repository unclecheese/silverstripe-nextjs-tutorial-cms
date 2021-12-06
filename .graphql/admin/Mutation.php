<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class Mutation extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'Mutation',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveCreateFile'],
        ])
;
                    $fields[] = [
                        'name' => 'createFile',
                        'type' => Types::FileInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveCreateFile'],
                                ],
                                                    ],
                                            'description' => 'Creates files and images',
                                                                'args' => [
                                                    [
                                'name' => 'file',
                                'type' => Types::FileInput(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveCreateFolder'],
        ])
;
                    $fields[] = [
                        'name' => 'createFolder',
                        'type' => Types::FileInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveCreateFolder'],
                                ],
                                                    ],
                                            'description' => 'Creates files and images',
                                                                'args' => [
                                                    [
                                'name' => 'folder',
                                'type' => Types::FolderInput(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveDeleteFiles'],
        ])
;
                    $fields[] = [
                        'name' => 'deleteFiles',
                        'type' => Types::listOf(Types::ID()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveDeleteFiles'],
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
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveMoveFiles'],
        ])
;
                    $fields[] = [
                        'name' => 'moveFiles',
                        'type' => Types::FileInterface(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveMoveFiles'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'folderId',
                                'type' => Types::nonNull(Types::ID()),
                                                        ], // arg
                                                    [
                                'name' => 'fileIds',
                                'type' => Types::listOf(Types::ID()),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\PublicationResolver', 'resolvePublishFiles'],
        ])
;
                    $fields[] = [
                        'name' => 'publishFiles',
                        'type' => Types::listOf(Types::PublicationResult()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\PublicationResolver', 'resolvePublishFiles'],
                                ],
                                                    ],
                                            'description' => 'Publishes a list of files',
                                                                'args' => [
                                                    [
                                'name' => 'ids',
                                'type' => Types::nonNull(Types::listOf(Types::ID())),
                                                        ], // arg
                                                    [
                                'name' => 'force',
                                'type' => Types::Boolean(),
                                                            'defaultValue' => false,
                                                        ], // arg
                                                    [
                                'name' => 'quiet',
                                'type' => Types::Boolean(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\PublicationResolver', 'resolveUnpublishFiles'],
        ])
;
                    $fields[] = [
                        'name' => 'unpublishFiles',
                        'type' => Types::listOf(Types::PublicationResult()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\PublicationResolver', 'resolveUnpublishFiles'],
                                ],
                                                    ],
                                            'description' => 'Unpublishes a list of files',
                                                                'args' => [
                                                    [
                                'name' => 'ids',
                                'type' => Types::nonNull(Types::listOf(Types::ID())),
                                                        ], // arg
                                                    [
                                'name' => 'force',
                                'type' => Types::Boolean(),
                                                            'defaultValue' => false,
                                                        ], // arg
                                                    [
                                'name' => 'quiet',
                                'type' => Types::Boolean(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'updateFiles',
                        'type' => Types::File(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'id',
                                'type' => Types::nonNull(Types::ID()),
                                                        ], // arg
                                                    [
                                'name' => 'file',
                                'type' => Types::FileInput(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveCopyToStage'], [array (
  'dataClass' => 'Page',
)]),
        ])
;
                    $fields[] = [
                        'name' => 'copyPageToStage',
                        'type' => Types::Page(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveCopyToStage'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'input',
                                'type' => Types::nonNull(Types::CopyToStageInputType()),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveRollback'], [array (
  'dataClass' => 'Page',
)]),
        ])
;
                    $fields[] = [
                        'name' => 'rollbackPage',
                        'type' => Types::Page(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Resolvers\VersionedResolver', 'resolveRollback'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'id',
                                'type' => Types::nonNull(Types::ID()),
                                                        ], // arg
                                                    [
                                'name' => 'toVersion',
                                'type' => Types::nonNull(Types::Int()),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                return $fields;
            },
        ]);
    }
}
