@extends('AquaVist.pages.testAboutUsApp')

@section('title', 'Home Page')

@section('content')

    <style>
        .elementor-section1 {
            width: 110%;
            margin-top: 5%;
            margin-left: 14%;
            margin-right: 10%;
            text-align: justify;
        }

        .elementor-widget-container1 {
            margin-top: 3%;
        }


        .elementor *,
        .elementor :after,
        .elementor :before {
            box-sizing: none;
        }


        .image-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-template-rows: repeat(2, auto);
            gap: 10px;
        }

        .image-grid img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border: none;
        }

        .info {
            position: absolute;
        }
    </style>




    <div id="page" class="hfeed site info">
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
                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-1024x357.png') }}"
                                            class="attachment-large size-large wp-image-662" alt="" decoding="async"
                                            srcset="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-1024x357.png') }} 1024w, {{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-300x105.png') }} 300w, {{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-768x268.png') }} 768w, {{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-1536x536.png') }} 1536w, {{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-2048x714.png') }} 2048w, {{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-1024x357.png') }} 800w, {{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-e1628655153433.png') }} 1000w"
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
                                        <div class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_788__6759274bbfa81"
                                            data-item-indicator="&lt;i aria-hidden=&quot;true&quot; class=&quot;jki jki-angle-down-solid&quot;&gt;&lt;/i&gt;">
                                            <button class="jkit-hamburger-menu"><i aria-hidden="true"
                                                    class="jki jki-menu1-light"></i></button>
                                            <div class="jkit-menu-wrapper">
                                                <div class="jkit-menu-container">
                                                    <ul id="menu-menu-1"
                                                        class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
                                                        <li id="menu-item-22"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-22">
                                                            <a href="/">Home</a>
                                                        </li>
                                                        <li id="menu-item-1430"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1430 current-menu-item page_item page-item-1291 current_page_item ">
                                                            <a href="/about" aria-current="page">About</a>
                                                        </li>
                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="/product-categories">Products</a>
                                                        </li>

                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="/gallery">Gallery</a>
                                                        </li>

                                                        <li id="menu-item-1429"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                            <a href="/blog">Blog</a>
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
                                                            class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-1426">
                                                            <a href="/contactus" >Contact</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="jkit-nav-identity-panel">
                                                    <div class="jkit-nav-site-title"><a
                                                            href="https://templatekit.jegtheme.com/aquavist"
                                                            class="jkit-nav-logo"><img
                                                                src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/logo3-Q2SAW4M-e1628655153433.png') }}"></a>
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
                                            class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_1_6759274bc97b8">
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

        <div data-elementor-type="wp-page" data-elementor-id="788" class="elementor elementor-788">


            {{-- section1 --}}
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-f27f176 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="f27f176" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8053144"
                        data-id="8053144" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a8387ee elementor-widget elementor-widget-jkit_heading"
                                data-id="a8387ee" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_2_6759274bce270">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">About</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e4afbde"
                        data-id="e4afbde" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </section>

            {{-- section 2 --}}
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-a42b3aa elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="a42b3aa" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementsor-column elementor-col-66 elementor-top-column elementor-element elementor-element-b2df78f"
                        data-id="b2df78f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-baf8c1f elementor-widget elementor-widget-jkit_heading"
                                data-id="baf8c1f" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_3_6759274bcfbc0">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">About Multifish Lanka</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9716da2 elementor-widget elementor-widget-heading"
                                data-id="9716da2" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">We Are Ready To Pamper You
                                        With A More Beautiful Aquarium</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e669a8c elementor-widget elementor-widget-text-editor"
                                data-id="e669a8c" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip dolore magna aliqua enim ad minim
                                        veniam, quis nostrud.</p>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-0712d07 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="0712d07" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1e5c0f4"
                                        data-id="1e5c0f4" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f8d8b13 elementor-widget elementor-widget-spacer"
                                                data-id="f8d8b13" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a422e85 elementor-widget elementor-widget-jkit_video_button"
                                                data-id="a422e85" data-element_type="widget"
                                                data-widget_type="jkit_video_button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-video-button jeg_module_788_4_6759274bd248d"
                                                        data-autoplay="0" data-loop="0" data-controls="0"
                                                        data-type="youtube" data-mute="0" data-start="0"
                                                        data-end="0"><a
                                                            href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                            class="jkit-video-popup-btn glow-enable"><span
                                                                class="icon-position-before"><i aria-hidden="true"
                                                                    class="jki jki-play1-light"></i></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b87dcdc"
                                        data-id="b87dcdc" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2a31298 elementor-widget elementor-widget-text-editor"
                                                data-id="2a31298" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Tempor lorem ipsum dolor sit amet consec tetur adip iscing elit, sed
                                                        do eiusmod tempor incididuntut labore et dolore magna.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c58657e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="c58657e" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="jki jki-check-light"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Photos with
                                                                Animals</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="jki jki-check-light"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Restaurants & Fast
                                                                Foods</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="jki jki-check-light"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Free Wi-Fi with Hi
                                                                Speed</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="jki jki-check-light"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Many Competitions</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="jki jki-check-light"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Luxury Aquarium</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a33b8ae elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
                                                data-id="a33b8ae" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_5_6759274bd4692">
                                                        <a href="#" class="jkit-button-wrapper">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-eeae90c"
                        data-id="eeae90c" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5b4dd32 elementor-widget elementor-widget-spacer"
                                data-id="5b4dd32" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-44885d1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="44885d1" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fe6e8c5"
                                        data-id="fe6e8c5" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b18c6d9 elementor-widget elementor-widget-text-editor"
                                                data-id="b18c6d9" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><em>&#8220;Quotes Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Ut elit tellus.&#8221;</em></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-bd959b6 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                                                data-id="bd959b6" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_6_6759274bd662c">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h3 class="heading-title">Teddy Saunders</h3>
                                                        </div>
                                                        <div class="heading-section-description">CEO &amp; Founder</div>
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
                <section class="elementor-section1 elementor-top-section " data-id="a42b3aa" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementsor-column  elementor-element elementor-element-b2df78f" data-id="b2df78f"
                            data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_3_6759274bcfbc0">
                                    <div class="elementor-element elementor-element-9716da2 elementor-widget elementor-widget-heading"
                                        data-id="9716da2" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Our Story</h2>
                                            <div class="heading-section-separator">
                                                <div class="separator-wrapper style-solid"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element " data-id="e669a8c" data-element_type="widget"
                                    data-widget_type="text-editor.default" style="width:100%;">
                                    <div class="elementor-widget-container1">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip dolore magna aliqua enim ad minim
                                            veniam, quis nostrud.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip dolore magna aliqua enim ad minim
                                            veniam, quis nostrud.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip dolore magna aliqua enim ad minim
                                            veniam, quis nostrud.
                                            </br>
                                        <p>
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip dolore magna aliqua enim ad minim
                                            veniam, quis nostrud.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip dolore magna aliqua enim ad minim
                                            veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                        </p>

                                        </p>
                                    </div>
                                </div>

                                <div style="text-align: center;  margin-left: 30%;  margin-top: 5%;">
                                    <hr style="width: 500px; height: 4px; background-color: black; border: none;">
                                </div>
                </section>

            </section>



            {{-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-30831bf elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="30831bf" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fbe93ac"
                        data-id="fbe93ac" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-4de1d16 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="4de1d16" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-097689b"
                                        data-id="097689b" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-9d44ab1 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="9d44ab1" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_7_6759274bd804b">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-Design-3-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Design &amp; Install</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod.</p>
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
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-31088ae"
                                        data-id="31088ae" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-eb84b38 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="eb84b38" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_8_6759274bd8fb3">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-heart-pulse-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Health Check</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod.</p>
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
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-da87a51 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="da87a51" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3ca3435"
                                        data-id="3ca3435" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ed4914d jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="ed4914d" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_9_6759274bda603">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-trowel-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Planted Tank</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod.</p>
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
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-59edc2a"
                                        data-id="59edc2a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-01cd141 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="01cd141" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_10_6759274bdcb46">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><i aria-hidden="true"
                                                                        class="jki jki-rocket-light"></i></div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">Maintenance</h3>
                                                                <p class="icon-box-description">Lorem ipsum dolor sit sedar
                                                                    consect adipiscing el sed do eiusmod.</p>
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
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ada7696"
                        data-id="ada7696" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4d42a35 elementor-widget elementor-widget-jkit_heading"
                                data-id="4d42a35" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_11_6759274bde0ef">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">Our Services</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a5a8328 elementor-widget elementor-widget-heading"
                                data-id="a5a8328" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">We Provide Special Sevices
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-08f962e elementor-widget elementor-widget-text-editor"
                                data-id="08f962e" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tempor aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}


            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-34c5559 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="34c5559" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-caafe4e"
                        data-id="caafe4e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b948e8d elementor-widget elementor-widget-jkit_heading"
                                data-id="b948e8d" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_788_12_6759274bdfe81">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title" style="font-size: 50px;">Our Commitment</h2>
                                        </div>
                                        {{-- <div class="heading-section-separator"> 
                                            <div class="separator-wrapper style-solid"></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5b30122 elementor-widget elementor-widget-heading"
                                data-id="5b30122" data-element_type="widget" data-widget_type="heading.default">
                                {{-- <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Our Commitment
                                    </h2>
                                </div> --}}
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-ffaadc7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="ffaadc7" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-22e7d99"
                                        data-id="22e7d99" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-923ce29 elementor-widget elementor-widget-jkit_progress_bar"
                                                data-id="923ce29" data-element_type="widget"
                                                data-widget_type="jkit_progress_bar.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-progress-bar jeg_module_788_13_6759274be244d">
                                                        <div class="progress-group default">
                                                            <div class="progress-skill-bar">
                                                                <div class="skill-bar-content"><span
                                                                        class="skill-title">Completed Project</span></div>
                                                                <div class="skill-bar">
                                                                    <div class="skill-track">

                                                                        <div class="number-percentage-wrapper">
                                                                            <span class="number-percentage"
                                                                                data-value="99"
                                                                                data-animation-duration="3500">99%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e23148a elementor-widget elementor-widget-jkit_progress_bar"
                                                data-id="e23148a" data-element_type="widget"
                                                data-widget_type="jkit_progress_bar.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-progress-bar jeg_module_788_14_6759274be2df5">
                                                        <div class="progress-group default">
                                                            <div class="progress-skill-bar">
                                                                <div class="skill-bar-content"><span
                                                                        class="skill-title">Design &amp;
                                                                        Installation</span></div>
                                                                <div class="skill-bar">
                                                                    <div class="skill-track">

                                                                        <div class="number-percentage-wrapper">
                                                                            <span class="number-percentage"
                                                                                data-value="92"
                                                                                data-animation-duration="3500">92%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4c8dd87 elementor-widget elementor-widget-jkit_progress_bar"
                                                data-id="4c8dd87" data-element_type="widget"
                                                data-widget_type="jkit_progress_bar.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-progress-bar jeg_module_788_15_6759274be3756">
                                                        <div class="progress-group default">
                                                            <div class="progress-skill-bar">
                                                                <div class="skill-bar-content"><span
                                                                        class="skill-title">Health Services</span></div>
                                                                <div class="skill-bar">
                                                                    <div class="skill-track">

                                                                        <div class="number-percentage-wrapper">
                                                                            <span class="number-percentage"
                                                                                data-value="89"
                                                                                data-animation-duration="3500">89%</span>
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
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1eb4f96"
                                        data-id="1eb4f96" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c4e5632 elementor-widget elementor-widget-jkit_progress_bar"
                                                data-id="c4e5632" data-element_type="widget"
                                                data-widget_type="jkit_progress_bar.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-progress-bar jeg_module_788_16_6759274be473f">
                                                        <div class="progress-group default">
                                                            <div class="progress-skill-bar">
                                                                <div class="skill-bar-content"><span
                                                                        class="skill-title">Consultation</span></div>
                                                                <div class="skill-bar">
                                                                    <div class="skill-track">

                                                                        <div class="number-percentage-wrapper">
                                                                            <span class="number-percentage"
                                                                                data-value="85"
                                                                                data-animation-duration="3500">85%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-20f6dbf elementor-widget elementor-widget-jkit_progress_bar"
                                                data-id="20f6dbf" data-element_type="widget"
                                                data-widget_type="jkit_progress_bar.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-progress-bar jeg_module_788_17_6759274be50a7">
                                                        <div class="progress-group default">
                                                            <div class="progress-skill-bar">
                                                                <div class="skill-bar-content"><span
                                                                        class="skill-title">Aquarium Supply</span></div>
                                                                <div class="skill-bar">
                                                                    <div class="skill-track">

                                                                        <div class="number-percentage-wrapper">
                                                                            <span class="number-percentage"
                                                                                data-value="95"
                                                                                data-animation-duration="3500">95%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d548206 elementor-widget elementor-widget-jkit_progress_bar"
                                                data-id="d548206" data-element_type="widget"
                                                data-widget_type="jkit_progress_bar.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-progress-bar jeg_module_788_18_6759274be59cf">
                                                        <div class="progress-group default">
                                                            <div class="progress-skill-bar">
                                                                <div class="skill-bar-content"><span
                                                                        class="skill-title">Professional Team</span></div>
                                                                <div class="skill-bar">
                                                                    <div class="skill-track">

                                                                        <div class="number-percentage-wrapper">
                                                                            <span class="number-percentage"
                                                                                data-value="80"
                                                                                data-animation-duration="3500">80%</span>
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
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-fd59dc1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="fd59dc1" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bbd9f52"
                                        data-id="bbd9f52" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2aa2a2d elementor-widget elementor-widget-jkit_heading"
                                                data-id="2aa2a2d" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_19_6759274be73cd">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">Sips Under The Sea</h2>
                                                        </div>
                                                        <h3 class="heading-section-subtitle  style-color">Sept 14, 2016
                                                        </h3>
                                                        <div class="heading-section-description">
                                                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do
                                                                eiusmod tempo incididunt ut labore ut labore et dolore
                                                                tempo....</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f71b6cc elementor-align-left elementor-widget elementor-widget-button"
                                                data-id="f71b6cc" data-element_type="widget"
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
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5bb3eb0"
                                        data-id="5bb3eb0" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a992740 elementor-widget elementor-widget-jkit_heading"
                                                data-id="a992740" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_20_6759274be9d26">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">Aqua Vino </h2>
                                                        </div>
                                                        <h3 class="heading-section-subtitle  style-color">19 Oct, 2019</h3>
                                                        <div class="heading-section-description">
                                                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do
                                                                eiusmod tempo incididunt ut labore ut labore et dolore
                                                                tempo....</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0ae709f elementor-align-left elementor-widget elementor-widget-button"
                                                data-id="0ae709f" data-element_type="widget"
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
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-45c7d7c"
                                        data-id="45c7d7c" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7040f87 elementor-widget elementor-widget-jkit_heading"
                                                data-id="7040f87" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_21_6759274bebe07">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">Atlanta Pride</h2>
                                                        </div>
                                                        <h3 class="heading-section-subtitle  style-color">27 Nov, 2020</h3>
                                                        <div class="heading-section-description">
                                                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do
                                                                eiusmod tempo incididunt ut labore ut labore et dolore
                                                                tempo....</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4b09e69 elementor-align-left elementor-widget elementor-widget-button"
                                                data-id="4b09e69" data-element_type="widget"
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
                </div>
            </section>




            {{-- section4 --}}


            <section class="elementor-section1 elementor-top-section " data-id="a42b3aa" data-element_type="section"
                style="margin-top: 15%;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementsor-column  elementor-element elementor-element-b2df78f" data-id="b2df78f"
                        data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_3_6759274bcfbc0">
                                <div class="elementor-element elementor-element-9716da2 elementor-widget elementor-widget-heading"
                                    data-id="9716da2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Certifications and
                                            Achievements</h2>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-6fb470e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    style="margin-left:5%;" data-id="6fb470e" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f8ebbbc"
                                            data-id="f8ebbbc" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">



                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-637382c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="637382c" data-element_type="section">
                                                    <div class="elementor-container ">
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-a1747e4"
                                                            data-id="a1747e4" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated"
                                                                style="display: flex; justify-content: center; align-items: center; height: 100%; width: 130px; gap: 20px;">
                                                                <div class="elementor-element elementor-element-4598af2 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="4598af2" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_21_675926d97936b">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award1.png') }}"
                                                                                            alt="Molidae"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-a1747e4"
                                                            data-id="a1747e4" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated"
                                                                style="display: flex; justify-content: center; align-items: center; height: 100%; width: 130px; gap: 20px;">
                                                                <div class="elementor-element elementor-element-4598af2 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="4598af2" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_21_675926d97936b">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award2.png') }}"
                                                                                            alt="Molidae"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-a1747e4"
                                                            data-id="a1747e4" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated"
                                                                style="display: flex; justify-content: center; align-items: center; height: 100%; width: 130px; gap: 20px;">
                                                                <div class="elementor-element elementor-element-4598af2 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="4598af2" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_21_675926d97936b">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award3.png') }}"
                                                                                            alt="Molidae"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-f041f22"
                                                            data-id="f041f22" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-c99936f jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="c99936f" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_22_675926d97b680">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award4.jpg') }}"
                                                                                            alt="Blow Fish"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-aed09d2"
                                                            data-id="aed09d2" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-a16ce98 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="a16ce98" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_23_675926d97dc24">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award5.png') }}"
                                                                                            alt="Coral"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-inner-column elementor-element elementor-element-c04a8f9"
                                                            data-id="c04a8f9" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated"
                                                                style="display: flex; justify-content: center; align-items: center; height: 100%; width: 130px;">
                                                                <div class="elementor-element elementor-element-5c70667 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="5c70667" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position-elementor-animation- jeg_module_20_24_675926d97f829">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award6.jpg') }}"
                                                                                            alt="Angler Fish">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-637382c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="637382c" data-element_type="section">
                                                    <div class="elementor-container ">
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-a1747e4"
                                                            data-id="a1747e4" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated"
                                                                style="display: flex; justify-content: center; align-items: center; height: 100%; width: 130px; gap: 20px;">
                                                                <div class="elementor-element elementor-element-4598af2 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="4598af2" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_21_675926d97936b">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award3.png') }}"
                                                                                            alt="Molidae"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-a1747e4"
                                                            data-id="a1747e4" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated"
                                                                style="display: flex; justify-content: center; align-items: center; height: 100%; width: 130px; gap: 20px;">
                                                                <div class="elementor-element elementor-element-4598af2 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="4598af2" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_21_675926d97936b">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award1.png') }}"
                                                                                            alt="Molidae"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-a1747e4"
                                                            data-id="a1747e4" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated"
                                                                style="display: flex; justify-content: center; align-items: center; height: 100%; width: 130px; gap: 20px;">
                                                                <div class="elementor-element elementor-element-4598af2 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="4598af2" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_21_675926d97936b">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award4.jpg') }}"
                                                                                            alt="Molidae"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-f041f22"
                                                            data-id="f041f22" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-c99936f jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="c99936f" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_22_675926d97b680">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award2.png') }}"
                                                                                            alt="Blow Fish"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-aed09d2"
                                                            data-id="aed09d2" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-a16ce98 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="a16ce98" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_20_23_675926d97dc24">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award6.jpg') }}"
                                                                                            alt="Coral"></div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-inner-column elementor-element elementor-element-c04a8f9"
                                                            data-id="c04a8f9" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated"
                                                                style="display: flex; justify-content: center; align-items: center; height: 100%; width: 130px;">
                                                                <div class="elementor-element elementor-element-5c70667 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                                    data-id="5c70667" data-element_type="widget"
                                                                    data-widget_type="jkit_icon_box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jeg-elementor-kit jkit-icon-box icon-position-elementor-animation- jeg_module_20_24_675926d97f829">
                                                                            <div class=" hover-from-left"
                                                                                style="margin:55px; width:120px;">
                                                                                <div
                                                                                    class="icon-box icon-box-header elementor-animation-">
                                                                                    <div class="icon style-color"><img
                                                                                            decoding="async"
                                                                                            src="{{ asset('AquaVist/wp-content/uploads/sites/129/2021/08/award5.png') }}"
                                                                                            alt="Angler Fish">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="icon-box icon-box-body">

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

                            </div>
                            <div style="text-align: center;  margin-left: 40%; margin-top: 3px; margin-bottom: 4%;">
                                <hr style="width: 250px; height: 4px; background-color: black; border: none;">
                            </div>
            </section>





            {{-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-acab34a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="acab34a" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d068b0e"
                        data-id="d068b0e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d3d05c3 elementor-widget elementor-widget-jkit_heading"
                                data-id="d3d05c3" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_22_6759274bef35f">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">Pricing &amp; Plan</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5b60994 elementor-widget elementor-widget-heading"
                                data-id="5b60994" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Our Pricing</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d92422a elementor-widget elementor-widget-text-editor"
                                data-id="d92422a" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit. Aenean com modo ligula eget
                                        dolor. Aenean massa Cumocis natoque pena tibus et magnis dis parturient montes
                                        nascetur ridiculus parturient montes.</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-56ac8d4 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
                                data-id="56ac8d4" data-element_type="widget" data-widget_type="jkit_button.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_23_6759274bf0a4e">
                                        <a href="#" class="jkit-button-wrapper">All Pricing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-f927894"
                        data-id="f927894" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-5837ba1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="5837ba1" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6523304"
                                        data-id="6523304" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a2d66ff elementor-widget elementor-widget-heading"
                                                data-id="a2d66ff" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Family</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-fade2a7 elementor-widget elementor-widget-jkit_heading"
                                                data-id="fade2a7" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_24_6759274bf2291">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">$60<span
                                                                    class="style-color"><span>/Visit</span></span></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2b15525 elementor-widget elementor-widget-jkit_button"
                                                data-id="2b15525" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_25_6759274bf2d31">
                                                        <a href="#" class="jkit-button-wrapper">Purchase Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8e593fa elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="8e593fa" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-89a9a5f elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="89a9a5f" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text">4 Family Members</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text">Photos With
                                                                Fishes</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text">Free Wi-Fi </span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text">Access Luxury
                                                                Aquarium</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text"> Insurance Goods</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9594ef4 elementor-widget elementor-widget-text-editor"
                                                data-id="9594ef4" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>* Including tax &amp; aquavist insurance.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b37e2c6"
                                        data-id="b37e2c6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b7886a6 elementor-widget elementor-widget-heading"
                                                data-id="b7886a6" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Personal
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-59ba68b elementor-widget elementor-widget-jkit_heading"
                                                data-id="59ba68b" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_26_6759274c01b8a">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">$20<span
                                                                    class="style-color"><span>/Visit</span></span></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6b1e506 elementor-widget elementor-widget-jkit_button"
                                                data-id="6b1e506" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_27_6759274c026e2">
                                                        <a href="#" class="jkit-button-wrapper">Purchase Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9d4b82e elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="9d4b82e" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7c8e637 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="7c8e637" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text">Personal Members</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text">Photos With
                                                                Fishes</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text">Free Wi-Fi </span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text">1x Lunch</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-angle-double-right-solid"></i> </span>
                                                            <span class="elementor-icon-list-text"> Insurance Goods</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f08dd7e elementor-widget elementor-widget-text-editor"
                                                data-id="f08dd7e" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>* Including tax &amp; aquavist insurance.</p>
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




            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d7c9f3f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="d7c9f3f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1f9895b"
                        data-id="1f9895b" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-75395d7 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="75395d7" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f258173"
                                        data-id="f258173" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-element elementor-element-ab224f2 elementor-widget elementor-widget-jkit_heading"
                                                data-id="ab224f2" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_28_6759274c065ba">
                                                        <div class="heading-section-title  display-inline-block">

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-759f519 elementor-widget elementor-widget-heading"
                                                data-id="759f519" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Our
                                                        facilities
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-27e4978 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-text-editor"
                                                data-id="27e4978" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                                        tellus, luctus nec ullamcorper mattis, pulvinar dapibus.</p>
                                                    <p>Duis placerat urna in ex pulvinar aliquet. Duis tincidunt augue
                                                        lorem, non suscipit nulla vehicula et. Donec facilisis ultricies
                                                        porta. Phasellus tortor libero, finibus sit amet ornare eleifend,
                                                        vehicula quis turpis. Cras id auctor tellus. Vivamus at turpis
                                                        purus.</p>
                                                    <p>Sed ac ex efficitur, malesuada diam sed, semper dui. Vivamus
                                                        pulvinar, ex tincidunt tincidunt fermentum, elit odio laoreet
                                                        tellus, sit amet consequat mi elit eu arcu. Nunc efficitur ligula at
                                                        nunc lacinia, et aliquet enim cursus. Suspendisse potenti. Ut
                                                        viverra aliquet dui, eget viverra.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1c514de elementor-widget elementor-widget-jkit_heading"
                                                data-id="1c514de" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_29_6759274c08082">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">17 August 2021</h2>
                                                        </div>
                                                        <div class="heading-section-description">
                                                            <p>Independence Event</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f383a82 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
                                                data-id="f383a82" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_30_6759274c08e74">
                                                        <a href="#" class="jkit-button-wrapper">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-01a9c3c"
                        data-id="01a9c3c" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>


                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-1ccc153 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="1ccc153" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ebe6601"
                                        data-id="ebe6601" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-94a40ac elementor-widget elementor-widget-spacer"
                                                data-id="94a40ac" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-301fce9"
                                        data-id="301fce9" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-83c4b24 elementor-widget elementor-widget-jkit_heading"
                                                data-id="83c4b24" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_34_6759274c104fa">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">Fun Aquarium</h2>
                                                        </div>
                                                        <div class="heading-section-description">
                                                            <p>26 Sept, 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7ee18b9 elementor-widget elementor-widget-heading"
                                                data-id="7ee18b9" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">$27/Ticket
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bab22a8"
                                        data-id="bab22a8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-45ee414 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
                                                data-id="45ee414" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_35_6759274c11c3f">
                                                        <a href="#" class="jkit-button-wrapper">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>




                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-9928ac5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9928ac5" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8c92d9a"
                                        data-id="8c92d9a" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-bc5df38 elementor-widget elementor-widget-spacer"
                                                data-id="bc5df38" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fe367bd"
                                        data-id="fe367bd" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b6c77f8 elementor-widget elementor-widget-jkit_heading"
                                                data-id="b6c77f8" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_32_6759274c0c9de">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">Pacific Ocean</h2>
                                                        </div>
                                                        <div class="heading-section-description">
                                                            <p>29 Aug, 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6d1c455 elementor-widget elementor-widget-heading"
                                                data-id="6d1c455" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">$32/Ticket
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1da238f"
                                        data-id="1da238f" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1ccedc6 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
                                                data-id="1ccedc6" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_33_6759274c0e248">
                                                        <a href="#" class="jkit-button-wrapper">Sold Out!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-1ccc153 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="1ccc153" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ebe6601"
                                        data-id="ebe6601" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-94a40ac elementor-widget elementor-widget-spacer"
                                                data-id="94a40ac" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-301fce9"
                                        data-id="301fce9" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-83c4b24 elementor-widget elementor-widget-jkit_heading"
                                                data-id="83c4b24" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_34_6759274c104fa">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">Fun Aquarium</h2>
                                                        </div>
                                                        <div class="heading-section-description">
                                                            <p>26 Sept, 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7ee18b9 elementor-widget elementor-widget-heading"
                                                data-id="7ee18b9" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">$27/Ticket
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bab22a8"
                                        data-id="bab22a8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-45ee414 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
                                                data-id="45ee414" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_35_6759274c11c3f">
                                                        <a href="#" class="jkit-button-wrapper">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-9ff0f7b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9ff0f7b" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6b15ca2"
                                        data-id="6b15ca2" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5fc50ad elementor-widget elementor-widget-spacer"
                                                data-id="5fc50ad" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b94f531"
                                        data-id="b94f531" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-0ee6afd elementor-widget elementor-widget-jkit_heading"
                                                data-id="0ee6afd" data-element_type="widget"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_36_6759274c140a8">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">Water Splash</h2>
                                                        </div>
                                                        <div class="heading-section-description">
                                                            <p>30 Oct, 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2590392 elementor-widget elementor-widget-heading"
                                                data-id="2590392" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">$35/Ticket
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6be20e8"
                                        data-id="6be20e8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dbe8a08 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
                                                data-id="dbe8a08" data-element_type="widget"
                                                data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_788_37_6759274c155c6">
                                                        <a href="#" class="jkit-button-wrapper">Book Now</a>
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
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-68f1c4b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="68f1c4b" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e27a5a6"
                        data-id="e27a5a6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-62496ce elementor-widget elementor-widget-jkit_heading"
                                data-id="62496ce" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_788_38_6759274c17298">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">Client Inquries</h2>
                                        </div>
                                        <div class="heading-section-separator">
                                            <div class="separator-wrapper style-solid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-c754fe0 elementor-widget elementor-widget-heading"
                                data-id="c754fe0" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Related Questions</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4003ba2 elementor-widget elementor-widget-text-editor"
                                data-id="4003ba2" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3df97d9 elementor-widget elementor-widget-jkit_accordion"
                                data-id="3df97d9" data-element_type="widget"
                                data-widget_type="jkit_accordion.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-accordion style-default jeg_module_788_39_6759274c1aabd">
                                        <div class="card-wrapper expand">
                                            <div class="card-header">
                                                <a href="#expand-75c9e32" class="card-header-button"
                                                    aria-expanded="false" data-target="#expand-75c9e32"
                                                    aria-controls="expand-75c9e32">
                                                    <div class="left-icon-group">
                                                        <div class="normal-icon"><i aria-hidden="true"
                                                                class="jki jki-plus-light"></i></div>
                                                        <div class="active-icon"><i aria-hidden="true"
                                                                class="jki jki-minus-light"></i></div>
                                                    </div><span class="title">What are your opening hours?</span>
                                                </a>
                                            </div>
                                            <div class="card-expand" id="expand-75c9e32" style="display:block">
                                                <div class="card-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-wrapper ">
                                            <div class="card-header">
                                                <a href="#expand-2ce8f08" class="card-header-button"
                                                    aria-expanded="false" data-target="#expand-2ce8f08"
                                                    aria-controls="expand-2ce8f08">
                                                    <div class="left-icon-group">
                                                        <div class="normal-icon"><i aria-hidden="true"
                                                                class="jki jki-plus-light"></i></div>
                                                        <div class="active-icon"><i aria-hidden="true"
                                                                class="jki jki-minus-light"></i></div>
                                                    </div><span class="title">Can I purchase ticket online?</span>
                                                </a>
                                            </div>
                                            <div class="card-expand" id="expand-2ce8f08" style="display:none">
                                                <div class="card-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-wrapper ">
                                            <div class="card-header">
                                                <a href="#expand-cf689ee" class="card-header-button"
                                                    aria-expanded="false" data-target="#expand-cf689ee"
                                                    aria-controls="expand-cf689ee">
                                                    <div class="left-icon-group">
                                                        <div class="normal-icon"><i aria-hidden="true"
                                                                class="jki jki-plus-light"></i></div>
                                                        <div class="active-icon"><i aria-hidden="true"
                                                                class="jki jki-minus-light"></i></div>
                                                    </div><span class="title">Why do price in shop sometimes
                                                        change?</span>
                                                </a>
                                            </div>
                                            <div class="card-expand" id="expand-cf689ee" style="display:none">
                                                <div class="card-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dd70b34 elementor-hidden-tablet elementor-hidden-phone"
                        data-id="dd70b34" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e62b964 elementor-widget elementor-widget-spacer"
                                data-id="e62b964" data-element_type="widget" data-widget_type="spacer.default">
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
                                            <div class="jeg-elementor-kit jkit-gallery layout-overlay jeg_module_788_40_6759274c21325"
                                                data-grid="masonry" data-id="jeg_module_788_40_6759274c21325"
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
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_788_40_6759274c21325\&quot;
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
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_788_40_6759274c21325\&quot;
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
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_788_40_6759274c21325\&quot;
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
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_788_40_6759274c21325\&quot;
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
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_788_40_6759274c21325\&quot;
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
                                                data-elementor-lightbox-slideshow=\&quot;jkit_gallery_lightbox_jeg_module_788_40_6759274c21325\&quot;
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
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_788_40_6759274c21325"><span
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
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_788_40_6759274c21325"><span
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
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_788_40_6759274c21325"><span
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
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_788_40_6759274c21325"><span
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
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_788_40_6759274c21325"><span
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
                                                                            data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_788_40_6759274c21325"><span
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
                                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_41_6759274c264fa">
                                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                                    <div
                                                                        class="icon-box icon-box-header elementor-animation-">
                                                                        <div class="icon style-color"><i
                                                                                aria-hidden="true"
                                                                                class="fas fa-map-marker-alt"></i></div>
                                                                    </div>
                                                                    <div class="icon-box icon-box-body">
                                                                        <h2 class="title">Location</h2>
                                                                        <p class="icon-box-description">Legian Atkins
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
                                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_42_6759274c27c8e">
                                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                                    <div
                                                                        class="icon-box icon-box-header elementor-animation-">
                                                                        <div class="icon style-color"><i
                                                                                aria-hidden="true"
                                                                                class="fas fa-phone-alt"></i></div>
                                                                    </div>
                                                                    <div class="icon-box icon-box-body">
                                                                        <h2 class="title">Phone</h2>
                                                                        <p class="icon-box-description">+62-202-555-0133
                                                                        </p>
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
                                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_43_6759274c292f8">
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
                                                                class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_788_44_6759274c2a795">
                                                                <div class="jkit-icon-box-wrapper hover-from-left">
                                                                    <div
                                                                        class="icon-box icon-box-header elementor-animation-">
                                                                        <div class="icon style-color"><i
                                                                                aria-hidden="true"
                                                                                class="fas fa-clock"></i></div>
                                                                    </div>
                                                                    <div class="icon-box icon-box-body">
                                                                        <h2 class="title">Opening Hours</h2>
                                                                        <p class="icon-box-description">Everyday 09:00 AM
                                                                            - 18:00 PM</p>
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
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
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
                                                                        <i class="jki jki-facebook-light"></i> </a>
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
                                                                        <i class="jki jki-instagram-1-light"></i> </a>
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
                                                                                class="jki jki-minus-light"></i> </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Support</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i> </span>
                                                                        <span class="elementor-icon-list-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i> </span>
                                                                        <span class="elementor-icon-list-text">Privacy
                                                                            Policy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i> </span>
                                                                        <span class="elementor-icon-list-text">Term &
                                                                            Condition</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i> </span>
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
                                                            <h6 class="elementor-heading-title elementor-size-default">Get
                                                                To Know</h6>
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
                                                                                class="jki jki-minus-light"></i> </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Maintenance</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i> </span>
                                                                        <span class="elementor-icon-list-text">Aquarium
                                                                            Design</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i> </span>
                                                                        <span class="elementor-icon-list-text">Cleaning
                                                                            Services</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i> </span>
                                                                        <span class="elementor-icon-list-text">Aquarium
                                                                            Supplies</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="jki jki-minus-light"></i> </span>
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
                                                            <p>Lorem ipsum dolor sit amet consectetuer adipis arcing elit.
                                                                Aenean commodo ligula eget commodo ligula eget..</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-bf1a0da elementor-widget elementor-widget-jkit_mailchimp"
                                                        data-id="bf1a0da" data-element_type="widget"
                                                        data-widget_type="jkit_mailchimp.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="jeg-elementor-kit jkit-mailchimp style-inline jeg_module_788_45_6759274c33779">
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
