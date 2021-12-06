<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class FileInterfaceConnectionEdge extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'FileInterfaceConnectionEdge',
                    'description' => 'The collections edge',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'noop'],
        ])
;
                    $fields[] = [
                        'name' => 'node',
                        'type' => Types::nonNull(Types::FileInterface()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'noop'],
                                ],
                                                    ],
                                            'description' => 'The node at the end of the collections edge',
                                                            ]; // field
                                return $fields;
            },
        ]);
    }
}
