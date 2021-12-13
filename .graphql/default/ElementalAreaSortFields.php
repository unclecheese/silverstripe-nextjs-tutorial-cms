<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class ElementalAreaSortFields extends InputObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'ElementalAreaSortFields',
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
                        'name' => 'version',
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
                        'name' => 'ownerClassName',
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
                        'name' => 'elements',
                        'type' => Types::BaseElementSortFields(),
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
