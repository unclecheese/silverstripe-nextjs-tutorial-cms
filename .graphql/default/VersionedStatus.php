<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
class VersionedStatus extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'VersionedStatus',
            'values' => [
                        'PUBLISHED' => [
                    'value' => 'published',
                                    'description' => 'Only published records',
                                ],
                        'DRAFT' => [
                    'value' => 'draft',
                                    'description' => 'Only draft records',
                                ],
                        'ARCHIVED' => [
                    'value' => 'archived',
                                    'description' => 'Only records that have been archived',
                                ],
                        'MODIFIED' => [
                    'value' => 'modified',
                                    'description' => 'Only records that have unpublished changes',
                                ],
                    ],
                    'description' => 'The stage to read from or write to',
                ]);
    }
}
