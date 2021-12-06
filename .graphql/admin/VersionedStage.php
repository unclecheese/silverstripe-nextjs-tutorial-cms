<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
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
