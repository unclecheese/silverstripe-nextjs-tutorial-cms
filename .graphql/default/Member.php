<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class Member extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'Member',
                            'interfaces' => function () {
                return array_map(function ($interface) {
                    return call_user_func([__NAMESPACE__ . '\\Types', $interface]);
                }, array (
  0 => 'DataObject',
));
            },
        'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'id',
                        'type' => Types::nonNull(Types::ID()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'hashID',
                        'type' => Types::nonNull(Types::String()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'typeAncestry',
                        'type' => Types::listOf(Types::listOf(Types::String())),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
        ])
;
                    $fields[] = [
                        'name' => 'exists',
                        'type' => Types::nonNull(Types::Boolean()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Resolver', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\DBFieldArgs\DBTextArgs', 'resolve'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\ScalarDBField', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'format',
                                'type' => Types::DBTextFormattingOption(),
                                                        ], // arg
                                                    [
                                'name' => 'limit',
                                'type' => Types::Int(),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                return $fields;
            },
        ]);
    }
}
