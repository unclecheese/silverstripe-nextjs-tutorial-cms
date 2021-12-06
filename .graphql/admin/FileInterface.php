<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\InterfaceType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class FileInterface extends InterfaceType
{
    public function __construct()
    {
        $resolver =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveFileInterfaceType'],
        ])
;
        parent::__construct([
            'name' => 'FileInterface',
            'resolveType' => function (...$args) use ($resolver) {
                $type = call_user_func_array($resolver->toClosure(), $args);
                return call_user_func([__NAMESPACE__ . '\\Types', $type]);
            },
                    'description' => 'Interface for files and folders',
                            'fields' => function () {
                return [
                                    [
                        'name' => 'id',
                        'type' => Types::nonNull(Types::Int()),
                                                            ],
                                    [
                        'name' => 'created',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'lastEdited',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'owner',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'parentId',
                        'type' => Types::Int(),
                                                            ],
                                    [
                        'name' => 'title',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'type',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'category',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'exists',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'name',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'filename',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'url',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'canView',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'canEdit',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'canDelete',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'hasRestrictedAccess',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'visibility',
                        'type' => Types::String(),
                                                            ],
                                ];
            },
        ]);
    }
}
