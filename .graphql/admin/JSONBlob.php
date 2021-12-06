<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\CustomScalarType;
class JSONBlob extends CustomScalarType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'JSONBlob',
            'serialize' => ['SilverStripe\GraphQL\Schema\Resolver\JSONResolver', 'serialise'],
            'parseValue' => ['SilverStripe\GraphQL\Schema\Resolver\JSONResolver', 'parseValue'],
            'parseLiteral' => ['SilverStripe\GraphQL\Schema\Resolver\JSONResolver', 'parseLiteral'],
        ]);
    }
}
