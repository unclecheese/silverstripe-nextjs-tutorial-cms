<?php 
return array (
  'resolverStrategy' => 'SilverStripe\\GraphQL\\Schema\\Resolver\\DefaultResolverStrategy::getResolverMethod',
  'defaultResolver' => 'SilverStripe\\GraphQL\\Schema\\Resolver\\DefaultResolver::defaultFieldResolver',
  'modelCreators' => 
  array (
    0 => 'SilverStripe\\GraphQL\\Schema\\DataObject\\ModelCreator',
  ),
  'modelConfig' => 
  array (
    'DataObject' => 
    array (
      'type_formatter' => 'SilverStripe\\Core\\ClassInfo::shortName',
      'type_prefix' => '',
      'type_mapping' => 
      array (
        'DNADesign\\Elemental\\Models\\BaseElement' => 'Block',
        'DNADesign\\Elemental\\Models\\ElementalArea' => 'ElementalArea',
      ),
      'base_fields' => 
      array (
        'ID' => 'ID!',
      ),
      'plugins' => 
      array (
        'dbFieldArgs' => true,
        'dbFieldTypes' => 
        array (
          'ignore' => 
          array (
            'className' => true,
          ),
          'before' => 'scalarDBField',
        ),
        'inheritance' => 
        array (
          'useUnionQueries' => false,
          'after' => 'versioning',
        ),
        'scalarDBField' => 
        array (
          'after' => 'dbFieldArgs',
        ),
        'inheritedPlugins' => 
        array (
          'after' => '*',
        ),
        'versioning' => 
        array (
          'before' => 'inheritance',
        ),
      ),
      'operations' => 
      array (
        'read' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\ReadCreator',
          'plugins' => 
          array (
            'paginateList' => true,
            'canView' => 
            array (
              'after' => '*',
            ),
            'readVersion' => 
            array (
              'before' => 'paginateList',
            ),
            'getByLink' => 
            array (
              'after' => 'filter',
            ),
            'filter' => 
            array (
              'before' => 'paginateList',
            ),
            'sort' => 
            array (
              'before' => 'paginateList',
            ),
          ),
        ),
        'readOne' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\ReadOneCreator',
          'plugins' => 
          array (
            'firstResult' => 
            array (
              'after' => '*',
            ),
            'canView' => 
            array (
              'after' => '*',
            ),
            'readVersion' => 
            array (
              'before' => 'firstResult',
            ),
            'getByLink' => 
            array (
              'after' => 'filter',
            ),
            'filter' => true,
            'sort' => true,
          ),
        ),
        'delete' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\DeleteCreator',
          'plugins' => 
          array (
            'unpublishOnDelete' => true,
          ),
        ),
        'update' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\UpdateCreator',
        ),
        'create' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\CreateCreator',
        ),
        'copyToStage' => 
        array (
          'class' => 'SilverStripe\\Versioned\\GraphQL\\Operations\\CopyToStageCreator',
        ),
        'publish' => 
        array (
          'class' => 'SilverStripe\\Versioned\\GraphQL\\Operations\\PublishCreator',
        ),
        'unpublish' => 
        array (
          'class' => 'SilverStripe\\Versioned\\GraphQL\\Operations\\UnpublishCreator',
        ),
        'rollback' => 
        array (
          'class' => 'SilverStripe\\Versioned\\GraphQL\\Operations\\RollbackCreator',
        ),
      ),
      'nested_query_plugins' => 
      array (
        'paginateList' => true,
        'filter' => 
        array (
          'before' => 'paginateList',
        ),
        'sort' => 
        array (
          'before' => 'paginateList',
        ),
        'canView' => 
        array (
          'after' => 'paginateList',
        ),
      ),
    ),
  ),
  'resolvers' => 
  array (
    0 => 'DNADesign\\Elemental\\GraphQL\\Resolvers\\Resolver',
    1 => 'SilverStripe\\AssetAdmin\\GraphQL\\Resolvers\\AssetAdminResolver',
    2 => 'SilverStripe\\AssetAdmin\\GraphQL\\Resolvers\\FileTypeResolver',
    3 => 'SilverStripe\\AssetAdmin\\GraphQL\\Resolvers\\FolderTypeResolver',
    4 => 'SilverStripe\\AssetAdmin\\GraphQL\\Resolvers\\PublicationResolver',
    5 => 'SilverStripe\\CMS\\GraphQL\\Resolver',
  ),
  'execute' => 
  array (
    0 => 'SilverStripe\\AssetAdmin\\GraphQL\\Schema\\Builder',
  ),
  'typeMapping' => 
  array (
    'DNADesign\\Elemental\\Models\\BaseElement' => 'Block',
    'DNADesign\\Elemental\\Models\\ElementalArea' => 'ElementalArea',
    'SilverStripe\\Security\\Member' => 'Member',
    'Page' => 'Page',
    'SilverStripe\\CMS\\Model\\SiteTree' => 'SiteTree',
  ),
  'fieldMapping' => 
  array (
    'Block' => 
    array (
      'id' => 
      array (
        0 => 'Block',
        1 => 'ID',
      ),
      'lastEdited' => 
      array (
        0 => 'Block',
        1 => 'LastEdited',
      ),
      'absoluteLink' => 
      array (
        0 => 'Block',
        1 => 'absoluteLink',
      ),
      'title' => 
      array (
        0 => 'Block',
        1 => 'Title',
      ),
      'showTitle' => 
      array (
        0 => 'Block',
        1 => 'ShowTitle',
      ),
      'sort' => 
      array (
        0 => 'Block',
        1 => 'Sort',
      ),
      'blockSchema' => 
      array (
        0 => 'Block',
        1 => 'blockSchema',
      ),
      'isPublished' => 
      array (
        0 => 'Block',
        1 => 'isPublished',
      ),
      'isLiveVersion' => 
      array (
        0 => 'Block',
        1 => 'isLiveVersion',
      ),
      'canCreate' => 
      array (
        0 => 'Block',
        1 => 'canCreate',
      ),
      'canPublish' => 
      array (
        0 => 'Block',
        1 => 'canPublish',
      ),
      'canUnpublish' => 
      array (
        0 => 'Block',
        1 => 'canUnpublish',
      ),
      'canDelete' => 
      array (
        0 => 'Block',
        1 => 'canDelete',
      ),
      'version' => 
      array (
        0 => 'Block',
        1 => 'Version',
      ),
      'versions' => 
      array (
        0 => 'Block',
        1 => 'versions',
      ),
    ),
    'ElementalArea' => 
    array (
      'id' => 
      array (
        0 => 'ElementalArea',
        1 => 'ID',
      ),
      'elements' => 
      array (
        0 => 'Block',
        1 => 'Elements',
      ),
      'version' => 
      array (
        0 => 'ElementalArea',
        1 => 'Version',
      ),
      'versions' => 
      array (
        0 => 'ElementalArea',
        1 => 'versions',
      ),
    ),
    'Member' => 
    array (
      'id' => 
      array (
        0 => 'Member',
        1 => 'ID',
      ),
      'firstName' => 
      array (
        0 => 'Member',
        1 => 'FirstName',
      ),
      'surname' => 
      array (
        0 => 'Member',
        1 => 'Surname',
      ),
    ),
    'Page' => 
    array (
      'id' => 
      array (
        0 => 'Page',
        1 => 'ID',
      ),
      'lastEdited' => 
      array (
        0 => 'Page',
        1 => 'LastEdited',
      ),
      'absoluteLink' => 
      array (
        0 => 'Page',
        1 => 'absoluteLink',
      ),
      'version' => 
      array (
        0 => 'Page',
        1 => 'Version',
      ),
      'versions' => 
      array (
        0 => 'Page',
        1 => 'versions',
      ),
    ),
    'SiteTree' => 
    array (
      'id' => 
      array (
        0 => 'SiteTree',
        1 => 'ID',
      ),
      'lastEdited' => 
      array (
        0 => 'SiteTree',
        1 => 'LastEdited',
      ),
      'absoluteLink' => 
      array (
        0 => 'SiteTree',
        1 => 'absoluteLink',
      ),
      'version' => 
      array (
        0 => 'SiteTree',
        1 => 'Version',
      ),
      'versions' => 
      array (
        0 => 'SiteTree',
        1 => 'versions',
      ),
    ),
  ),
);