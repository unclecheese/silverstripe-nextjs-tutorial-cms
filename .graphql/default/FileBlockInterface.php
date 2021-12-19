<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\InterfaceType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class FileBlockInterface extends InterfaceType
{
    public function __construct()
    {
        $resolver =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\AbstractTypeResolver', 'resolveType'],
        ])
;
        parent::__construct([
            'name' => 'FileBlockInterface',
            'resolveType' => function (...$args) use ($resolver) {
                $type = call_user_func_array($resolver->toClosure(), $args);
                return call_user_func([__NAMESPACE__ . '\\Types', $type]);
            },
                            'fields' => function () {
                return [
                                    [
                        'name' => 'id',
                        'type' => Types::nonNull(Types::ID()),
                                                            ],
                                    [
                        'name' => 'hashID',
                        'type' => Types::nonNull(Types::String()),
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ],
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'typeAncestry',
                        'type' => Types::listOf(Types::listOf(Types::String())),
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ],
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'exists',
                        'type' => Types::nonNull(Types::Boolean()),
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ],
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'className',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'lastEdited',
                        'type' => Types::String(),
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBDatetimeFormattingOption(),
                                                        ],
                                                    [
                                'name' => 'customFormat',
                                'type' => Types::String(),
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'created',
                        'type' => Types::String(),
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBDatetimeFormattingOption(),
                                                        ],
                                                    [
                                'name' => 'customFormat',
                                'type' => Types::String(),
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'version',
                        'type' => Types::Int(),
                                                            ],
                                    [
                        'name' => 'title',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'showTitle',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'sort',
                        'type' => Types::Int(),
                                                            ],
                                    [
                        'name' => 'extraClass',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'style',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'parentID',
                        'type' => Types::nonNull(Types::ID()),
                                                            ],
                                    [
                        'name' => 'fileID',
                        'type' => Types::nonNull(Types::ID()),
                                                            ],
                                    [
                        'name' => 'parent',
                        'type' => Types::ElementalArea(),
                                                            ],
                                    [
                        'name' => 'file',
                        'type' => Types::FileInterface(),
                                                            ],
                                    [
                        'name' => 'link',
                        'type' => Types::nonNull(Types::String()),
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ],
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ],
                                                ],
                                        ],
                                ];
            },
        ]);
    }
}
