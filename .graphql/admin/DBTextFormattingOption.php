<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\EnumType;
class DBTextFormattingOption extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'DBTextFormattingOption',
            'values' => [
                        'CONTEXT_SUMMARY' => [
                    'value' => 'ContextSummary',
                                ],
                        'FIRST_PARAGRAPH' => [
                    'value' => 'FirstParagraph',
                                ],
                        'LIMIT_SENTENCES' => [
                    'value' => 'LimitSentences',
                                ],
                        'SUMMARY' => [
                    'value' => 'Summary',
                                ],
                    ],
                    'description' => 'Formatting options for fields that map to DBText data types',
                ]);
    }
}
