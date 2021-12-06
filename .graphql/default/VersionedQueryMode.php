<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
class VersionedQueryMode extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'VersionedQueryMode',
            'values' => [
                        'ARCHIVE' => [
                    'value' => 'archive',
                                    'description' => 'Read from a specific date of the archive',
                                ],
                        'LATEST' => [
                    'value' => 'latest_versions',
                                    'description' => 'Read the latest version',
                                ],
                        'ALL_VERSIONS' => [
                    'value' => 'all_versions',
                                    'description' => 'Reads all versionse',
                                ],
                        'DRAFT' => [
                    'value' => 'Stage',
                                    'description' => 'Read from the draft stage',
                                ],
                        'LIVE' => [
                    'value' => 'Live',
                                    'description' => 'Read from the live stage',
                                ],
                        'STATUS' => [
                    'value' => 'status',
                                    'description' => 'Read only records with a specific status',
                                ],
                        'VERSION' => [
                    'value' => 'version',
                                    'description' => 'Read a specific version',
                                ],
                    ],
                    'description' => 'The versioned mode to use',
                ]);
    }
}
