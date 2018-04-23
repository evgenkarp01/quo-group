<?php  return array (
  1 => 
  array (
    'basePath' => 'assets/site/images/',
    'basePathRelative' => true,
    'baseUrl' => 'assets/site/images/',
    'baseUrlRelative' => true,
    'allowedFileTypes' => '',
    'imageExtensions' => 'jpg,jpeg,png,gif,svg',
    'thumbnailType' => 'png',
    'thumbnailQuality' => 90,
    'skipFiles' => '.svn,.git,_notes,nbproject,.idea,.DS_Store',
    'id' => NULL,
    'name' => 'images',
    'description' => '',
    'class_key' => 'modFileMediaSource',
    'properties' => 
    array (
      'basePath' => 
      array (
        'name' => 'basePath',
        'desc' => 'prop_file.basePath_desc',
        'type' => 'textfield',
        'options' => 
        array (
        ),
        'value' => 'assets/site/images/',
        'lexicon' => 'core:source',
      ),
      'baseUrl' => 
      array (
        'name' => 'baseUrl',
        'desc' => 'prop_file.baseUrl_desc',
        'type' => 'textfield',
        'options' => 
        array (
        ),
        'value' => 'assets/site/images/',
        'lexicon' => 'core:source',
      ),
    ),
    'is_stream' => true,
    'source' => 2,
    'object_class' => 'modTemplateVar',
    'object' => 1,
    'context_key' => 'web',
    'source_class_key' => 'sources.modFileMediaSource',
  ),
);