<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\CustomScalarType;
class ObjectType extends CustomScalarType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'ObjectType',
            'serialize' => ['DNADesign\Elemental\GraphQL\Resolvers\Resolver', 'serialiseObjectType'],
            'parseValue' => ['DNADesign\Elemental\GraphQL\Resolvers\Resolver', 'parseValueObjectType'],
            'parseLiteral' => ['DNADesign\Elemental\GraphQL\Resolvers\Resolver', 'parseLiteralObjectType'],
        ]);
    }
}
