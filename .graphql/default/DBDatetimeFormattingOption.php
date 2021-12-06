<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
class DBDatetimeFormattingOption extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'DBDatetimeFormattingOption',
            'values' => [
                        'TIMESTAMP' => [
                    'value' => 'Timestamp',
                                ],
                        'NICE' => [
                    'value' => 'Nice',
                                ],
                        'DAY_OF_WEEK' => [
                    'value' => 'DayOfWeek',
                                ],
                        'MONTH' => [
                    'value' => 'Month',
                                ],
                        'YEAR' => [
                    'value' => 'Year',
                                ],
                        'SHORT_MONTH' => [
                    'value' => 'ShortMonth',
                                ],
                        'DAY_OF_MONTH' => [
                    'value' => 'DayOfMonth',
                                ],
                        'SHORT' => [
                    'value' => 'Short',
                                ],
                        'LONG' => [
                    'value' => 'Long',
                                ],
                        'FULL' => [
                    'value' => 'Full',
                                ],
                        'CUSTOM' => [
                    'value' => 'Format',
                                ],
                        'DATE' => [
                    'value' => 'Date',
                                ],
                        'TIME' => [
                    'value' => 'Time',
                                ],
                        'TIME12' => [
                    'value' => 'Time12',
                                ],
                        'TIME24' => [
                    'value' => 'Time24',
                                ],
                    ],
                    'description' => 'Formatting options for fields that map to DBDatetime data types',
                ]);
    }
}
