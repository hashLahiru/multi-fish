@extends('AquaVist.pages.testProductsApp')

@section('title', 'Home Page')

@section('content')


    <style>
        .jeg-elementor-kit.jkit-icon-box .icon-box.icon-box-body .title {
            padding: 0;
            color: var(--jkit-txt-color);
            font-size: 23px;
            width: 150px;
        }


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .product-grid {
            margin-left: 10%;
            margin-right: 10%;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .filterDiv {
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            display: none;
            float: top center;
        }

        .product-image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            object-fit: contain;
        }

        .product-name {
            font-size: 16px;
            font-weight: bold;
            margin: 10px 0;
        }

        .product-price {
            display: flex;
            justify-content: center;
            gap: 10px;
            align-items: center;
            font-size: 14px;
        }

        .previous-price {
            text-decoration: line-through;
            color: #888;
        }

        .current-price {
            color: #e74c3c;
            font-weight: bold;
            font-size: 20px;
        }

        .all-button {
            background-color: black;
            color: white;
            border-radius: 8px;
        }

        .sale-buttone {
            padding: 10px 32px;
        }




        .hover-from-left1 {
            width: 90%;
            height: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-from-left1 img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;

        }


        .hover-from-left1 h3 {
            color: #333;
            font-size: 16px;
            margin: 0;
        }

        .hover-from-left1:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);

        }




        .show {
            display: block;
        }

        .main-grid {
            margin-top: 20px;
            overflow: hidden;
        }
    </style>

    <div id="page" class="hfeed site">

        <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
            <p class="main-title bhf-hidden" itemprop="headline"><a href="https://templatekit.jegtheme.com/aquavist"
                    title="Aquavist" rel="home">Aquavist</a></p>
            <div data-elementor-type="wp-post" data-elementor-id="761" class="elementor elementor-761">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-4e05a2e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="4e05a2e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b3787d9 elementor-hidden-tablet elementor-hidden-phone"
                            data-id="b3787d9" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7f7d570 elementor-icon-list--layout-inline elementor-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="7f7d570" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                                                <span class="elementor-icon-list-text">Legian Atkins West, DPS 11490,
                                                    Bali</span>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-envelope"></i> </span>
                                                <span class="elementor-icon-list-text">aquavist@support.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ba4acae elementor-hidden-phone elementor-hidden-tablet"
                            data-id="ba4acae" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3a0d81f elementor-icon-list--layout-inline elementor-align-right elementor-tablet-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="3a0d81f" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="#">

                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="icon icon-facebook"></i> </span>
                                                    <span class="elementor-icon-list-text">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="#">

                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="icon icon-twitter"></i> </span>
                                                    <span class="elementor-icon-list-text">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="#">

                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="icon icon-linkedin"></i> </span>
                                                    <span class="elementor-icon-list-text">Linkedin</span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="#">

                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="icon icon-instagram-1"></i> </span>
                                                    <span class="elementor-icon-list-text">Instagram</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-6690580 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="6690580" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-06e5ad6"
                            data-id="06e5ad6" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-df5b3d7 elementor-widget elementor-widget-image"
                                    data-id="df5b3d7" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="800" height="279"
                                            src="../wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-1024x357.png"
                                            class="attachment-large size-large wp-image-662" alt="" decoding="async"
                                            srcset="https://templatekit.jegtheme.com/aquavist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-1024x357.png 1024w, https://templatekit.jegtheme.com/aquavist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-300x105.png 300w, https://templatekit.jegtheme.com/aquavist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-768x268.png 768w, https://templatekit.jegtheme.com/aquavist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-1536x536.png 1536w, https://templatekit.jegtheme.com/aquavist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-2048x714.png 2048w, https://templatekit.jegtheme.com/aquavist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-800x279.png 800w, https://templatekit.jegtheme.com/aquavist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-e1628655153433.png 1000w"
                                            sizes="(max-width: 800px) 100vw, 800px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-444baf3"
                            data-id="444baf3" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-ed57b6e elementor-widget__width-auto elementor-widget elementor-widget-jkit_nav_menu"
                                    data-id="ed57b6e" data-element_type="widget" data-widget_type="jkit_nav_menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_1064__67592891811ad"
                                            data-item-indicator="&lt;i aria-hidden=&quot;true&quot; class=&quot;jki jki-angle-down-solid&quot;&gt;&lt;/i&gt;">
                                            <button class="jkit-hamburger-menu"><i aria-hidden="true"
                                                    class="jki jki-menu1-light"></i></button>
                                            <div class="jkit-menu-wrapper">
                                                <div class="jkit-menu-container">
                                                    <ul id="menu-menu-1"
                                                        class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
                                                        <li id="menu-item-22"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-22">
                                                            <a href="../index.html">Home</a>
                                                        </li>
                                                        <li id="menu-item-1430"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1430">
                                                            <a href="../about/index.html">About</a>
                                                        </li>
                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="../services/index.html">Products</a>
                                                        </li>

                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="../services/index.html">Gallery</a>
                                                        </li>

                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="../services/index.html">Blog</a>
                                                        </li>
                                                        {{-- <li id="menu-item-8"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8">
                                                        <a href="#">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-1435"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1435">
                                                                <a href="../pricing/index.html">Pricing</a>
                                                            </li>
                                                            <li id="menu-item-1434"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1434">
                                                                <a href="../gallery/index.html">Gallery</a>
                                                            </li>
                                                            <li id="menu-item-1433"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1433">
                                                                <a href="../events/index.html">Events</a>
                                                            </li>
                                                            <li id="menu-item-1432"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1432">
                                                                <a href="../faq/index.html">FAQ</a>
                                                            </li>
                                                            <li id="menu-item-1431"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1431">
                                                                <a href="../404-page/index.html">404 Page</a>
                                                            </li>
                                                        </ul>
                                                    </li> --}}
                                                        {{-- <li id="menu-item-1427"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1427">
                                                        <a href="../blog/index.html">Blog</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-1425"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1425">
                                                                <a href="../blog/index.html">Blog</a>
                                                            </li>
                                                            <li id="menu-item-1428"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1428">
                                                                <a
                                                                    href="../2021/08/07/different-aquariums-for-different-ideas/index.html">Single
                                                                    Post</a>
                                                            </li>
                                                        </ul>
                                                    </li> --}}
                                                        <li id="menu-item-1426"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1291 current_page_item menu-item-1426">
                                                            <a href="index.html" aria-current="page">Contact</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="jkit-nav-identity-panel">
                                                    <div class="jkit-nav-site-title"><a
                                                            href="https://templatekit.jegtheme.com/aquavist"
                                                            class="jkit-nav-logo"><img
                                                                src="../wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-e1628655153433.png"></a>
                                                    </div>
                                                    <button class="jkit-close-menu"><i aria-hidden="true"
                                                            class="jki jki-times-solid"></i></button>
                                                </div>
                                            </div>
                                            <div class="jkit-overlay"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-4fec19c elementor-hidden-tablet elementor-hidden-phone"
                            data-id="4fec19c" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2b401b1 elementor-widget__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                    data-id="2b401b1" data-element_type="widget"
                                    data-widget_type="jkit_icon_box.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_1064_1_6759289188b7f">
                                            <div class="jkit-icon-box-wrapper hover-from-left">
                                                <div class="icon-box icon-box-header elementor-animation-">
                                                    <div class="icon style-color"><i aria-hidden="true"
                                                            class="jki jki-phone-line"></i></div>
                                                </div>
                                                <div class="icon-box icon-box-body">
                                                    <h2 class="title">+021 441 9858</h2>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>

        <div data-elementor-type="wp-page" data-elementor-id="1064" class="elementor elementor-1064">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-abe8e88 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="abe8e88" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e62fe29"
                        data-id="e62fe29" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-520c223 elementor-widget elementor-widget-jkit_heading"
                                data-id="520c223" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_1064_2_675928918e3c5">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">Products</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="elementor-element elementor-element-f0ea7e8 elementor-align-left elementor-icon-list--layout-inline elementor-mobile-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="f0ea7e8" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items elementor-inline-items">
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-text">Home</span>
                                    </li>
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="jki jki-angle-double-right-solid"></i>
                                        </span>
                                        <span class="elementor-icon-list-text">Services</span>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fde296b"
                        data-id="fde296b" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </section>






            <section>
                <div style="margin-top: 3%; margin-left:7%;">

                    <div style="display: flex; align-items: center; justify-content: space-between;">

                        <div class="btncontainer" id="myBtnContainer"
                            style="display: flex; align-items: center; gap: 10px; ">
                            {{-- <button class="btn"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border-radius: 10px; height: 35px; padding: 5px 15px; "
                                onclick="filterSelection('all')">All
                            </button> --}}
                            <button class="btn"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border-radius: 10px; height: 35px; padding: 5px 15px; "
                                onclick="filterSelection('fresh')">Fresh
                                Water Fish
                            </button>
                            <button class="btn"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border-radius: 10px; height: 35px; padding: 5px 15px;"
                                onclick="filterSelection('marine')">Marine
                                Fish</button>
                            <button class="btn"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border-radius: 10px; height: 35px; padding: 5px 15px;"
                                onclick="filterSelection('plant')">Plants</button>
                        </div>
                    </div>

                </div>

            </section>

            {{-- section-2 --}}

            <section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-6fb470e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    style="margin-top: 5%; " data-id="6fb470e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f8ebbbc"
                            data-id="f8ebbbc" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">

                                <div
                                    class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_3_6759274bcfbc0">
                                    <div class="elementor-element elementor-element-9716da2 elementor-widget elementor-widget-heading"
                                        data-id="9716da2" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default"
                                                style="font-size:35px; color:black; font-weight:bold; padding-bottom:5%;">
                                                Category</h2>
                                            <div class="heading-section-separator">
                                                <div class="separator-wrapper style-solid" style="width:70px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0f05573 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    style=" width:100%;" data-id="0f05573" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-2927d7b"
                                            data-id="2927d7b" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ce635bd jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="ce635bd" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_13_675926d96a146">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position: center; margin:35px;   object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/pikefishnew1.jpg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/pikefish.jpg') }}"
                                                                            alt="Pike Fish" style="border-radius: 10px;">
                                                                    </div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Pike Fish</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-45dde34"
                                            data-id="45dde34" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1a8e032 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="1a8e032" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_14_675926d96be9a">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position: center;margin:35px;  object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/malinfish.jpg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('') }}"
                                                                            alt="Marline Fish"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Marline Fish
                                                                    </h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-eb84df6"
                                            data-id="eb84df6" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-9e0c2cd jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="9e0c2cd" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_15_675926d96da89">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position: center;margin:35px;  object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/boarnew.jpg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/asset3-T6M9WU6.png') }}"
                                                                            alt="Boar Fish"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Boar Fish</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-df3c415"
                                            data-id="df3c415" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-423e4c0 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="423e4c0" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_16_675926d96f652">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position: center;margin:35px;  object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/seahourse.jpg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/asset4-T6M9WU6.png') }}"
                                                                            alt="Seahorse"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Seahorse</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-76bc33d"
                                            data-id="76bc33d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-eb3531b jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="eb3531b" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_17_675926d971643">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position:right; margin:35px;   object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/imageshog.jpeg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/asset5-T6M9WU6.png') }}"
                                                                            alt="Hog Fish"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Hog Fish</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-11f0eb1"
                                            data-id="11f0eb1" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5398f95 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="5398f95" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_18_675926d972e29">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position:center; margin:35px;  object-fit:cover; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/Threadfin.jpeg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/asset6-T6M9WU6.png') }}"
                                                                            alt="Threadfin"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Threadfin</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0f05573 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    style=" width:100%;" data-id="0f05573" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-2927d7b"
                                            data-id="2927d7b" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ce635bd jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="ce635bd" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_13_675926d96a146">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position: center; margin:35px;   object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/clown.jpeg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/pikefish.jpg') }}"
                                                                            alt="Pike Fish" style="border-radius: 10px;">
                                                                    </div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Clown Fish
                                                                    </h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-45dde34"
                                            data-id="45dde34" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1a8e032 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="1a8e032" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_14_675926d96be9a">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position: center;margin:35px;  object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/swo.jpg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('') }}"
                                                                            alt="Marline Fish"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Sword Fish
                                                                    </h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-eb84df6"
                                            data-id="eb84df6" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-9e0c2cd jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="9e0c2cd" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_15_675926d96da89">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position: center;margin:35px;  object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/molidea.jpeg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/asset3-T6M9WU6.png') }}"
                                                                            alt="Boar Fish"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Molidae</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-df3c415"
                                            data-id="df3c415" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-423e4c0 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="423e4c0" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_16_675926d96f652">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position: center;margin:35px;  object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/blow1.jpg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/asset4-T6M9WU6.png') }}"
                                                                            alt="Seahorse"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Blow Fish</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-76bc33d"
                                            data-id="76bc33d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-eb3531b jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="eb3531b" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_17_675926d971643">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position:right; margin:35px;   object-fit:contain; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/coralnew.jpg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/asset5-T6M9WU6.png') }}"
                                                                            alt="Hog Fish"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Coral</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-11f0eb1"
                                            data-id="11f0eb1" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5398f95 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="5398f95" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_18_675926d972e29">
                                                            <div class=" hover-from-left1"
                                                                style="  background-size: cover; background-position:left; margin:35px;  object-fit:cover; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/angler.jpeg') }}');">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    {{-- <div class="icon style-color"><img decoding="async"
                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/asset6-T6M9WU6.png') }}"
                                                                            alt="Threadfin"></div> --}}
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h3 class="title"
                                                                        style="color:white; margin-top:80%; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                                        Angler Fish</h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>





                            </div>
                        </div>
                    </div>
                </section>



            </section>



            {{-- section3 --}}

            <section>

                <div class="section3" style=" margin-top: 3%;">

                    <div class="elementor-element elementor-element-520c223 elementor-widget elementor-widget-jkit_heading"
                        data-id="520c223" data-element_type="widget" data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_1064_2_675928918e3c5">
                                <div class="heading-container"
                                    style="display: flex; align-items: center; justify-content: space-between;">

                                    <div class="heading-section-title display-inline-block" style="flex: 1;">
                                        <h2 class="heading-title"
                                            style="color: black; font-size: 35px; margin-left: 15%;">Buy Aquarium
                                            Fish
                                            Online</h2>
                                    </div>


                                    <div class="search-bar-container"
                                        style="display: flex; align-items: center; gap: 10px; margin-right: 11%;">
                                        <input type="text" class="search-bar"
                                            style="color: rgb(0, 0, 0); border: 1px solid #464646; border-radius: 8px; width: 300px; height: 30px; padding: 10px;"
                                            placeholder="  Search for fish..." />
                                        <button class="all-button"
                                            style="background-color: black; color: white; border-radius: 10px; height: 35px; padding: 5px 15px;"
                                            onclick="filterSelection('all')">All</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="main-grid">

                        <div class="product-grid">

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/imperial-anglefish-closeup-in-saltwater-aquarium-e1628655205910.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>


                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/nemofish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/blackfish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/group.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/istockphoto-1188529024-612x612.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>
                        </div>

                        <div class="product-grid">

                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/imperial-anglefish-closeup-in-saltwater-aquarium-e1628655205910.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>


                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/nemofish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/blackfish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/group.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/istockphoto-1188529024-612x612.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>
                        </div>


                        <div class="product-grid">

                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/imperial-anglefish-closeup-in-saltwater-aquarium-e1628655205910.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>


                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/nemofish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/blackfish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/group.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/istockphoto-1188529024-612x612.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>
                        </div>


                        <div class="product-grid">

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/imperial-anglefish-closeup-in-saltwater-aquarium-e1628655205910.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>


                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/nemofish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/blackfish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/group.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/istockphoto-1188529024-612x612.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>
                        </div>


                        <div class="product-grid">

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/imperial-anglefish-closeup-in-saltwater-aquarium-e1628655205910.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>


                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/nemofish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/blackfish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/group.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/istockphoto-1188529024-612x612.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>
                        </div>

                        <div class="product-grid">

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/imperial-anglefish-closeup-in-saltwater-aquarium-e1628655205910.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>


                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/nemofish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/blackfish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/group.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/istockphoto-1188529024-612x612.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>
                        </div>


                        <div class="product-grid">

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/imperial-anglefish-closeup-in-saltwater-aquarium-e1628655205910.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>


                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/nemofish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%;  padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv plant">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/blackfish.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv fresh">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/group.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>

                            <div class="filterDiv marine">
                                <img src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/istockphoto-1188529024-612x612.jpg') }}"
                                    alt="Product Image" class="product-image">
                                <div class="product-name">Product Name</div>
                                <div class="product-price">
                                    <span class="previous-price">$50.00</span>
                                    <span class="current-price">$35.00</span>
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>
                        </div>

                    </div>

                </div>



            </section> {{-- end of section 3 --}}

            <script>
                filterSelection("all")

                function filterSelection(c) {
                    var x, i;
                    x = document.getElementsByClassName("filterDiv");
                    if (c == "all") c = "";
                    for (i = 0; i < x.length; i++) {
                        w3RemoveClass(x[i], "show");
                        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                    }
                }

                function w3AddClass(element, name) {
                    var i, arr1, arr2;
                    arr1 = element.className.split(" ");
                    arr2 = name.split(" ");
                    for (i = 0; i < arr2.length; i++) {
                        if (arr1.indexOf(arr2[i]) == -1) {
                            element.className += " " + arr2[i];
                        }
                    }
                }

                function w3RemoveClass(element, name) {
                    var i, arr1, arr2;
                    arr1 = element.className.split(" ");
                    arr2 = name.split(" ");
                    for (i = 0; i < arr2.length; i++) {
                        while (arr1.indexOf(arr2[i]) > -1) {
                            arr1.splice(arr1.indexOf(arr2[i]), 1);
                        }
                    }
                    element.className = arr1.join(" ");
                }

                // Add active class to the current button (highlight it)
                var btnContainer = document.getElementById("myBtnContainer");
                var btns = btnContainer.getElementsByClassName("btn");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    });
                }
            </script>


            {{-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-13ef1c2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="13ef1c2" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d4c9283"
                        data-id="d4c9283" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-d91cbe3 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="d91cbe3" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-29039e4"
                                        data-id="29039e4" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a3cd50a jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="a3cd50a" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1064_3_6759289190a6a">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-Design-3-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Design &amp; Install</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod tempor.</p>
                                                                <div class="icon-box-button ">
                                                                    <div class="btn-wrapper icon-position-after">
                                                                        <a href="#" class="icon-box-link">Read
                                                                            More</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-425d8f9"
                                        data-id="425d8f9" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5476e96 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="5476e96" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1064_4_67592891921ad">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-heart-pulse-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Health Check</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod tempor.</p>
                                                                <div class="icon-box-button ">
                                                                    <div class="btn-wrapper icon-position-after">
                                                                        <a href="#" class="icon-box-link">Read
                                                                            More</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6f044cf"
                                        data-id="6f044cf" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-4ee058e elementor-widget elementor-widget-jkit_heading"
                                                data-id="4ee058e" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_1064_5_67592891937ca">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">Our Services</h2>
                                                        </div>
                                                        <div class="heading-section-separator">
                                                            <div class="separator-wrapper style-solid"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2711700 elementor-widget elementor-widget-heading"
                                                data-id="2711700" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">We Provide
                                                        Special Sevices</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-80c263d elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
                                                data-id="80c263d" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_1064_6_67592891959c7">
                                                        <a href="#" class="jkit-button-wrapper">All Services</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-ca0f82d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="ca0f82d" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7a5cde6"
                                        data-id="7a5cde6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d9c2a4d jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="d9c2a4d" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1064_7_67592891972ce">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-graph-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Fish Consultation</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod tempor.</p>
                                                                <div class="icon-box-button ">
                                                                    <div class="btn-wrapper icon-position-after">
                                                                        <a href="#" class="icon-box-link">Read
                                                                            More</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1689976"
                                        data-id="1689976" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-aa12fcc jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="aa12fcc" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1064_8_67592891987ee">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-store-1-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Supply Stock</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod tempor.</p>
                                                                <div class="icon-box-button ">
                                                                    <div class="btn-wrapper icon-position-after">
                                                                        <a href="#" class="icon-box-link">Read
                                                                            More</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1ac18f4"
                                        data-id="1ac18f4" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b8bff21 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="b8bff21" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1064_9_6759289199b58">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-trowel-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Planted Tank</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod tempor.</p>
                                                                <div class="icon-box-button ">
                                                                    <div class="btn-wrapper icon-position-after">
                                                                        <a href="#" class="icon-box-link">Read
                                                                            More</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b61c222"
                                        data-id="b61c222" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ce02158 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="ce02158" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1064_10_675928919ae52">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-rocket-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Maintenance</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod tempor.</p>
                                                                <div class="icon-box-button ">
                                                                    <div class="btn-wrapper icon-position-after">
                                                                        <a href="#" class="icon-box-link">Read
                                                                            More</a>
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
                            </section>
                        </div>
                    </div>
                </div>
            </section> --}}


            {{-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-8907563 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="8907563" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-83d6c4d"
                        data-id="83d6c4d" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-element elementor-element-b360dd7 elementor-widget elementor-widget-jkit_heading"
                                data-id="b360dd7" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_1064_11_675928919cbb2">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">What We Do</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f423b38 elementor-widget elementor-widget-heading"
                                data-id="f423b38" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">We Make An Aquarium That
                                        Spoils The Eyes</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-57445a2 elementor-widget elementor-widget-text-editor"
                                data-id="57445a2" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo enim ad minim veniam,
                                        quis nostrud exercitation.</p>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-6d13159 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="6d13159" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ce5629e"
                                        data-id="ce5629e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-0ddf075 elementor-widget__width-initial elementor-widget elementor-widget-jkit_pie_chart"
                                                data-id="0ddf075" data-element_type="widget"
                                                data-widget_type="jkit_pie_chart.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-pie-chart style-static  jeg_module_1064_12_675928919efc5"
                                                        data-cutout="90" data-percent="98" data-color-type="normal"
                                                        data-color="#19CBE4" data-bg-color="#03020200" data-gradient1=""
                                                        data-gradient2="" data-animation-duration="3600"
                                                        data-content-type="percentage">
                                                        <div class="pie-chart-wrapper">
                                                            <span class="pie-chart-content">0%</span>
                                                            <canvas class="main-canvas" height="150"
                                                                width="150"></canvas>
                                                            <canvas class="background-canvas" height="150"
                                                                width="150"></canvas>
                                                        </div>
                                                        <h2 class="pie-chart-title">Project Completed</h2>
                                                        <div class="pie-chart-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                                                vel ipsum auctor, iaculis arcu quis.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3e26655 elementor-widget elementor-widget-button"
                                                data-id="3e26655" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-sink"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Read More</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-19f6abe"
                                        data-id="19f6abe" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-31f4142 elementor-widget__width-initial elementor-widget elementor-widget-jkit_pie_chart"
                                                data-id="31f4142" data-element_type="widget"
                                                data-widget_type="jkit_pie_chart.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-pie-chart style-static  jeg_module_1064_13_67592891a0442"
                                                        data-cutout="90" data-percent="86" data-color-type="normal"
                                                        data-color="#19CBE4" data-bg-color="#03020200" data-gradient1=""
                                                        data-gradient2="" data-animation-duration="3600"
                                                        data-content-type="percentage">
                                                        <div class="pie-chart-wrapper">
                                                            <span class="pie-chart-content">0%</span>
                                                            <canvas class="main-canvas" height="150"
                                                                width="150"></canvas>
                                                            <canvas class="background-canvas" height="150"
                                                                width="150"></canvas>
                                                        </div>
                                                        <h2 class="pie-chart-title">Maintenance Programs</h2>
                                                        <div class="pie-chart-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                                                vel ipsum auctor, iaculis arcu quis.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6b25ae8 elementor-widget elementor-widget-button"
                                                data-id="6b25ae8" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-sink"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Read More</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-47da183"
                        data-id="47da183" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-df641de elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="df641de" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4c3995a"
                                        data-id="4c3995a" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-de20ae9 elementor-widget elementor-widget-spacer"
                                                data-id="de20ae9" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section> --}}


            {{-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-e9a6ba7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="e9a6ba7" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-02c03fe"
                        data-id="02c03fe" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8ffd84c elementor-widget elementor-widget-jkit_heading"
                                data-id="8ffd84c" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile- jeg_module_1064_14_67592891a326a">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">Testimonial</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fe61c0e elementor-widget elementor-widget-heading"
                                data-id="fe61c0e" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Some Quotes From Our Clients
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1cee7ad elementor-widget elementor-widget-text-editor"
                                data-id="1cee7ad" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam dolore aliqua.
                                    </p>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-dbed207 elementor-hidden-desktop elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="dbed207" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-220a77c"
                                        data-id="220a77c" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b121509 elementor-widget elementor-widget-spacer"
                                                data-id="b121509" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-24a6c96"
                                        data-id="24a6c96" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3c34db5 elementor-widget elementor-widget-text-editor"
                                                data-id="3c34db5" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2a54b46 elementor-widget elementor-widget-heading"
                                                data-id="2a54b46" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Rita Eland
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e3f293e"
                                        data-id="e3f293e" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-175695b elementor-widget elementor-widget-text-editor"
                                                data-id="175695b" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-15ef8fc elementor-widget elementor-widget-heading"
                                                data-id="15ef8fc" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Cheryl
                                                        Butler</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3041066"
                                        data-id="3041066" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3accca3 elementor-widget elementor-widget-spacer"
                                                data-id="3accca3" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-4c73188 elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="4c73188" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-959fb5c"
                                        data-id="959fb5c" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8d151ca elementor-widget elementor-widget-spacer"
                                                data-id="8d151ca" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e633c5f"
                                        data-id="e633c5f" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-667d561 elementor-widget elementor-widget-text-editor"
                                                data-id="667d561" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2310d54 elementor-widget elementor-widget-heading"
                                                data-id="2310d54" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Rita Eland
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9e5fffb"
                                        data-id="9e5fffb" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-05074f7 elementor-widget elementor-widget-spacer"
                                                data-id="05074f7" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0aceab2"
                                        data-id="0aceab2" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7c9036e elementor-widget elementor-widget-text-editor"
                                                data-id="7c9036e" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-521a9e4 elementor-widget elementor-widget-heading"
                                                data-id="521a9e4" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Cheryl
                                                        Butler</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-3eb5be2 elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="3eb5be2" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3dbe14a"
                                        data-id="3dbe14a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-772d28e elementor-widget elementor-widget-text-editor"
                                                data-id="772d28e" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3737faf elementor-widget elementor-widget-heading"
                                                data-id="3737faf" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Kayla
                                                        Wheatly</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9295a9a"
                                        data-id="9295a9a" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-bdb4a63 elementor-widget elementor-widget-spacer"
                                                data-id="bdb4a63" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-15aaba7"
                                        data-id="15aaba7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3c6724b elementor-widget elementor-widget-text-editor"
                                                data-id="3c6724b" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-042ce60 elementor-widget elementor-widget-heading"
                                                data-id="042ce60" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Ted Ortega
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-591da0c"
                                        data-id="591da0c" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5a51cc0 elementor-widget elementor-widget-spacer"
                                                data-id="5a51cc0" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-ef1f11d elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="ef1f11d" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-22c72f2"
                                        data-id="22c72f2" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-337cadf elementor-widget elementor-widget-spacer"
                                                data-id="337cadf" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6215c2e"
                                        data-id="6215c2e" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e741af6 elementor-widget elementor-widget-text-editor"
                                                data-id="e741af6" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f99fbcf elementor-widget elementor-widget-heading"
                                                data-id="f99fbcf" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Glen Bennett
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bb60614"
                                        data-id="bb60614" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-695f665 elementor-widget elementor-widget-spacer"
                                                data-id="695f665" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1da9239"
                                        data-id="1da9239" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8921a1f elementor-widget elementor-widget-text-editor"
                                                data-id="8921a1f" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3b3f6f5 elementor-widget elementor-widget-heading"
                                                data-id="3b3f6f5" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Unity Norris
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-b4feaa0 elementor-hidden-desktop elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="b4feaa0" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f02d2af"
                                        data-id="f02d2af" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a4affbc elementor-widget elementor-widget-spacer"
                                                data-id="a4affbc" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2e19e0f"
                                        data-id="2e19e0f" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-791239e elementor-widget elementor-widget-text-editor"
                                                data-id="791239e" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a5cfebe elementor-widget elementor-widget-heading"
                                                data-id="a5cfebe" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Kayla
                                                        Wheatly</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9aa52e8"
                                        data-id="9aa52e8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2fb4ca2 elementor-widget elementor-widget-text-editor"
                                                data-id="2fb4ca2" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c69f6ee elementor-widget elementor-widget-heading"
                                                data-id="c69f6ee" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Ted Ortega
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-62d1a51"
                                        data-id="62d1a51" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2ebdbb1 elementor-widget elementor-widget-spacer"
                                                data-id="2ebdbb1" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-c12fd71 elementor-hidden-desktop elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="c12fd71" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5e33d16"
                                        data-id="5e33d16" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-acb6ae6 elementor-widget elementor-widget-spacer"
                                                data-id="acb6ae6" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1c1a25d"
                                        data-id="1c1a25d" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-63bc69a elementor-widget elementor-widget-text-editor"
                                                data-id="63bc69a" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-da4f0b4 elementor-widget elementor-widget-heading"
                                                data-id="da4f0b4" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Glen Bennett
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-18c4154"
                                        data-id="18c4154" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b8317cf elementor-widget elementor-widget-text-editor"
                                                data-id="b8317cf" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Lorem ipsum dolor sit amet, consectetur adip iscing elit.
                                                            sed do eius mod tempor incididunt labore magna.&#8221; </em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-80d3464 elementor-widget elementor-widget-heading"
                                                data-id="80d3464" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Unity Norris
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a3420b3"
                                        data-id="a3420b3" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-0d5d6a5 elementor-widget elementor-widget-spacer"
                                                data-id="0d5d6a5" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section> --}}



            {{-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-492a686 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="492a686" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cf202de"
                        data-id="cf202de" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-element elementor-element-83564a0 elementor-widget elementor-widget-spacer"
                                data-id="83564a0" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-bac7fbe elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="bac7fbe" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-62cfe4b"
                                        data-id="62cfe4b" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0f7e2da"
                                        data-id="0f7e2da" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-97b31df elementor-widget elementor-widget-jkit_testimonials"
                                                data-id="97b31df" data-element_type="widget"
                                                data-widget_type="jkit_testimonials.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-testimonials arrow-bottom-middle style-2 quote-override jeg_module_1064_15_67592891b8674"
                                                        data-id="jeg_module_1064_15_67592891b8674"
                                                        data-settings="{&quot;autoplay&quot;:true,&quot;autoplay_speed&quot;:3500,&quot;autoplay_hover_pause&quot;:false,&quot;show_navigation&quot;:false,&quot;navigation_left&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-left\&quot;&gt;&lt;\/i&gt;&quot;,&quot;navigation_right&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-right\&quot;&gt;&lt;\/i&gt;&quot;,&quot;show_dots&quot;:false,&quot;arrow_position&quot;:&quot;bottom&quot;,&quot;responsive&quot;:{&quot;desktop&quot;:{&quot;items&quot;:1,&quot;margin&quot;:20,&quot;breakpoint&quot;:1025},&quot;tablet&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:768},&quot;mobile&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:0}}}">
                                                        <div class="testimonials-list">
                                                            <div class="testimonials-track">
                                                                <div
                                                                    class="testimonial-item  elementor-repeater-item-578b953">
                                                                    <div class="testimonial-box hover-from-left">
                                                                        <div class="icon-content"><i aria-hidden="true"
                                                                                class="fas fa-quote-left"></i></div>
                                                                        <div class="comment-content">
                                                                            <p>Lorem ipsum Quibusdam eveniet ut eos rerum
                                                                                incididunt eu aperiam voluptatem ut non
                                                                                provident dolor dolorum ut et quod
                                                                                voluptatibus quas tempor reiciendis veniam
                                                                                provident hic veritatis exercitation placeat
                                                                                reiciendis veniam provident veritati.</p>
                                                                        </div>
                                                                        <div class="comment-header">
                                                                            <ul class="rating-stars">
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="comment-bio">
                                                                            <div class="bio-details">
                                                                                <div class="profile-image"><img
                                                                                        decoding="async"
                                                                                        src="../wp-content/uploads/sites/129/2021/08/portrait-of-good-looking-brunette-woman-smiles-too-UCETKXG.jpg"
                                                                                        alt="Abbie Carter"></div>
                                                                                <span class="profile-info">
                                                                                    <strong class="profile-name">Abbie
                                                                                        Carter</strong>
                                                                                    <p class="profile-des">Visitors</p>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="testimonial-item  elementor-repeater-item-f24d500">
                                                                    <div class="testimonial-box hover-from-left">
                                                                        <div class="icon-content"><i aria-hidden="true"
                                                                                class="fas fa-quote-left"></i></div>
                                                                        <div class="comment-content">
                                                                            <p>Lorem ipsum Quibusdam eveniet ut eos rerum
                                                                                incididunt eu aperiam voluptatem ut non
                                                                                provident dolor dolorum ut et quod
                                                                                voluptatibus quas tempor reiciendis veniam
                                                                                provident hic veritatis exercitation placeat
                                                                                reiciendis veniam provident veritati.</p>
                                                                        </div>
                                                                        <div class="comment-header">
                                                                            <ul class="rating-stars">
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="comment-bio">
                                                                            <div class="bio-details">
                                                                                <div class="profile-image"><img
                                                                                        decoding="async"
                                                                                        src="../wp-content/uploads/sites/129/2021/08/pleased-cheerful-redhaired-male-with-pleasant-smil-CCXAYZL.jpg"
                                                                                        alt="Dominic Pelletier"></div>
                                                                                <span class="profile-info">
                                                                                    <strong class="profile-name">Dominic
                                                                                        Pelletier</strong>
                                                                                    <p class="profile-des">Visitors</p>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="testimonial-item  elementor-repeater-item-2196130">
                                                                    <div class="testimonial-box hover-from-left">
                                                                        <div class="icon-content"><i aria-hidden="true"
                                                                                class="fas fa-quote-left"></i></div>
                                                                        <div class="comment-content">
                                                                            <p>Lorem ipsum Quibusdam eveniet ut eos rerum
                                                                                incididunt eu aperiam voluptatem ut non
                                                                                provident dolor dolorum ut et quod
                                                                                voluptatibus quas tempor reiciendis veniam
                                                                                provident hic veritatis exercitation placeat
                                                                                reiciendis veniam provident veritati.</p>
                                                                        </div>
                                                                        <div class="comment-header">
                                                                            <ul class="rating-stars">
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="comment-bio">
                                                                            <div class="bio-details">
                                                                                <div class="profile-image"><img
                                                                                        decoding="async"
                                                                                        src="../wp-content/uploads/sites/129/2021/08/indoor-shot-of-attractive-european-schoolgirl-has-LEUUQRK.jpg"
                                                                                        alt="Lola Bailey"></div>
                                                                                <span class="profile-info">
                                                                                    <strong class="profile-name">Lola
                                                                                        Bailey</strong>
                                                                                    <p class="profile-des">Visitors</p>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="testimonial-item  elementor-repeater-item-c8eb2d3">
                                                                    <div class="testimonial-box hover-from-left">
                                                                        <div class="icon-content"><i aria-hidden="true"
                                                                                class="fas fa-quote-left"></i></div>
                                                                        <div class="comment-content">
                                                                            <p>Lorem ipsum Quibusdam eveniet ut eos rerum
                                                                                incididunt eu aperiam voluptatem ut non
                                                                                provident dolor dolorum ut et quod
                                                                                voluptatibus quas tempor reiciendis veniam
                                                                                provident hic veritatis exercitation placeat
                                                                                reiciendis veniam provident veritati.</p>
                                                                        </div>
                                                                        <div class="comment-header">
                                                                            <ul class="rating-stars">
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                                <li><i aria-hidden="true"
                                                                                        class="fas fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="comment-bio">
                                                                            <div class="bio-details">
                                                                                <div class="profile-image"><img
                                                                                        decoding="async"
                                                                                        src="../wp-content/uploads/sites/129/2021/08/attractive-older-man-smiling-PQ3VUFU.jpg"
                                                                                        alt="Linette Hayward"></div>
                                                                                <span class="profile-info">
                                                                                    <strong class="profile-name">Linette
                                                                                        Hayward</strong>
                                                                                    <p class="profile-des">Visitors</p>
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
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>

        <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo"
            style="margin-top: 5%;">
            <div class='footer-width-fixer'>
                <div data-elementor-type="wp-post" data-elementor-id="772" class="elementor elementor-772">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-0d25bdd elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="0d25bdd" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66124b9"
                                data-id="66124b9" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-4ae6fc4 elementor-widget elementor-widget-jkit_gallery"
                                        data-id="4ae6fc4" data-element_type="widget"
                                        data-widget_type="jkit_gallery.default">
                                        <div class="elementor-widget-container">
                                            <div class="jeg-elementor-kit jkit-gallery layout-overlay jeg_module_20_43_675926d9d1de8"
                                                data-grid="masonry" data-id="jeg_module_20_43_675926d9d1de8"
                                                data-per-page="6" data-load-more="0" data-current-loaded="6"
                                                data-count-items="6" data-animation-duration="500"
                                                data-no-more="No More Item"
                                                data-items="[&quot;&lt;div class=\&quot;gallery-item-wrap \&quot;&gt; &lt;div class=\&quot;grid-item\&quot;&gt;&lt;div class=\&quot;thumbnail-wrap\&quot;&gt;&lt;img src=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//tropical-fish-e1628654856592.jpg/"
                                                &gt;&lt;\/div&gt;&lt;div class=\&quot;caption-wrap style-overlay
                                                overlay-overlay\&quot;&gt; &lt;div
                                                class=\&quot;item-hover-bg\&quot;&gt;&lt;\/div&gt; &lt;div
                                                class=\&quot;item-caption-over\&quot;&gt; &lt;h5
                                                class=\&quot;item-title\&quot;&gt;&lt;\/h5&gt; &lt;div
                                                class=\&quot;item-content\&quot;&gt;&lt;\/div&gt;&lt;div
                                                class=\&quot;item-buttons\&quot;&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//tropical-fish-e1628654856592.jpg/"
                                                class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;yes\&quot;
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8\&quot;
                                                &gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"/" class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;no\&quot;&gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;i aria-hidden=\&quot;true\&quot;
                                                class=\&quot;jki
                                                jki-instagram-1-light\&quot;&gt;&lt;\/i&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;\/div&gt;
                                                &lt;\/div&gt; &lt;div class=\&quot;caption-head\&quot;&gt;&lt;\/div&gt;
                                                &lt;div class=\&quot;caption-category\&quot;&gt;&lt;\/div&gt;
                                                &lt;\/div&gt;&lt;\/div&gt; &lt;\/div&gt;&quot;,&quot;&lt;div
                                                class=\&quot;gallery-item-wrap \&quot;&gt; &lt;div
                                                class=\&quot;grid-item\&quot;&gt;&lt;div
                                                class=\&quot;thumbnail-wrap\&quot;&gt;&lt;img
                                                src=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//clown-fish-e1628655075684.jpg/"
                                                &gt;&lt;\/div&gt;&lt;div class=\&quot;caption-wrap style-overlay
                                                overlay-overlay\&quot;&gt; &lt;div
                                                class=\&quot;item-hover-bg\&quot;&gt;&lt;\/div&gt; &lt;div
                                                class=\&quot;item-caption-over\&quot;&gt; &lt;h5
                                                class=\&quot;item-title\&quot;&gt;&lt;\/h5&gt; &lt;div
                                                class=\&quot;item-content\&quot;&gt;&lt;\/div&gt;&lt;div
                                                class=\&quot;item-buttons\&quot;&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//clown-fish-e1628655075684.jpg/"
                                                class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;yes\&quot;
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8\&quot;
                                                &gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"/" class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;no\&quot;&gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;i aria-hidden=\&quot;true\&quot;
                                                class=\&quot;jki
                                                jki-instagram-1-light\&quot;&gt;&lt;\/i&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;\/div&gt;
                                                &lt;\/div&gt; &lt;div class=\&quot;caption-head\&quot;&gt;&lt;\/div&gt;
                                                &lt;div class=\&quot;caption-category\&quot;&gt;&lt;\/div&gt;
                                                &lt;\/div&gt;&lt;\/div&gt; &lt;\/div&gt;&quot;,&quot;&lt;div
                                                class=\&quot;gallery-item-wrap \&quot;&gt; &lt;div
                                                class=\&quot;grid-item\&quot;&gt;&lt;div
                                                class=\&quot;thumbnail-wrap\&quot;&gt;&lt;img
                                                src=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//majestic-blue-girdled-angel-e1628655086136.jpg/"
                                                &gt;&lt;\/div&gt;&lt;div class=\&quot;caption-wrap style-overlay
                                                overlay-overlay\&quot;&gt; &lt;div
                                                class=\&quot;item-hover-bg\&quot;&gt;&lt;\/div&gt; &lt;div
                                                class=\&quot;item-caption-over\&quot;&gt; &lt;h5
                                                class=\&quot;item-title\&quot;&gt;&lt;\/h5&gt; &lt;div
                                                class=\&quot;item-content\&quot;&gt;&lt;\/div&gt;&lt;div
                                                class=\&quot;item-buttons\&quot;&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//majestic-blue-girdled-angel-e1628655086136.jpg/"
                                                class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;yes\&quot;
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8\&quot;
                                                &gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"/" class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;no\&quot;&gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;i aria-hidden=\&quot;true\&quot;
                                                class=\&quot;jki
                                                jki-instagram-1-light\&quot;&gt;&lt;\/i&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;\/div&gt;
                                                &lt;\/div&gt; &lt;div class=\&quot;caption-head\&quot;&gt;&lt;\/div&gt;
                                                &lt;div class=\&quot;caption-category\&quot;&gt;&lt;\/div&gt;
                                                &lt;\/div&gt;&lt;\/div&gt; &lt;\/div&gt;&quot;,&quot;&lt;div
                                                class=\&quot;gallery-item-wrap \&quot;&gt; &lt;div
                                                class=\&quot;grid-item\&quot;&gt;&lt;div
                                                class=\&quot;thumbnail-wrap\&quot;&gt;&lt;img
                                                src=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//spotted-jellyfish-e1628655100406.jpg/"
                                                &gt;&lt;\/div&gt;&lt;div class=\&quot;caption-wrap style-overlay
                                                overlay-overlay\&quot;&gt; &lt;div
                                                class=\&quot;item-hover-bg\&quot;&gt;&lt;\/div&gt; &lt;div
                                                class=\&quot;item-caption-over\&quot;&gt; &lt;h5
                                                class=\&quot;item-title\&quot;&gt;&lt;\/h5&gt; &lt;div
                                                class=\&quot;item-content\&quot;&gt;&lt;\/div&gt;&lt;div
                                                class=\&quot;item-buttons\&quot;&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//spotted-jellyfish-e1628655100406.jpg/"
                                                class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;yes\&quot;
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8\&quot;
                                                &gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"/" class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;no\&quot;&gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;i aria-hidden=\&quot;true\&quot;
                                                class=\&quot;jki
                                                jki-instagram-1-light\&quot;&gt;&lt;\/i&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;\/div&gt;
                                                &lt;\/div&gt; &lt;div class=\&quot;caption-head\&quot;&gt;&lt;\/div&gt;
                                                &lt;div class=\&quot;caption-category\&quot;&gt;&lt;\/div&gt;
                                                &lt;\/div&gt;&lt;\/div&gt; &lt;\/div&gt;&quot;,&quot;&lt;div
                                                class=\&quot;gallery-item-wrap \&quot;&gt; &lt;div
                                                class=\&quot;grid-item\&quot;&gt;&lt;div
                                                class=\&quot;thumbnail-wrap\&quot;&gt;&lt;img
                                                src=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//common-newt-amhibian-in-freshwater-habitat-e1628655110206.jpg/"
                                                &gt;&lt;\/div&gt;&lt;div class=\&quot;caption-wrap style-overlay
                                                overlay-overlay\&quot;&gt; &lt;div
                                                class=\&quot;item-hover-bg\&quot;&gt;&lt;\/div&gt; &lt;div
                                                class=\&quot;item-caption-over\&quot;&gt; &lt;h5
                                                class=\&quot;item-title\&quot;&gt;&lt;\/h5&gt; &lt;div
                                                class=\&quot;item-content\&quot;&gt;&lt;\/div&gt;&lt;div
                                                class=\&quot;item-buttons\&quot;&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//common-newt-amhibian-in-freshwater-habitat-e1628655110206.jpg/"
                                                class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;yes\&quot;
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8\&quot;
                                                &gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"/" class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;no\&quot;&gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;i aria-hidden=\&quot;true\&quot;
                                                class=\&quot;jki
                                                jki-instagram-1-light\&quot;&gt;&lt;\/i&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;\/div&gt;
                                                &lt;\/div&gt; &lt;div class=\&quot;caption-head\&quot;&gt;&lt;\/div&gt;
                                                &lt;div class=\&quot;caption-category\&quot;&gt;&lt;\/div&gt;
                                                &lt;\/div&gt;&lt;\/div&gt; &lt;\/div&gt;&quot;,&quot;&lt;div
                                                class=\&quot;gallery-item-wrap \&quot;&gt; &lt;div
                                                class=\&quot;grid-item\&quot;&gt;&lt;div
                                                class=\&quot;thumbnail-wrap\&quot;&gt;&lt;img
                                                src=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//an-extra-ordinary-kind-of-fish-e1628655121470.jpg/"
                                                &gt;&lt;\/div&gt;&lt;div class=\&quot;caption-wrap style-overlay
                                                overlay-overlay\&quot;&gt; &lt;div
                                                class=\&quot;item-hover-bg\&quot;&gt;&lt;\/div&gt; &lt;div
                                                class=\&quot;item-caption-over\&quot;&gt; &lt;h5
                                                class=\&quot;item-title\&quot;&gt;&lt;\/h5&gt; &lt;div
                                                class=\&quot;item-content\&quot;&gt;&lt;\/div&gt;&lt;div
                                                class=\&quot;item-buttons\&quot;&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"https:////templatekit.jegtheme.com//aquavist//wp-content//uploads//sites//129//2021//08//an-extra-ordinary-kind-of-fish-e1628655121470.jpg/"
                                                class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;yes\&quot;
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8\&quot;
                                                &gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;a
                                                href=https://templatekit.jegtheme.com/"/" class=\&quot;gallery-link\&quot;
                                                data-elementor-open-lightbox=\&quot;no\&quot;&gt;&lt;span
                                                class=\&quot;item-icon-inner\&quot;&gt;&lt;i aria-hidden=\&quot;true\&quot;
                                                class=\&quot;jki
                                                jki-instagram-1-light\&quot;&gt;&lt;\/i&gt;&lt;\/span&gt;&lt;\/a&gt;&lt;\/div&gt;
                                                &lt;\/div&gt; &lt;div class=\&quot;caption-head\&quot;&gt;&lt;\/div&gt;
                                                &lt;div class=\&quot;caption-category\&quot;&gt;&lt;\/div&gt;
                                                &lt;\/div&gt;&lt;\/div&gt; &lt;\/div&gt;&quot;]">
                                                <div class="gallery-items">
                                                    <div class="gallery-item-wrap ">
                                                        <div class="grid-item">
                                                            <div class="thumbnail-wrap"><img
                                                                    src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/tropical-fish-e1628654856592.jpg') }}">
                                                            </div>
                                                            <div class="caption-wrap style-overlay overlay-overlay">
                                                                <div class="item-hover-bg"></div>
                                                                <div class="item-caption-over">
                                                                    <h5 class="item-title"></h5>
                                                                    <div class="item-content"></div>
                                                                    <div class="item-buttons"><a
                                                                            href="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/tropical-fish-e1628654856592.jpg') }}"
                                                                            class="gallery-link"
                                                                            data-elementor-open-lightbox="yes"
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8"><span
                                                                                class="item-icon-inner"></span></a><a
                                                                            href="#" class="gallery-link"
                                                                            data-elementor-open-lightbox="no"><span
                                                                                class="item-icon-inner"><i
                                                                                    aria-hidden="true"
                                                                                    class="jki jki-instagram-1-light"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="caption-head"></div>
                                                                <div class="caption-category"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item-wrap ">
                                                        <div class="grid-item">
                                                            <div class="thumbnail-wrap"><img
                                                                    src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/clown-fish-e1628655075684.jpg') }}">
                                                            </div>
                                                            <div class="caption-wrap style-overlay overlay-overlay">
                                                                <div class="item-hover-bg"></div>
                                                                <div class="item-caption-over">
                                                                    <h5 class="item-title"></h5>
                                                                    <div class="item-content"></div>
                                                                    <div class="item-buttons"><a
                                                                            href="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/clown-fish-e1628655075684.jpg') }}"
                                                                            class="gallery-link"
                                                                            data-elementor-open-lightbox="yes"
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8"><span
                                                                                class="item-icon-inner"></span></a><a
                                                                            href="#" class="gallery-link"
                                                                            data-elementor-open-lightbox="no"><span
                                                                                class="item-icon-inner"><i
                                                                                    aria-hidden="true"
                                                                                    class="jki jki-instagram-1-light"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="caption-head"></div>
                                                                <div class="caption-category"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item-wrap ">
                                                        <div class="grid-item">
                                                            <div class="thumbnail-wrap"><img
                                                                    src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/majestic-blue-girdled-angel-e1628655086136.jpg') }}">
                                                            </div>
                                                            <div class="caption-wrap style-overlay overlay-overlay">
                                                                <div class="item-hover-bg"></div>
                                                                <div class="item-caption-over">
                                                                    <h5 class="item-title"></h5>
                                                                    <div class="item-content"></div>
                                                                    <div class="item-buttons"><a
                                                                            href="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/majestic-blue-girdled-angel-e1628655086136.jpg') }}"
                                                                            class="gallery-link"
                                                                            data-elementor-open-lightbox="yes"
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8"><span
                                                                                class="item-icon-inner"></span></a><a
                                                                            href="#" class="gallery-link"
                                                                            data-elementor-open-lightbox="no"><span
                                                                                class="item-icon-inner"><i
                                                                                    aria-hidden="true"
                                                                                    class="jki jki-instagram-1-light"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="caption-head"></div>
                                                                <div class="caption-category"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item-wrap ">
                                                        <div class="grid-item">
                                                            <div class="thumbnail-wrap"><img
                                                                    src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/spotted-jellyfish-e1628655100406.jpg') }}">
                                                            </div>
                                                            <div class="caption-wrap style-overlay overlay-overlay">
                                                                <div class="item-hover-bg"></div>
                                                                <div class="item-caption-over">
                                                                    <h5 class="item-title"></h5>
                                                                    <div class="item-content"></div>
                                                                    <div class="item-buttons"><a
                                                                            href="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/spotted-jellyfish-e1628655100406.jpg') }}"
                                                                            class="gallery-link"
                                                                            data-elementor-open-lightbox="yes"
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8"><span
                                                                                class="item-icon-inner"></span></a><a
                                                                            href="#" class="gallery-link"
                                                                            data-elementor-open-lightbox="no"><span
                                                                                class="item-icon-inner"><i
                                                                                    aria-hidden="true"
                                                                                    class="jki jki-instagram-1-light"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="caption-head"></div>
                                                                <div class="caption-category"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item-wrap ">
                                                        <div class="grid-item">
                                                            <div class="thumbnail-wrap"><img
                                                                    src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/common-newt-amhibian-in-freshwater-habitat-e1628655110206.jpg') }}">
                                                            </div>
                                                            <div class="caption-wrap style-overlay overlay-overlay">
                                                                <div class="item-hover-bg"></div>
                                                                <div class="item-caption-over">
                                                                    <h5 class="item-title"></h5>
                                                                    <div class="item-content"></div>
                                                                    <div class="item-buttons"><a
                                                                            href="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/common-newt-amhibian-in-freshwater-habitat-e1628655110206.jpg') }}"
                                                                            class="gallery-link"
                                                                            data-elementor-open-lightbox="yes"
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8"><span
                                                                                class="item-icon-inner"></span></a><a
                                                                            href="#" class="gallery-link"
                                                                            data-elementor-open-lightbox="no"><span
                                                                                class="item-icon-inner"><i
                                                                                    aria-hidden="true"
                                                                                    class="jki jki-instagram-1-light"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="caption-head"></div>
                                                                <div class="caption-category"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item-wrap ">
                                                        <div class="grid-item">
                                                            <div class="thumbnail-wrap"><img
                                                                    src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/an-extra-ordinary-kind-of-fish-e1628655121470.jpg') }}">
                                                            </div>
                                                            <div class="caption-wrap style-overlay overlay-overlay">
                                                                <div class="item-hover-bg"></div>
                                                                <div class="item-caption-over">
                                                                    <h5 class="item-title"></h5>
                                                                    <div class="item-content"></div>
                                                                    <div class="item-buttons"><a
                                                                            href="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/an-extra-ordinary-kind-of-fish-e1628655121470.jpg') }}"
                                                                            class="gallery-link"
                                                                            data-elementor-open-lightbox="yes"
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_20_43_675926d9d1de8"><span
                                                                                class="item-icon-inner"></span></a><a
                                                                            href="#" class="gallery-link"
                                                                            data-elementor-open-lightbox="no"><span
                                                                                class="item-icon-inner"><i
                                                                                    aria-hidden="true"
                                                                                    class="jki jki-instagram-1-light"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="caption-head"></div>
                                                                <div class="caption-category"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="load-more-items"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-3915f10 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="3915f10" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c581241"
                                data-id="c581241" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-798eb70 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="798eb70" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3cdd770"
                                                data-id="3cdd770" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-faebc17 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                        data-id="faebc17" data-element_type="widget"
                                                        data-widget_type="jkit_icon_box.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_20_44_675926d9d7351">
                                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                                    <div
                                                                        class="icon-box icon-box-header elementor-animation-">
                                                                        <div class="icon style-color"><i
                                                                                aria-hidden="true"
                                                                                class="fas fa-map-marker-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="icon-box icon-box-body">
                                                                        <h2 class="title">Location</h2>
                                                                        <p class="icon-box-description">Legian
                                                                            Atkins
                                                                            West, DPS 11490, Bali</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f1fb226"
                                                data-id="f1fb226" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-9000ff3 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                        data-id="9000ff3" data-element_type="widget"
                                                        data-widget_type="jkit_icon_box.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_20_45_675926d9d904c">
                                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                                    <div
                                                                        class="icon-box icon-box-header elementor-animation-">
                                                                        <div class="icon style-color"><i
                                                                                aria-hidden="true"
                                                                                class="fas fa-phone-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="icon-box icon-box-body">
                                                                        <h2 class="title">Phone</h2>
                                                                        <p class="icon-box-description">
                                                                            +62-202-555-0133</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-08377cd"
                                                data-id="08377cd" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-41c8d7b jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                        data-id="41c8d7b" data-element_type="widget"
                                                        data-widget_type="jkit_icon_box.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_20_46_675926d9db03e">
                                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                                    <div
                                                                        class="icon-box icon-box-header elementor-animation-">
                                                                        <div class="icon style-color"><i
                                                                                aria-hidden="true"
                                                                                class="fas fa-envelope"></i></div>
                                                                    </div>
                                                                    <div class="icon-box icon-box-body">
                                                                        <h2 class="title">Email</h2>
                                                                        <p class="icon-box-description">
                                                                            aquavist@support.com</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8149bf9"
                                                data-id="8149bf9" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-78bfc77 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                        data-id="78bfc77" data-element_type="widget"
                                                        data-widget_type="jkit_icon_box.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_20_47_675926d9dd506">
                                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                                    <div
                                                                        class="icon-box icon-box-header elementor-animation-">
                                                                        <div class="icon style-color"><i
                                                                                aria-hidden="true"
                                                                                class="fas fa-clock"></i></div>
                                                                    </div>
                                                                    <div class="icon-box icon-box-body">
                                                                        <h2 class="title">Opening Hours</h2>
                                                                        <p class="icon-box-description">Everyday
                                                                            09:00
                                                                            AM - 18:00 PM</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-9d2dc2c elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="9d2dc2c" data-element_type="widget"
                                        data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-6a54531 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="6a54531" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b70f5e8"
                                                data-id="b70f5e8" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-04f31fb elementor-widget elementor-widget-image"
                                                        data-id="04f31fb" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img width="1000" height="349"
                                                                src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-e1628655153433.png') }}"
                                                                class="attachment-full size-full wp-image-662"
                                                                alt="" decoding="async" loading="lazy" />
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-9153004 elementor-widget elementor-widget-text-editor"
                                                        data-id="9153004" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit.
                                                                Aenean commodo ligula eget dolor aenean massa.</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4c1491b e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                        data-id="4c1491b" data-element_type="widget"
                                                        data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-light elementor-animation-shrink elementor-repeater-item-1d2111a"
                                                                        target="_blank">
                                                                        <span
                                                                            class="elementor-screen-only">Jki-facebook-light</span>
                                                                        <i class="jki jki-facebook-light"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-56b0af6"
                                                                        target="_blank">
                                                                        <span class="elementor-screen-only">Twitter</span>
                                                                        <i class="fab fa-twitter"></i> </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-add6e3c"
                                                                        target="_blank">
                                                                        <span class="elementor-screen-only">Youtube</span>
                                                                        <i class="fab fa-youtube"></i> </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-jki-instagram-1-light elementor-animation-shrink elementor-repeater-item-ebe177c"
                                                                        target="_blank">
                                                                        <span
                                                                            class="elementor-screen-only">Jki-instagram-1-light</span>
                                                                        <i class="jki jki-instagram-1-light"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a0d520f"
                                                data-id="a0d520f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-f619f83 elementor-widget elementor-widget-heading"
                                                        data-id="f619f83" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h6 class="elementor-heading-title elementor-size-default">
                                                                Imortant Links</h6>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-f60d494 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="f60d494" data-element_type="widget"
                                                        data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Support</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">Privacy
                                                                            Policy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">Term
                                                                            &
                                                                            Condition</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Disclaimer</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b8060d7"
                                                data-id="b8060d7" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-255022d elementor-widget elementor-widget-heading"
                                                        data-id="255022d" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h6 class="elementor-heading-title elementor-size-default">
                                                                Get To Know</h6>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-531e199 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="531e199" data-element_type="widget"
                                                        data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Maintenance</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">Aquarium
                                                                            Design</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">Cleaning
                                                                            Services</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">Aquarium
                                                                            Supplies</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">Health
                                                                            Services</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-452d646"
                                                data-id="452d646" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-3e6f7a5 elementor-widget elementor-widget-heading"
                                                        data-id="3e6f7a5" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h6 class="elementor-heading-title elementor-size-default">
                                                                Subscribe Our Newsletter</h6>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5237025 elementor-widget elementor-widget-text-editor"
                                                        data-id="5237025" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Lorem ipsum dolor sit amet consectetuer adipis arcing
                                                                elit. Aenean commodo ligula eget commodo ligula
                                                                eget..
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-bf1a0da elementor-widget elementor-widget-jkit_mailchimp"
                                                        data-id="bf1a0da" data-element_type="widget"
                                                        data-widget_type="jkit_mailchimp.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="jeg-elementor-kit jkit-mailchimp style-inline jeg_module_20_48_675926d9ebab3">
                                                                <form method="post" class="jkit-mailchimp-form"
                                                                    data-listed=""
                                                                    data-success-message="Successfully listed this email"
                                                                    data-error-message="Something went wrong">
                                                                    <div class="jkit-mailchimp-message"></div>
                                                                    <div class="jkit-form-wrapper email-form">
                                                                        <div
                                                                            class="jkit-mailchimp-email jkit-input-wrapper input-container">
                                                                            <div class="jkit-form-group">
                                                                                <div
                                                                                    class="jkit-input-element-container jkit-input-group">
                                                                                    <input type="email" name="email"
                                                                                        class="jkit-email jkit-form-control "
                                                                                        placeholder="Your Email"
                                                                                        required="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="jkit-submit-input-holder jkit-input-wrapper">
                                                                            <button type="submit"
                                                                                class="jkit-mailchimp-submit position-before"
                                                                                name="jkit-mailchimp">
                                                                                <i aria-hidden="true"
                                                                                    class="fab fa-telegram-plane"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-186209e elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="186209e" data-element_type="widget"
                                        data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-9a1dd87 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="9a1dd87" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f7b3f6e"
                                                data-id="f7b3f6e" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-bf9c51a elementor-widget elementor-widget-text-editor"
                                                        data-id="bf9c51a" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Aquavist Template Kit by Jegtheme</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cc707b0"
                                                data-id="cc707b0" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-9e00f7d elementor-widget elementor-widget-text-editor"
                                                        data-id="9e00f7d" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            Copyright © 2021. All rights reserved. </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </footer>
    </div><!-- #page -->
