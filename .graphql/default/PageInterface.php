<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\InterfaceType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class PageInterface extends InterfaceType
{
    public function __construct()
    {
        $resolver =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\AbstractTypeResolver', 'resolveType'],
        ])
;
        parent::__construct([
            'name' => 'PageInterface',
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
                        'name' => 'canViewType',
                        'type' => Types::CanViewTypeEnum(),
                                                            ],
                                    [
                        'name' => 'canEditType',
                        'type' => Types::CanEditTypeEnum(),
                                                            ],
                                    [
                        'name' => 'version',
                        'type' => Types::Int(),
                                                            ],
                                    [
                        'name' => 'urlSegment',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'title',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'menuTitle',
                        'type' => Types::String(),
                                                            ],
                                    [
                        'name' => 'content',
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
                                                    [
                                'name' => 'parseShortcodes',
                                'type' => Types::Boolean(),
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'metaDescription',
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
                        'name' => 'extraMeta',
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
                                                    [
                                'name' => 'parseShortcodes',
                                'type' => Types::Boolean(),
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'showInMenus',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'showInSearch',
                        'type' => Types::Boolean(),
                                                            ],
                                    [
                        'name' => 'sort',
                        'type' => Types::Int(),
                                                            ],
                                    [
                        'name' => 'parentID',
                        'type' => Types::nonNull(Types::ID()),
                                                            ],
                                    [
                        'name' => 'parent',
                        'type' => Types::SiteTreeInterface(),
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
                        'name' => 'breadcrumbs',
                        'type' => Types::nonNull(Types::listOf(Types::nonNull(Types::PageInterface()))),
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::PageFilterFields(),
                                                        ],
                                                    [
                                'name' => 'sort',
                                'type' => Types::PageSortFields(),
                                                        ],
                                                ],
                                        ],
                                    [
                        'name' => 'children',
                        'type' => Types::nonNull(Types::PageInterfaceConnection()),
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::PageFilterFields(),
                                                        ],
                                                    [
                                'name' => 'sort',
                                'type' => Types::PageSortFields(),
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
                        'name' => 'navChildren',
                        'type' => Types::nonNull(Types::PageInterfaceConnection()),
                                                                'args' => [
                                                    [
                                'name' => 'filter',
                                'type' => Types::PageFilterFields(),
                                                        ],
                                                    [
                                'name' => 'sort',
                                'type' => Types::PageSortFields(),
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
                        'name' => 'navParent',
                        'type' => Types::PageInterface(),
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
