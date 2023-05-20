<!DOCTYPE html>
<html lang="en">
<head>
    <title>WoRMS - World Register of Marine Species</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="google-site-verification" content="K3-dDlqPOhXjZBSl_DXhAQ9y-EoX2OogyHQaUtlaSR4"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png?=v2">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png?=v2">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png?=v2">
    <link rel="manifest" href="/images/favicon/manifest.json?=v2">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg?=v2" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico?=v2" />
    <link title="WoRMS search" type="application/opensearchdescription+xml" rel="search" href="/provider.xml" />
    <link rel="stylesheet" type="text/css" href="https://www.marinespecies.org/aphia/css/third_party.css?1655847414" />
<script type="text/javascript" src="https://www.marinespecies.org/aphia/js/third_party.js?1617278804" ></script>
<script type="text/javascript" src="https://www.marinespecies.org/aphia/js/aphia.js?1573637265" ></script>
<link type="text/css" rel="stylesheet" href="/styles.css?1654782867" />
<link rel="stylesheet" type="text/css" href="filemanager/src/css/filemanager.css" />
<link rel="stylesheet" type="text/css" href="filemanager/src/css/fm-markdown.css" />
<link rel="stylesheet" type="text/css" href="filemanager/src/css/libs-main.css" />
<link rel="stylesheet" type="text/css" href="filemanager/libs/alertify.js/dist/css/alertify.css" />


</head>
<body>

<div class="main_bg">
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-default worms-header">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navigation-shared,#navigation-content" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="/images/layout/worms_logo.png" height="60px"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse worms-nav-menu" id="navigation-content">
                <div class="worms-nav-menu-table">
                    <div class="worms-nav-menu-table-cell-col1 hidden-xs">
                        <a class="navbar-left" href="/index.php">
                            <img src="/images/layout/worms_logo.png" height="100px"/>
                        </a>
                    </div>
                    <div class="worms-nav-menu-table-cell-col2">
                        <div class="content_options">
                            <ul id="aphiaContentOpts" class="list-inline" style="display: none;">
    <li class="list-item">
        marine only&nbsp;
        <div class="material-switch pull-right">
            <input id="contentEnableMarine" name="contentEnableMarine" type="checkbox" checked="checked"/>
            <label for="contentEnableMarine"></label>
        </div>
    </li>
    <li class="list-item">
        extant only&nbsp;&nbsp;
        <div class="material-switch pull-right">
            <input id="contentEnableExtant" name="contentEnableExtant" type="checkbox"/>
            <label for="contentEnableExtant"></label>
        </div>
    </li>
</ul>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/index.php">Home</a></li>
                            <li><a href="/about.php">About</a></li>
                            <li><a href="/subregisters.php">Subregisters</a></li>
                            <li><a href="/users.php">Users</a></li>
                            <li><a href="/photogallery.php">Photogallery</a></li>
                            <li class="active"><a href="/documents.php">Documents</a></li>
                            <li><a href="/lifewatch.php">LifeWatch</a></li>
                            <li><a href="/contribute.php">Contribute</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.navbar-collapse -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse aphia-nav-menu" id="navigation-shared">
                <div class="aphia-nav-menu-table">
                    <div class="aphia-nav-menu-table-cell-col1 hidden-xs">
                        <form id="aphia-quick-search-form" class="navbar-form navbar-left" action="/aphia.php?p=taxlist" method="post">
                            <div class="input-group" style="width: 280px;">
                                
    <script type="text/javascript">
        var comp_jquery = $;
        comp_jquery(document).ready(function() {
                            window.initAphiaComponentCombobox('d10b2f3d9435f631', {
                            view_component_ajax_url: '/aphia.php?p=rest&__route__/AjaxAphiaRecordsByNamePart',
                view_component_ajax_request_delay: 500,                                                view_dict_optional_ajax_args: {
                                    'rank_min': "10",
                                    'combine_vernaculars': "0",
                                    'marine_only': "1",
                                    'fossil_id': "4",
                                },                view_component_ajax_append_input_to_url: true,                                view_dict_dynamic_ajax_args: "if ($('#quick_search_inc_common').prop('checked')) { data['combine_vernaculars'] = 1; }",                view_component_ajax_dont_trigger_numbers: true,                        view_component_allow_user_text: true,                                                                                                view_selection_placeholder: 'Quick search...',            view_hidden_key_id: 'tid',                                    view_hidden_data_id: 'tName',                                                    });

        });
    </script>
        <div id="d10b2f3d9435f631_storage" name="d10b2f3d9435f631_storage"></div>
                                    <div class="input-group">
                                    <select id="d10b2f3d9435f631" class="form-control input-sm"></select>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span> <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li class="quick_search_inc_chk"><a href="#" data-value="option1" tabIndex="-1"><input id="quick_search_inc_scientific" checked="checked" disabled="disabled" type="checkbox"/>&nbsp;Scientific names</a></li>
                                            <li class="quick_search_inc_chk"><a href="#" data-value="option2" tabIndex="-1"><input id="quick_search_inc_common" type="checkbox"/>&nbsp;Common names (slower)</a></li>
                                            <li class="quick_search_inc_chk"><a style="padding-left: 33px;" href="/aphia.php?p=search&adv=1">&nbsp;Advanced search</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $("#d10b2f3d9435f631_storage").change(function(event) {
                                        $(".select2-search--inline").hide();
                                        var tid = $(this).children('input[name="tid"]').val();
                                        if (tid < 0) {
                                            //No id => means no value picked from the suggestion list => check text to be numeric
                                            tid = $(this).children('input[name="tName"]').val();
                                        }
                                        $("#d10b2f3d9435f631").prop("disabled", true);
                                        if (!isNaN(tid) && isFinite(tid) && tid > 0 && tid % 1 === 0) {
                                            console.log('redirect...');
                                            window.location = "/aphia.php?p=taxdetails&id=" + tid;
                                        } else {
                                            $("#aphia-quick-search-form").submit();
                                        }
                                    });
                                </script>
                            </div>
                            <input type="hidden" name="searchpar" value="0" />
                            <input type="hidden" name="tComp" value="begins" />
                            <input type="hidden" name="action" value="search" />
                            <input type="hidden" name="rSkips" value="0" />
                                                                                                                                <input type="hidden" name="marine" value="1" />
                                                                                                    <input type="hidden" name="fossil" value="4" />
                                                                                    </form>
                    </div>
                    <div class="aphia-nav-menu-table-cell-col2">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/aphia.php?p=search"><span class="fa fa-search"></span>&nbsp;Taxa</a></li>
                            <li><a href="/aphia.php?p=sources"><span class="fa fa-graduation-cap fa-1x"></span>&nbsp;Literature</a></li>
                            <li><a href="/aphia.php?p=checklist"><span class="fa fa-map fa-1x"></span>&nbsp;Distribution</a></li>
                            <li><a href="/aphia.php?p=specimens"><span class="fa fa-tags fa-1x"></span>&nbsp;Specimen</a></li>
                                                        <li><a href="/aphia.php?p=editors"><span class="fa fa-users fa-1x"></span>&nbsp;Editors</a></li>
                            <li><a href="/aphia.php?p=stats"><span class="fa fa-line-chart fa-1x"></span>&nbsp;Statistics</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><span class="fa fa-gears fa-1x"></span>&nbsp;Tools
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/aphia.php?p=match"><span class="fa fa-binoculars fa-1x"></span>&nbsp;Match taxa</a></li>
                                    <li><a href="/aphia.php?p=webservice"><span class="fa fa-globe fa-1x"></span>&nbsp;Webservices</a></li>
                                    <li><a href="/aphia.php?p=browser"><span class="fa fa-sitemap fa-1x"></span>&nbsp;Taxon tree</a></li>
                                    <li><a href="/aphia.php?p=idkeys"><span class="fa fa-puzzle-piece fa-1x"></span>&nbsp;IDKeys</a></li>
                                </ul>
                            </li>
                            <li><a href="/aphia.php?p=manual"><span class="fa fa-book fa-1x"></span>&nbsp;Manual</a></li>
                                                                                                                                                                                                <li><a href="/aphia.php?p=login&amp;decodetype=1&amp;redirect=L2RvY3VtZW50cy5waHA="><span class="fa fa-lock fa-1x"></span>&nbsp;Log in</a></li>
                                                    </ul>
                    </div>
                </div>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<div class="container-fluid worms-content">

<style type="text/css">
    .fm-container .fm-loading-wrap {
        position: fixed;
        height: 100%;
        width: 100%;
        overflow: hidden;
        top: 0;
        left: 0;
        display: block;
        background: white url(./filemanager/images/spinner.gif) no-repeat center center;
        z-index: 999;
    }
    .splitter-bar {
        display: none!important;
    }
    li.context-menu-item {
        visibility: collapse;
    }
    li.context-menu-item.download {
        visibility: visible!important;
    }
    ul.context-menu-list {
        height: 30px;
    }
</style>
<a href="/usersrequest.php">[Request a copy of WoRMS]</a>
<br />
<div class="row">
    <div class="worms_content_section fm-container" style="background: inherit!important; display: none;">
        <div class="fm-loading-wrap"><!-- loading wrapper / removed when loaded --></div>
        <div class="fm-wrapper">
            <div class="fm-header">
                <div class="breadcrumbs">
                    <div class="nav-title" style="color: darkgrey;" data-bind="text: breadcrumbsModel.getLabel"></div>
                    <div data-bind="foreach: {data: breadcrumbsModel.items, as: 'bcItem'}">
                        <div data-bind="text: bcItem.label, click: bcItem.goto, css: bcItem.itemClass()" style="color: darkgray;"></div>
                        <!-- ko if: !bcItem.active -->
                        <div class="separator">&gt;</div>
                        <!-- /ko -->
                    </div>
                </div>
                <div class="buttons-panel">
                                        <div class="button-group viewmode-controls">
                        <button class="btn btn-grid-mode no-label" type="button" data-bind="click: headerModel.displayGrid, attr: {title: lg.grid_view}, css: {active: viewMode() === 'grid'}">
                            <span>&nbsp;</span>
                        </button>
                        <button class="btn btn-list-mode no-label" type="button" data-bind="click: headerModel.displayList, attr: {title: lg.list_view}, css: {active: viewMode() === 'list'}">
                            <span>&nbsp;</span>
                        </button>
                    </div>
                                    </div>
            </div>

            <div class="fm-splitter">
                                <div class="fm-fileinfo" style="background-color: inherit!important; border: 0;">
                    <div class="fm-loading-view" data-bind="visible: loadingView()"></div>

                    <div class="view-items-wrapper" data-bind="visible: !loadingView() && !previewFile()" style="background-color: inherit!important; border: 0px; width: 100%">
                        <!-- ko if: config().manager.renderer.position === 'top' && itemsModel.descriptivePanel.renderer() -->
                        <div class="fm-renderer-wrapper" data-bind="visible: itemsModel.descriptivePanel.content()">
                            <!-- ko template: {name: 'renderer-template', data: itemsModel.descriptivePanel} --><!-- /ko -->
                        </div>
                        <!-- /ko -->

                        <div class="view-items">
                            <ul class="grid" data-bind="visible: viewMode() === 'grid'">
                                <!-- ko with: itemsModel.parentItem -->
                                <!-- ko if: $data -->
                                <li class="directory-parent" data-bind="event: {click: open, dblclick: open}, droppableView: $data, css: itemClass()" oncontextmenu="return false;">
                                    <div class="clip">
                                        <img src="" class="grid-icon ico_folder_parent" data-bind="attr: {src: null, width: $root.config().viewer.image.thumbMaxWidth}" />
                                    </div>
                                    <p>..</p>
                                </li>
                                <!-- /ko -->
                                <!-- /ko -->

                                <!-- ko foreach: {data: itemsModel.objects, as: 'koItem'} -->
                                <li data-bind="event: {click: koItem.open, dblclick: koItem.open, mousedown: koItem.mouseDown}, droppableView: koItem, visible: koItem.visible, attr: {title: koItem.title()}, css: koItem.itemClass()">
                                    <div class="item-background"></div>
                                    <div class="item-content" data-bind="draggableView: koItem">
                                        <div class="clip">
                                            <!-- ko if: koItem.lazyPreview -->
                                            <img src="" data-bind="css: koItem.gridIconClass(), attr: {'data-original': koItem.cdo.imageUrl, width: koItem.cdo.previewWidth}"/>
                                            <!-- /ko -->
                                            <!-- ko if: !koItem.lazyPreview -->
                                            <img src="" data-bind="css: koItem.gridIconClass(), attr: {src: koItem.cdo.imageUrl, width: koItem.cdo.previewWidth}"/>
                                            <!-- /ko -->
                                        </div>
                                        <p data-bind="text: koItem.rdo.attributes.name"></p>
                                    </div>
                                </li>
                                <!-- /ko -->
                            </ul>

                            <table class="list" data-bind="visible: viewMode() === 'list'">
                                <thead>
                                <tr class="rowHeader" data-bind="with: tableViewModel">
                                    <th data-bind="click: thName.sort, css: thName.sortClass()"><span data-bind="text: $root.lg.name"></span></th>
                                    <th data-bind="click: thType.sort, css: thType.sortClass()"><span data-bind="text: $root.lg.type"></span></th>
                                    <th data-bind="click: thSize.sort, css: thSize.sortClass()"><span data-bind="text: $root.lg.size"></span></th>
                                    <th data-bind="click: thDimensions.sort, css: thDimensions.sortClass()"><span data-bind="text: $root.lg.dimensions"></span></th>
                                    <th data-bind="click: thModified.sort, css: thModified.sortClass()"><span data-bind="text: $root.lg.modified"></span></th>
                                </tr>
                                </thead>

                                <tbody>
                                <!-- ko with: itemsModel.parentItem -->
                                <!-- ko if: $data -->
                                <tr class="directory-parent" data-bind="event: {click: open, dblclick: open}, droppableView: $data, css: itemClass()" oncontextmenu="return false;">
                                    <td>
                                        <div class="list-item">..</div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <!-- /ko -->
                                <!-- /ko -->

                                <!-- ko foreach: {data: itemsModel.objects, as: 'koItem'} -->
                                <tr data-bind="event: {click: koItem.open, dblclick: koItem.open, mousedown: koItem.mouseDown}, droppableView: koItem, visible: koItem.visible, attr: {title: koItem.title()}, css: koItem.itemClass()" oncontextmenu="return false;">
                                    <td>
                                        <div class="list-item" data-bind="draggableView: koItem">
                                            <span class="list-icon" data-bind="css: koItem.listIconClass()"></span>
                                            <span data-bind="text: koItem.rdo.attributes.name"></span>
                                        </div>
                                    </td>
                                    <td data-bind="text: koItem.cdo.extension"></td>
                                    <td data-bind="text: koItem.cdo.sizeFormatted"></td>
                                    <td data-bind="text: koItem.cdo.dimensions"></td>
                                    <td data-bind="text: koItem.cdo.modifiedFormatted"></td>
                                </tr>
                                <!-- /ko -->
                                </tbody>
                            </table>
                        </div>

                        <!-- ko if: config().manager.renderer.position === 'bottom' && itemsModel.descriptivePanel.renderer() -->
                        <div class="fm-renderer-wrapper" data-bind="visible: itemsModel.descriptivePanel.content()">
                            <!-- ko template: {name: 'renderer-template', data: itemsModel.descriptivePanel} --><!-- /ko -->
                        </div>
                        <!-- /ko -->
                    </div>


                    <div class="fm-preview-wrapper" data-bind="visible: !loadingView() && previewFile()">
                        <!-- ko template: {if: previewFile(), afterRender: previewModel.afterRender} -->
                        <div class="fm-preview" data-bind="with: previewModel">
                            <div class="fm-preview-toolbar button-group">
                                <form id="fm-js-preview-toolbar">
                                    <button class="btn btn-file-preview-close" type="button" data-bind="click: closePreview">
                                        <span data-bind="text: $root.lg.close"></span>
                                    </button>
                                    <!-- ko if: buttonVisibility('select') -->
                                    <button class="btn btn-file-select" type="button" data-bind="event: {click: function(data, event) {bindToolbar('select')}}">
                                        <span data-bind="text: $root.lg.action_select"></span>
                                    </button>
                                    <!-- /ko -->

                                    <!-- ko if: buttonVisibility('download') -->
                                    <button class="btn btn-file-download" type="button" data-bind="event: {click: function(data, event) {bindToolbar('download')}}">
                                        <span data-bind="text: $root.lg.action_download"></span>
                                    </button>
                                    <!-- /ko -->
                                                                    </form>
                            </div>

                            <div class="fm-preview-viewer" data-bind="css: {'side-by-side-panels': editor.enabled() && editor.isInteractive()}">
                                <!-- ko template: {if: viewer.isEditable(), afterRender: initiateEditor} -->
                                <div class="fm-preview-edit-panel" data-bind="visible: editor.enabled()">
                                    <form id="fm-js-editor-form">
                                        <textarea class="fm-cm-editor-content" name="content" data-bind="textInput: editor.content()"></textarea>
                                        <input type="hidden" name="mode" value="savefile" />
                                        <input type="hidden" name="path" value="" data-bind="textInput: rdo().id" />
                                    </form>
                                </div>
                                <!-- /ko -->

                                <div class="fm-preview-view-panel">
                                    <!-- ko if: viewer.type() === 'default' -->
                                    <img src="" data-bind="css: previewIconClass(), attr: {src: null}" />
                                    <!-- /ko -->
                                    <!-- ko if: viewer.type() === 'image' -->
                                    <img src="" data-bind="css: previewIconClass(), attr: {src: viewer.url()}" />
                                    <!-- /ko -->
                                    <!-- ko if: viewer.type() === 'audio' -->
                                    <audio src="" controls="controls" data-bind="attr: {src: viewer.url()}"></audio>
                                    <!-- /ko -->
                                    <!-- ko if: viewer.type() === 'video' -->
                                    <video src="" controls="controls" data-bind="attr: {src: viewer.url(), width: viewer.options().width, height: viewer.options().height}"></video>
                                    <!-- /ko -->
                                    <!-- ko if: viewer.type() === 'onlyoffice' -->
                                    <iframe src="" data-bind="attr: {src: viewer.url(), width: viewer.options().width, height: viewer.options().height}" allowfullscreen webkitallowfullscreen></iframe>
                                    <!-- /ko -->
                                    <!-- ko if: viewer.type() === 'opendoc' -->
                                    <iframe src="" data-bind="attr: {src: viewer.url(), width: viewer.options().width, height: viewer.options().height}" allowfullscreen webkitallowfullscreen></iframe>
                                    <!-- /ko -->
                                    <!-- ko if: viewer.type() === 'google' -->
                                    <iframe src="" data-bind="attr: {src: viewer.url(), width: viewer.options().width, height: viewer.options().height}" allowfullscreen webkitallowfullscreen></iframe>
                                    <!-- /ko -->
                                    <!-- ko if: viewer.type() === 'iframe' && !editor.enabled() -->
                                    <iframe src="" data-bind="attr: {src: viewer.url(), width: viewer.options().width, height: viewer.options().height}" allowfullscreen webkitallowfullscreen></iframe>
                                    <!-- /ko -->
                                    <!-- ko if: viewer.type() === 'renderer' && renderer.renderer() -->
                                    <div data-bind="visible: !editor.enabled() || editor.isInteractive()">
                                        <!-- ko template: {name: 'renderer-template', data: renderer} --><!-- /ko -->
                                    </div>
                                    <!-- /ko -->
                                </div>
                            </div>

                            <div class="fm-preview-title">
                                <h1 data-bind="text: rdo().attributes.name, attr: {title: rdo().id}"></h1>
                                <div class="fm-preview-title-controls">
                                    <a href="#" class="btn-copy-url" data-bind="attr: {title: $root.lg.copy_to_clipboard, 'data-clipboard-text': viewer.pureUrl()}"></a>
                                    <!-- ko if: viewer.isEditable() && !editor.enabled() && viewer.options().is_writable -->
                                    <a href="#" class="btn-editor-open" data-bind="attr: {title: $root.lg.editor_edit}, click: editFile"></a>
                                    <!-- /ko -->
                                    <!-- ko if: viewer.isEditable() && editor.enabled() -->
                                    <a href="#" class="btn-editor-save" data-bind="attr: {title: $root.lg.editor_save}, click: saveFile"></a>
                                    <a href="#" class="btn-editor-quit" data-bind="attr: {title: $root.lg.editor_quit}, click: closeEditor"></a>
                                    <!-- /ko -->
                                </div>
                            </div>

                            <div class="fm-preview-details">
                                <table>
                                    <tr data-bind="visible: cdo().sizeFormatted">
                                        <td data-bind="text: $root.lg.size"></td>
                                        <td data-bind="text: cdo().sizeFormatted"></td>
                                    </tr>
                                    <tr data-bind="visible: cdo().dimensions">
                                        <td data-bind="text: $root.lg.dimensions"></td>
                                        <td data-bind="text: cdo().dimensions"></td>
                                    </tr>
                                    <tr data-bind="visible: cdo().createdFormatted">
                                        <td data-bind="text: $root.lg.created"></td>
                                        <td data-bind="text: cdo().createdFormatted"></td>
                                    </tr>
                                    <tr data-bind="visible: cdo().modifiedFormatted">
                                        <td data-bind="text: $root.lg.modified"></td>
                                        <td data-bind="text: cdo().modifiedFormatted"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /ko -->
                    </div>

                </div>
            </div>

            <div class="fm-footer">
                <div class="left">
                    <div class="search-box input-group" data-bind="visible: config().search.enabled">
                    <span class="input-group-addon clickable" data-bind="event: {click: searchModel.seekItems}">
                        <span class="icon search-icon"></span>
                    </span>
                        <input class="input-group-input" type="text" data-bind="value: searchModel.value, event: {keyup: searchModel.inputKeyUp}" />
                        <span class="input-group-addon clickable" data-bind="event: {click: searchModel.reset}">
                        <span class="icon reset-icon"></span>
                    </span>
                    </div>
                </div>

                <div class="right">
                    <div id="folder-info">
                        <span data-bind="text: itemsModel.objectsNumber() + ' ' + lg.items"></span> -
                        <span data-bind="text: lg.size + ': ' + itemsModel.objectsSize()"></span>
                    </div>
                    <div id="summary" data-bind="click: summaryModel.doSummarize"></div>
                    <a href="" target="_blank" id="link-to-project" data-bind="attr: {href: config().url, title: lg.support_fm + ' [' + lg.version + ' : ' + config().version + ']'}"></a>
                </div>
                <div style="clear: both"></div>
            </div>

            <!-- ko if: summaryModel.enabled() -->
            <div id="summary-popup" data-bind="visible: false">
                <div class="title" data-bind="text: lg.summary_title"></div>
                <div class="line" data-bind="text: lg.summary_files + ': ' + summaryModel.files()"></div>
                <div class="line" data-bind="text: lg.summary_folders + ': ' + summaryModel.folders(), visible: summaryModel.folders()"></div>
                <div class="line" data-bind="text: lg.summary_size + ': ' + summaryModel.size()"></div>
            </div>
            <!-- /ko -->


            <!-- TEMPLATES Start -->
            <script type="text/html" id="renderer-template">
                <!-- ko template: {afterRender: setContainer} -->
                <div class="fm-renderer-container">
                    <!-- ko if: renderer().name === 'markdown' -->
                    <div class="fm-markdown-renderer" data-bind="html: content()"></div>
                    <!-- /ko -->
                    <!-- ko if: renderer().name === 'codeMirror' -->
                    <textarea class="fm-cm-renderer-content" data-bind="textInput: content()"></textarea>
                    <!-- /ko -->
                </div>
                <!-- /ko -->
            </script>

            <script type="text/html" id="node-parent-template">
                <li data-bind="template: {name: 'node-template', data: koNode}, css: koNode.itemClass(), visible: koNode.visible"></li>
            </script>

            <script type="text/html" id="node-template">
                <div class="row" data-bind="droppableTree: $data"></div>
                <span class="button switch" data-bind="css: switcherClass(), click: switchNode"></span>
                <a data-bind="attr: {class: cdo.cssItemClass}, event: {click: nodeClick, dblclick: nodeDblClick, mousedown: mouseDown}, draggableTree: $data">
                    <span class="button" data-bind="css: iconClass()"></span>
                    <span class="node_name" data-bind="text: nodeTitle(), attr: {title: title()}"></span>
                </a>
                <ul data-bind="template: {name: 'node-parent-template', if: children().length > 0, foreach: children, as: 'koNode', afterRender: $root.treeModel.nodeRendered}, css: clusterClass(), toggleNodeVisibility: $data"></ul>
            </script>
            <!-- TEMPLATES End-->


            <div id="drag-helper-template" style="display: none">
                <div class="drag-helper">
                    <div class="item-background"></div>
                    <div class="item-content">
                        <div class="clip grid-icon"></div>
                    </div>
                    <div class="dragging-stop">
                        <div class="cancel-image"></div>
                    </div>
                    <div class="dragging-counter" data-bind="visible: itemsModel.selectedNumber() > 1">
                        <span data-bind="text: itemsModel.selectedNumber()"></span>
                    </div>
                </div>
            </div>

            <!-- Load filemanager script -->
            <script type="text/javascript" src="filemanager/src/js/libs-main.js"></script>
            <script type="text/javascript" src="filemanager/src/js/filemanager.min.js"></script>

            <!-- Start RichFilemanager plugin -->
            <script type="application/javascript">
                $(function() {
                    $('.fm-container').richFilemanager({
                        "baseUrl": "./filemanager"
                    });
                    $('.fm-container').show();
                });
            </script>
        </div>
    </div>
</div>
</div>
<div class="container-fluid worms-footer">
    <br/>
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="worms-footer-column">
                <h4>WoRMS</h4>
                <ul class="worms-footer-list">
                    <li><a href="/about.php#what_is_worms">What is WoRMS</a></li>
                    <li><a href="/lifewatch.php">What is LifeWatch</a></li>
                    <li><a href="/subregisters.php">Subregisters</a></li>
                    <li><a href="/about.php#partners">Partners</a></li>
                    <li><a href="/about.php#users">WoRMS users</a></li>
                    <li><a href="/wormsliterature.php">WoRMS in literature</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="worms-footer-column">
                <h4>Using WoRMS</h4>
                <ul class="worms-footer-list">
                    <li><a href="/about.php#cite_worms">Citing WoRMS</a></li>
                    <li><a href="/about.php#terms">Terms of use</a></li>
                    <li><a href="/usersrequest.php">Request access</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="worms-footer-column">
                <h4>Tools</h4>
                <ul class="worms-footer-list">
                    <li><a href="aphia.php?p=match">WoRMS Match Taxa</a></li>
                    <li><a href="https://www.lifewatch.be/data-services/" target="_blank">LifeWatch Match Taxa</a></li>
                    <li><a href="aphia.php?p=webservice">Webservices</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="worms-footer-column">
                <h4>Connect with us</h4>
                <ul class="worms-footer-list">
                    <li>
                        <a href="#" onclick="var addr=$('<textarea/>').html('&amp;#105;&amp;#110;&amp;#102;&amp;#111;&amp;#64;&amp;#109;&amp;#97;&amp;#114;&amp;#105;&amp;#110;&amp;#101;&amp;#115;&amp;#112;&amp;#101;&amp;#99;&amp;#105;&amp;#101;&amp;#115;&amp;#46;&amp;#111;&amp;#114;&amp;#103;').text();var check; var self=this;$(window).blur(function(){clearTimeout(check);});check=setTimeout(function(){self.innerText=addr;},3000);window.location.href='mailto:' + addr + '?subject=WoRMS Contact'; return false;"><i class="fa fa-envelope" aria-hidden="true"></i>Send us an email</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/WRMarineSpecies" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter page</a>
                    </li>
                    <li>
                                                <a href="aphia.php?p=rss" target="_blank"><i class="fa fa-rss fa-1x" aria-hidden="true"></i>RSS Feed</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <hr class="worms-footer-splitter" />
    </div>
    <div class="row">
        <div class="worms-footer-hosted_by text-center">
            	<style>
        .lwbanner {
            
            color: #a9a9a9;
            font-size: calc(13px + (26 - 13) * ((100vw - 300px) / (4000 - 300)));
            font-family: 'open_sansregular','Helvetica Neue', Helvetica, sans-serif;
            padding: 0.5em;
            border: 0px solid #bfbfbf;
        }
        
        .lwbanner div{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .lwbanner span{
            padding: 1%;
        }
        
        .lwbanner img {
            height: 60px;
            max-width: 33%; 
        }
        
        .lwbanner a {
            color: #a9a9a9;
            font-size: calc(10px + (20 - 10) * ((100vw - 300px) / (4000 - 300)));
            text-decoration: none;
        }
        .lwbanner a:hover {
            text-decoration: underline;
        }
        
        .lwbanner small {
            font-size: calc(10px + (20 - 10) * ((100vw - 300px) / (4000 - 300)));
        }
	</style>		<div id="lwbanner" class="lwbanner">
			<div><img src="data:image/png;base64,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"/><span>This service is powered by LifeWatch Belgium<br/><small></small></span><a href="http://www.lifewatch.be" target="_blank">Learn more&raquo;</a></div>
		</div>
            <small>Website and databases developed and hosted by
                <a href="http://www.vliz.be" target="_blank">Flanders Marine Institute</a> &middot; Page generated on 2023-05-20 05:54:08+02:00 &middot; <a href="http://www.vliz.be/privacy" target="_blank">Privacy and cookie policy</a>
            </small>
        </div>
    </div>
</div>
</div>
</body>
</html>