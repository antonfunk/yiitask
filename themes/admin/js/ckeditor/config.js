/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'de';
	//config.width = 700;
	config.autoGrow_minHeight = 600;
	config.autoGrow_maxHeight = 600;
	config.toolbar = [
		['Source','-','Bold','Italic','Underline','Strike','-','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','-','NumberedList','BulletedList','-','TextColor'],
		['Link','Unlink','-','Table'],
		['RemoveFormat']

	];

	config.linkShowAdvancedTab = false;
};
