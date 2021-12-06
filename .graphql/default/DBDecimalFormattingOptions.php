<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
class DBDecimalFormattingOptions extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'DBDecimalFormattingOptions',
            'values' => [
                        'INT' => [
                    'value' => 'Int',
                                ],
                    ],
                    'description' => 'Formatting options for fields that map to DBDecimal data types',
                ]);
    }
}
