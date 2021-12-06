<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_21232f297a57a5a743894a0e4a801fc3;
use GraphQL\Type\Definition\UnionType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
class FileResult extends UnionType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'FileResult',
            'types' => function () {
                return array_map(function ($type) {
                    return call_user_func([__NAMESPACE__ . '\\Types', $type]);
                }, array (
  0 => 'File',
  1 => 'Folder',
));
            },
            'resolveType' => function (...$args) {
                $resolver =     ComposedResolver::create([
            ['SilverStripe\AssetAdmin\GraphQL\Resolvers\AssetAdminResolver', 'resolveFileInterfaceType'],
        ])
;
                $type = call_user_func_array($resolver->toClosure(), $args);
                return call_user_func([__NAMESPACE__ . '\\Types', $type]);
            },
                ]);
    }
}
