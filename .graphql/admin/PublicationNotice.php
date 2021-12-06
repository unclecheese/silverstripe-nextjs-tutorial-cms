<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class PublicationNotice extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'PublicationNotice',
                    'description' => 'Describes an error that occurred on a failed publication operation',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolvePublicationNotice'],
        ])
;
                    $fields[] = [
                        'name' => 'noticeType',
                        'type' => Types::nonNull(Types::String()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolvePublicationNotice'],
                                ],
                                                    ],
                                            'description' => 'The type of notice',
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolvePublicationNotice'],
        ])
;
                    $fields[] = [
                        'name' => 'message',
                        'type' => Types::String(),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolvePublicationNotice'],
                                ],
                                                    ],
                                            'description' => 'Relevant information pertaining to the error',
                                                            ]; // field
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolvePublicationNotice'],
        ])
;
                    $fields[] = [
                        'name' => 'ids',
                        'type' => Types::listOf(Types::ID()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolvePublicationNotice'],
                                ],
                                                    ],
                                            'description' => 'Relevant record IDs',
                                                            ]; // field
                                return $fields;
            },
        ]);
    }
}
