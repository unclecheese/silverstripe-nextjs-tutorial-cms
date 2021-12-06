<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class PageVersionConnectionEdge extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'PageVersionConnectionEdge',
                    'description' => 'The collections edge',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'noop'],
        ])
;
                    $fields[] = [
                        'name' => 'node',
                        'type' => Types::nonNull(Types::PageVersion()),
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
