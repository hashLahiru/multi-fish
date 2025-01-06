@extends('AquaVist.pages.testMalaysianApp')

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
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                                                            <a href="/">Home</a>
                                                        </li>
                                                        <li id="menu-item-1430"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1430">
                                                            <a href="/about">About</a>
                                                        </li>
                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="/product">Products</a>
                                                        </li>
                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="/gallery">Gallery</a>
                                                        </li>
                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="/news">Blog</a>
                                                        </li>
                                                        <li id="menu-item-1426"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1426">
                                                            <a href="/contactus" aria-current="page">Contact</a>
                                                        </li>
                                                        <li id="menu-item-malaysia" class="menu-item">
                                                            <a href="/Malaysian">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                    height="32" viewBox="0 0 32 32">
                                                                    <rect x="1" y="4" width="30" height="24"
                                                                        rx="4" ry="4" fill="#fff">
                                                                    </rect>
                                                                    <path
                                                                        d="M1.638,5.847H30.362c-.711-1.108-1.948-1.847-3.362-1.847H5c-1.415,0-2.651,.739-3.362,1.847Z"
                                                                        fill="#bc271a"></path>
                                                                    <path
                                                                        d="M1.031,7.692c-.008,.103-.031,.202-.031,.308v1.539H31v-1.539c0-.105-.023-.204-.031-.308H1.031Z"
                                                                        fill="#bc271a"></path>
                                                                    <path fill="#bc271a" d="M1 11.384H31V13.231H1z"></path>
                                                                    <path fill="#bc271a" d="M1 15.077H31V16.924H1z"></path>
                                                                    <path fill="#bc271a" d="M1 18.769H31V20.616H1z"></path>
                                                                    <path
                                                                        d="M1,24c0,.105,.023,.204,.031,.308H30.969c.008-.103,.031-.202,.031-.308v-1.539H1v1.539Z"
                                                                        fill="#bc271a"></path>
                                                                    <path
                                                                        d="M30.362,26.153H1.638c.711,1.108,1.948,1.847,3.362,1.847H27c1.415,0,2.651-.739,3.362-1.847Z"
                                                                        fill="#bc271a"></path>
                                                                    <path d="M16,4H5c-2.209,0-4,1.791-4,4v10.769h15V4Z"
                                                                        fill="#010062"></path>
                                                                    <path
                                                                        d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                                                        opacity=".15"></path>
                                                                    <path
                                                                        d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                                                        fill="#fff" opacity=".2"></path>
                                                                    <path fill="#f6cd46"
                                                                        d="M11.639 8.108L11.931 10.106 13.061 8.432 12.455 10.36 14.2 9.342 12.818 10.816 14.833 10.655 12.949 11.384 14.833 12.113 12.818 11.952 14.2 13.427 12.455 12.408 13.061 14.336 11.931 12.662 11.639 14.661 11.346 12.662 10.216 14.336 10.822 12.408 9.077 13.427 10.459 11.952 8.444 12.113 10.328 11.384 8.444 10.655 10.459 10.816 9.077 9.342 10.822 10.36 10.216 8.432 11.346 10.106 11.639 8.108z">
                                                                    </path>
                                                                    <path
                                                                        d="M10,8.189c-1.764-.783-3.829,.013-4.612,1.777-.783,1.764,.013,3.829,1.777,4.612,.903,.4,1.932,.4,2.835,0-1.764,1.266-4.221,.862-5.487-.903s-.862-4.221,.903-5.487c1.37-.983,3.214-.983,4.584,0Z"
                                                                        fill="#f6cd46"></path>
                                                                </svg>
                                                                &nbsp; Malaysia
                                                            </a>
                                                        </li>
                                                        <li id="menu-item-indonesia"
                                                            class="menu-item menu-item-22 current-menu-item page_item page-item-1291 current_page_item">
                                                            <a href="/Indonesian">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                    height="32" viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M31,8c0-2.209-1.791-4-4-4H5c-2.209,0-4,1.791-4,4v9H31V8Z"
                                                                        fill="#ea3323"></path>
                                                                    <path
                                                                        d="M5,28H27c2.209,0,4-1.791,4-4v-8H1v8c0,2.209,1.791,4,4,4Z"
                                                                        fill="#fff"></path>
                                                                    <path
                                                                        d="M5,28H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4ZM2,8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8Z"
                                                                        opacity=".15"></path>
                                                                    <path
                                                                        d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                                                        fill="#fff" opacity=".2"></path>
                                                                </svg>
                                                                &nbsp; Indonesia
                                                            </a>
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
                                        class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_1064_2_675928918e3c5">
                                        <div class="heading-section-title display-inline-block">
                                            <h2 class="heading-title">Indonesian</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f0ea7e8 elementor-align-left elementor-icon-list--layout-inline elementor-mobile-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="f0ea7e8" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <p style="width:80%; font-size: 15px; color:rgb(255, 255, 255);">Lorem ipsum
                                                dolor sit
                                                amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fde296b"
                        data-id="fde296b" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </section>
            {{-- section-2 --}}
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-6fb470e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                style="margin-top: 5%; background-image: url('{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/location1.jpg') }}'); background-size: contain; background-position: center;"
                data-id="6fb470e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f8ebbbc"
                        data-id="f8ebbbc" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_788_3_6759274bcfbc0">
                                <div class="elementor-element elementor-element-9716da2 elementor-widget elementor-widget-heading"
                                    data-id="9716da2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="elementor-heading-title elementor-size-default"
                                            style="color:black; font-weight:700; padding-bottom:2%; ">
                                            Popular Indonesian Aquarium Fish</h4>
                                        <h5 class="elementor-heading-title elementor-size-default"
                                            style="color:black; font-weight:500; padding-bottom:2%; ">
                                            Malaysian Betta Fish(Betta macrostoma)</h5>
                                        <p class="elementor-heading-title elementor-size-default"
                                            style="line-height:20px; color:black; padding-bottom:2%; width:60%; margin-left:2%;">
                                            lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_788_3_6759274bcfbc0">
                                <div class="elementor-element elementor-element-9716da2 elementor-widget elementor-widget-heading"
                                    data-id="9716da2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default"
                                            style="color:black; font-weight:500; padding-bottom:2%; ">
                                            Malaysian Betta Fish(Betta macrostoma)</h5>
                                        <p class="elementor-heading-title elementor-size-default"
                                            style="line-height:20px; color:black; padding-bottom:2%; width:60%; margin-left:2%;">
                                            lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_788_3_6759274bcfbc0">
                                <div class="elementor-element elementor-element-9716da2 elementor-widget elementor-widget-heading"
                                    data-id="9716da2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default"
                                            style="color:black; font-weight:500; padding-bottom:2%; ">
                                            Malaysian Betta Fish(Betta macrostoma)</h5>
                                        <p class="elementor-heading-title elementor-size-default"
                                            style="line-height:20px; color:black; padding-bottom:2%; width:60%; margin-left:2%;">
                                            lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div style="margin-top: 3%; margin-left:7%;">
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div class="btncontainer" id="myBtnContainer"
                            style="display: flex; align-items: center; gap: 10px;">
                            <button class="btn"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border: none; border-radius: 10px; height: 35px; padding: 5px 15px;"
                                onmouseover="this.style.textDecorationColor='grey';"
                                onmouseout="if (!this.classList.contains('active')) { this.style.textDecorationColor='transparent'; }"
                                onclick="filterCategories('all'); setActiveButton(this);">All</button>

                            <button class="btn"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border: none; border-radius: 10px; height: 35px; padding: 5px 15px;"
                                onmouseover="this.style.textDecorationColor='grey';"
                                onmouseout="if (!this.classList.contains('active')) { this.style.textDecorationColor='transparent'; }"
                                onclick="filterCategories(1); setActiveButton(this);">Fresh Water Fish</button>
                            <button class="btn"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border: none; border-radius: 10px; height: 35px; padding: 5px 15px;"
                                onmouseover="this.style.textDecorationColor='grey';"
                                onmouseout="if (!this.classList.contains('active')) { this.style.textDecorationColor='transparent'; }"
                                onclick="filterCategories(2); setActiveButton(this);">Marine Fish</button>
                            <button class="btn"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border: none; border-radius: 10px; height: 35px; padding: 5px 15px;"
                                onmouseover="this.style.textDecorationColor='grey';"
                                onmouseout="if (!this.classList.contains('active')) { this.style.textDecorationColor='transparent'; }"
                                onclick="filterCategories(3); setActiveButton(this);">Plants</button>
                        </div>

                        <script>
                            function setActiveButton(button) {
                                var btns = document.getElementsByClassName("btn");
                                for (var i = 0; i < btns.length; i++) {
                                    btns[i].classList.remove("active");
                                    btns[i].style.textDecorationColor = 'transparent';
                                }
                                button.classList.add("active");
                                button.style.textDecorationColor = 'black';
                            }

                            function filterCategories(superCategoryId) {
                                var products = document.getElementsByClassName("filterDiv");
                                for (var i = 0; i < products.length; i++) {
                                    if (superCategoryId === 'all' || products[i].dataset.categoryId == superCategoryId) {
                                        products[i].style.display = "block";
                                    } else {
                                        products[i].style.display = "none";
                                    }
                                }
                            }

                            function filterProducts(categoryId) {
                                var products = document.getElementsByClassName("filterDiv");
                                for (var i = 0; i < products.length; i++) {
                                    if (!categoryId || products[i].dataset.categoryId == categoryId) {
                                        products[i].style.display = "block";
                                    } else {
                                        products[i].style.display = "none";
                                    }
                                }
                            }

                            document.addEventListener('click', function(e) {
                                if (e.target.closest('.category')) {
                                    const categoryId = e.target.closest('.category').dataset.id;
                                    filterProducts(categoryId);
                                }
                            });
                        </script>
                    </div>
                </div>
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
                                            placeholder="  Search for fish..." onkeyup="searchProducts(this.value)" />
                                        <button class="all-button"
                                            style="background-color: black; color: white; border-radius: 10px; height: 35px; padding: 5px 15px;"
                                            onclick="filterSelection('all')">All</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-grid">
                        @foreach ($products as $product)
                            <div class="filterDiv fresh" data-category-id="{{ $product->super_category_id }}">
                                <img src="{{ asset($product->img1_url) }}" alt="Product Image" class="product-image">
                                <div class="product-name"> {{ $product->pro_name }} </div>
                                <div class="product-price">
                                    @if ($product->discount > 0)
                                        <span class="previous-price"> {{ number_format($product->unit_price, 2) }} </span>
                                        <span class="current-price">
                                            {{ number_format($product->unit_price - $product->discount, 2) }}
                                        </span>
                                    @else
                                        <span class="current-price"> {{ number_format($product->unit_price, 2) }} </span>
                                    @endif
                                </div>
                                <button class="sale-button"
                                    style="border-radius: 5px; margin top:15%;  margin-top:10%; padding: 10px 32px;">Buy</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

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

                var btnContainer = document.getElementById("myBtnContainer");
                var btns = btnContainer.getElementsByClassName("btn");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    });
                }

                function searchProducts(query) {
                    var products = document.getElementsByClassName("filterDiv");
                    for (var i = 0; i < products.length; i++) {
                        var productName = products[i].getElementsByClassName("product-name")[0].innerText.toLowerCase();
                        if (productName.includes(query.toLowerCase())) {
                            products[i].style.display = "block";
                        } else {
                            products[i].style.display = "none";
                        }
                    }
                }
            </script>
        </div>

        <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
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
                                        data-id="9d2dc2c" data-element_type="widget" data-widget_type="divider.default">
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
                                                                class="attachment-full wp-image-662 size-full"
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
                                                                                        class="jkit-email jkit-form-control"
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
                                        data-id="186209e" data-element_type="widget" data-widget_type="divider.default">
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
