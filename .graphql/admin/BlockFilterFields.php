<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class BlockFilterFields extends InputObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'BlockFilterFields',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'id',
                        'type' => Types::QueryFilterIDComparator(),
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
                        'type' => Types::QueryFilterStringComparator(),
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
                        'type' => Types::QueryFilterStringComparator(),
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
                        'name' => 'showTitle',
                        'type' => Types::QueryFilterBooleanComparator(),
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
                        'name' => 'sort',
                        'type' => Types::QueryFilterIntComparator(),
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
                        'type' => Types::QueryFilterIntComparator(),
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
