<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
class VersionedStage extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'VersionedStage',
            'values' => [
                        'DRAFT' => [
                    'value' => 'Stage',
                                    'description' => 'The draft stage',
                                ],
                        'LIVE' => [
                    'value' => 'Live',
                                    'description' => 'The live stage',
                                ],
                    ],
                    'description' => 'The stage to read from or write to',
                ]);
    }
}
