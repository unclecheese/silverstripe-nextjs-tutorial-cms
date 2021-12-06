<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class File extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'File',
                    'description' => 'Type for files and images',
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
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileType'],
        ])
;
                    $fields[] = [
                        'name' => 'type',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileType'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileCategory'],
        ])
;
                    $fields[] = [
                        'name' => 'category',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileCategory'],
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
                        'name' => 'extension',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileSize'],
        ])
;
                    $fields[] = [
                        'name' => 'size',
                        'type' => Types::Int(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileSize'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileUrl'],
        ])
;
                    $fields[] = [
                        'name' => 'url',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileUrl'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileThumbnail'],
        ])
;
                    $fields[] = [
                        'name' => 'thumbnail',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileThumbnail'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileSmallThumbnail'],
        ])
;
                    $fields[] = [
                        'name' => 'smallThumbnail',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileSmallThumbnail'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'width',
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
                        'name' => 'height',
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
                        'name' => 'isTrackedFormUpload',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileDraft'],
        ])
;
                    $fields[] = [
                        'name' => 'draft',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileDraft'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFilePublished'],
        ])
;
                    $fields[] = [
                        'name' => 'published',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFilePublished'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileModified'],
        ])
;
                    $fields[] = [
                        'name' => 'modified',
                        'type' => Types::Boolean(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileModified'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileInUseCount'],
        ])
;
                    $fields[] = [
                        'name' => 'inUseCount',
                        'type' => Types::Int(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FileTypeResolver', 'resolveFileInUseCount'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\FieldResolver', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'version',
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
                                return $fields;
            },
        ]);
    }
}
