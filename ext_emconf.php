<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "news".
 *
 * Auto generated 06-07-2013 23:45
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'News system',
	'description' => 'Versatile news extension, based on extbase & fluid. Editor friendly, default integration of social sharing and many other features',
	'category' => 'fe',
	'author' => 'Georg Ringer',
	'author_email' => 'typo3@ringerge.org',
	'shy' => '',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 1,
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '2.2.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.5-6.1.99',
			'php' => '5.3.0-0.0.0',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:327:{s:20:"class.ext_update.php";s:4:"77f6";s:16:"ext_autoload.php";s:4:"401d";s:21:"ext_conf_template.txt";s:4:"63b2";s:12:"ext_icon.gif";s:4:"777b";s:17:"ext_localconf.php";s:4:"71f6";s:14:"ext_tables.php";s:4:"cf55";s:14:"ext_tables.sql";s:4:"dce0";s:9:"Readme.md";s:4:"9d78";s:35:"Classes/Cache/ClassCacheBuilder.php";s:4:"aeb6";s:47:"Classes/Controller/AdministrationController.php";s:4:"e37d";s:41:"Classes/Controller/CategoryController.php";s:4:"27b2";s:39:"Classes/Controller/ImportController.php";s:4:"7168";s:41:"Classes/Controller/NewsBaseController.php";s:4:"116d";s:37:"Classes/Controller/NewsController.php";s:4:"5978";s:36:"Classes/Controller/TagController.php";s:4:"8e33";s:33:"Classes/Domain/Model/Category.php";s:4:"290b";s:40:"Classes/Domain/Model/DemandInterface.php";s:4:"d3a7";s:29:"Classes/Domain/Model/File.php";s:4:"e65f";s:29:"Classes/Domain/Model/Link.php";s:4:"f442";s:30:"Classes/Domain/Model/Media.php";s:4:"f43b";s:29:"Classes/Domain/Model/News.php";s:4:"d2fb";s:36:"Classes/Domain/Model/NewsDefault.php";s:4:"7f5e";s:37:"Classes/Domain/Model/NewsExternal.php";s:4:"9e30";s:37:"Classes/Domain/Model/NewsInternal.php";s:4:"5780";s:28:"Classes/Domain/Model/Tag.php";s:4:"9763";s:34:"Classes/Domain/Model/TtContent.php";s:4:"c521";s:49:"Classes/Domain/Model/Dto/AdministrationDemand.php";s:4:"86fc";s:44:"Classes/Domain/Model/Dto/EmConfiguration.php";s:4:"7910";s:39:"Classes/Domain/Model/Dto/NewsDemand.php";s:4:"48f3";s:35:"Classes/Domain/Model/Dto/Search.php";s:4:"9878";s:56:"Classes/Domain/Repository/AbstractDemandedRepository.php";s:4:"7647";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"6d73";s:57:"Classes/Domain/Repository/DemandedRepositoryInterface.php";s:4:"0d14";s:44:"Classes/Domain/Repository/FileRepository.php";s:4:"358a";s:44:"Classes/Domain/Repository/LinkRepository.php";s:4:"d61b";s:45:"Classes/Domain/Repository/MediaRepository.php";s:4:"5ae8";s:51:"Classes/Domain/Repository/NewsDefaultRepository.php";s:4:"ed2e";s:44:"Classes/Domain/Repository/NewsRepository.php";s:4:"42e3";s:43:"Classes/Domain/Repository/TagRepository.php";s:4:"6959";s:49:"Classes/Domain/Repository/TtContentRepository.php";s:4:"9719";s:48:"Classes/Domain/Service/CategoryImportService.php";s:4:"bd07";s:44:"Classes/Domain/Service/NewsImportService.php";s:4:"d7be";s:27:"Classes/Hooks/CmsLayout.php";s:4:"ea0a";s:31:"Classes/Hooks/ItemsProcFunc.php";s:4:"a5f5";s:24:"Classes/Hooks/Labels.php";s:4:"3d0c";s:33:"Classes/Hooks/SuggestReceiver.php";s:4:"dbc6";s:37:"Classes/Hooks/SuggestReceiverCall.php";s:4:"f556";s:29:"Classes/Hooks/T3libBefunc.php";s:4:"ae09";s:26:"Classes/Hooks/Tceforms.php";s:4:"9f56";s:25:"Classes/Hooks/Tcemain.php";s:4:"51f0";s:34:"Classes/Jobs/AbstractImportJob.php";s:4:"d6d0";s:35:"Classes/Jobs/ImportJobInterface.php";s:4:"c525";s:40:"Classes/Jobs/T3BlogCategoryImportJob.php";s:4:"e097";s:36:"Classes/Jobs/T3BlogNewsImportJob.php";s:4:"64d5";s:40:"Classes/Jobs/TTNewsCategoryImportJob.php";s:4:"603a";s:36:"Classes/Jobs/TTNewsNewsImportJob.php";s:4:"cf4f";s:40:"Classes/MediaRenderer/MediaInterface.php";s:4:"3760";s:35:"Classes/MediaRenderer/Audio/Mp3.php";s:4:"b15e";s:36:"Classes/MediaRenderer/Video/File.php";s:4:"9792";s:41:"Classes/MediaRenderer/Video/Quicktime.php";s:4:"c1bd";s:42:"Classes/MediaRenderer/Video/Videosites.php";s:4:"ceac";s:39:"Classes/MediaRenderer/Video/Youtube.php";s:4:"b2b1";s:32:"Classes/Service/CacheService.php";s:4:"9008";s:35:"Classes/Service/CategoryService.php";s:4:"9e3f";s:31:"Classes/Service/FileService.php";s:4:"978d";s:35:"Classes/Service/SettingsService.php";s:4:"6bc6";s:55:"Classes/Service/Import/DataProviderServiceInterface.php";s:4:"5eb7";s:60:"Classes/Service/Import/T3BlogCategoryDataProviderService.php";s:4:"b54e";s:56:"Classes/Service/Import/T3BlogNewsDataProviderService.php";s:4:"20eb";s:60:"Classes/Service/Import/TTNewsCategoryDataProviderService.php";s:4:"9a5a";s:56:"Classes/Service/Import/TTNewsNewsDataProviderService.php";s:4:"8fe4";s:49:"Classes/TreeProvider/DatabaseTreeDataProvider.php";s:4:"1dc2";s:36:"Classes/Utility/CategoryProvider.php";s:4:"3b54";s:33:"Classes/Utility/Compatibility.php";s:4:"4fd7";s:35:"Classes/Utility/EmConfiguration.php";s:4:"14c5";s:29:"Classes/Utility/ImportJob.php";s:4:"ddc3";s:24:"Classes/Utility/Page.php";s:4:"f843";s:23:"Classes/Utility/Url.php";s:4:"f57e";s:30:"Classes/Utility/Validation.php";s:4:"eb42";s:50:"Classes/ViewHelpers/CategoryChildrenViewHelper.php";s:4:"3e09";s:54:"Classes/ViewHelpers/ExcludeDisplayedNewsViewHelper.php";s:4:"71d5";s:44:"Classes/ViewHelpers/HeaderDataViewHelper.php";s:4:"9794";s:45:"Classes/ViewHelpers/IncludeFileViewHelper.php";s:4:"46ba";s:38:"Classes/ViewHelpers/LinkViewHelper.php";s:4:"6014";s:46:"Classes/ViewHelpers/MediaFactoryViewHelper.php";s:4:"2f45";s:41:"Classes/ViewHelpers/MetaTagViewHelper.php";s:4:"7dc0";s:40:"Classes/ViewHelpers/ObjectViewHelper.php";s:4:"a518";s:50:"Classes/ViewHelpers/PaginateBodytextViewHelper.php";s:4:"9c2d";s:44:"Classes/ViewHelpers/TargetLinkViewHelper.php";s:4:"3d5e";s:42:"Classes/ViewHelpers/TitleTagViewHelper.php";s:4:"3456";s:46:"Classes/ViewHelpers/Be/ClickmenuViewHelper.php";s:4:"4e04";s:50:"Classes/ViewHelpers/Be/MultiEditLinkViewHelper.php";s:4:"4cb9";s:58:"Classes/ViewHelpers/Be/Buttons/IconForRecordViewHelper.php";s:4:"3b00";s:49:"Classes/ViewHelpers/Be/Buttons/IconViewHelper.php";s:4:"3fcd";s:44:"Classes/ViewHelpers/Format/DamViewHelper.php";s:4:"92fc";s:45:"Classes/ViewHelpers/Format/DateViewHelper.php";s:4:"3d46";s:53:"Classes/ViewHelpers/Format/FileDownloadViewHelper.php";s:4:"0d8a";s:49:"Classes/ViewHelpers/Format/FileSizeViewHelper.php";s:4:"2a1d";s:44:"Classes/ViewHelpers/Format/HscViewHelper.php";s:4:"7475";s:59:"Classes/ViewHelpers/Format/HtmlentitiesDecodeViewHelper.php";s:4:"43a6";s:48:"Classes/ViewHelpers/Format/NothingViewHelper.php";s:4:"e1e9";s:50:"Classes/ViewHelpers/Format/StriptagsViewHelper.php";s:4:"c1bf";s:47:"Classes/ViewHelpers/Social/DisqusViewHelper.php";s:4:"68c6";s:51:"Classes/ViewHelpers/Social/GooglePlusViewHelper.php";s:4:"16cd";s:49:"Classes/ViewHelpers/Social/GravatarViewHelper.php";s:4:"ef9f";s:48:"Classes/ViewHelpers/Social/TwitterViewHelper.php";s:4:"68d3";s:57:"Classes/ViewHelpers/Social/Facebook/CommentViewHelper.php";s:4:"f71d";s:54:"Classes/ViewHelpers/Social/Facebook/LikeViewHelper.php";s:4:"cfc1";s:55:"Classes/ViewHelpers/Social/Facebook/ShareViewHelper.php";s:4:"7234";s:49:"Classes/ViewHelpers/Widget/PaginateViewHelper.php";s:4:"6a08";s:60:"Classes/ViewHelpers/Widget/Controller/PaginateController.php";s:4:"4bd6";s:41:"Configuration/FlexForms/flexform_news.xml";s:4:"4d4d";s:30:"Configuration/Tca/category.php";s:4:"26d9";s:26:"Configuration/Tca/file.php";s:4:"7831";s:26:"Configuration/Tca/link.php";s:4:"030a";s:27:"Configuration/Tca/media.php";s:4:"9db7";s:26:"Configuration/Tca/news.php";s:4:"2090";s:25:"Configuration/Tca/tag.php";s:4:"8b7a";s:38:"Configuration/TypoScript/constants.txt";s:4:"bcc1";s:34:"Configuration/TypoScript/setup.txt";s:4:"5e53";s:24:"Documentation/Images.txt";s:4:"8b6a";s:26:"Documentation/Includes.txt";s:4:"7990";s:23:"Documentation/Index.rst";s:4:"51f4";s:25:"Documentation/License.txt";s:4:"c3f9";s:26:"Documentation/Settings.yml";s:4:"3b56";s:28:"Documentation/Main/Index.rst";s:4:"5b6e";s:43:"Documentation/Main/Administration/Index.rst";s:4:"e569";s:75:"Documentation/Main/Administration/ReadBeforeInstallingOrUpdating/Images.txt";s:4:"6658";s:74:"Documentation/Main/Administration/ReadBeforeInstallingOrUpdating/Index.rst";s:4:"9ae6";s:51:"Documentation/Main/Administration/Realurl/Index.rst";s:4:"8c83";s:47:"Documentation/Main/Administration/Rss/Index.rst";s:4:"a1aa";s:44:"Documentation/Main/BreakingChanges/Index.rst";s:4:"b665";s:58:"Documentation/Main/BreakingChanges/From110To120/Images.txt";s:4:"fccb";s:57:"Documentation/Main/BreakingChanges/From110To120/Index.rst";s:4:"de51";s:38:"Documentation/Main/Changelog/2-1-0.rst";s:4:"baa7";s:38:"Documentation/Main/Changelog/2-2-0.rst";s:4:"aaab";s:38:"Documentation/Main/Changelog/Index.rst";s:4:"a009";s:42:"Documentation/Main/Configuration/Index.rst";s:4:"16da";s:73:"Documentation/Main/Configuration/ExtensionManagersConfiguration/Index.rst";s:4:"3478";s:49:"Documentation/Main/Configuration/Plugin/Index.rst";s:4:"21b7";s:52:"Documentation/Main/Configuration/Reference/Index.rst";s:4:"7e0d";s:60:"Documentation/Main/Configuration/ReferenceTsconfig/Index.rst";s:4:"5162";s:39:"Documentation/Main/Contribute/Index.rst";s:4:"df1f";s:39:"Documentation/Main/ExtendNews/Index.rst";s:4:"5484";s:55:"Documentation/Main/ExtendNews/ExtendFlexforms/Index.rst";s:4:"4382";s:50:"Documentation/Main/Images/manual_html_11cdfe72.gif";s:4:"d7ef";s:50:"Documentation/Main/Images/manual_html_16a05934.gif";s:4:"4949";s:50:"Documentation/Main/Images/manual_html_1be9c912.gif";s:4:"fccd";s:50:"Documentation/Main/Images/manual_html_3c561b14.gif";s:4:"db1b";s:50:"Documentation/Main/Images/manual_html_3c9c2593.png";s:4:"f048";s:50:"Documentation/Main/Images/manual_html_50bb30c2.gif";s:4:"0720";s:51:"Documentation/Main/Images/manual_html_m3418f72f.gif";s:4:"1b67";s:51:"Documentation/Main/Images/manual_html_m3730e0f9.gif";s:4:"a2b8";s:51:"Documentation/Main/Images/manual_html_m543552d2.png";s:4:"2f80";s:51:"Documentation/Main/Images/manual_html_m6c4904d6.gif";s:4:"d18e";s:41:"Documentation/Main/Introduction/Index.rst";s:4:"3d43";s:50:"Documentation/Main/Introduction/NeedHelp/Index.rst";s:4:"5bc8";s:51:"Documentation/Main/Introduction/SayThanks/Index.rst";s:4:"2680";s:54:"Documentation/Main/Introduction/Screenshots/Images.txt";s:4:"20c5";s:53:"Documentation/Main/Introduction/Screenshots/Index.rst";s:4:"fc08";s:61:"Documentation/Main/Introduction/SponsoringBugfixing/Index.rst";s:4:"b0b6";s:54:"Documentation/Main/Introduction/WhatDoesItDo/Index.rst";s:4:"c666";s:42:"Documentation/Main/KnownProblems/Index.rst";s:4:"172e";s:39:"Documentation/Main/Templating/Index.rst";s:4:"7a53";s:50:"Documentation/Main/Templating/Additional/Index.rst";s:4:"c8b3";s:45:"Documentation/Main/Templating/Start/Index.rst";s:4:"19ec";s:72:"Documentation/Main/Templating/ViewHelpers/CategoryChildrenViewHelper.rst";s:4:"4823";s:76:"Documentation/Main/Templating/ViewHelpers/ExcludeDisplayedNewsViewHelper.rst";s:4:"341c";s:66:"Documentation/Main/Templating/ViewHelpers/HeaderDataViewHelper.rst";s:4:"dcd1";s:67:"Documentation/Main/Templating/ViewHelpers/IncludeFileViewHelper.rst";s:4:"0c0f";s:51:"Documentation/Main/Templating/ViewHelpers/Index.rst";s:4:"1eae";s:60:"Documentation/Main/Templating/ViewHelpers/LinkViewHelper.rst";s:4:"670f";s:68:"Documentation/Main/Templating/ViewHelpers/MediaFactoryViewHelper.rst";s:4:"98b0";s:63:"Documentation/Main/Templating/ViewHelpers/MetaTagViewHelper.rst";s:4:"90de";s:62:"Documentation/Main/Templating/ViewHelpers/ObjectViewHelper.rst";s:4:"d3e5";s:72:"Documentation/Main/Templating/ViewHelpers/PaginateBodytextViewHelper.rst";s:4:"9a88";s:66:"Documentation/Main/Templating/ViewHelpers/TargetLinkViewHelper.rst";s:4:"8d7a";s:64:"Documentation/Main/Templating/ViewHelpers/TitleTagViewHelper.rst";s:4:"14db";s:68:"Documentation/Main/Templating/ViewHelpers/Be/ClickmenuViewHelper.rst";s:4:"3b75";s:72:"Documentation/Main/Templating/ViewHelpers/Be/MultiEditLinkViewHelper.rst";s:4:"b369";s:80:"Documentation/Main/Templating/ViewHelpers/Be/Buttons/IconForRecordViewHelper.rst";s:4:"2f34";s:71:"Documentation/Main/Templating/ViewHelpers/Be/Buttons/IconViewHelper.rst";s:4:"446d";s:66:"Documentation/Main/Templating/ViewHelpers/Format/DamViewHelper.rst";s:4:"8cc3";s:67:"Documentation/Main/Templating/ViewHelpers/Format/DateViewHelper.rst";s:4:"b8b8";s:75:"Documentation/Main/Templating/ViewHelpers/Format/FileDownloadViewHelper.rst";s:4:"fab6";s:71:"Documentation/Main/Templating/ViewHelpers/Format/FileSizeViewHelper.rst";s:4:"00ca";s:66:"Documentation/Main/Templating/ViewHelpers/Format/HscViewHelper.rst";s:4:"91e6";s:81:"Documentation/Main/Templating/ViewHelpers/Format/HtmlentitiesDecodeViewHelper.rst";s:4:"3cfc";s:70:"Documentation/Main/Templating/ViewHelpers/Format/NothingViewHelper.rst";s:4:"7c1f";s:72:"Documentation/Main/Templating/ViewHelpers/Format/StriptagsViewHelper.rst";s:4:"b0eb";s:69:"Documentation/Main/Templating/ViewHelpers/Social/DisqusViewHelper.rst";s:4:"7a54";s:73:"Documentation/Main/Templating/ViewHelpers/Social/GooglePlusViewHelper.rst";s:4:"65e4";s:71:"Documentation/Main/Templating/ViewHelpers/Social/GravatarViewHelper.rst";s:4:"dcd2";s:70:"Documentation/Main/Templating/ViewHelpers/Social/TwitterViewHelper.rst";s:4:"d077";s:79:"Documentation/Main/Templating/ViewHelpers/Social/Facebook/CommentViewHelper.rst";s:4:"df26";s:76:"Documentation/Main/Templating/ViewHelpers/Social/Facebook/LikeViewHelper.rst";s:4:"e66e";s:77:"Documentation/Main/Templating/ViewHelpers/Social/Facebook/ShareViewHelper.rst";s:4:"d593";s:71:"Documentation/Main/Templating/ViewHelpers/Widget/PaginateViewHelper.rst";s:4:"705c";s:37:"Documentation/Main/Tutorial/Index.rst";s:4:"419f";s:51:"Documentation/Main/Tutorial/ExtendingNews/Index.rst";s:4:"5906";s:55:"Documentation/Main/Tutorial/ExternalTutorials/Index.rst";s:4:"d104";s:74:"Documentation/Main/Tutorial/HowToAddASimpleNewsSystemToYourSite/Images.txt";s:4:"ea8d";s:73:"Documentation/Main/Tutorial/HowToAddASimpleNewsSystemToYourSite/Index.rst";s:4:"2fe7";s:55:"Documentation/Main/Tutorial/IntegrationWithTs/Index.rst";s:4:"4e89";s:57:"Documentation/Main/Tutorial/MigrationFromTtNews/Index.rst";s:4:"3e89";s:53:"Documentation/Main/Tutorial/PredefineFields/Index.rst";s:4:"2a1f";s:40:"Documentation/Main/UsersManual/Index.rst";s:4:"dd98";s:66:"Documentation/Main/UsersManual/AboutNewsCategoryRecords/Images.txt";s:4:"85de";s:65:"Documentation/Main/UsersManual/AboutNewsCategoryRecords/Index.rst";s:4:"f722";s:40:"Resources/Private/Language/locallang.xml";s:4:"e1e5";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"fdf8";s:53:"Resources/Private/Language/locallang_csh_category.xml";s:4:"3512";s:49:"Resources/Private/Language/locallang_csh_file.xml";s:4:"9445";s:54:"Resources/Private/Language/locallang_csh_flexforms.xml";s:4:"f7ad";s:49:"Resources/Private/Language/locallang_csh_link.xml";s:4:"65ec";s:50:"Resources/Private/Language/locallang_csh_media.xml";s:4:"9a8e";s:49:"Resources/Private/Language/locallang_csh_news.xml";s:4:"27aa";s:48:"Resources/Private/Language/locallang_csh_tag.xml";s:4:"12f0";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"305e";s:44:"Resources/Private/Language/locallang_mod.xml";s:4:"1793";s:58:"Resources/Private/Language/locallang_modadministration.xml";s:4:"dcb0";s:37:"Resources/Private/Layouts/Detail.html";s:4:"759f";s:38:"Resources/Private/Layouts/General.html";s:4:"4776";s:46:"Resources/Private/Layouts/Backend/Default.html";s:4:"b011";s:54:"Resources/Private/Partials/Administration/Buttons.html";s:4:"50b9";s:55:"Resources/Private/Partials/Administration/ListItem.html";s:4:"f446";s:46:"Resources/Private/Partials/Category/Items.html";s:4:"d268";s:53:"Resources/Private/Partials/Detail/MediaContainer.html";s:4:"571e";s:47:"Resources/Private/Partials/Detail/MediaDam.html";s:4:"cb3e";s:49:"Resources/Private/Partials/Detail/MediaImage.html";s:4:"ff73";s:49:"Resources/Private/Partials/Detail/MediaVideo.html";s:4:"705f";s:48:"Resources/Private/Partials/Detail/Opengraph.html";s:4:"5fa0";s:41:"Resources/Private/Partials/List/Item.html";s:4:"4e86";s:44:"Resources/Private/Php/class.news_wizicon.php";s:4:"d2b0";s:53:"Resources/Private/Templates/Administration/Index.html";s:4:"4850";s:62:"Resources/Private/Templates/Administration/NewsPidListing.html";s:4:"1942";s:46:"Resources/Private/Templates/Category/List.html";s:4:"b6e3";s:45:"Resources/Private/Templates/Import/Index.html";s:4:"8be9";s:46:"Resources/Private/Templates/News/DateMenu.html";s:4:"45e0";s:44:"Resources/Private/Templates/News/Detail.html";s:4:"f735";s:42:"Resources/Private/Templates/News/List.atom";s:4:"9c91";s:42:"Resources/Private/Templates/News/List.html";s:4:"033e";s:41:"Resources/Private/Templates/News/List.xml";s:4:"5535";s:48:"Resources/Private/Templates/News/SearchForm.html";s:4:"7545";s:50:"Resources/Private/Templates/News/SearchResult.html";s:4:"7fbb";s:41:"Resources/Private/Templates/Tag/List.html";s:4:"1afa";s:48:"Resources/Private/Templates/ViewHelpers/Flv.html";s:4:"22b2";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"a92f";s:39:"Resources/Public/Css/administration.css";s:4:"5583";s:35:"Resources/Public/Css/news-basic.css";s:4:"0b74";s:33:"Resources/Public/Icons/ce_wiz.gif";s:4:"628a";s:33:"Resources/Public/Icons/folder.gif";s:4:"ab9a";s:40:"Resources/Public/Icons/import_module.gif";s:4:"91b6";s:41:"Resources/Public/Icons/media_type_dam.gif";s:4:"999b";s:42:"Resources/Public/Icons/media_type_html.png";s:4:"2e14";s:43:"Resources/Public/Icons/media_type_image.png";s:4:"bd2e";s:48:"Resources/Public/Icons/media_type_multimedia.png";s:4:"094d";s:53:"Resources/Public/Icons/news_domain_model_category.gif";s:4:"659a";s:49:"Resources/Public/Icons/news_domain_model_file.gif";s:4:"e646";s:49:"Resources/Public/Icons/news_domain_model_link.gif";s:4:"a172";s:50:"Resources/Public/Icons/news_domain_model_media.gif";s:4:"8621";s:49:"Resources/Public/Icons/news_domain_model_news.gif";s:4:"46a1";s:58:"Resources/Public/Icons/news_domain_model_news_external.gif";s:4:"d7ad";s:58:"Resources/Public/Icons/news_domain_model_news_internal.gif";s:4:"c2cf";s:48:"Resources/Public/Icons/news_domain_model_tag.png";s:4:"5667";s:34:"Resources/Public/Icons/preview.gif";s:4:"4e9f";s:47:"Resources/Public/Images/dummy-preview-image.png";s:4:"8084";s:35:"Resources/Public/Images/topnews.png";s:4:"7e6b";s:62:"Resources/Public/JavaScript/Contrib/audioplayer-noswfobject.js";s:4:"cc36";s:58:"Resources/Public/JavaScript/Contrib/audioplayer-player.swf";s:4:"d6fa";s:59:"Resources/Public/JavaScript/Contrib/flowplayer-3.2.4.min.js";s:4:"fc41";s:56:"Resources/Public/JavaScript/Contrib/flowplayer-3.2.5.swf";s:4:"3670";s:65:"Resources/Public/JavaScript/Contrib/flowplayer.controls-3.2.3.swf";s:4:"37d1";s:52:"Resources/Public/JavaScript/Contrib/swfobject-2-2.js";s:4:"892a";s:51:"Resources/Public/JavaScript/Contrib/table_sorter.js";s:4:"375e";s:25:"Tests/Build/UnitTests.xml";s:4:"b961";s:42:"Tests/Unit/Cache/ClassCacheBuilderTest.php";s:4:"988f";s:44:"Tests/Unit/Cache/ClassExamples/BasicFile.php";s:4:"d9aa";s:50:"Tests/Unit/Cache/ClassExamples/BasicFileResult.txt";s:4:"16d7";s:69:"Tests/Unit/Cache/ClassExamples/BasicFileWithClassDefinitionResult.txt";s:4:"3045";s:62:"Tests/Unit/Cache/ClassExamples/BasicFileWithInitialComment.php";s:4:"1d2a";s:57:"Tests/Unit/Cache/ClassExamples/BasicFileWithNamespace.php";s:4:"1ed3";s:44:"Tests/Unit/Controller/NewsControllerTest.php";s:4:"2603";s:40:"Tests/Unit/Domain/Model/CategoryTest.php";s:4:"bcc5";s:36:"Tests/Unit/Domain/Model/FileTest.php";s:4:"8f6b";s:36:"Tests/Unit/Domain/Model/LinkTest.php";s:4:"f659";s:37:"Tests/Unit/Domain/Model/MediaTest.php";s:4:"eff6";s:43:"Tests/Unit/Domain/Model/NewsDefaultTest.php";s:4:"486b";s:42:"Tests/Unit/Domain/Model/NewsDemandTest.php";s:4:"5f30";s:44:"Tests/Unit/Domain/Model/NewsExternalTest.php";s:4:"f0c5";s:44:"Tests/Unit/Domain/Model/NewsInternalTest.php";s:4:"03f0";s:36:"Tests/Unit/Domain/Model/NewsTest.php";s:4:"db47";s:35:"Tests/Unit/Domain/Model/TagTest.php";s:4:"5cb8";s:41:"Tests/Unit/Domain/Model/TtContentTest.php";s:4:"5f8c";s:51:"Tests/Unit/Domain/Model/Dto/EmConfigurationTest.php";s:4:"3017";s:42:"Tests/Unit/Domain/Model/Dto/SearchTest.php";s:4:"5b9c";s:55:"Tests/Unit/Domain/Repository/CategoryRepositoryTest.php";s:4:"06a9";s:57:"Tests/Unit/Domain/Repository/NewsRepositoryDemandTest.php";s:4:"0338";s:51:"Tests/Unit/Domain/Repository/NewsRepositoryTest.php";s:4:"7fa3";s:31:"Tests/Unit/Hooks/LabelsTest.php";s:4:"ba48";s:43:"Tests/Unit/Jobs/TTNewsNewsImportJobTest.php";s:4:"3aaa";s:42:"Tests/Unit/MediaRenderer/Audio/Mp3Test.php";s:4:"a804";s:43:"Tests/Unit/MediaRenderer/Video/FileTest.php";s:4:"07ae";s:48:"Tests/Unit/MediaRenderer/Video/QuicktimeTest.php";s:4:"25a7";s:49:"Tests/Unit/MediaRenderer/Video/VideositesTest.php";s:4:"dcad";s:46:"Tests/Unit/MediaRenderer/Video/YoutubeTest.php";s:4:"ac27";s:42:"Tests/Unit/Service/CategoryServiceTest.php";s:4:"cd78";s:38:"Tests/Unit/Service/FileServiceTest.php";s:4:"5a82";s:63:"Tests/Unit/Service/Import/TTNewsNewsDataProviderServiceTest.php";s:4:"aacf";s:56:"Tests/Unit/TreeProvider/DatabaseTreeDataProviderTest.php";s:4:"1d25";s:43:"Tests/Unit/Utility/CategoryProviderTest.php";s:4:"a390";s:42:"Tests/Unit/Utility/EmConfigurationTest.php";s:4:"aff6";s:36:"Tests/Unit/Utility/ImportJobTest.php";s:4:"4e83";s:30:"Tests/Unit/Utility/UrlTest.php";s:4:"61b3";s:37:"Tests/Unit/Utility/ValidationTest.php";s:4:"2d1c";s:61:"Tests/Unit/ViewHelpers/ExcludeDisplayedNewsViewHelperTest.php";s:4:"b147";s:57:"Tests/Unit/ViewHelpers/PaginateBodytextViewHelperTest.php";s:4:"e500";s:51:"Tests/Unit/ViewHelpers/TargetLinkViewHelperTest.php";s:4:"6bc9";s:57:"Tests/Unit/ViewHelpers/Be/MultiEditLinkViewhelperTest.php";s:4:"4abe";s:52:"Tests/Unit/ViewHelpers/Format/DateViewHelperTest.php";s:4:"112f";s:39:"Tests/Unit/ViewHelpers/Format/dummy.txt";s:4:"f4a4";s:56:"Tests/Unit/ViewHelpers/Format/FileSizeViewHelperTest.php";s:4:"09e9";s:55:"Tests/Unit/ViewHelpers/Format/NothingViewHelperTest.php";s:4:"6478";s:57:"Tests/Unit/ViewHelpers/Format/StriptagsViewHelperTest.php";s:4:"0e3b";s:54:"Tests/Unit/ViewHelpers/Social/DisqusViewHelperTest.php";s:4:"7c01";s:67:"Tests/Unit/ViewHelpers/Widget/Controller/PaginateControllerTest.php";s:4:"5645";s:14:"doc/manual.sxw";s:4:"c033";}',
	'suggests' => array(
	),
);

?>