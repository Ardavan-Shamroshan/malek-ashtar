(() => {
    function e(o) {
        return e = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        }, e(o)
    }

    $((function () {
        "use strict";
        $("#global-loader").fadeOut("slow"), window.matchMedia("(min-width: 992px)").matches && ($(".main-navbar .active").removeClass("show"), $(".main-header-menu .active").removeClass("show")), $(".main-header .dropdown > a").on("click", (function (e) {
            e.preventDefault(), $(this).parent().toggleClass("show"), $(this).parent().siblings().removeClass("show"), $(this).find(".drop-flag").removeClass("show")
        })), $(".country-flag1").on("click", (function (e) {
            $(this).parent().toggleClass("show"), $(".main-header .dropdown > a").parent().siblings().removeClass("show")
        })), $(document).on("click", ".full-screen", (function () {
            $("html").addClass("fullscreen-button"), void 0 !== document.fullScreenElement && null === document.fullScreenElement || void 0 !== document.msFullscreenElement && null === document.msFullscreenElement || void 0 !== document.mozFullScreen && !document.mozFullScreen || void 0 !== document.webkitIsFullScreen && !document.webkitIsFullScreen ? document.documentElement.requestFullScreen ? document.documentElement.requestFullScreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullScreen ? document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT) : document.documentElement.msRequestFullscreen && document.documentElement.msRequestFullscreen() : ($("html").removeClass("fullscreen-button"), document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen ? document.webkitCancelFullScreen() : document.msExitFullscreen && document.msExitFullscreen())
        }));

        function o() {
            var e = $('.main-header form[role="search"].active');
            e.find("input").val(""), e.removeClass("active")
        }

        // $(".rating-stars").ratingStars({
        //     selectors: {
        //         starsSelector: ".rating-stars",
        //         starSelector: ".rating-star",
        //         starActiveClass: "is--active",
        //         starHoverClass: "is--hover",
        //         starNoHoverClass: "is--no-hover",
        //         targetFormElementSelector: ".rating-value"
        //     }
        // }),
        $(".cover-image").each((function () {
            var o = $(this).attr("data-bs-image-src");
            "undefined" !== e(o) && !1 !== o && $(this).css("background", "url(" + o + ") center center")
        })), $(".toast").toast(), $(window).on("scroll", (function (e) {
            $(window).scrollTop() >= 66 ? $("main-header").addClass("fixed-header") : $(".main-header").removeClass("fixed-header")
        })), $('body, .main-header form[role="search"] button[type="reset"]').on("click keyup", (function (e) {
            (27 == e.which && $('.main-header form[role="search"]').hasClass("active") || "reset" == $(e.currentTarget).attr("type")) && o()
        })), $(document).on("click", '.main-header form[role="search"]:not(.active) button[type="submit"]', (function (e) {
            e.preventDefault();
            var o = $(this).closest("form"), t = o.find("input");
            o.addClass("active"), t.focus()
        })), $(document).on("click", '.main-header form[role="search"].active button[type="submit"]', (function (e) {
            e.preventDefault();
            var t = $(this).closest("form").find("input");
            $("#showSearchTerm").text(t.val()), o()
        })), $(".main-navbar .with-sub").on("click", (function (e) {
            e.preventDefault(), $(this).parent().toggleClass("show"), $(this).parent().siblings().removeClass("show")
        })), $(".dropdown-menu .main-header-arrow").on("click", (function (e) {
            e.preventDefault(), $(this).closest(".dropdown").removeClass("show")
        })), $("#mainNavShow, #azNavbarShow").on("click", (function (e) {
            e.preventDefault(), $("body").addClass("main-navbar-show")
        })), $("#mainContentLeftShow").on("click touch", (function (e) {
            e.preventDefault(), $("body").addClass("main-content-left-show")
        })), $("#mainContentLeftHide").on("click touch", (function (e) {
            e.preventDefault(), $("body").removeClass("main-content-left-show")
        })), $("#mainContentBodyHide").on("click touch", (function (e) {
            e.preventDefault(), $("body").removeClass("main-content-body-show")
        })), $("body").append('<div class="main-navbar-backdrop"></div>'), $(".main-navbar-backdrop").on("click touchstart", (function () {
            $("body").removeClass("main-navbar-show")
        })), $(document).on("click touchstart", (function (e) {
            (e.stopPropagation(), $(e.target).closest(".main-header .dropdown").length || $(".main-header .dropdown").removeClass("show"), window.matchMedia("(min-width: 992px)").matches) ? ($(e.target).closest(".main-navbar .nav-item").length || $(".main-navbar .show").removeClass("show"), $(e.target).closest(".main-header-menu .nav-item").length || $(".main-header-menu .show").removeClass("show"), $(e.target).hasClass("main-menu-sub-mega") && $(".main-header-menu .show").removeClass("show")) : $(e.target).closest("#mainMenuShow").length || $(e.target).closest(".main-header-menu").length || $("body").removeClass("main-header-menu-show")
        })), $("#mainMenuShow").on("click", (function (e) {
            e.preventDefault(), $("body").toggleClass("main-header-menu-show")
        })), $(".main-header-menu .with-sub").on("click", (function (e) {
            e.preventDefault(), $(this).parent().toggleClass("show"), $(this).parent().siblings().removeClass("show")
        })), $(".main-header-menu-header .close").on("click", (function (e) {
            e.preventDefault(), $("body").removeClass("main-header-menu-show")
        })), $(".card-header-right .card-option .fe fe-chevron-left").on("click", (function () {
            var e = $(this);
            e.hasClass("icofont-simple-right") ? e.parents(".card-option").animate({width: "35px"}) : e.parents(".card-option").animate({width: "180px"}), $(this).toggleClass("fe fe-chevron-right").fadeIn("slow")
        }));
        [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function (e) {
            return new bootstrap.Tooltip(e)
        })), [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map((function (e) {
            return new bootstrap.Popover(e)
        }));
        eva.replace(), $(document).ready((function () {
            $(".horizontalMenu-list li a").each((function () {
                var e = window.location.href.split(/[?#]/)[0];
                this.href == e && ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().prev().addClass("active"), $(this).parent().parent().prev().click())
            }))
        })), $(document).ready((function () {
            $(".horizontalMenu-list li a").each((function () {
                var e = window.location.href.split(/[?#]/)[0];
                this.href == e && ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().prev().addClass("active"), $(this).parent().parent().prev().click())
            })), $(".horizontal-megamenu li a").each((function () {
                var e = window.location.href.split(/[?#]/)[0];
                this.href == e && ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().parent().parent().parent().parent().parent().prev().addClass("active"), $(this).parent().parent().prev().click())
            })), $(".horizontalMenu-list .sub-menu .sub-menu li a").each((function () {
                var e = window.location.href.split(/[?#]/)[0];
                this.href == e && ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().parent().parent().prev().addClass("active"), $(this).parent().parent().prev().click())
            }))
        }));
        var t = $("#back-to-top");
        $(window).scroll((function () {
            $(window).scrollTop() > 300 ? $("#back-to-top").fadeIn() : $("#back-to-top").fadeOut()
        })), t.on("click", (function (e) {
            e.preventDefault(), $("html, body").animate({scrollTop: 0}, "300")
        })), $(document).on("click", "#myonoffswitch7", (function () {
            this.checked ? ($("body").addClass("body-default"), $("body").removeClass("body-style1"), localStorage.setItem("body-default", "True")) : ($("body").removeClass("body-default"), localStorage.setItem("body-default", "false"))
        })), $(document).on("click", "#myonoffswitch6", (function () {
            this.checked ? ($("body").addClass("body-style1"), $("body").removeClass("body-default"), localStorage.setItem("body-style1", "True")) : ($("body").removeClass("body-style1"), localStorage.setItem("body-style1", "false"))
        })), $(document).on("click", "#myonoffswitch2", (function () {
            this.checked ? ($("body").addClass("horizontal-light"), $("body").removeClass("horizontal-color"), $("body").removeClass("horizontal-dark"), $("body").removeClass("horizontal-gradient"), localStorage.setItem("horizontal-light", "True")) : ($("body").removeClass("horizontal-light"), localStorage.setItem("horizontal-light", "false"))
        })), $(document).on("click", "#myonoffswitch3", (function () {
            this.checked ? ($("body").addClass("horizontal-color"), $("body").removeClass("horizontal-light"), $("body").removeClass("horizontal-dark"), $("body").removeClass("horizontal-gradient"), localStorage.setItem("horizontal-color", "True")) : ($("body").removeClass("horizontal-color"), localStorage.setItem("horizontal-color", "false"))
        })), $(document).on("click", "#myonoffswitch4", (function () {
            this.checked ? ($("body").addClass("horizontal-dark"), $("body").removeClass("horizontal-color"), $("body").removeClass("horizontal-light"), $("body").removeClass("horizontal-gradient"), localStorage.setItem("horizontal-dark", "True")) : ($("body").removeClass("horizontal-dark"), localStorage.setItem("horizontal-dark", "false"))
        })), $(document).on("click", "#myonoffswitch5", (function () {
            this.checked ? ($("body").addClass("horizontal-gradient"), $("body").removeClass("horizontal-color"), $("body").removeClass("horizontal-light"), $("body").removeClass("horizontal-dark"), localStorage.setItem("horizontal-gradient", "True")) : ($("body").removeClass("horizontal-gradient"), localStorage.setItem("horizontal-gradient", "false"))
        })), $(document).on("click", "#myonoffswitch8", (function () {
            this.checked ? ($("body").addClass("reset"), $("body").removeClass("horizontal-color"), $("body").removeClass("horizontal-light"), $("body").removeClass("horizontal-dark"), $("body").removeClass("horizontal-gradient"), $("body").removeClass("themestyle"), localStorage.setItem("reset", "True")) : ($("body").removeClass("reset"), localStorage.setItem("reset", "false"))
        })), $(document).on("click", "#myonoffswitch9", (function () {
            this.checked ? ($("body").addClass("leftmenu-light"), $("body").removeClass("leftmenu-color"), $("body").removeClass("leftmenu-dark"), $("body").removeClass("leftmenu-gradient"), localStorage.setItem("leftmenu-light", "True")) : ($("body").removeClass("leftmenu-light"), localStorage.setItem("leftmenu-light", "false"))
        })), $(document).on("click", "#myonoffswitch10", (function () {
            this.checked ? ($("body").addClass("leftmenu-color"), $("body").removeClass("leftmenu-light"), $("body").removeClass("leftmenu-dark"), $("body").removeClass("leftmenu-gradient"), localStorage.setItem("leftmenu-color", "True")) : ($("body").removeClass("leftmenu-color"), localStorage.setItem("leftmenu-color", "false"))
        })), $(document).on("click", "#myonoffswitch11", (function () {
            this.checked ? ($("body").addClass("leftmenu-dark"), $("body").removeClass("leftmenu-color"), $("body").removeClass("leftmenu-light"), $("body").removeClass("leftmenu-gradient"), localStorage.setItem("leftmenu-dark", "True")) : ($("body").removeClass("leftmenu-dark"), localStorage.setItem("leftmenu-dark", "false"))
        })), $(document).on("click", "#myonoffswitch12", (function () {
            this.checked ? ($("body").addClass("leftmenu-gradient"), $("body").removeClass("leftmenu-color"), $("body").removeClass("leftmenu-light"), $("body").removeClass("leftmenu-dark"), localStorage.setItem("leftmenu-gradient", "True")) : ($("body").removeClass("leftmenu-gradient"), localStorage.setItem("leftmenu-gradient", "false"))
        })), $(document).on("click", "#myonoffswitch13", (function () {
            this.checked ? ($("body").addClass("reset"), $("body").removeClass("leftmenu-color"), $("body").removeClass("leftmenu-light"), $("body").removeClass("leftmenu-dark"), $("body").removeClass("leftmenu-gradient"), $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").removeClass("body-style1"), localStorage.setItem("reset", "True")) : ($("body").removeClass("reset"), localStorage.setItem("reset", "false"))
        })), $(document).on("click", "#myonoffswitch16", (function () {
            this.checked ? ($("body").addClass("default-leftmenu"), $("body").removeClass("style1-leftmenu"), localStorage.setItem("default-leftmenu", "True")) : ($("body").removeClass("default-leftmenu"), localStorage.setItem("default-leftmenu", "false"))
        })), $(document).on("click", "#myonoffswitch17", (function () {
            this.checked ? ($("body").addClass("style1-leftmenu"), $("body").removeClass("default-leftmenu"), localStorage.setItem("default-leftmenu", "True")) : ($("body").removeClass("style1-leftmenu"), localStorage.setItem("style1-leftmenu", "false"))
        })), $(document).on("click", "#myonoffswitch30", (function () {
            this.checked ? ($("body").addClass("light-mode"), $("body").removeClass("dark-theme"), $("body").removeClass("default-leftmenu"), $("body").removeClass("style1-leftmenu"), localStorage.setItem("light-mode", "True")) : ($("body").removeClass("light-mode"), localStorage.setItem("light-mode", "false"))
        })), $(document).on("click", "#myonoffswitch31", (function () {
            this.checked ? ($("body").addClass("dark-theme"), $("body").removeClass("light-mode"), $("body").removeClass("default-leftmenu"), $("body").removeClass("style1-leftmenu"), localStorage.setItem("dark-theme", "True")) : ($("body").removeClass("dark-theme"), localStorage.setItem("dark-theme", "false"))
        })), $(document).on("click", "#myonoffswitch32", (function () {
            this.checked ? ($("body").addClass("default-horizontal"), $("body").removeClass("color-horizontal"), $("body").removeClass("dark-theme"), $("body").removeClass("default-leftmenu"), $("body").removeClass("style1-leftmenu"), localStorage.setItem("default-horizontal", "True")) : ($("body").removeClass("default-horizontal"), localStorage.setItem("default-horizontal", "false"))
        })), $(document).on("click", "#myonoffswitch33", (function () {
            this.checked ? ($("body").addClass("dark-theme"), $("body").removeClass("color-horizontal"), $("body").removeClass("default-horizontal"), $("body").removeClass("default-leftmenu"), $("body").removeClass("style1-leftmenu"), localStorage.setItem("dark-theme", "True")) : ($("body").removeClass("dark-theme"), localStorage.setItem("dark-theme", "false"))
        })), $("#leftmenuimage1").on("click", (function () {
            return $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage1"), !1
        })), $("#leftmenuimage2").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage2"), !1
        })), $("#leftmenuimage3").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage3"), !1
        })), $("#leftmenuimage4").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage4"), !1
        })), $("#leftmenuimage5").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage5"), !1
        })), $("#leftmenuimage6").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage6"), !1
        })), $("#leftmenuimage7").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage7"), !1
        })), $("#leftmenuimage8").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage9"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage8"), !1
        })), $("#leftmenuimage9").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage10"), $("body").addClass("leftbgimage9"), !1
        })), $("#leftmenuimage10").on("click", (function () {
            return $("body").removeClass("leftbgimage1"), $("body").removeClass("leftbgimage2"), $("body").removeClass("leftbgimage3"), $("body").removeClass("leftbgimage4"), $("body").removeClass("leftbgimage5"), $("body").removeClass("leftbgimage6"), $("body").removeClass("leftbgimage7"), $("body").removeClass("leftbgimage8"), $("body").removeClass("leftbgimage9"), $("body").addClass("leftbgimage10"), !1
        })), $("#myonoffswitch18").click((function () {
            this.checked ? ($("body").addClass("default"), $("body").removeClass("boxed"), localStorage.setItem("default", "True")) : ($("body").removeClass("default"), localStorage.setItem("default", "false"))
        })), $("#myonoffswitch19").click((function () {
            this.checked ? ($("body").addClass("boxed"), $("body").removeClass("default"), localStorage.setItem("boxed", "True")) : ($("body").removeClass("boxed"), localStorage.setItem("boxed", "false"))
        })), $("#myonoffswitch22").click((function () {
            this.checked ? ($("body").addClass("default-leftmenu"), $("body").removeClass("sidenav-toggled"), $("body").removeClass("closed-leftmenu"), $("body").removeClass("hover-submenu"), $("body").removeClass("icon-overlay"), $("body").removeClass("icon-text")) : ($("body").removeClass("default-leftmenu"), localStorage.setItem("default-leftmenu", "false"))
        })), $("#myonoffswitch23").click((function () {
            this.checked ? ($("body").addClass("closed-leftmenu"), $("body").addClass("sidenav-toggled"), $("body").removeClass("default-leftmenu"), $("body").removeClass("default-sidebar"), $("body").removeClass("hover-submenu"), $("body").removeClass("icon-overlay"), $("body").removeClass("icon-text")) : $("body").removeClass("closed-leftmenu")
        })), $("#myonoffswitch24").click((function () {
            this.checked ? ($("body").addClass("hover-submenu"), $("body").addClass("sidenav-toggled"), $("body").removeClass("default-sidebar"), $("body").removeClass("default-leftmenu"), $("body").removeClass("closed-leftmenu"), $("body").removeClass("icon-overlay"), $("body").removeClass("icon-text")) : $("body").removeClass("hover-submenu")
        })), $("#myonoffswitch25").click((function () {
            this.checked ? ($("body").addClass("icon-overlay"), $("body").removeClass("default-leftmenu"), $("body").removeClass("closed-leftmenu"), $("body").removeClass("hover-submenu"), $("body").removeClass("icon-text"), $("link#sidemenu").attr("src", $(this)), document.getElementById("sidemenu").setAttribute("src", "../../assets/plugins/sidemenu/sidemenu1.js")) : ($("body").removeClass("icon-overlay"), localStorage.setItem("icon-overlay", "false"), document.getElementById("theme").removeAttribute("href", "../../assets/css/sidemenu.css"))
        })), $("#myonoffswitch26").click((function () {
            this.checked ? ($("body").addClass("default-leftmenu"), $("body").removeClass("sidenav-toggled"), $("body").removeClass("closed-leftmenu"), $("body").removeClass("hover-submenu"), $("body").removeClass("icon-overlay"), $("body").removeClass("icon-text")) : ($("body").removeClass("default-leftmenu"), localStorage.setItem("default-leftmenu", "false"))
        })), $("#myonoffswitch27").click((function () {
            this.checked ? ($("body").addClass("closed-leftmenu"), $("body").addClass("sidenav-toggled"), $("body").removeClass("default-leftmenu"), $("body").removeClass("hover-submenu"), $("body").removeClass("icon-overlay"), $("body").removeClass("icon-text")) : $("body").removeClass("closed-leftmenu")
        })), $("#myonoffswitch28").click((function () {
            this.checked ? ($("body").addClass("hover-submenu"), $("body").addClass("sidenav-toggled"), $("body").removeClass("default-leftmenu"), $("body").removeClass("closed-leftmenu"), $("body").removeClass("icon-overlay"), $("body").removeClass("icon-text")) : $("body").removeClass("hover-submenu")
        })), $("#myonoffswitch29").click((function () {
            this.checked ? ($("body").addClass("icon-overlay"), $("body").addClass("sidenav-toggled"), $("body").removeClass("default-leftmenu"), $("body").removeClass("closed-leftmenu"), $("body").removeClass("hover-submenu"), $("body").removeClass("icon-text")) : $("body").removeClass("icon-overlay")
        })), $("#myonoffswitch34").click((function () {
            this.checked ? ($("body").addClass("default-horizontal"), $("body").removeClass("centerlogo-horizontal"), localStorage.setItem("default-horizontal", "True")) : ($("body").removeClass("default-horizontal"), localStorage.setItem("default-horizontal", "false"))
        })), $("#myonoffswitch35").click((function () {
            this.checked ? ($("body").addClass("centerlogo-horizontal"), $("body").removeClass("default-horizontal"), localStorage.setItem("centerlogo-horizontal", "True")) : ($("body").removeClass("centerlogo-horizontal"), localStorage.setItem("centerlogo-horizontal", "false"))
        }))
    }))
})();