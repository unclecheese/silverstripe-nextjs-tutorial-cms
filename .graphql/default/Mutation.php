<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class Mutation extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'Mutation',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\Versioned\GraphQL\Plugins\UnpublishOnDelete', 'unpublishOnDelete'], [array (
  'dataClass' => 'gorriecoe\\Link\\Models\\Link',
)]),
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\DeleteCreator', 'resolve'], [array (
  'dataClass' => 'gorriecoe\\Link\\Models\\Link',
)]),
        ])
;
                    $fields[] = [
                        'name' => 'deleteLinks',
                        'type' => Types::listOf(Types::ID()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\Versioned\GraphQL\Plugins\UnpublishOnDelete', 'unpublishOnDelete'],
                                ],
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\DeleteCreator', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'ids',
                                'type' => Types::nonNull(Types::listOf(Types::ID())),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\UpdateCreator', 'resolve'], [array (
  'dataClass' => 'gorriecoe\\Link\\Models\\Link',
)]),
        ])
;
                    $fields[] = [
                        'name' => 'updateLink',
                        'type' => Types::Link(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\UpdateCreator', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'input',
                                'type' => Types::nonNull(Types::UpdateLinkInput()),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            call_user_func_array(['SilverStripe\GraphQL\Schema\DataObject\CreateCreator', 'resolve'], [array (
  'dataClass' => 'gorriecoe\\Link\\Models\\Link',
)]),
        ])
;
                    $fields[] = [
                        'name' => 'createLink',
                        'type' => Types::Link(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\CreateCreator', 'resolve'],
                                ],
                                                    ],
                                                                'args' => [
                                                    [
                                'name' => 'input',
                                'type' => Types::nonNull(Types::CreateLinkInput()),
                                                        ], // arg
                                                ], // args
                                        ]; // field
                                return $fields;
            },
        ]);
    }
}
