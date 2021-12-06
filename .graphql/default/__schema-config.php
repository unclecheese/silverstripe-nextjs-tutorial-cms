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
      ),
      'base_fields' => 
      array (
        'ID' => 'ID!',
        'HashID' => 'String!',
        'TypeAncestry' => '[[String]]',
        'exists' => 'Boolean!',
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
        'versioning' => false,
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
            'filter' => 
            array (
              'before' => 'paginateList',
            ),
            'getByLink' => 
            array (
              'after' => 'filter',
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
      'parseShortcodes' => true,
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
  'execute' => 
  array (
    0 => 'SilverStripe\\Headless\\GraphQL\\ModelLoader',
    1 => 'SilverStripe\\Headless\\GraphQL\\OperationLoader',
  ),
  'resolvers' => 
  array (
    0 => 'SilverStripe\\NextJS\\GraphQL\\Resolver',
  ),
  'eagerLoadTypes' => 
  array (
    'SiteTree' => 'SiteTree',
    'Page' => 'Page',
    'File' => 'File',
    'Folder' => 'Folder',
    'Image' => 'Image',
  ),
  'typeMapping' => 
  array (
    'Page' => 'Page',
    'SilverStripe\\CMS\\Model\\SiteTree' => 'SiteTree',
    'SilverStripe\\Security\\Group' => 'Group',
    'SilverStripe\\Assets\\File' => 'File',
    'SilverStripe\\Security\\Member' => 'Member',
    'SilverStripe\\Assets\\Shortcodes\\FileLink' => 'FileLink',
    'SilverStripe\\Assets\\Folder' => 'Folder',
    'SilverStripe\\Assets\\Image' => 'Image',
    'SilverStripe\\SiteConfig\\SiteConfig' => 'SiteConfig',
  ),
  'fieldMapping' => 
  array (
    'Page' => 
    array (
      'id' => 
      array (
        0 => 'Page',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'Page',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'Page',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'Page',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'Page',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'Page',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'Page',
        1 => 'Created',
      ),
      'canViewType' => 
      array (
        0 => 'Page',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'Page',
        1 => 'CanEditType',
      ),
      'version' => 
      array (
        0 => 'Page',
        1 => 'Version',
      ),
      'urlSegment' => 
      array (
        0 => 'Page',
        1 => 'URLSegment',
      ),
      'title' => 
      array (
        0 => 'Page',
        1 => 'Title',
      ),
      'menuTitle' => 
      array (
        0 => 'Page',
        1 => 'MenuTitle',
      ),
      'content' => 
      array (
        0 => 'Page',
        1 => 'Content',
      ),
      'metaDescription' => 
      array (
        0 => 'Page',
        1 => 'MetaDescription',
      ),
      'extraMeta' => 
      array (
        0 => 'Page',
        1 => 'ExtraMeta',
      ),
      'showInMenus' => 
      array (
        0 => 'Page',
        1 => 'ShowInMenus',
      ),
      'showInSearch' => 
      array (
        0 => 'Page',
        1 => 'ShowInSearch',
      ),
      'sort' => 
      array (
        0 => 'Page',
        1 => 'Sort',
      ),
      'parentID' => 
      array (
        0 => 'Page',
        1 => 'ParentID',
      ),
      'parent' => 
      array (
        0 => 'SiteTree',
        1 => 'Parent',
      ),
      'viewerGroups' => 
      array (
        0 => 'Group',
        1 => 'ViewerGroups',
      ),
      'editorGroups' => 
      array (
        0 => 'Group',
        1 => 'EditorGroups',
      ),
      'breadcrumbs' => 
      array (
        0 => 'Page',
        1 => 'NavigationPath',
      ),
      'children' => 
      array (
        0 => 'Page',
        1 => 'children',
      ),
      'navChildren' => 
      array (
        0 => 'Page',
        1 => 'Children',
      ),
      'navParent' => 
      array (
        0 => 'Page',
        1 => 'Parent',
      ),
      'link' => 
      array (
        0 => 'Page',
        1 => 'link',
      ),
    ),
    'SiteTree' => 
    array (
      'id' => 
      array (
        0 => 'SiteTree',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'SiteTree',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'SiteTree',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'SiteTree',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'SiteTree',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'SiteTree',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'SiteTree',
        1 => 'Created',
      ),
      'canViewType' => 
      array (
        0 => 'SiteTree',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'SiteTree',
        1 => 'CanEditType',
      ),
      'version' => 
      array (
        0 => 'SiteTree',
        1 => 'Version',
      ),
      'urlSegment' => 
      array (
        0 => 'SiteTree',
        1 => 'URLSegment',
      ),
      'title' => 
      array (
        0 => 'SiteTree',
        1 => 'Title',
      ),
      'menuTitle' => 
      array (
        0 => 'SiteTree',
        1 => 'MenuTitle',
      ),
      'content' => 
      array (
        0 => 'SiteTree',
        1 => 'Content',
      ),
      'metaDescription' => 
      array (
        0 => 'SiteTree',
        1 => 'MetaDescription',
      ),
      'extraMeta' => 
      array (
        0 => 'SiteTree',
        1 => 'ExtraMeta',
      ),
      'showInMenus' => 
      array (
        0 => 'SiteTree',
        1 => 'ShowInMenus',
      ),
      'showInSearch' => 
      array (
        0 => 'SiteTree',
        1 => 'ShowInSearch',
      ),
      'sort' => 
      array (
        0 => 'SiteTree',
        1 => 'Sort',
      ),
      'parentID' => 
      array (
        0 => 'SiteTree',
        1 => 'ParentID',
      ),
      'parent' => 
      array (
        0 => 'SiteTree',
        1 => 'Parent',
      ),
      'viewerGroups' => 
      array (
        0 => 'Group',
        1 => 'ViewerGroups',
      ),
      'editorGroups' => 
      array (
        0 => 'Group',
        1 => 'EditorGroups',
      ),
      'breadcrumbs' => 
      array (
        0 => 'SiteTree',
        1 => 'NavigationPath',
      ),
      'children' => 
      array (
        0 => 'Page',
        1 => 'children',
      ),
      'navChildren' => 
      array (
        0 => 'SiteTree',
        1 => 'Children',
      ),
      'navParent' => 
      array (
        0 => 'SiteTree',
        1 => 'Parent',
      ),
      'link' => 
      array (
        0 => 'SiteTree',
        1 => 'link',
      ),
    ),
    'Group' => 
    array (
      'id' => 
      array (
        0 => 'Group',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'Group',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'Group',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'Group',
        1 => 'exists',
      ),
    ),
    'File' => 
    array (
      'id' => 
      array (
        0 => 'File',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'File',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'File',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'File',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'File',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'File',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'File',
        1 => 'Created',
      ),
      'version' => 
      array (
        0 => 'File',
        1 => 'Version',
      ),
      'canViewType' => 
      array (
        0 => 'File',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'File',
        1 => 'CanEditType',
      ),
      'name' => 
      array (
        0 => 'File',
        1 => 'Name',
      ),
      'title' => 
      array (
        0 => 'File',
        1 => 'Title',
      ),
      'showInSearch' => 
      array (
        0 => 'File',
        1 => 'ShowInSearch',
      ),
      'parentID' => 
      array (
        0 => 'File',
        1 => 'ParentID',
      ),
      'ownerID' => 
      array (
        0 => 'File',
        1 => 'OwnerID',
      ),
      'fileHash' => 
      array (
        0 => 'File',
        1 => 'FileHash',
      ),
      'fileFilename' => 
      array (
        0 => 'File',
        1 => 'FileFilename',
      ),
      'fileVariant' => 
      array (
        0 => 'File',
        1 => 'FileVariant',
      ),
      'file' => 
      array (
        0 => 'File',
        1 => 'File',
      ),
      'parent' => 
      array (
        0 => 'File',
        1 => 'Parent',
      ),
      'owner' => 
      array (
        0 => 'Member',
        1 => 'Owner',
      ),
      'backLinks' => 
      array (
        0 => 'FileLink',
        1 => 'BackLinks',
      ),
      'viewerGroups' => 
      array (
        0 => 'Group',
        1 => 'ViewerGroups',
      ),
      'editorGroups' => 
      array (
        0 => 'Group',
        1 => 'EditorGroups',
      ),
      'absoluteLink' => 
      array (
        0 => 'File',
        1 => 'absoluteLink',
      ),
      'link' => 
      array (
        0 => 'File',
        1 => 'link',
      ),
    ),
    'Member' => 
    array (
      'id' => 
      array (
        0 => 'Member',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'Member',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'Member',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'Member',
        1 => 'exists',
      ),
    ),
    'FileLink' => 
    array (
      'id' => 
      array (
        0 => 'FileLink',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'FileLink',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'FileLink',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'FileLink',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'FileLink',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'FileLink',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'FileLink',
        1 => 'Created',
      ),
      'linkedID' => 
      array (
        0 => 'FileLink',
        1 => 'LinkedID',
      ),
      'parentID' => 
      array (
        0 => 'FileLink',
        1 => 'ParentID',
      ),
      'parentClass' => 
      array (
        0 => 'FileLink',
        1 => 'ParentClass',
      ),
      'parent' => 
      array (
        0 => 'FileLink',
        1 => 'Parent',
      ),
      'linked' => 
      array (
        0 => 'File',
        1 => 'Linked',
      ),
    ),
    'Folder' => 
    array (
      'id' => 
      array (
        0 => 'Folder',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'Folder',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'Folder',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'Folder',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'Folder',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'Folder',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'Folder',
        1 => 'Created',
      ),
      'version' => 
      array (
        0 => 'Folder',
        1 => 'Version',
      ),
      'canViewType' => 
      array (
        0 => 'Folder',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'Folder',
        1 => 'CanEditType',
      ),
      'name' => 
      array (
        0 => 'Folder',
        1 => 'Name',
      ),
      'title' => 
      array (
        0 => 'Folder',
        1 => 'Title',
      ),
      'showInSearch' => 
      array (
        0 => 'Folder',
        1 => 'ShowInSearch',
      ),
      'parentID' => 
      array (
        0 => 'Folder',
        1 => 'ParentID',
      ),
      'ownerID' => 
      array (
        0 => 'Folder',
        1 => 'OwnerID',
      ),
      'fileHash' => 
      array (
        0 => 'Folder',
        1 => 'FileHash',
      ),
      'fileFilename' => 
      array (
        0 => 'Folder',
        1 => 'FileFilename',
      ),
      'fileVariant' => 
      array (
        0 => 'Folder',
        1 => 'FileVariant',
      ),
      'file' => 
      array (
        0 => 'Folder',
        1 => 'File',
      ),
      'parent' => 
      array (
        0 => 'File',
        1 => 'Parent',
      ),
      'owner' => 
      array (
        0 => 'Member',
        1 => 'Owner',
      ),
      'backLinks' => 
      array (
        0 => 'FileLink',
        1 => 'BackLinks',
      ),
      'viewerGroups' => 
      array (
        0 => 'Group',
        1 => 'ViewerGroups',
      ),
      'editorGroups' => 
      array (
        0 => 'Group',
        1 => 'EditorGroups',
      ),
      'absoluteLink' => 
      array (
        0 => 'Folder',
        1 => 'absoluteLink',
      ),
      'link' => 
      array (
        0 => 'Folder',
        1 => 'link',
      ),
    ),
    'Image' => 
    array (
      'id' => 
      array (
        0 => 'Image',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'Image',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'Image',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'Image',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'Image',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'Image',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'Image',
        1 => 'Created',
      ),
      'version' => 
      array (
        0 => 'Image',
        1 => 'Version',
      ),
      'canViewType' => 
      array (
        0 => 'Image',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'Image',
        1 => 'CanEditType',
      ),
      'name' => 
      array (
        0 => 'Image',
        1 => 'Name',
      ),
      'title' => 
      array (
        0 => 'Image',
        1 => 'Title',
      ),
      'showInSearch' => 
      array (
        0 => 'Image',
        1 => 'ShowInSearch',
      ),
      'parentID' => 
      array (
        0 => 'Image',
        1 => 'ParentID',
      ),
      'ownerID' => 
      array (
        0 => 'Image',
        1 => 'OwnerID',
      ),
      'fileHash' => 
      array (
        0 => 'Image',
        1 => 'FileHash',
      ),
      'fileFilename' => 
      array (
        0 => 'Image',
        1 => 'FileFilename',
      ),
      'fileVariant' => 
      array (
        0 => 'Image',
        1 => 'FileVariant',
      ),
      'file' => 
      array (
        0 => 'Image',
        1 => 'File',
      ),
      'parent' => 
      array (
        0 => 'File',
        1 => 'Parent',
      ),
      'owner' => 
      array (
        0 => 'Member',
        1 => 'Owner',
      ),
      'backLinks' => 
      array (
        0 => 'FileLink',
        1 => 'BackLinks',
      ),
      'viewerGroups' => 
      array (
        0 => 'Group',
        1 => 'ViewerGroups',
      ),
      'editorGroups' => 
      array (
        0 => 'Group',
        1 => 'EditorGroups',
      ),
      'absoluteLink' => 
      array (
        0 => 'Image',
        1 => 'absoluteLink',
      ),
      'link' => 
      array (
        0 => 'Image',
        1 => 'link',
      ),
    ),
    'SiteConfig' => 
    array (
      'id' => 
      array (
        0 => 'SiteConfig',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'SiteConfig',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'SiteConfig',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'SiteConfig',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'SiteConfig',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'SiteConfig',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'SiteConfig',
        1 => 'Created',
      ),
      'title' => 
      array (
        0 => 'SiteConfig',
        1 => 'Title',
      ),
      'tagline' => 
      array (
        0 => 'SiteConfig',
        1 => 'Tagline',
      ),
      'canViewType' => 
      array (
        0 => 'SiteConfig',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'SiteConfig',
        1 => 'CanEditType',
      ),
      'canCreateTopLevelType' => 
      array (
        0 => 'SiteConfig',
        1 => 'CanCreateTopLevelType',
      ),
      'viewerGroups' => 
      array (
        0 => 'Group',
        1 => 'ViewerGroups',
      ),
      'editorGroups' => 
      array (
        0 => 'Group',
        1 => 'EditorGroups',
      ),
      'createTopLevelGroups' => 
      array (
        0 => 'Group',
        1 => 'CreateTopLevelGroups',
      ),
    ),
  ),
);