<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from templatekit.jegtheme.com/aquavist/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2024 07:34:56 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="../xmlrpc.html" />
    <title>Blog &#8211; Aquavist</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="Aquavist &raquo; Feed" href="../feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Aquavist &raquo; Comments Feed"
        href="../comments/feed/index.html" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/templatekit.jegtheme.com\/aquavist\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='jkit-elements-main-css'
        href='{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/assets/css/elements/main61da.css?ver=2.6.2 ') }}'
        media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href= '{{ asset('AquaVist/wp-includes/css/dist/block-library/style.minaec2.css?ver=6.4.1 ') }}'
        media='all' />
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='allow-webp-image-css'
        href= '{{ asset('AquaVist/wp-content/plugins/allow-webp-image/public/css/allow-webp-image-publicf269.css?ver=1.0.1 ') }}'
        media='all' />
    <link rel='stylesheet' id='template-kit-export-css'
        href= '{{ asset('AquaVist/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min365c.css?ver=1.0.21 ') }}'
        media='all' />
    <link rel='stylesheet' id='hfe-style-css'
        href= '{{ asset('AquaVist/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor1f62.css?ver=1.6.13 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href=  '{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href=  '{{ asset('AquaVist/wp-content/plugins/elementor/assets/css/frontend.min8864.css?ver=3.17.3 ') }}'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-4-css'
        href='{{ asset('AquaVist/wp-content/uploads/sites/129/elementor/css/post-4cd8a.css?ver=1700563263 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href=  '{{ asset('AquaVist/wp-content/uploads/sites/129/elementor/css/globalcd8a.css?ver=1700563263 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-1344-css'
        href=  '{{ asset('AquaVist/wp-content/uploads/sites/129/elementor/css/post-13443ac8.css?ver=1700753931 ') }}'
        media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href=   '{{ asset('AquaVist/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend1f62.css?ver=1.6.13 ') }}'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href= '{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min8864.css?ver=3.17.3 ') }}'
        media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min8864.css?ver=3.17.3 ') }}'media='all' />
    <link rel='stylesheet' id='elementor-post-761-css'
        href= '{{ asset('AquaVist/wp-content/uploads/sites/129/elementor/css/post-7610d5b.css?ver=1700563264 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-772-css'
        href=  '{{ asset('AquaVist/wp-content/uploads/sites/129/elementor/css/post-7720d5b.css?ver=1700563264 ') }}'
        media='all' />
    <link rel='stylesheet' id='text-editor-style-css'
        href=   '{{ asset('AquaVist/wp-content/plugins/metform/public/assets/css/text-editor9e95.css?ver=3.8.0 ') }}'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href= '{{ asset('AquaVist/wp-content/themes/hello-elementor/style.minc141.css?ver=2.6.1 ') }}'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='{{ asset('AquaVist/wp-content/themes/hello-elementor/theme.minc141.css?ver=2.6.1 ') }}' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Exo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.1'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-jkiticon-css'
        href= '{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon61da.css?ver=2.6.2 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href=  '{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3 ') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3 ') }}'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='{{ asset('AquaVist/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1 ') }}' id="jquery-core-js"></script>
    <script src='{{ asset('AquaVist/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1 ') }}'
        id="jquery-migrate-js"></script>
    <script
        src='{{ asset('AquaVist/wp-content/plugins/allow-webp-image/public/js/allow-webp-image-publicf269.js?ver=1.0.1 ') }}'
        id="allow-webp-image-js"></script>
    <script
        src='{{ asset('AquaVist/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min365c.js?ver=1.0.21 ') }}'
        id="template-kit-export-js"></script>
    <script
        src='{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min8864.js?ver=3.17.3 ') }}'
        id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href= '{{ asset('AquaVist/wp-json/index.html ') }}' />
    <link rel="alternate" type="application/json" href='{{ asset('AquaVist/wp-json/wp/v2/pages/1344.json ') }}' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
    <meta name="generator" content="WordPress 6.4.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='../indexc918.html?p=1344' />
    <link rel="alternate" type="application/json+oembed"
        href='{{ asset('AquaVist/wp-json/oembed/1.0/embed2649.json?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Faquavist%2Fblog%2F ') }}' />
    <link rel="alternate" type="text/xml+oembed"
        href='{{ asset('AquaVist/wp-json/oembed/1.0/embedab71?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Faquavist%2Fblog%2F&amp;format=xml ') }}' />
    <meta name="generator"
        content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">

    {{-- Bubble Cursor CSS Style --}}
    {{-- <style>
        .info {
            position: absolute;
        }
    </style> --}}
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-1344 ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-4 elementor-page elementor-page-1344">

    <main>
        @yield('content')
    </main>

    {{-- Bubble Cursore JS File --}}
    {{-- <script>
        (function bubblesCursor() {
            var width = window.innerWidth;
            var height = window.innerHeight;
            var cursor = {
                x: width / 2,
                y: height / 2
            };
            var lastCursor = {
                x: width / 2,
                y: height / 2
            };
            var particles = [];

            function init() {
                bindEvents();
                loop();
            }

            // Bind events
            function bindEvents() {
                document.addEventListener("mousemove", onMouseMove);
                window.addEventListener("resize", onWindowResize);
            }

            function onWindowResize() {
                width = window.innerWidth;
                height = window.innerHeight;
            }

            function onMouseMove(e) {
                cursor.x = e.clientX + (window.scrollX || document.documentElement.scrollLeft);
                cursor.y = e.clientY + (window.scrollY || document.documentElement.scrollTop);

                if (lastCursor.x > cursor.x + 10 || lastCursor.x < cursor.x - 10) {
                    lastCursor.x = e.clientX;
                    lastCursor.y = e.clientY;
                    addParticle(cursor.x, cursor.y);
                }
            }

            function addParticle(x, y) {
                var particle = new Particle();
                particle.init(x, y);
                particles.push(particle);
            }

            function updateParticles() {
                for (var i = 0; i < particles.length; i++) {
                    particles[i].update();
                }

                for (var i = particles.length - 1; i >= 0; i--) {
                    if (particles[i].lifeSpan < 0) {
                        particles[i].die();
                        particles.splice(i, 1);
                    }
                }
            }

            function loop() {
                requestAnimationFrame(loop);
                updateParticles();
            }

            function Particle() {
                this.lifeSpan = 300; // ms
                this.initialStyles = {
                    position: "absolute",
                    display: "block",
                    pointerEvents: "none",
                    zIndex: "10000000",
                    width: "80px", // Increased size
                    height: "80px",
                    willChange: "transform",
                    borderRadius: "50%", // Circular
                    background: "radial-gradient(circle, rgba(29, 203, 228,0) 0%, rgba(29, 203, 228, 0.5) 100%)",
                    opacity: 0.7, // Transparent effect
                };

                this.init = function(x, y) {
                    this.velocity = {
                        x: (Math.random() < 0.5 ? -1 : 1) * (Math.random() / 10),
                        y: -0.4 + Math.random() * -0.8,
                    };

                    this.position = {
                        x: x - 40,
                        y: y - 40
                    }; // Centering the bubble

                    this.element = document.createElement("span");
                    applyProperties(this.element, this.initialStyles);
                    this.update();

                    document.body.appendChild(this.element);
                };

                this.update = function() {
                    this.position.x += this.velocity.x;
                    this.position.y += this.velocity.y;

                    this.velocity.x += (Math.random() < 0.5 ? -1 : 1) * 2 / 75;
                    this.velocity.y -= Math.random() / 600;
                    this.lifeSpan--;

                    this.element.style.transform =
                        "translate3d(" +
                        this.position.x +
                        "px, " +
                        this.position.y +
                        "px, 0) scale(" +
                        (0.5 + (300 - this.lifeSpan) / 300) +
                        ")";
                };

                this.die = function() {
                    if (this.element && this.element.parentNode) {
                        this.element.parentNode.removeChild(this.element);
                    }
                };
            }

            /**
             * Utility to apply CSS properties
             */
            function applyProperties(target, properties) {
                for (var key in properties) {
                    target.style[key] = properties[key];
                }
            }

            init();
        })();
    </script> --}}

    <link rel='stylesheet' id='jeg-dynamic-style-css'
        href='{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles6f3e.css?ver=1.3.0 ') }}'
        media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/animations/animations.min8864.css?ver=3.17.3 ') }}'
        media='all' />
    <script src='{{ asset('AquaVist/wp-content/plugins/elementor/assets/js/webpack.runtime.min8864.js?ver=3.17.3 ') }}'
        id="elementor-webpack-runtime-js"></script>
    <script src='{{ asset('AquaVist/wp-content/plugins/elementor/assets/js/frontend-modules.min8864.js?ver=3.17.3 ') }}'
        id="elementor-frontend-modules-js"></script>
    <script src='{{ asset('AquaVist/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2 ') }}'
        id="elementor-waypoints-js"></script>
    <script src='{{ asset('AquaVist/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2 ') }}' id="jquery-ui-core-js">
    </script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.17.3",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "additional_custom_breakpoints": true,
                "landing-pages": true
            },
            "urls": {
                "assets": "https:\/\/templatekit.jegtheme.com\/aquavist\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 1344,
                "title": "Blog%20%E2%80%93%20Aquavist",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src='{{ asset('AquaVist/wp-content/plugins/elementor/assets/js/frontend.min8864.js?ver=3.17.3 ') }}'
        id="elementor-frontend-js"></script>
    <script id="elementor-frontend-js-after">
        var jkit_ajax_url = "../indexe2f2.html?jkit-ajax-request=jkit_elements",
            jkit_nonce = "04d38ddabe";
    </script>
    <script
        src='{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element61da.js?ver=2.6.2 ') }}'
        id="jkit-sticky-element-js"></script>
    <script
        src='{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/assets/js/elements/nav-menu61da.js?ver=2.6.2 ') }}'
        id="jkit-element-navmenu-js"></script>
    <script id="jkit-element-pagination-js-extra">
        var jkit_element_pagination_option = {
            "element_prefix": "jkit_element_ajax_"
        };
    </script>
    <script
        src='{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/assets/js/elements/post-pagination61da.js?ver=2.6.2 ') }}'
        id="jkit-element-pagination-js"></script>
    <script src='{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/assets/js/elements/gallery61da.js?ver=2.6.2 ') }}'
        id="jkit-element-gallery-js"></script>
    <script src='{{ asset('AquaVist/wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0 ') }}' id="imagesloaded-js"></script>
    <script
        src='{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/assets/js/isotope/isotope.min7c45.js?ver=3.0.6 ') }}'
        id="isotope-js"></script>
    <script
        src='{{ asset('AquaVist/wp-content/plugins/jeg-elementor-kit/assets/js/elements/mailchimp61da.js?ver=2.6.2 ') }}'
        id="jkit-element-mailchimp-js"></script>
</body>

<!-- Mirrored from templatekit.jegtheme.com/aquavist/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2024 07:35:01 GMT -->

</html>