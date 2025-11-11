<!doctype html>
<html lang="en" dir="ltr"> <!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->
	
<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:07:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>

		@include('backend.partials.header');

    </head>

    <body class="ltr app sidebar-mini">

        <!-- Switcher-->
        <!-- Switcher -->
        <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="form_holder sidebar-right1">
                    <div class="row">
                        <div class="predefined_styles">
                            <div class="swichermainleft text-center">
                                <div class="swichermainleft text-center">
                                <div class="p-3 d-grid gap-2">
                                    <a href="https://laravel8.spruko.com/noa" class="btn ripple btn-primary mt-0" target="_blank">View Demo</a>
                                    <a href="https://themeforest.net/item/noa-laravel-admin-template/38978033" class="btn ripple btn-secondary" target="_blank">Buy Now</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink" target="_blank">Our
                                        Portfolio</a>
                                </div>
                            </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Navigation Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Vertical Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Horizontal Click Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch35" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Horizontal Hover Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>LTR and RTL VERSIONS</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">LTR Version</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                    id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">RTL Version</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                    id="myonoffswitch24" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Light Theme Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Theme</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                    id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Primary</span>
                                            <div class="">
                                                <input class="wpx-30 h-30 input-color-picker color-primary-light"
                                                    value="#8FBD56" id="colorID" type="color"
                                                    data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                    data-id7="transparentcolor" name="lightPrimary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Dark Theme Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Theme</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                    id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Primary</span>
                                            <div class="">
                                                <input class="wpx-30 h-30 input-dark-color-picker color-primary-dark"
                                                    value="#8FBD56" id="darkPrimaryColorID"
                                                    type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                    data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
                                            </div>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Custom Background</span>
                                            <div class="">
                                                <input class="wpx-30 h-30 input-transparent-color-picker color-bg-transparent"
                                                    value="#8FBD56" id="transparentBgColorID"
                                                    type="color" data-id5="body" data-id6="boxed-theme" name="transparentBackground">
                                            </div>
                                        </div>
                                        <div class="switch-toggle">
                                            <span class="">Background Image</span>
                                            <div class="mt-1">
                                                <a class="bg-img bg-img1" href="javascript:void(0);"><img
                                                        src="{{asset('dashboard/assets/images/media/bg-img1.jpg')}}" alt="Bg-Image" id="bgimage1"></a>
                                                <a class="bg-img bg-img2" href="javascript:void(0);"><img
                                                        src="{{asset('dashboard/assets/images/media/bg-img2.jpg')}}" alt="Bg-Image" id="bgimage2"></a>
                                                <a class="bg-img bg-img3" href="javascript:void(0);"><img
                                                        src="{{asset('dashboard/assets/images/media/bg-img3.jpg')}}" alt="Bg-Image" id="bgimage3"></a>
                                                <a class="bg-img bg-img4" href="javascript:void(0);"><img
                                                        src="{{asset('dashboard/assets/images/media/bg-img4.jpg')}}" alt="Bg-Image" id="bgimage4"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft menu-styles">
                                <h4>Menu Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle lightMenu d-flex">
                                            <span class="me-auto">Light Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch3" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle colorMenu d-flex mt-2">
                                            <span class="me-auto">Color Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle darkMenu d-flex mt-2">
                                            <span class="me-auto">Dark Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle gradientMenu d-flex mt-2">
                                            <span class="me-auto">Gradient Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch19" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft header-styles">
                                <h4>Header Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle lightHeader d-flex">
                                            <span class="me-auto">Light Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch6" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle  colorHeader d-flex mt-2">
                                            <span class="me-auto">Color Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle darkHeader d-flex mt-2">
                                            <span class="me-auto">Dark Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>

                                        <div class="switch-toggle darkHeader d-flex mt-2">
                                            <span class="me-auto">Gradient Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch20" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Layout Width Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Full Width</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                    id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Boxed</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                    id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Layout Positions</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Fixed</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                    id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Scrollable</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                    id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft leftmenu-styles">
                                <h4>Sidemenu layout Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Default Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Icon with Text</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Icon Overlay</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Closed Sidemenu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch16" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Hover Submenu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch17" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Hover Submenu Style 1</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch18" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Reset All Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section my-4">
                                        <button class="btn btn-danger btn-block resetCustomStyles" id="resetAll" type="button">Reset All
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->
        <!-- Switcher-->

        <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('dashboard/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
		<div class="page">
			<div class="page-main">

                <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{Route('home')}}">
                            <img src="{{asset('dashboard/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('dashboard/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        
                         <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-xl-none d-md-block d-none">
                                <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="" d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-md-none d-flex">
                                            <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
													<input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>      
										<!-- NOTIFICATIONS -->
										<div class="dropdown d-md-flex profile-1">
											<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex animate">
												<span>
													<img src="{{asset('dashboard/assets/images/faces/6.jpg')}}" alt="profile-user"
														class="avatar  profile-user brround cover-image">
												</span>
												<div class="text-center p-1 d-flex d-lg-none-max">
													<h6 class="mb-0" id="profile-heading">{{ $user->name ? $user->name : "No user" }}<i class="user-angle ms-1 fa fa-angle-down "></i></h6>
												</div>
											</a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
												<a class="dropdown-item" href="profile.html">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.6650391,13.3672485C16.6381226,12.3842773,17.9974365,10.3535767,18,8c0-3.3137207-2.6862793-6-6-6S6,4.6862793,6,8c0,2.3545532,1.3595581,4.3865967,3.3334961,5.3690186c-3.6583862,1.0119019-6.5859375,4.0562134-7.2387695,8.0479736c-0.0002441,0.0013428-0.0004272,0.0026855-0.0006714,0.0040283c-0.0447388,0.272583,0.1399536,0.5297852,0.4125366,0.5745239c0.272522,0.0446777,0.5297241-0.1400146,0.5744629-0.4125366c0.624939-3.8344727,3.6308594-6.8403931,7.465332-7.465332c4.9257812-0.8027954,9.5697632,2.5395508,10.3725586,7.465332C20.9594727,21.8233643,21.1673584,21.9995117,21.4111328,22c0.0281372,0.0001831,0.0562134-0.0021362,0.0839844-0.0068359h0.0001831c0.2723389-0.0458984,0.4558716-0.303833,0.4099731-0.5761719C21.2677002,17.5184937,18.411377,14.3986206,14.6650391,13.3672485z M12,13c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,10.7614136,14.7614136,13,12,13z"/></svg>
													Profile
												</a>
												
												<a class="dropdown-item" href="mail-inbox.html">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,8.5c-1.9329834,0-3.5,1.5670166-3.5,3.5s1.5670166,3.5,3.5,3.5c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5C15.5,10.0670166,13.9329834,8.5,12,8.5z M12,14.5c-1.3807373,0-2.5-1.1192627-2.5-2.5s1.1192627-2.5,2.5-2.5c1.380127,0.0014648,2.4985352,1.119873,2.5,2.5C14.5,13.3807373,13.3807373,14.5,12,14.5z M21.1582031,10.0253906l-1.8867188-0.6289062c-0.0222168-0.0074463-0.0439453-0.0164185-0.0648804-0.0268555c-0.2470093-0.12323-0.3474121-0.4234009-0.2241821-0.6704102l0.8896484-1.7783203c0.0960083-0.1925659,0.0582275-0.4248657-0.09375-0.5771484l-2.1210938-2.1220703c-0.1524658-0.1516113-0.3845215-0.1893311-0.5771484-0.09375l-1.7792969,0.8896484c-0.0209961,0.010437-0.0426636,0.0194092-0.0648804,0.0268555c-0.2618408,0.0874023-0.5449829-0.0540771-0.6323853-0.315918l-0.6289062-1.8867188C13.90625,2.6377563,13.71521,2.5001831,13.5,2.5h-3c-0.21521-0.0001221-0.40625,0.1376343-0.4741821,0.3417969L9.3969116,4.7285156C9.3518677,4.8665161,9.24823,4.9776001,9.1137085,5.0322266c-0.1335449,0.057373-0.2857666,0.052002-0.414978-0.0146484L6.9204102,4.1279297c-0.1925049-0.0960693-0.4249268-0.0583496-0.5771484,0.09375L4.2216797,6.34375c-0.1522217,0.1521606-0.1900024,0.3846436-0.09375,0.5771484l0.8896484,1.7783203c0.0107422,0.0214233,0.0198975,0.0435791,0.0274658,0.0662842c0.086792,0.2616577-0.0548706,0.5441284-0.3165283,0.6309814l-1.8867188,0.6289062C2.6377563,10.09375,2.5001831,10.28479,2.5,10.5v3c0.0001831,0.21521,0.1377563,0.40625,0.3417969,0.4746094l1.8862305,0.6289062c0.0224609,0.0074463,0.0444336,0.0165405,0.0656128,0.0270996c0.2468872,0.12323,0.347168,0.4232788,0.223938,0.670166l-0.8896484,1.7783203c-0.0962524,0.1925049-0.0584717,0.4249878,0.09375,0.5771484l2.1216431,2.1220703c0.1523438,0.1519165,0.3845825,0.1896362,0.5771484,0.09375l1.7783203-0.8896484c0.1289673-0.067627,0.2816162-0.072998,0.4150391-0.0146484c0.1344604,0.0546265,0.2380981,0.1657104,0.2831421,0.3037109l0.6289062,1.8867188C10.093811,21.3623657,10.2848511,21.500061,10.5,21.5h3c0.21521-0.0001831,0.40625-0.1378174,0.4746094-0.3418579l0.6289062-1.8867188c0.0074463-0.0222168,0.0164185-0.0438843,0.0268555-0.0648804c0.12323-0.2470093,0.4234009-0.3474121,0.6704102-0.2241821l1.7792969,0.8896484c0.192688,0.0950928,0.4244995,0.0574341,0.5771484-0.09375l2.1210938-2.1220703c0.1519775-0.1522217,0.1897583-0.3845825,0.09375-0.5771484l-0.8896484-1.7783203c-0.0651855-0.1295776-0.0705566-0.2811279-0.0146484-0.414978c0.0546265-0.1342773,0.1657715-0.2375488,0.3037109-0.2822266l1.8867188-0.6289062C21.3622437,13.90625,21.4998169,13.71521,21.5,13.5v-3C21.4998169,10.28479,21.3622437,10.09375,21.1582031,10.0253906z M20.5,13.1396484l-1.5449219,0.5146484c-0.0671997,0.0223999-0.1326904,0.0495605-0.1960449,0.0811768c-0.7410889,0.3704224-1.0415649,1.2714844-0.6711426,2.0125732l0.7285156,1.4560547l-1.6113281,1.6123047l-1.4570312-0.7285156c-0.0639648-0.0320435-0.130127-0.0594482-0.197998-0.0820312c-0.7856445-0.2613525-1.6343994,0.1636353-1.895752,0.9492188L13.1396484,20.5h-2.2792969l-0.5151978-1.5449219c-0.0223389-0.0669556-0.0493774-0.1322021-0.0809326-0.1953125c-0.3702393-0.741394-1.2714233-1.0421753-2.0128174-0.671875l-1.4559937,0.7285156l-1.6118164-1.6123047l0.7285156-1.4560547c0.0314941-0.0631104,0.0585327-0.128418,0.0808716-0.1953125c0.2622681-0.7861938-0.1623535-1.6361084-0.9485474-1.8984375L3.5,13.1396484v-2.2792969l1.5449219-0.5145874c0.0666504-0.0222778,0.1317139-0.0492554,0.1945801-0.0806274c0.7416382-0.3701782,1.0427856-1.2714844,0.6726074-2.0131226L5.1835938,6.7958984l1.6118774-1.6123047l1.4559937,0.7285156C8.3145752,5.9436646,8.3798218,5.9707031,8.4467773,5.993042c0.7860718,0.2623901,1.6359863-0.1620483,1.8984375-0.9481201L10.8603516,3.5h2.2792969l0.5147095,1.5449219c0.022583,0.0678711,0.0499878,0.1340332,0.0820312,0.197998c0.3707275,0.7403564,1.2713623,1.039917,2.0117188,0.6691895l1.4569702-0.7285156l1.6113281,1.6123657l-0.7285156,1.4560547c-0.0320435,0.0639038-0.0594482,0.1300659-0.0820312,0.197937c-0.2613525,0.7856445,0.1636353,1.6343384,0.9492188,1.895752L20.5,10.8603516V13.1396484z"/></svg>
													Settings
												</a>
												
												<a class="dropdown-item" href="login.html">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.6523438,16.140625c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.4941406-4.4941406c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481L11.359314,7.1524048c-0.1937256-0.1871338-0.5009155-0.1871338-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L14.2930298,11.5H2.5C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h11.7930298L10.6523438,16.140625z M16.4199829,3.0454102C11.4741821,0.5905762,5.4748535,2.6099243,3.0200195,7.5556641C2.8970337,7.8029175,2.9978027,8.1030884,3.2450562,8.2260742C3.4923706,8.3490601,3.7925415,8.248291,3.9155273,8.0010376c0.8737793-1.7612305,2.300354-3.1878052,4.0615845-4.0615845C12.428833,1.730835,17.828064,3.5492554,20.0366821,8.0010376c2.2085571,4.4517212,0.3901367,9.8509521-4.0615845,12.0595703c-4.4517212,2.2085571-9.8510132,0.3901367-12.0595703-4.0615845c-0.1229858-0.2473145-0.4231567-0.3480835-0.6704102-0.2250977c-0.2473145,0.1229858-0.3480835,0.4230957-0.2250977,0.6704102c1.6773682,3.4109497,5.1530762,5.5667114,8.9541016,5.5537109c3.7976685,0.0003662,7.2676392-2.1509399,8.9560547-5.5526733C23.3850098,11.4996338,21.3657227,5.5002441,16.4199829,3.0454102z"/></svg>
													Log out
												</a>
											</div>
										</div> 

										<!-- Profile -->
                                    </div>
                                </div>
                            </div>
                            <div class="demo-icon nav-link icon fe-spin">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z"/></svg>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

                <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{Route('home')}}">
                            <img src="{{asset('dashboard/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('dashboard/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{asset('dashboard/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{asset('dashboard/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
                        </a><!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg>
                        </div>
                        <ul class="side-menu">
                            <li>
                                <h3>Menu</h3>
                            </li>
							<li class="slide">
								<a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ Route('home') }}">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
									<span class="side-menu__label">Dashboard</span>
								</a>
							
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->

                @yield('content')
             </div>

            <!-- Country-selector modal-->
             <div class="modal fade" id="country-selector">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content country-select-modal">
                        <div class="modal-header">
                            <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <ul class="row row-sm p-3">
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block active">
                                        <span class="country-selector"><img alt="unitedstates" src="{{asset('dashboard/assets/images/flags/us_flag.jpg')}}" class="me-2 language"></span>United States
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="italy" src="{{asset('dashboard/assets/images/flags/italy_flag.jpg')}}" class="me-2 language"></span>Italy
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="spain" src="{{asset('dashboard/assets/images/flags/spain_flag.jpg')}}" class="me-2 language"></span>Spain
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="india" src="{{asset('dashboard/assets/images/flags/india_flag.jpg')}}" class="me-2 language"></span>India
                                </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="french" src="{{asset('dashboard/assets/images/flags/french_flag.jpg')}}" class="me-2 language"></span>French
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="russia" src="{{asset('dashboard/assets/images/flags/russia_flag.jpg')}}" class="me-2 language"></span>Russia
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="germany" src="{{asset('dashboard/assets/images/flags/germany_flag.jpg')}}" class="me-2 language"></span>Germany
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="argentina" src="{{asset('dashboard/assets/images/flags/argentina_flag.jpg')}}" class="me-2 language"></span>Argentina
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="uae" src="{{asset('dashboard/assets/images/flags/uae_flag.jpg')}}" class="me-2 language"></span>UAE
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="austria" src="{{asset('dashboard/assets/images/flags/austria_flag.jpg')}}" class="me-2 language"></span>Austria
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="mexico" src="{{asset('dashboard/assets/images/flags/mexico_flag.jpg')}}" class="me-2 language"></span>Mexico
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="china" src="{{asset('dashboard/assets/images/flags/china_flag.jpg')}}" class="me-2 language"></span>China
                                </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="poland" src="{{asset('dashboard/assets/images/flags/poland_flag.jpg')}}" class="me-2 language"></span>Poland
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="canada" src="{{asset('dashboard/assets/images/flags/canada_flag.jpg')}}" class="me-2 language"></span>Canada
                                    </a>
                                </li>
                                <li class="col-lg-4 mb-2">
                                    <a class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="malaysia" src="{{asset('dashboard/assets/images/flags/malaysia_flag.jpg')}}" class="me-2 language"></span>Malaysia
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Country-selector modal--> 

            
		<!--TASK MODAL-->
		<div class="modal fade" id="Vertically">
			<div class="modal-dialog modal-dialog-centered task-view-modal" role="document">
				<div class="modal-content modal-content-demo">

					<div class="modal-header p-5">
						<h4 class="modal-title text-dark">#1. Sit sed takimata sanctus invidunt</h4><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 d-flex mb-4">
								<p class="m-0 wp-30 text-muted">Project Name</p>
								<p class="m-0 wp-70 text-dark">Noa Dashboard UI</p>
							</div>
							<div class="col-md-12 d-flex mb-4">
								<p class="m-0 wp-30 text-muted">Assigned To</p>
								<div class="m-0 wp-70 text-dark d-flex align-items-center">
									<div class="me-2">
										<img alt="User Avatar" class="rounded-circle avatar-sm" src="{{asset('dashboard/assets/images/users/7.jpg')}}">
									</div>
									<div>
										<p class="mb-1">Daniel Obrien</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 d-flex mb-4">
								<p class="m-0 wp-30 text-muted">Start Date</p>
								<p class="m-0 wp-70 text-dark">30-10-2021</p>
							</div>
							<div class="col-md-12 d-flex mb-4">
								<p class="m-0 wp-30 text-muted">Status</p>
								<div class="m-0 wp-70 text-dark">
									<span class="mb-0 mt-1 status-main in-progress">In Progress</span>
								</div>
							</div>
							<div class="col-md-12 d-flex mb-4">
								<p class="m-0 wp-30 text-muted">End Date</p>
								<p class="m-0 wp-70 text-dark">---</p>
							</div>
							<div class="col-md-12 d-flex mb-4">
								<p class="m-0 wp-30 text-muted">Description</p>
								<p class="m-0 wp-70 text-dark">Kasd dolore lorem eos stet at, dolor ipsum elitr sea amet amet stet justo, sed.</p>
							</div>
						</div>
					</div>

					<div class="modal-footer p-0 border-top-0">

						<!-- Tabs -->
						<div class="tabs-menu4 w-100">
							<nav class="nav border-bottom px-4 d-block d-lg-flex flex-2">
								<a class="nav-link border border-bottom-0 py-1 br-5 mx-1 mx-md-1 active" data-bs-toggle="tab" href="#task-files">
									Files
								</a>
								<a class="nav-link border border-bottom-0 py-1 br-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#task-subtask">
									Sub Task
								</a>
								<a class="nav-link border border-bottom-0 py-1 br-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#task-tracktime">
									Track Time
								</a>
								<a class="nav-link border border-bottom-0 py-1 br-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#task-comments">
									Comments
								</a>
							</nav>
						</div><!-- /Tabs -->

						<div class="tab-content w-100">
							<div class="tab-pane active task-files-tab" id="task-files">
								<div class="row">
									<div class="file-upload-text">
										<input type="file" id="task-file-input" multiple>
										<label for="task-file-input" class="text-primary">
											<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-primary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
											Upload Files
											<span class="text-muted"></span>
										</label>
										<i class="fa fa-times-circle remove"></i>
									</div>
								</div>
								<div class="row">
									<div class="mt-3">
										<table class="table table-bordered br-7">
											<thead>
												<tr class="row-first">
													<th>File Name</th>
													<th>Date</th>
													<th>Type</th>
													<th>Size</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="recent-files">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>
															<span class="mb-1 font-weight-semibold">noa documentation</span>
														</div>
													</td>
													<td>
														<span class="text-muted modified-date">07/10/21, 03:30</span>
													</td>
													<td>
														<span>doc</span>
													</td>
													<td>
														<span class="text-muted file-size">15kb</span>
													</td>
												</tr>
												<tr>
													<td>
														<div class="recent-files">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>

															<span class="mb-1 font-weight-semibold">sample video</span>
														</div>
													</td>
													<td>
														<span class="text-muted modified-date">07/10/21, 03:30</span>
													</td>
													<td>
														<span>mp4</span>
													</td>
													<td>
														<span class="text-muted file-size">30mb</span>
													</td>
												</tr>
												<tr class="row-last">
													<td>
														<div class="recent-files">
															<svg class="file-manager-icon w-icn me-2"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#8FBD56" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>
															<span class="mb-1 font-weight-semibold">sample image</span>
														</div>
													</td>
													<td>
														<span class="text-muted modified-date">07/10/21, 03:30</span>
													</td>
													<td>
														<span>jpeg</span>
													</td>
													<td>
														<span class="text-muted file-size">15kb</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="task-subtask">
								<div class="row">
									<div class="col-md-12">
										<div class="d-flex add-task-container">
											<input type="text" class="form-control wp-40 subtask-input" placeholder="Type Task Here..." id="subTaskInput">
											<a href="javascript:void(0)" role="button" class="text-teritary text-center ms-2 me-2" id="addTask">
												<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-teritary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
												Add
											</a>
											<a href="javascript:void(0)" role="button" class="text-primary text-center ms-2" id="completedAll">
												<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-primary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
												Mark All
											</a>
										</div>
										<label for="subTaskInput" class="w-100 d-block text-danger" id="errorNote"></label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mt-3">
										<ul class="sub-list-container">
											<li class="sub-list-item task-completed">
												<div class="sub-list-main">
													<div class="check-btn"></div>
													<span class="sub-list-text text-muted" onclick="taskCompleted(event)">Gubergren vero nonumy vero no.</span>
												</div>
												<i class="fe fe-trash delete-main text-muted"></i>
											</li>
											<li class="sub-list-item">
												<div class="sub-list-main">
													<div class="check-btn"></div>
													<span class="sub-list-text text-muted" onclick="taskCompleted(event)">Duo no elitr diam labore sit invidunt. Magna gubergren erat.</span>
												</div>
												<i class="fe fe-trash delete-main text-muted"></i>
											</li>
											<li class="sub-list-item">
												<div class="sub-list-main">
													<div class="check-btn"></div>
													<span class="sub-list-text text-muted" onclick="taskCompleted(event)">Consetetur clita diam est eos invidunt. Eirmod magna.</span>
												</div>
												<i class="fe fe-trash delete-main text-muted"></i>
											</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 text-end mt-3">
										<a href="javascript:void(0)" role="button" class="text-danger" id="deleteAllTasks">
											<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-danger" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
											Delete All
										</a>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="task-tracktime">
								<div class="row">
									<table class="table table-bordered">
										<thead>
											<tr class="row-first">
												<th class="bg-transparent border-bottom-0">Team Member</th>
												<th class="bg-transparent border-bottom-0">Start Date & Time</th>
												<th class="bg-transparent border-bottom-0">End Date & Time</th>
												<th class="bg-transparent border-bottom-0">Total Time</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="me-2">
															<img alt="User Avatar" class="rounded-circle avatar-md" src="{{asset('dashboard/assets/images/users/8.jpg')}}">
														</div>
														<div>
															<h6 class="mb-1">Skyler Hilda</h6>
															<span class="text-muted fs-12">member@spruko.com</span>
														</div>
													</div>
												</td>
												<td class="text-muted fs-13 fw-semibold">31 Oct 21 & 14:56</td>
												<td class="text-muted fs-13 fw-semibold">01 Nov 21 & 09:35</td>
												<td class="text-dark fs-13 fw-semibold">Days: 4<br>Hours: 10<br>Minutes: 22</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="me-2">
															<img alt="User Avatar" class="rounded-circle avatar-md" src="{{asset('dashboard/assets/images/users/2.jpg')}}">
														</div>
														<div>
															<h6 class="mb-1">Lisa Morgan</h6>
															<span class="text-muted fs-12">member@spruko.com</span>
														</div>
													</div>
												</td>
												<td class="text-muted fs-13 fw-semibold">30 Oct 21 & 12:56</td>
												<td class="text-muted fs-13 fw-semibold">11 Nov 21 & 09:35</td>
												<td class="text-dark fs-13 fw-semibold">Days: 15<br>Hours: 12<br>Minutes: 52</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="me-2">
															<img alt="User Avatar" class="rounded-circle avatar-md" src="{{asset('dashboard/assets/images/users/11.jpg')}}">
														</div>
														<div>
															<h6 class="mb-1">Tyler Durder</h6>
															<span class="text-muted fs-12">member@spruko.com</span>
														</div>
													</div>
												</td>
												<td class="text-muted fs-13 fw-semibold">15 Oct 21 & 15:56</td>
												<td class="text-muted fs-13 fw-semibold">01 Nov 21 & 16:40</td>
												<td class="text-dark fs-13 fw-semibold">Days: 18<br>Hours: 8<br>Minutes: 52</td>
											</tr>
											<tr class="row-last">
												<td>
													<div class="d-flex align-items-center">
														<div class="me-2">
															<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('dashboard/assets/images/users/14.jpg')}}">
														</div>
														<div>
															<h6 class="mb-1">Jorah Randy</h6>
															<span class="text-muted fs-12">member@spruko.com</span>
														</div>
													</div>
												</td>
												<td class="text-muted fs-13 fw-semibold">18 Oct 21 & 10:30</td>
												<td class="text-muted fs-13 fw-semibold">09 Nov 21 & 09:45</td>
												<td class="text-dark fs-13 fw-semibold">Days: 22<br>Hours: 10<br>Minutes: 12</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="tab-pane" id="task-comments">
								<div class="row">
									<div class="mt-5">
										<div class="media mb-5 overflow-visible">
											<div class="me-3">
												<a href="profile.html"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('dashboard/assets/images/users/5.jpg')}}"> </a>
											</div>
											<div class="media-body overflow-visible">
												<div class="border mb-5 p-4 br-5">
													<nav class="nav float-end">
														<div class="dropdown">
															<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
															</div>
														</div>
													</nav>
													<h5 class="mt-0">Gavin Murray <span class="text-muted fs-12 ms-1">1 Day ago</span></h5>
													<span><i class="fe fe-thumb-up text-danger"></i></span>
													<p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
														what industry you’re working in, as a blogger, you should live and die by this statement.</p>
													<a class="like" href="javascript:;">
														<span class="badge btn-danger-light rounded-pill py-2 px-3">
															<i class="fe fe-heart me-1"></i>56</span>
													</a>
													<span class="reply" id="1">
														<a href="javascript:;"><span class="badge btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
													</span>
												</div>
												<div class="media mb-5 overflow-visible">
													<div class="me-3">
														<a href="profile.html"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('dashboard/assets/images/users/2.jpg')}}"> </a>
													</div>
													<div class="media-body border p-4 overflow-visible br-5">
														<nav class="nav float-end">
															<div class="dropdown">
																<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																	<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																	<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																	<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																</div>
															</div>
														</nav>
														<h5 class="mt-0">Mozelle Belt <span class="text-muted fs-12 ms-1 bg-normal-light">Reply to Gavin Murray</span><span class="text-muted fs-12 ms-1">2 min ago</span></h5>
														<span><i class="fe fe-thumb-up text-danger"></i></span>
														<p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should
															live and die by this statement.</p>
														<a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a>
														<span class="reply" id="2">
															<a href="javascript:;"><span class="badge btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--TASK MODAL ENDS-->

        
            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © 2022 <a href="#">Noa</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="#"> Spruko </a> All rights reserved
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER CLOSED -->

        </div>
        <!-- page -->
        @include('backend.partials.footer')

    </body>

        


<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:08:40 GMT -->
</html>
