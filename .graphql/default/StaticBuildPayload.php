<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class StaticBuildPayload extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'StaticBuildPayload',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\Resolver\DefaultResolver', 'defaultFieldResolver'],
        ])
;
                    $fields[] = [
                        'name' => 'typeAncestry',
                        'type' => Types::nonNull(Types::listOf(Types::nonNull(Types::TypeAncestry()))),
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
                        'name' => 'links',
                        'type' => Types::nonNull(Types::listOf(Types::nonNull(Types::StaticBuildLink()))),
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
