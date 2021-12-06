<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\EnumType;
class DBDateFormattingOptions extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'DBDateFormattingOptions',
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
                    ],
                    'description' => 'Formatting options for fields that map to DBDate data types',
                ]);
    }
}
