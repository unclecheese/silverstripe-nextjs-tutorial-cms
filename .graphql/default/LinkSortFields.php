<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class LinkSortFields extends InputObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'LinkSortFields',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'id',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'className',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'lastEdited',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'created',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'anchor',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'title',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'type',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'url',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'email',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'phone',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'openInNewWindow',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'selectedStyle',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'siteTreeID',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'fileID',
                        'type' => Types::SortDirection(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'siteTree',
                        'type' => Types::SiteTreeSortFields(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'file',
                        'type' => Types::FileSortFields(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
                                ],
                                                    ],
                                                            ]; // field
                                return $fields;
            },
        ]);
    }
}
