<!DOCTYPE html>
<html lang="en">

<head>
<title>Flat Able - Premium Admin Template by Phoenixcoded</title>

</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Phoenixcoded">
<meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="Phoenixcoded">

<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/bower_components/jquery.steps/demo/css/jquery.steps.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/css/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/css/color/color-1.css" id="color" />
</head>
<body class="menu-static">

<div class="theme-loader">
<div class="ball-scale">
<div></div>
</div>
</div>


<nav class="navbar header-navbar">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="ti-menu"></i>
</a>
<a class="mobile-search morphsearch-search" href="#">
<i class="ti-search"></i>
</a>
<a href="index-2.html">
<img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
</a>
<a class="mobile-options">
<i class="ti-more"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<div>
<ul class="nav-left">
<li>
<a id="collapse-menu" href="#">
<i class="ti-menu"></i>
</a>
</li>
<li>
<a class="main-search morphsearch-search" href="#">

<i class="ti-search"></i>
</a>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="ti-fullscreen"></i>
</a>
</li>
<li class="mega-menu-top">
<a href="#">
Mega
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification row">
<li class="col-sm-3">
<h6 class="mega-menu-title">Popular Links</h6>
<ul class="mega-menu-links">
<li><a href="form-elements-component.html">Form Elements</a></li>
<li><a href="button.html">Buttons</a></li>
<li><a href="map-google.html">Maps</a></li>
<li><a href="user-card.html">Contact Cards</a></li>
<li><a href="user-profile.html">User Information</a></li>
<li><a href="auth-lock-screen.html">Lock Screen</a></li>
</ul>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Mailbox</h6>
<ul class="mega-mailbox">
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-folder"></i>
</div>
<div class="media-body">
<h5>Data Backup</h5>
<small class="text-muted">Store your data</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-headphone-alt"></i>
</div>
<div class="media-body">
<h5>Support</h5>
<small class="text-muted">24-hour support</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-dropbox"></i>
</div>
<div class="media-body">
<h5>Drop-box</h5>
<small class="text-muted">Store large amount of data in one-box only
</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-location-pin"></i>
</div>
<div class="media-body">
<h5>Location</h5>
<small class="text-muted">Find Your Location with ease of use</small>
</div>
</a>
</li>
</ul>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Gallery</h6>
<div class="row m-b-20">
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/01.jpg" alt="Gallery-1">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/02.jpg" alt="Gallery-2">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/03.jpg" alt="Gallery-3">
</div>
</div>
<div class="row m-b-20">
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/04.jpg" alt="Gallery-4">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/05.jpg" alt="Gallery-5">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/06.jpg" alt="Gallery-6">
</div>
</div>
<button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Contact Us</h6>
<div class="mega-menu-contact">
<div class="form-group row">
<label for="example-text-input" class="col-3 col-form-label">Name</label>
<div class="col-9">
<input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-3 col-form-label">Email</label>
<div class="col-9">
<input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-3 col-form-label">Contact</label>
<div class="col-9">
<input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="exampleTextarea" class="col-3 col-form-label">Message</label>
<div class="col-9">
<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
</div>
</div>
</div>
</li>
</ul>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification lng-dropdown">
<a href="#" id="dropdown-active-item">
<i class="flag-icon flag-icon-gb m-r-5"></i> English
</a>
<ul class="show-notification">
<li>
<a href="#" data-lng="en">
<i class="flag-icon flag-icon-gb m-r-5"></i> English
</a>
</li>
<li>
<a href="#" data-lng="es">
<i class="flag-icon flag-icon-es m-r-5"></i> Spanish
</a>
</li>
<li>
<a href="#" data-lng="pt">
<i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
</a>
</li>
<li>
<a href="#" data-lng="fr">
<i class="flag-icon flag-icon-fr m-r-5"></i> French
</a>
</li>
</ul>
</li>
<li class="header-notification">
<a href="#!">
<i class="ti-bell"></i>
<span class="badge">5</span>
</a>
<ul class="show-notification">
<li>
 <h6>Notifications</h6>
<label class="label label-danger">New</label>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">John Doe</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Joseph William</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Sara Soudein</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</li>
<li class="header-notification">
<a href="#!" class="displayChatbox">
<i class="ti-comments"></i>
<span class="badge">9</span>
</a>
</li>
<li class="user-profile header-notification">
<a href="#!">
 <img src="assets/images/user.png" alt="User-Profile-Image">
<span>John Doe</span>
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification profile-notification">
<li>
<a href="#!">
<i class="ti-settings"></i> Settings
</a>
</li>
<li>
<a href="user-profile.html">
<i class="ti-user"></i> Profile
</a>
</li>
<li>
<a href="email-inbox.html">
<i class="ti-email"></i> My Messages
</a>
</li>
<li>
<a href="auth-lock-screen.html">
<i class="ti-lock"></i> Lock Screen
</a>
</li>
<li>
<a href="#!">
<i class="ti-layout-sidebar-left"></i> Logout
</a>
</li>
</ul>
</li>
</ul>

<div id="morphsearch" class="morphsearch">
<form class="morphsearch-form">
<input class="morphsearch-input" type="search" placeholder="Search..." />
<button class="morphsearch-submit" type="submit">Search</button>
</form>
<div class="morphsearch-content">
<div class="dummy-column">
<h2>People</h2>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
<h3>Sara Soueidan</h3>
</a>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
<h3>Shaun Dona</h3>
</a>
</div>
<div class="dummy-column">
<h2>Popular</h2>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
<h3>Page Preloading Effect</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
<h3>Draggable Dual-View Slideshow</h3>
</a>
</div>
<div class="dummy-column">
<h2>Recent</h2>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
<h3>Tooltip Styles Inspiration</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="NotificationStyles" />
<h3>Notification Styles Inspiration</h3>
</a>
</div>
</div>

<span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
</div>

</div>
</div>
</div>
</nav>


<div class="main-menu">
<div class="main-menu-header">
<img class="img-40" src="assets/images/user.png" alt="User-Profile-Image">
<div class="user-details">
<span>John Doe</span>
<span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
</div>
</div>
<div class="main-menu-content">
<ul class="main-navigation">
<li class="more-details">
<a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
<a href="#!"><i class="ti-settings"></i>Settings</a>
<a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
</li>
<li class="nav-title" data-i18n="nav.category.navigation">
<i class="ti-line-dashed"></i>
<span>Navigation</span>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-home"></i>
<span data-i18n="nav.dash.main">Dashboard</span>
</a>
<ul class="tree-1">
<li>
<a href="index-2.html" data-i18n="nav.dash.default"> Default </a></li>
<li>
<li><a href="dashboard-ecommerce.html" data-i18n="nav.dash.ecommerce"> Ecommerce</a></li>
<li><a href="dashboard-crm.html" data-i18n="nav.dash.crm">CRM</a></li>
<li><a href="dashboard-analytics.html" data-i18n="nav.dash.analytics">Analytics</a>
<label class="label label-info menu-caption">NEW</label>
</li>
<li><a href="dashboard-project.html" data-i18n="nav.dash.project">Project</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-layout"></i>
<span data-i18n="nav.page_layout.main">Page layouts</span>
<label class="label label-warning menu-caption">NEW</label>
</a>
<ul class="tree-1">
<li class="nav-sub-item"><a href="#" data-i18n="nav.page_layout.vertical.main"><i class="icon-arrow-right"></i>Vertical</a>
<ul class="tree-2">
<li><a href="menu-static.html" data-i18n="nav.page_layout.vertical.static-layout"> Static
Layout </a></li>
<li><a href="http://flatable.phoenixcoded.net/ltr/vertical-overlay/menu-header-fixed.html" data-i18n="nav.page_layout.vertical.header-fixed">
Header Fixed </a></li>
<li><a href="http://flatable.phoenixcoded.net/ltr/vertical-compact/menu-compact.html" data-i18n="nav.page_layout.vertical.compact"> Compact </a>
</li>
<li><a href="http://flatable.phoenixcoded.net/ltr/vertical-sidebar-fixed/menu-sidebar.html" data-i18n="nav.page_layout.vertical.sidebar-fixed"> Sidebar Fixed </a></li>
</ul>
</li>
<li class="nav-sub-item"><a href="#" data-i18n="nav.page_layout.horizontal.main"> Horizontal</a>
<ul class="tree-2">
<li><a href="http://flatable.phoenixcoded.net/ltr/horizontal-static-icon/menu-horizontal-static.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-layout"> Static layout </a></li>
<li><a href="http://flatable.phoenixcoded.net/ltr/horizontal-fixed/menu-horizontal-fixed.html" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-layout"> Fixed layout </a></li>
<li><a href="http://flatable.phoenixcoded.net/ltr/horizontal-static-icon/menu-horizontal-icon.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-with-icon"> Static With Icon </a></li>
<li><a href="http://flatable.phoenixcoded.net/ltr/horizontal-fixed-icon/menu-horizontal-icon-fixed.html" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-with-icon"> Fixed With Icon </a></li>
</ul>
</li>
<li><a href="http://flatable.phoenixcoded.net/ltr/bottom-menu/menu-bottom.html" data-i18n="nav.page_layout.bottom-menu"> Bottom Menu</a></li>
<li><a href="box-layout.html" target="_blank" data-i18n="nav.page_layout.box-layout"> Box Layout</a></li>
<li><a href="menu-rtl.html" target="_blank" data-i18n="nav.page_layout.rtl">RTL</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-layout-cta-right"></i>
<span data-i18n="nav.navigate.main">Navigation</span>
</a>
<ul class="tree-1">
<li><a href="navbar-light.html" data-i18n="nav.navigate.navbar">Navbar</a>
</li>
<li><a href="navbar-dark.html" data-i18n="nav.navigate.navbar-inverse">Navbar Inverse</a></li>
<li><a href="navbar-elements.html" data-i18n="nav.navigate.navbar-with-elements">Navbar With Elements</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="widget.html">
<i class="ti-view-grid"></i>
<span data-i18n="nav.widget.main"> Widget</span>
<label class="label label-danger menu-caption">100+</label>
</a>
</li>
<li class="nav-title" data-i18n="nav.category.ui-element">
<i class="ti-line-dashed"></i>
<span>UI Element</span>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-layout-grid2-alt"></i>
<span data-i18n="nav.basic-components.main">Basic Components</span>
</a>
<ul class="tree-1">
<li><a href="alert.html" data-i18n="nav.basic-components.alert">Alert</a></li>
<li><a href="breadcrumb.html" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</a></li>
<li><a href="button.html" data-i18n="nav.basic-components.button">Button</a></li>
<li><a href="box-shadow.html" data-i18n="nav.basic-components.box-shadow">Box-Shadow</a></li>
<li><a href="accordion.html" data-i18n="nav.basic-components.collapse–accordion">Accordion</a></li>
<li><a href="generic-class.html" data-i18n="nav.basic-components.generic-class">Generic Class</a></li>
<li><a href="tabs.html" data-i18n="nav.basic-components.tabs">Tabs</a></li>
<li><a href="color.html" data-i18n="nav.basic-components.color">Color</a></li>
<li><a href="label-badge.html" data-i18n="nav.basic-components.label-badge">Label Badge</a></li>
<li><a href="progress-bar.html" data-i18n="nav.basic-components.progress-bar">Progress Bar</a></li>
<li><a href="preloader.html" data-i18n="nav.basic-components.pre-loader">Pre-Loader</a></li>
<li><a href="list.html" data-i18n="nav.basic-components.list">List</a></li>
<li><a href="tooltip.html" data-i18n="nav.basic-components.tooltip-popover">Tooltip And Popover</a></li>
<li><a href="typography.html" data-i18n="nav.basic-components.typography">Typography</a></li>
 <li><a href="other.html" data-i18n="nav.basic-components.other">Other</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-crown"></i>
<span data-i18n="nav.advance-components.main">Advance Components</span>
</a>
<ul class="tree-1">
<li><a href="draggable.html" data-i18n="nav.advance-components.draggable">Draggable</a></li>
<li><a href="bs-grid.html" data-i18n="nav.advance-components.grid-stack">Grid Stack</a></li>
<li><a href="light-box.html" data-i18n="nav.advance-components.light-box">Light Box</a></li>
<li><a href="modal.html" data-i18n="nav.advance-components.modal">Modal</a></li>
<li><a href="modal-form.html" data-i18n="nav.advance-components.modal-form">Modal Form</a></li>
<li><a href="notification.html" data-i18n="nav.advance-components.notifications">Notifications</a></li>
<li><a href="notify.html" data-i18n="nav.advance-components.pnotify">PNOTIFY</a>
<label class="label label-info menu-caption">NEW</label>
</li>
<li><a href="rating.html" data-i18n="nav.advance-components.rating">Rating</a></li>
<li><a href="range-slider.html" data-i18n="nav.advance-components.range-slider">Range Slider</a></li>
<li><a href="slider.html" data-i18n="nav.advance-components.slider">Slider</a></li>
<li><a href="syntax-highlighter.html" data-i18n="nav.advance-components.syntax-highlighter">Syntax Highlighter </a></li>
<li><a href="tour.html" data-i18n="nav.advance-components.tour">Tour</a></li>
<li><a href="treeview.html" data-i18n="nav.advance-components.tree-view">Tree View</a></li>
<li><a href="nestable.html" data-i18n="nav.advance-components.nestable">Nestable</a></li>
<li><a href="toolbar.html" data-i18n="nav.advance-components.toolbar">Toolbar</a></li>
<li><a href="x-editable.html" data-i18n="nav.advance-components.x-editable">X-Editable</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-gift "></i>
<span data-i18n="nav.extra-components.main"> Extra Components</span>
</a>
<ul class="tree-1">
<li><a href="session-timeout.html" data-i18n="nav.extra-components.session-timeout">Session Timeout</a></li>
<li><a href="session-idle-timeout.html" data-i18n="nav.extra-components.session-idle-timeout">Session Idle Timeout</a>
</li>
<li><a href="offline.html" data-i18n="nav.extra-components.offline">Offline</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="animation.html">
<i class="ti-reload rotate-refresh"></i>
<span data-i18n="nav.animations.main"> Animations</span>
</a>
</li>
<li class="nav-item single-item">
<a href="sticky.html">
<i class="ti-layers-alt"></i>
<span data-i18n="nav.sticky-notes.main"> Sticky Notes</span>
<label class="label label-danger menu-caption">HOT</label>
</a>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-star"></i>
<span data-i18n="nav.icons.main">Icons</span>
</a>
<ul class="tree-1">
<li><a href="icon-font-awesome.html" data-i18n="nav.icons.font-awesome">Font Awesome</a></li>
<li><a href="icon-themify.html" data-i18n="nav.icons.themify">Themify</a></li>
<li><a href="icon-simple-line.html" data-i18n="nav.icons.simple-line-icon">Simple Line Icon</a></li>
<li><a href="icon-ion.html" data-i18n="nav.icons.ion-icon">Ion Icon</a></li>
<li><a href="icon-material-design.html" data-i18n="nav.icons.material-design">Material Design</a></li>
<li><a href="icon-icofonts.html" data-i18n="nav.icons.ico-fonts">Ico Fonts</a></li>
<li><a href="icon-weather.html" data-i18n="nav.icons.weather-icon">Weather Icon</a></li>
<li><a href="icon-typicons.html" data-i18n="nav.icons.typicons">Typicons</a></li>
<li><a href="icon-flags.html" data-i18n="nav.icons.flags">Flags</a></li>
</ul>
</li>
<li class="nav-title" data-i18n="nav.category.forms">
<i class="ti-line-dashed"></i>
<span>Forms</span>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-layers"></i>
<span data-i18n="nav.form-components.main">Form Components</span>
</a>
<ul class="tree-1">
<li><a href="form-elements-component.html" data-i18n="nav.form-components.form-components">Form Components</a></li>
<li><a href="form-elements-add-on.html" data-i18n="nav.form-components.form-elements-add-on
                            ">Form-Elements-Add-On
</a></li>
<li><a href="form-elements-advance.html" data-i18n="nav.form-components.form-elements-advance">Form-Elements-Advance</a></li>
<li><a href="form-validation.html" data-i18n="nav.form-components.form-validation">Form Validation</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="form-picker.html">
<i class="ti-pencil-alt"></i>
<span data-i18n="nav.form-pickers.main"> Form Picker </span>
<label class="label label-warning menu-caption">NEW</label>
</a>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-layout-cta-btn-right"></i>
<span data-i18n="nav.json-form.main">JSON Form</span>
<label class="label label-danger menu-caption">HOT</label>
</a>
<ul class="tree-1">
<li><a href="json-forms/simple-form.html" data-i18n="nav.json-form.simple-form">Simple Form</a></li>
<li><a href="json-forms/clubs.html" data-i18n="nav.json-form.clubs-view">Clubs(View Selector)</a></li>
<li><a href="json-forms/customer-form.html" data-i18n="nav.json-form.customer-form">Customer Form</a></li>
<li><a href="json-forms/customer-profile-display-form.html" data-i18n="nav.json-form.profile-display">Profile Display</a></li>
<li><a href="json-forms/customer-profile-edit-form.html" data-i18n="nav.json-form.profile-edit">Profile Edit</a></li>
<li><a href="json-forms/customer-profile-read-only.html" data-i18n="nav.json-form.profile-ready-only">Profile Ready Only</a></li>
<li><a href="json-forms/json-form-fields.html" data-i18n="nav.json-form.form-fields">Form Fields</a></li>
<li><a href="json-forms/registration-click-validation.html" data-i18n="nav.json-form.registration-validation">Registration Validation</a></li>
<li><a href="json-forms/registration-automatic-validation.html" data-i18n="nav.json-form.automatic-validation">Automatic Validation</a></li>
<li><a href="json-forms/localized-login.html" data-i18n="nav.json-form.localized-login">Localized Login</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="form-select.html">
<i class="ti-shortcode"></i>
<span data-i18n="nav.form-select.main">Form Select </span>
</a>
</li>
<li class="nav-item single-item">
<a href="form-masking.html">
<i class="ti-write"></i>
<span data-i18n="nav.form-masking.main">Form Masking </span>
</a>
</li>
<li class="nav-item single-item has-class">
<a href="form-wizard.html">
<i class="ti-archive"></i>
<span data-i18n="nav.form-wizard.main">Form Wizard </span>
</a>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-receipt"></i>
<span data-i18n="nav.ready-to-use.main">Ready To Use</span>
<label class="label label-danger menu-caption">HOT</label>
</a>
<ul class="tree-1">
<li><a href="ready-cloned-elements-form.html" data-i18n="nav.ready-to-use.cloned-elements-form">Cloned Elements Form</a></li>
<li><a href="ready-currency-form.html" data-i18n="nav.ready-to-use.currency-form">Currency Form </a></li>
<li><a href="ready-form-booking.html" data-i18n="nav.ready-to-use.booking-form">Booking Form</a></li>
<li><a href="ready-form-booking-multi-steps.html" data-i18n="nav.ready-to-use.booking-multi-steps-form"> Booking Multi Steps Form</a></li>
<li><a href="ready-form-comment.html" data-i18n="nav.ready-to-use.comment-form">Comment Form</a></li>
<li><a href="ready-form-contact.html" data-i18n="nav.ready-to-use.contact-form"> Contact Form</a></li>
<li><a href="ready-job-application-form.html" data-i18n="nav.ready-to-use.job-application-form">Job Application Form</a></li>
<li><a href="ready-js-addition-form.html" data-i18n="nav.ready-to-use.jS-addition-form">JS Addition Form</a></li>
<li><a href="ready-login-form.html" data-i18n="nav.ready-to-use.login-form"> Login Form</a></li>
<li><a href="ready-popup-modal-form.html" target="_blank" data-i18n="nav.ready-to-use.popup-modal-form">Popup Modal Form</a></li>
<li><a href="ready-registration-form.html" data-i18n="nav.ready-to-use.registration-form">Registration Form</a>
</li>
<li><a href="ready-review-form.html" data-i18n="nav.ready-to-use.review-form">Review Form</a></li>
<li><a href="ready-subscribe-form.html" data-i18n="nav.ready-to-use.subscribe-form">Subscribe Form</a></li>
<li><a href="ready-suggestion-form.html" data-i18n="nav.ready-to-use.suggestion-form">Suggestion Form</a></li>
<li><a href="ready-tabs-form.html" data-i18n="nav.ready-to-use.tabs-form">Tabs Form</a></li>
</ul>
</li>
<li class="nav-title" data-i18n="nav.category.tables">
<i class="ti-line-dashed"></i>
<span>Tables</span>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-layout-grid3-alt"></i>
<span data-i18n="nav.bootstrap-table.main">Bootstrap Table</span>
</a>
<ul class="tree-1">
<li><a href="bs-basic-table.html" data-i18n="nav.bootstrap-table.basic-table">Basic Table</a></li>
<li><a href="bs-table-sizing.html" data-i18n="nav.bootstrap-table.sizing-table">Sizing Table</a></li>
<li><a href="bs-table-border.html" data-i18n="nav.bootstrap-table.border-table">Border Table</a></li>
<li><a href="bs-table-styling.html" data-i18n="nav.bootstrap-table.styling-table">Styling Table</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-widgetized"></i>
<span data-i18n="nav.data-table.main">Data Table</span>
</a>
<ul class="tree-1">
<li><a href="dt-basic.html" data-i18n="nav.data-table.basic-initialization">Basic Initialization</a></li>
<li><a href="dt-advance.html" data-i18n="nav.data-table.advance-initialization">Advance Initialization</a></li>
<li><a href="dt-styling.html" data-i18n="nav.data-table.styling">Styling</a></li>
<li><a href="dt-api.html" data-i18n="nav.data-table.api">API</a></li>
<li><a href="dt-ajax.html" data-i18n="nav.data-table.ajax">Ajax</a></li>
<li><a href="dt-server-side.html" data-i18n="nav.data-table.server-side">Server Side</a></li>
<li><a href="dt-plugin.html" data-i18n="nav.data-table.plug-in">Plug-In</a></li>
<li><a href="dt-data-sources.html" data-i18n="nav.data-table.data-sources">Data Sources</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-loop"></i>
<span data-i18n="nav.data-table-extensions.main">Data Table Extensions</span>
</a>
<ul class="tree-1">
<li><a href="dt-ext-autofill.html" data-i18n="nav.data-table-extensions.autofill">AutoFill</a></li>
<li class="nav-sub-item"><a href="#" data-i18n="nav.data-table-extensions.button.main">Button</a>
<ul class="tree-2">
<li><a href="dt-ext-basic-buttons.html" data-i18n="nav.data-table-extensions.button.basic-button">Basic Button</a></li>
<li><a href="dt-ext-buttons-flash.html" data-i18n="nav.data-table-extensions.button.flash-button">Flash Button</a></li>
<li><a href="dt-ext-buttons-html-5-data-export.html" data-i18n="nav.data-table-extensions.button.html-data-export">Html-5 Data Export </a></li>
<li><a href="dt-ext-buttons-print.html" data-i18n="nav.data-table-extensions.button.print-button">Print Button</a></li>
</ul>
</li>
<li><a href="dt-ext-col-reorder.html" data-i18n="nav.data-table-extensions.col-reorder">Col Reorder</a></li>
<li><a href="dt-ext-fixed-columns.html" data-i18n="nav.data-table-extensions.fixed-columns">Fixed Columns</a></li>
<li><a href="dt-ext-fixed-header.html" data-i18n="nav.data-table-extensions.fixed-header">Fixed Header</a></li>
<li><a href="dt-ext-key-table.html" data-i18n="nav.data-table-extensions.key-table">Key Table</a></li>
<li><a href="dt-ext-responsive.html" data-i18n="nav.data-table-extensions.responsive">Responsive</a></li>
<li><a href="dt-ext-row-reorder.html" data-i18n="nav.data-table-extensions.row-recorder">Row Recorder</a></li>
<li><a href="dt-ext-scroller.html" data-i18n="nav.data-table-extensions.scroller">Scroller</a></li>
<li><a href="dt-ext-select.html" data-i18n="nav.data-table-extensions.select-tbl">Select Table</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="foo-table.html">
<i class="ti-view-list-alt"></i>
<span data-i18n="nav.foo-table.main"> FooTable</span>
</a>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-view-list"></i>
<span data-i18n="nav.handson-table.main"> Handson Table</span>
</a>
<ul class="tree-1">
<li><a href="handson-appearance.html" data-i18n="nav.handson-table.appearance">Appearance</a></li>
<li><a href="handson-data-operation.html" data-i18n="nav.handson-table.data-operation">Data Operation</a></li>
<li><a href="handson-rows-cols.html" data-i18n="nav.handson-table.rows-columns">Rows Columns</a></li>
<li><a href="handson-columns-only.html" data-i18n="nav.handson-table.columns-Only">Columns Only</a></li>
<li><a href="handson-cell-features.html" data-i18n="nav.handson-table.cell-features">Cell Features</a></li>
<li><a href="handson-cell-types.html" data-i18n="nav.handson-table.cell-types">Cell Types</a></li>
<li><a href="handson-integrations.html" data-i18n="nav.handson-table.integrations">Integrations</a></li>
<li><a href="handson-rows-only.html" data-i18n="nav.handson-table.rows-Only">Rows Only</a></li>
<li><a href="handson-utilities.html" data-i18n="nav.handson-table.utilities">Utilities</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="editable-table.html">
<i class="ti-write"></i>
<span data-i18n="nav.editable-table.main">Editable Table</span>
</a>
</li>
<li class="nav-title" data-i18n="nav.category.chart-and-maps">
<i class="ti-line-dashed"></i>
<span>Chart And Maps</span>
<label class="label label-info menu-caption">15P+ </label>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-bar-chart-alt"></i>
<span data-i18n="nav.charts.main">Charts</span>
</a>
<ul class="tree-1">
<li><a href="chart-google.html" data-i18n="nav.charts.google-chart">Google Chart</a></li>
 <li><a href="chart-echart.html" data-i18n="nav.charts.echarts">Echarts</a></li>
<li><a href="chart-chartjs.html" data-i18n="nav.charts.chartjs">ChartJs</a></li>
<li><a href="chart-list.html" data-i18n="nav.charts.list-chart">List Chart</a></li>
<li><a href="chart-float.html" data-i18n="nav.charts.float-chart">Float Chart</a></li>
<li><a href="chart-knob.html" data-i18n="nav.charts.know-chart">Know chart</a></li>
<li><a href="chart-morris.html" data-i18n="nav.charts.morris-chart">Morris Chart</a></li>
<li><a href="chart-nvd3.html" data-i18n="nav.charts.nvd3-chart">Nvd3 Chart</a></li>
<li><a href="chart-peity.html" data-i18n="nav.charts.peity-chart">Peity Chart</a></li>
<li><a href="chart-radial.html" data-i18n="nav.charts.radial chart">Radial Chart</a></li>
<li><a href="chart-rickshaw.html" data-i18n="nav.charts.rickshaw-chart">Rickshaw Chart</a></li>
<li><a href="chart-sparkline.html" data-i18n="nav.charts.sparkline-chart">Sparkline Chart</a></li>
<li><a href="chart-c3.html" data-i18n="nav.charts.c3-chart">C3 Chart</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-map-alt"></i>
<span data-i18n="nav.maps.main">Maps</span>
</a>
<ul class="tree-1">
<li><a href="map-google.html" data-i18n="nav.maps.google-maps">Google Maps</a></li>
<li><a href="map-vector.html" data-i18n="nav.maps.vector-map">Vector Maps</a></li>
<li><a href="map-api.html" data-i18n="nav.maps.google-map-api">Google Map Search API</a></li>
<li><a href="location.html" data-i18n="nav.maps.location">Location</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="http://flatable.phoenixcoded.net/default/landingpage/index.html" target="_blank">
<i class="ti-mobile"></i>
<span data-i18n="nav.landing-page.main"> Landing Page</span>
</a>
</li>
<li class="nav-title" data-i18n="nav.category.pages">
<i class="ti-line-dashed"></i>
<span>Pages</span>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-id-badge"></i>
<span data-i18n="nav.authentication.main">Authentication</span>
</a>
<ul class="tree-1">
<li><a href="auth-normal-sign-in.html" target="_blank" data-i18n="nav.authentication.login-bg-image">Login With BG Image</a></li>
<li><a href="auth-sign-in-social.html" target="_blank" data-i18n="nav.authentication.login-soc-icon">Login With Social Icon</a></li>
<li><a href="auth-sign-in-social-header-footer.html" target="_blank" data-i18n="nav.authentication.login-soc-h-f">Login Social With Header And Footer</a></li>
<li><a href="auth-normal-sign-in-header-footer.html" target="_blank" data-i18n="nav.authentication.login-h-f">Login With Header And Footer</a></li>
<li><a href="auth-sign-up.html" target="_blank" data-i18n="nav.authentication.registration-bg-image">Registration BG Image</a></li>
<li><a href="auth-sign-up-social.html" target="_blank" data-i18n="nav.authentication.registration-soc-icon">Registration Social Icon</a></li>
<li><a href="auth-sign-up-social-header-footer.html" target="_blank" data-i18n="nav.authentication.registration-soc-h-f">Registration Social With Header And Footer</a></li>
<li><a href="auth-sign-up-header-footer.html" target="_blank" data-i18n="nav.authentication.registration-h-f">Registration With Header And Footer</a></li>
<li><a href="auth-multi-step-sign-up.html" target="_blank" data-i18n="nav.authentication.multi-step-registration">Multi Step Registration</a></li>
<li><a href="auth-reset-password.html" target="_blank" data-i18n="nav.authentication.forgot-password">Forgot Password</a></li>
<li><a href="auth-lock-screen.html" target="_blank" data-i18n="nav.authentication.lock-screen">Lock Screen</a></li>
<li><a href="auth-modal.html" target="_blank" data-i18n="nav.authentication.modal">Modal</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-settings"></i>
<span data-i18n="nav.maintenance.main">Maintenance</span>
</a>
<ul class="tree-1">
<li><a href="error.html" data-i18n="nav.maintenance.error">Error</a></li>
<li><a href="comming-soon.html" data-i18n="nav.maintenance.comming-soon">Comming Soon</a></li>
<li><a href="offline-ui.html" data-i18n="nav.maintenance.offline-ui">Offline UI</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-user"></i>
<span data-i18n="nav.user-profile.main">User Profile</span>
</a>
<ul class="tree-1">
<li><a href="timeline.html" data-i18n="nav.user-profile.timeline">Timeline</a></li>
<li><a href="timeline-social.html" data-i18n="nav.user-profile.timeline-social">Timeline Social</a></li>
<li><a href="user-profile.html" data-i18n="nav.user-profile.user-profile">User Profile</a></li>
<li><a href="user-card.html" data-i18n="nav.user-profile.user-card">User Card</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-comment-alt"></i>
<span data-i18n="nav.blog.main">Blog</span>
</a>
<ul class="tree-1">
<li><a href="blog.html" data-i18n="nav.blog.blog">Blog</a></li>
<li><a href="blog-detail.html" data-i18n="nav.blog.blog-detail">Blog Detail</a></li>
<li><a href="blog-detail-left.html" data-i18n="nav.blog.blog-left-side">Blog With Left Sidebar</a></li>
<li><a href="blog-detail-right.html" data-i18n="nav.blog.blog-right-sidebar">Blog With Right Sidebar</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-shopping-cart"></i>
<span data-i18n="nav.e-commerce.main">E-Commerce</span>
<label class="label label-danger menu-caption">NEW</label>
</a>
<ul class="tree-1">
<li><a href="product.html" data-i18n="nav.e-commerce.product">Product</a></li>
<li><a href="product-list.html" data-i18n="nav.e-commerce.product-list">Product List</a></li>
<li><a href="product-edit.html" data-i18n="nav.e-commerce.product-edit">Product Edit</a></li>
<li><a href="product-detail.html" data-i18n="nav.e-commerce.product-detail">Product Detail</a></li>
<li><a href="product-cart.html" data-i18n="nav.e-commerce.product-card">Product Card</a></li>
<li><a href="product-payment.html" data-i18n="nav.e-commerce.credit-card-form">Credit Card Form </a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-email"></i>
<span data-i18n="nav.email.main">Email</span>
</a>
<ul class="tree-1">
<li><a href="email-compose.html" data-i18n="nav.email.compose-mail">Compose Email</a></li>
<li><a href="email-inbox.html" data-i18n="nav.email.inbox">Inbox</a></li>
<li><a href="email-read.html" data-i18n="nav.email.read-read-mail">Read Mail</a></li>
<li class="nav-sub-item"><a href="#" data-i18n="nav.email.email-template.main">Email Template</a>
<ul class="tree-2">
<li><a href="email-templates/email-welcome.html" data-i18n="nav.email.email-template.welcome-email">Welcome Email</a></li>
<li><a href="email-templates/email-password.html" data-i18n="nav.email.email-template.reset-password">Reset Password</a></li>
<li><a href="email-templates/email-newsletter.html" data-i18n="nav.email.email-template.newsletter-email">Newsletter Email</a></li>
<li><a href="email-templates/email-launch.html" data-i18n="nav.email.email-template.app-launch">App Launch</a></li>
<li><a href="email-templates/email-activation.html" data-i18n="nav.email.email-template.activation-code">Activation Code</a></li>
</ul>
</li>
</ul>
</li>
<li class="nav-title" data-i18n="nav.category.app">
<i class="ti-line-dashed"></i>
<span>App</span>
</li>
<li class="nav-item single-item">
<a href="chat.html">
<i class="ti-comments"></i>
<span data-i18n="nav.chat.main"> Chat</span>
</a>
</li>
<li class="nav-item single-item">
<a href="crm-contact.html">
<i class="ti-layout-list-thumb"></i>
<span data-i18n="nav.crm-contact.main"> CRM Contact</span>
</a>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-dribbble"></i>
<span data-i18n="nav.social.main">Social</span>
</a>
<ul class="tree-1">
<li><a href="fb-wall.html" data-i18n="nav.social.fb-wall">Fb Wall</a></li>
<li><a href="message.html" data-i18n="nav.social.messages">Messages</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-check-box"></i>
<span data-i18n="nav.task.main">Task</span>
</a>
<ul class="tree-1">
<li><a href="task-list.html" data-i18n="nav.task.task-list">Task List</a></li>
<li><a href="task-board.html" data-i18n="nav.task.task-board">Task Board</a></li>
<li><a href="task-detail.html" data-i18n="nav.task.task-detail">Task Detail</a></li>
<li><a href="issue-list.html" data-i18n="nav.task.issue list">Issue List</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-notepad"></i>
<span data-i18n="nav.to-do.main">To-Do</span>
</a>
<ul class="tree-1">
<li><a href="todo.html" data-i18n="nav.to-do.todo">To-Do</a></li>
<li><a href="notes.html" data-i18n="nav.to-do.notes">Notes</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-gallery"></i>
<span data-i18n="nav.gallery.main">Gallery</span>
</a>
<ul class="tree-1">
<li><a href="gallery-grid.html" data-i18n="nav.gallery.gallery-grid">Gallery-Grid</a></li>
<li><a href="gallery-masonry.html" data-i18n="nav.gallery.masonry-gallery">Masonry Gallery</a></li>
<li><a href="gallery-advance.html" data-i18n="nav.gallery.advance-gallery">Advance Gallery</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-search"></i>
<span data-i18n="nav.search.main">Search</span>
</a>
<ul class="tree-1">
<li><a href="search-result.html" data-i18n="nav.search.simple-search">Simple Search</a></li>
<li><a href="search-result2.html" data-i18n="nav.search.grouping-search">Grouping Search</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-medall-alt"></i>
<span data-i18n="nav.job-search.main">Job Search</span>
<label class="label label-danger menu-caption">NEW</label>
</a>
<ul class="tree-1">
<li><a href="job-card-view.html" data-i18n="nav.job-search.card-view">Card View</a></li>
<li><a href="job-details.html" data-i18n="nav.job-search.job-detailed">Job Detailed</a></li>
<li><a href="job-find.html" data-i18n="nav.job-search.job-find">Job Find</a></li>
<li><a href="job-panel-view.html" data-i18n="nav.job-search.job-panel-view">Job Panel View</a></li>
</ul>
</li>
<li class="nav-title" data-i18n="nav.category.extension">
<i class="ti-line-dashed"></i>
<span>Extension</span>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-pencil-alt"></i>
<span data-i18n="nav.editor.main">Editor</span>
</a>
<ul class="tree-1">
<li><a href="ck-editor.html" data-i18n="nav.editor.ck-editor">CK-Editor</a></li>
<li><a href="wysiwyg-editor.html" data-i18n="nav.editor.wysiwyg-editor">WYSIWYG Editor</a></li>
<li><a href="ace-editor.html" data-i18n="nav.editor.ace-editor">Ace Editor</a></li>
<li><a href="summernote.html" data-i18n="nav.editor.summer-note-editor">Summer Note Editor</a></li>
<li><a href="long-press-editor.html" data-i18n="nav.editor.long-press-editor">Long Press Editor</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-layout-media-right"></i>
<span data-i18n="nav.invoice.main">Invoice</span>
</a>
<ul class="tree-1">
<li><a href="invoice.html" data-i18n="nav.invoice.invoice">Invoice</a></li>
<li><a href="invoice-summary.html" data-i18n="nav.invoice.invoice-summery">Invoice Summary</a></li>
<li><a href="invoice-list.html" data-i18n="nav.invoice.invoice-list">Invoice List</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-calendar"></i>
<span data-i18n="nav.event-calendar.main">Event Calendar</span>
</a>
<ul class="tree-1">
<li><a href="event-full-calender.html" data-i18n="nav.full-calendar.full-calendar">Full Calendar</a></li>
<li><a href="event-clndr.html" data-i18n="nav.clnder.clnder">CLNDER
<label class="label label-info menu-caption">New</label>
</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="image-crop.html">
<i class="ti-cut"></i>
<span data-i18n="nav.image-cropper.main"> Image Cropper</span>
</a>
</li>
<li class="nav-item single-item">
<a href="file-upload.html">
<i class="ti-cloud-up"></i>
<span data-i18n="nav.file-upload.main">File Upload</span>
</a>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-world"></i>
<span data-i18n="nav.internationalize.main">Internationalize</span>
<label class="label label-danger menu-caption">HOT</label>
</a>
<ul class="tree-1">
<li><a href="internationalization/internationalization-after-init.html" data-i18n="nav.internationalize.after-init">After Init</a></li>
<li><a href="internationalization/internationalization-fallback.html" data-i18n="nav.internationalize.fallback">Fallback</a></li>
<li><a href="internationalization/internationalization-on-init.html" data-i18n="nav.internationalize.on-int">On Init</a></li>
<li><a href="internationalization/internationalization-resources.html" data-i18n="nav.internationalize.resources">Resources</a></li>
<li><a href="internationalization/internationalization-xhr-backend.html" data-i18n="nav.internationalize.xhr-backend">XHR Backend</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="change-loges.html">
<i class="ti-list"></i>
<span data-i18n="nav.change-loges.main">Change Loges</span>
<label class="label label-warning menu-caption">1.0</label>
</a>
</li>
<li class="nav-title" data-i18n="nav.category.other">
<i class="ti-line-dashed"></i>
<span> Other</span>
</li>
<li class="nav-item">
<a href="#!">
<i class="ti-direction-alt"></i>
<span data-i18n="nav.menu-levels.main">Menu Levels</span>
</a>
<ul class="tree-1">
<li><a href="#!" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</a></li>
<li class="nav-sub-item"><a href="#" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</a>
<ul class="tree-2">
<li><a href="#" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</a></li>
<li class="nav-sub-item-3"><a href="#" data-i18n="nav.menu-levels.menu-level-22.menu-level-32.main">Menu Level 3.2 </a>
<ul class="tree-3">
<li><a href="#" data-i18n="nav.menu-levels.menu-level-22.menu-level-32.menu-level-41">Menu Level 4.1</a> </li>
<li class="nav-sub-item-4"><a href="#" data-i18n="nav.menu-levels.menu-level-22.menu-level-32.menu-level-42">Menu Level 4.2</a>
<ul class="tree-4">
<li><a href="#" data-i18n="nav.menu-levels.menu-level-22.menu-level-32.menu-level-41">Menu Level 5.1</a> </li>
<li><a href="#" data-i18n="nav.menu-levels.menu-level-22.menu-level-32.menu-level-42">Menu Level 5.2</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href="#!" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</a></li>
</ul>
</li>
<li class="nav-item single-item">
<a href="#!" class="nav-link disabled">
<i class="ti-na"></i>
<span data-i18n="nav.disabled-menu.main"> Disabled Menu</span>
</a>
</li>
<li class="nav-item single-item">
<a href="sample-page.html">
<i class="ti-layout-sidebar-left"></i>
<span data-i18n="nav.sample-page.main">Sample Page</span>
</a>
</li>
<li class="nav-title" data-i18n="nav.category.support">
<i class="ti-line-dashed"></i>
<span>Support</span>
</li>
<li class="nav-item single-item">
<a href="http://flatable.phoenixcoded.net/doc" target="_blank">
<i class="ti-file"></i>
<span data-i18n="nav.documentation.main">Documentation</span>
</a>
</li>
<li class="nav-item single-item">
<a href="https://support.phoenixcoded.net/#/home" target="_blank">
<i class="ti-layout-list-post"></i>
<span data-i18n="nav.submit-issue.main">Submit Issue</span>
</a>
</li>
</ul>
</div>
</div>


<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="card card_main p-fixed users-main">
<div class="user-box">
<div class="card-block">
<div class="right-icon-control">
<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
<div class="form-icon">
<i class="icofont icofont-search"></i>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia</div>
</div>
</div>
<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen</div>
</div>
</div>
<div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Michael Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Irina Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara Tancredi</div>
</div>
</div>
<div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Samon</div>
</div>
</div>
<div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Daizy Mendize</div>
</div>
</div>
<div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Loren Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara</div>
</div>
</div>
<div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="icofont icofont-rounded-left"></i> Josephin Doe
</a>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media-right photo-table">
<a href="#!">
<img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
</a>
</div>
</div>
<div class="chat-reply-box p-b-20">
<div class="right-icon-control">
<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
<div class="form-icon">
<i class="icofont icofont-paper-plane"></i>
</div>
</div>
</div>
</div>


<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4>Applicant Registration</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="index-2.html">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">Form Wizard</a>
</li>
</ul>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">



<div class="card">
<div class="card-header">
<h5>Verticle Wizard</h5>

<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-md-12">
<div id="wizard">
<section>
<form class="wizard-form" id="verticle-wizard" action="#">
<h3>Account Information</h3>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Email:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="userName-2" name="userName" type="text" class=" form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Repeat Email:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="userName-2" name="userName" type="text" class=" form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Password: </label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="userName-2" name="userName" type="text" class=" form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Repeat Password:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="userName-2" name="userName" type="text" class=" form-control">
</div>
</div>
</fieldset>


<h3> Personal Information </h3>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="name-2" class="block">Name:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="name-2" name="name" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="phone-2" class="block">Phone:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="phone-2" name="phone" type="number" class="form-control phone">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="surname-2" class="block">Street:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="surname-2" name="surname" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="surname-2" class="block">City:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="surname-2" name="surname-2" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">Country:</div>
<div class="col-sm-8 col-lg-10">
<select class="form-control required">
<option>Select Country</option>
<option>United States</option>
<option>Philippines</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="surname-2" class="block">Website:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="surname-2" name="surname-2" type="text" class="form-control" value="http://">
</div>
</div>
</fieldset>
<h3>Further Information</h3>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">Gender:</div>
<div class="col-sm-8 col-lg-10">
<select class="form-control required">
<option>Select Status</option>
<option>Female</option>
<option>Male</option>
</select>
</div>
</div>

<div class="form-group row">
<div class="col-sm-2 col-lg-4">Birthdate:</div>
<div class="col-sm-8 col-lg-10">

     <input type="date" name="birthday">
  
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">Languages:</div>
<div class="col-sm-8 col-lg-10">
<select class="form-control required">
<option>Select Language</option>
<option>Filipino</option>
<option>English</option>
<option>Spanish</option>
<option>Japanese</option>
<option>Chinese</option>
<option>French</option>
<option>Arabic</option>
<option>Korean</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">Nationality:</div>
<div class="col-sm-8 col-lg-10">
<select class="form-control required">
<option>Select Nationality</option>
<option>United States</option>
</select>
</div>
</div>
</fieldset>
<h3> Education Background</h3>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Company-2" class="block">Highest Level Completed:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Company-2" name="Company:" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="CountryW-2" class="block">Course/Degree:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="CountryW-2" name="Country" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Name of School/University:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Year Graduated:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Last Attended</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
</fieldset>
<h3> Work Experience</h3>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Company-2" class="block">Name of Company/Firm:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Company-2" name="Company:" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="CountryW-2" class="block">Address:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="CountryW-2" name="Country" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Inclusive Date From / To:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Position Head:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
</fieldset>
</form>
</section>
</div>
</div>
</div>
</div>
</div>




<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/classie/classie.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script src="<?php echo base_url();?>themes/bower_components/jquery.cookie/jquery.cookie.js"></script>
<script src="<?php echo base_url();?>themes/bower_components/jquery.steps/build/jquery.steps.js"></script>
<script src="<?php echo base_url();?>themes/bower_components/jquery-validation/dist/jquery.validate.js"></script>

<script src="<?php echo base_url();?>themes/cdn-cgi/scripts/5c5dd728cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="<?php echo base_url();?>themes/cdn-cgi/scripts/5c5dd728cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/form-validation/validate.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/ltr/vertical-static/assets/js/script.js"></script>
<script src="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/forms-wizard-validation/form-wizard.js"></script>
</body>

</html>
