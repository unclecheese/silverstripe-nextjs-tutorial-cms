<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\EnumType;
class DBFloatFormattingOptions extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'DBFloatFormattingOptions',
            'values' => [
                        'NICE' => [
                    'value' => 'Nice',
                                ],
                        'ROUND' => [
                    'value' => 'Round',
                                ],
                        'NICE_ROUND' => [
                    'value' => 'NiceRound',
                                ],
                    ],
                    'description' => 'Formatting options for fields that map to DBFloat data types',
                ]);
    }
}
