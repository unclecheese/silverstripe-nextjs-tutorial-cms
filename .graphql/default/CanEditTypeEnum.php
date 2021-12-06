<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
class CanEditTypeEnum extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'CanEditTypeEnum',
            'values' => [
                        'LoggedInUsers' => [
                    'value' => 'LoggedInUsers',
                                ],
                        'OnlyTheseUsers' => [
                    'value' => 'OnlyTheseUsers',
                                ],
                        'Inherit' => [
                    'value' => 'Inherit',
                                ],
                    ],
                ]);
    }
}
