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
    'BlockPage' => 'BlockPage',
    'ContentPage' => 'ContentPage',
    'ContactPage' => 'ContactPage',
    'File' => 'File',
    'Folder' => 'Folder',
    'Image' => 'Image',
    'BaseElement' => 'BaseElement',
    'ElementContent' => 'ElementContent',
    'ElementBanner' => 'ElementBanner',
    'FileBlock' => 'FileBlock',
  ),
  'typeMapping' => 
  array (
    'gorriecoe\\Link\\Models\\Link' => 'Link',
    'SilverStripe\\CMS\\Model\\SiteTree' => 'SiteTree',
    'SilverStripe\\Assets\\File' => 'File',
    'App\\Models\\BlockPage' => 'BlockPage',
    'DNADesign\\Elemental\\Models\\ElementalArea' => 'ElementalArea',
    'SilverStripe\\Security\\Group' => 'Group',
    'App\\Models\\ContactPage' => 'ContactPage',
    'SilverStripe\\Assets\\Image' => 'Image',
    'App\\Models\\ContentPage' => 'ContentPage',
    'DNADesign\\ElementalBanner\\Models\\ElementBanner' => 'ElementBanner',
    'DNADesign\\Images\\Models\\MultipleSizeImage' => 'MultipleSizeImage',
    'DNADesign\\Elemental\\Models\\BaseElement' => 'BaseElement',
    'DNADesign\\Elemental\\Models\\ElementContent' => 'ElementContent',
    'DNADesign\\Images\\Models\\SizedImage' => 'SizedImage',
    'Page' => 'Page',
    'SilverStripe\\Security\\Member' => 'Member',
    'SilverStripe\\Assets\\Shortcodes\\FileLink' => 'FileLink',
    'SilverStripe\\Assets\\Folder' => 'Folder',
    'SilverStripe\\ElementalFileBlock\\Block\\FileBlock' => 'FileBlock',
    'SilverStripe\\SiteConfig\\SiteConfig' => 'SiteConfig',
  ),
  'fieldMapping' => 
  array (
    'Link' => 
    array (
      'id' => 
      array (
        0 => 'Link',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'Link',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'Link',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'Link',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'Link',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'Link',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'Link',
        1 => 'Created',
      ),
      'anchor' => 
      array (
        0 => 'Link',
        1 => 'Anchor',
      ),
      'title' => 
      array (
        0 => 'Link',
        1 => 'Title',
      ),
      'type' => 
      array (
        0 => 'Link',
        1 => 'Type',
      ),
      'url' => 
      array (
        0 => 'Link',
        1 => 'URL',
      ),
      'email' => 
      array (
        0 => 'Link',
        1 => 'Email',
      ),
      'phone' => 
      array (
        0 => 'Link',
        1 => 'Phone',
      ),
      'openInNewWindow' => 
      array (
        0 => 'Link',
        1 => 'OpenInNewWindow',
      ),
      'selectedStyle' => 
      array (
        0 => 'Link',
        1 => 'SelectedStyle',
      ),
      'siteTreeID' => 
      array (
        0 => 'Link',
        1 => 'SiteTreeID',
      ),
      'fileID' => 
      array (
        0 => 'Link',
        1 => 'FileID',
      ),
      'siteTree' => 
      array (
        0 => 'SiteTree',
        1 => 'SiteTree',
      ),
      'file' => 
      array (
        0 => 'File',
        1 => 'File',
      ),
      'linkURL' => 
      array (
        0 => 'Link',
        1 => 'linkURL',
      ),
      'layout' => 
      array (
        0 => 'Link',
        1 => 'layout',
      ),
      'template' => 
      array (
        0 => 'Link',
        1 => 'template',
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
        0 => 'BlockPage',
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
    'BlockPage' => 
    array (
      'id' => 
      array (
        0 => 'BlockPage',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'BlockPage',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'BlockPage',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'BlockPage',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'BlockPage',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'BlockPage',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'BlockPage',
        1 => 'Created',
      ),
      'canViewType' => 
      array (
        0 => 'BlockPage',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'BlockPage',
        1 => 'CanEditType',
      ),
      'version' => 
      array (
        0 => 'BlockPage',
        1 => 'Version',
      ),
      'urlSegment' => 
      array (
        0 => 'BlockPage',
        1 => 'URLSegment',
      ),
      'title' => 
      array (
        0 => 'BlockPage',
        1 => 'Title',
      ),
      'menuTitle' => 
      array (
        0 => 'BlockPage',
        1 => 'MenuTitle',
      ),
      'content' => 
      array (
        0 => 'BlockPage',
        1 => 'Content',
      ),
      'metaDescription' => 
      array (
        0 => 'BlockPage',
        1 => 'MetaDescription',
      ),
      'extraMeta' => 
      array (
        0 => 'BlockPage',
        1 => 'ExtraMeta',
      ),
      'showInMenus' => 
      array (
        0 => 'BlockPage',
        1 => 'ShowInMenus',
      ),
      'showInSearch' => 
      array (
        0 => 'BlockPage',
        1 => 'ShowInSearch',
      ),
      'sort' => 
      array (
        0 => 'BlockPage',
        1 => 'Sort',
      ),
      'parentID' => 
      array (
        0 => 'BlockPage',
        1 => 'ParentID',
      ),
      'elementalAreaID' => 
      array (
        0 => 'BlockPage',
        1 => 'ElementalAreaID',
      ),
      'parent' => 
      array (
        0 => 'SiteTree',
        1 => 'Parent',
      ),
      'elementalArea' => 
      array (
        0 => 'ElementalArea',
        1 => 'ElementalArea',
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
        0 => 'BlockPage',
        1 => 'NavigationPath',
      ),
      'children' => 
      array (
        0 => 'BlockPage',
        1 => 'children',
      ),
      'navChildren' => 
      array (
        0 => 'BlockPage',
        1 => 'Children',
      ),
      'navParent' => 
      array (
        0 => 'BlockPage',
        1 => 'Parent',
      ),
      'link' => 
      array (
        0 => 'BlockPage',
        1 => 'link',
      ),
    ),
    'ElementalArea' => 
    array (
      'id' => 
      array (
        0 => 'ElementalArea',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'ElementalArea',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'ElementalArea',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'ElementalArea',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'ElementalArea',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'ElementalArea',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'ElementalArea',
        1 => 'Created',
      ),
      'version' => 
      array (
        0 => 'ElementalArea',
        1 => 'Version',
      ),
      'ownerClassName' => 
      array (
        0 => 'ElementalArea',
        1 => 'OwnerClassName',
      ),
      'elements' => 
      array (
        0 => 'BaseElement',
        1 => 'Elements',
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
    'ContactPage' => 
    array (
      'id' => 
      array (
        0 => 'ContactPage',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'ContactPage',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'ContactPage',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'ContactPage',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'ContactPage',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'ContactPage',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'ContactPage',
        1 => 'Created',
      ),
      'canViewType' => 
      array (
        0 => 'ContactPage',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'ContactPage',
        1 => 'CanEditType',
      ),
      'version' => 
      array (
        0 => 'ContactPage',
        1 => 'Version',
      ),
      'urlSegment' => 
      array (
        0 => 'ContactPage',
        1 => 'URLSegment',
      ),
      'title' => 
      array (
        0 => 'ContactPage',
        1 => 'Title',
      ),
      'menuTitle' => 
      array (
        0 => 'ContactPage',
        1 => 'MenuTitle',
      ),
      'content' => 
      array (
        0 => 'ContactPage',
        1 => 'Content',
      ),
      'metaDescription' => 
      array (
        0 => 'ContactPage',
        1 => 'MetaDescription',
      ),
      'extraMeta' => 
      array (
        0 => 'ContactPage',
        1 => 'ExtraMeta',
      ),
      'showInMenus' => 
      array (
        0 => 'ContactPage',
        1 => 'ShowInMenus',
      ),
      'showInSearch' => 
      array (
        0 => 'ContactPage',
        1 => 'ShowInSearch',
      ),
      'sort' => 
      array (
        0 => 'ContactPage',
        1 => 'Sort',
      ),
      'parentID' => 
      array (
        0 => 'ContactPage',
        1 => 'ParentID',
      ),
      'bannerText' => 
      array (
        0 => 'ContactPage',
        1 => 'BannerText',
      ),
      'bannerImageID' => 
      array (
        0 => 'ContactPage',
        1 => 'BannerImageID',
      ),
      'phoneNumber' => 
      array (
        0 => 'ContactPage',
        1 => 'PhoneNumber',
      ),
      'emailAddress' => 
      array (
        0 => 'ContactPage',
        1 => 'EmailAddress',
      ),
      'physicalAddress' => 
      array (
        0 => 'ContactPage',
        1 => 'PhysicalAddress',
      ),
      'parent' => 
      array (
        0 => 'SiteTree',
        1 => 'Parent',
      ),
      'bannerImage' => 
      array (
        0 => 'Image',
        1 => 'BannerImage',
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
        0 => 'ContactPage',
        1 => 'NavigationPath',
      ),
      'children' => 
      array (
        0 => 'BlockPage',
        1 => 'children',
      ),
      'navChildren' => 
      array (
        0 => 'ContactPage',
        1 => 'Children',
      ),
      'navParent' => 
      array (
        0 => 'ContactPage',
        1 => 'Parent',
      ),
      'link' => 
      array (
        0 => 'ContactPage',
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
    'ContentPage' => 
    array (
      'id' => 
      array (
        0 => 'ContentPage',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'ContentPage',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'ContentPage',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'ContentPage',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'ContentPage',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'ContentPage',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'ContentPage',
        1 => 'Created',
      ),
      'canViewType' => 
      array (
        0 => 'ContentPage',
        1 => 'CanViewType',
      ),
      'canEditType' => 
      array (
        0 => 'ContentPage',
        1 => 'CanEditType',
      ),
      'version' => 
      array (
        0 => 'ContentPage',
        1 => 'Version',
      ),
      'urlSegment' => 
      array (
        0 => 'ContentPage',
        1 => 'URLSegment',
      ),
      'title' => 
      array (
        0 => 'ContentPage',
        1 => 'Title',
      ),
      'menuTitle' => 
      array (
        0 => 'ContentPage',
        1 => 'MenuTitle',
      ),
      'content' => 
      array (
        0 => 'ContentPage',
        1 => 'Content',
      ),
      'metaDescription' => 
      array (
        0 => 'ContentPage',
        1 => 'MetaDescription',
      ),
      'extraMeta' => 
      array (
        0 => 'ContentPage',
        1 => 'ExtraMeta',
      ),
      'showInMenus' => 
      array (
        0 => 'ContentPage',
        1 => 'ShowInMenus',
      ),
      'showInSearch' => 
      array (
        0 => 'ContentPage',
        1 => 'ShowInSearch',
      ),
      'sort' => 
      array (
        0 => 'ContentPage',
        1 => 'Sort',
      ),
      'parentID' => 
      array (
        0 => 'ContentPage',
        1 => 'ParentID',
      ),
      'bannerText' => 
      array (
        0 => 'ContentPage',
        1 => 'BannerText',
      ),
      'bannerImageID' => 
      array (
        0 => 'ContentPage',
        1 => 'BannerImageID',
      ),
      'parent' => 
      array (
        0 => 'SiteTree',
        1 => 'Parent',
      ),
      'bannerImage' => 
      array (
        0 => 'Image',
        1 => 'BannerImage',
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
        0 => 'ContentPage',
        1 => 'NavigationPath',
      ),
      'children' => 
      array (
        0 => 'BlockPage',
        1 => 'children',
      ),
      'navChildren' => 
      array (
        0 => 'ContentPage',
        1 => 'Children',
      ),
      'navParent' => 
      array (
        0 => 'ContentPage',
        1 => 'Parent',
      ),
      'link' => 
      array (
        0 => 'ContentPage',
        1 => 'link',
      ),
    ),
    'ElementBanner' => 
    array (
      'id' => 
      array (
        0 => 'ElementBanner',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'ElementBanner',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'ElementBanner',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'ElementBanner',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'ElementBanner',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'ElementBanner',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'ElementBanner',
        1 => 'Created',
      ),
      'version' => 
      array (
        0 => 'ElementBanner',
        1 => 'Version',
      ),
      'title' => 
      array (
        0 => 'ElementBanner',
        1 => 'Title',
      ),
      'showTitle' => 
      array (
        0 => 'ElementBanner',
        1 => 'ShowTitle',
      ),
      'sort' => 
      array (
        0 => 'ElementBanner',
        1 => 'Sort',
      ),
      'extraClass' => 
      array (
        0 => 'ElementBanner',
        1 => 'ExtraClass',
      ),
      'style' => 
      array (
        0 => 'ElementBanner',
        1 => 'Style',
      ),
      'parentID' => 
      array (
        0 => 'ElementBanner',
        1 => 'ParentID',
      ),
      'content' => 
      array (
        0 => 'ElementBanner',
        1 => 'Content',
      ),
      'textAlignment' => 
      array (
        0 => 'ElementBanner',
        1 => 'TextAlignment',
      ),
      'bannerImageID' => 
      array (
        0 => 'ElementBanner',
        1 => 'BannerImageID',
      ),
      'bannerLinkID' => 
      array (
        0 => 'ElementBanner',
        1 => 'BannerLinkID',
      ),
      'parent' => 
      array (
        0 => 'ElementalArea',
        1 => 'Parent',
      ),
      'bannerImage' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'BannerImage',
      ),
      'bannerLink' => 
      array (
        0 => 'Link',
        1 => 'BannerLink',
      ),
      'link' => 
      array (
        0 => 'ElementBanner',
        1 => 'link',
      ),
    ),
    'MultipleSizeImage' => 
    array (
      'id' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'Created',
      ),
      'name' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'Name',
      ),
      'lazyload' => 
      array (
        0 => 'MultipleSizeImage',
        1 => 'Lazyload',
      ),
      'images' => 
      array (
        0 => 'SizedImage',
        1 => 'Images',
      ),
    ),
    'BaseElement' => 
    array (
      'id' => 
      array (
        0 => 'BaseElement',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'BaseElement',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'BaseElement',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'BaseElement',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'BaseElement',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'BaseElement',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'BaseElement',
        1 => 'Created',
      ),
      'version' => 
      array (
        0 => 'BaseElement',
        1 => 'Version',
      ),
      'title' => 
      array (
        0 => 'BaseElement',
        1 => 'Title',
      ),
      'showTitle' => 
      array (
        0 => 'BaseElement',
        1 => 'ShowTitle',
      ),
      'sort' => 
      array (
        0 => 'BaseElement',
        1 => 'Sort',
      ),
      'extraClass' => 
      array (
        0 => 'BaseElement',
        1 => 'ExtraClass',
      ),
      'style' => 
      array (
        0 => 'BaseElement',
        1 => 'Style',
      ),
      'parentID' => 
      array (
        0 => 'BaseElement',
        1 => 'ParentID',
      ),
      'parent' => 
      array (
        0 => 'ElementalArea',
        1 => 'Parent',
      ),
      'link' => 
      array (
        0 => 'BaseElement',
        1 => 'link',
      ),
    ),
    'ElementContent' => 
    array (
      'id' => 
      array (
        0 => 'ElementContent',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'ElementContent',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'ElementContent',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'ElementContent',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'ElementContent',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'ElementContent',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'ElementContent',
        1 => 'Created',
      ),
      'version' => 
      array (
        0 => 'ElementContent',
        1 => 'Version',
      ),
      'title' => 
      array (
        0 => 'ElementContent',
        1 => 'Title',
      ),
      'showTitle' => 
      array (
        0 => 'ElementContent',
        1 => 'ShowTitle',
      ),
      'sort' => 
      array (
        0 => 'ElementContent',
        1 => 'Sort',
      ),
      'extraClass' => 
      array (
        0 => 'ElementContent',
        1 => 'ExtraClass',
      ),
      'style' => 
      array (
        0 => 'ElementContent',
        1 => 'Style',
      ),
      'parentID' => 
      array (
        0 => 'ElementContent',
        1 => 'ParentID',
      ),
      'html' => 
      array (
        0 => 'ElementContent',
        1 => 'HTML',
      ),
      'parent' => 
      array (
        0 => 'ElementalArea',
        1 => 'Parent',
      ),
      'link' => 
      array (
        0 => 'ElementContent',
        1 => 'link',
      ),
    ),
    'SizedImage' => 
    array (
      'id' => 
      array (
        0 => 'SizedImage',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'SizedImage',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'SizedImage',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'SizedImage',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'SizedImage',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'SizedImage',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'SizedImage',
        1 => 'Created',
      ),
      'name' => 
      array (
        0 => 'SizedImage',
        1 => 'Name',
      ),
      'size' => 
      array (
        0 => 'SizedImage',
        1 => 'Size',
      ),
      'rule' => 
      array (
        0 => 'SizedImage',
        1 => 'Rule',
      ),
      'imageID' => 
      array (
        0 => 'SizedImage',
        1 => 'ImageID',
      ),
      'image' => 
      array (
        0 => 'Image',
        1 => 'Image',
      ),
    ),
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
        0 => 'BlockPage',
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
    'FileBlock' => 
    array (
      'id' => 
      array (
        0 => 'FileBlock',
        1 => 'ID',
      ),
      'hashID' => 
      array (
        0 => 'FileBlock',
        1 => 'hashID',
      ),
      'typeAncestry' => 
      array (
        0 => 'FileBlock',
        1 => 'typeAncestry',
      ),
      'exists' => 
      array (
        0 => 'FileBlock',
        1 => 'exists',
      ),
      'className' => 
      array (
        0 => 'FileBlock',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'FileBlock',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'FileBlock',
        1 => 'Created',
      ),
      'version' => 
      array (
        0 => 'FileBlock',
        1 => 'Version',
      ),
      'title' => 
      array (
        0 => 'FileBlock',
        1 => 'Title',
      ),
      'showTitle' => 
      array (
        0 => 'FileBlock',
        1 => 'ShowTitle',
      ),
      'sort' => 
      array (
        0 => 'FileBlock',
        1 => 'Sort',
      ),
      'extraClass' => 
      array (
        0 => 'FileBlock',
        1 => 'ExtraClass',
      ),
      'style' => 
      array (
        0 => 'FileBlock',
        1 => 'Style',
      ),
      'parentID' => 
      array (
        0 => 'FileBlock',
        1 => 'ParentID',
      ),
      'fileID' => 
      array (
        0 => 'FileBlock',
        1 => 'FileID',
      ),
      'parent' => 
      array (
        0 => 'ElementalArea',
        1 => 'Parent',
      ),
      'file' => 
      array (
        0 => 'File',
        1 => 'File',
      ),
      'link' => 
      array (
        0 => 'FileBlock',
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