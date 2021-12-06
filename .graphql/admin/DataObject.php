<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\InterfaceType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class DataObject extends InterfaceType
{
    public function __construct()
    {
        $resolver =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\AbstractTypeResolver', 'resolveType'],
        ])
;
        parent::__construct([
            'name' => 'DataObject',
            'resolveType' => function (...$args) use ($resolver) {
                $type = call_user_func_array($resolver->toClosure(), $args);
                return call_user_func([__NAMESPACE__ . '\\Types', $type]);
            },
                    'description' => 'The common interface shared by all DataObject types',
                            'fields' => function () {
                return [
                                    [
                        'name' => 'id',
                        'type' => Types::nonNull(Types::ID()),
                                                            ],
                                ];
            },
        ]);
    }
}
