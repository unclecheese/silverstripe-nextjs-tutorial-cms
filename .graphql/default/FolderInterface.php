<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\InterfaceType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class FolderInterface extends InterfaceType
{
    public function __construct()
    {
        $resolver =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\AbstractTypeResolver', 'resolveType'],
        ])
;
        parent::__construct([
            'name' => 'FolderInterface',
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
                        'name' => 'canViewType',
                        'type' => Types::CanViewTypeEnum(),
                                                            ],
                                    [
                        'name' => 'canEditType',
                        'type' => Types::CanEditTypeEnum(),
                                                            ],
                                    [
                        'name' => 'name',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'title',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'showInSearch',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'parentID',
                        'type' => Types::nonNull(Types::ID()),
                                                            ],
                                    [
                        'name' => 'ownerID',
                        'type' => Types::nonNull(Types::ID()),
                                                            ],
                                    [
                        'name' => 'fileHash',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'fileFilename',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'fileVariant',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'file',
                        'type' => Types::DBFileComposite(),
                                                            ],
                                    [
                        'name' => 'parent',
                        'type' => Types::FileInterface(),
                                                            ],
                                    [
                        'name' => 'owner',
                        'type' => Types::Member(),
                                                            ],
                                    [
                        'name' => 'backLinks',
                        'type' => Types::nonNull(Types::FileLinkConnection()),
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::FileLinkFilterFields(),
                                                        ],
                                                    [
                                'name' => 'sort',
                                'type' => Types::FileLinkSortFields(),
                                                        ],
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ],
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'viewerGroups',
                        'type' => Types::nonNull(Types::GroupConnection()),
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::GroupFilterFields(),
                                                        ],
                                                    [
                                'name' => 'sort',
                                'type' => Types::GroupSortFields(),
                                                        ],
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ],
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'editorGroups',
                        'type' => Types::nonNull(Types::GroupConnection()),
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::GroupFilterFields(),
                                                        ],
                                                    [
                                'name' => 'sort',
                                'type' => Types::GroupSortFields(),
                                                        ],
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                            'defaultValue' => '100',
                                                        ],
                                                    [
                                'name' => 'offset',
                                'type' => Types::Int(),
                                                            'defaultValue' => '0',
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'absoluteLink',
                        'type' => Types::String(),
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
