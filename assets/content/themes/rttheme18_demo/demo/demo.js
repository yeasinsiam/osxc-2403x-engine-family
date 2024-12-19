/*!
* Bowser - a browser detector
* https://github.com/ded/bowser
* MIT License | (c) Dustin Diaz 2013
*/
!function (e, t) {
    typeof define == "function" ? define(t) : typeof module != "undefined" && module.exports ? module.exports.browser = t() : this[e] = t()
}("bowser", function () {
    function g() {
        return n ? {
            name: "Internet Explorer",
            msie: t,
            version: e.match(/(msie |rv:)(\d+(\.\d+)?)/i)[2]
        } : l ? {
            name: "Opera",
            opera: t,
            version: e.match(d) ? e.match(d)[1] : e.match(/opr\/(\d+(\.\d+)?)/i)[1]
        } : r ? {
            name: "Chrome",
            webkit: t,
            chrome: t,
            version: e.match(/(?:chrome|crios)\/(\d+(\.\d+)?)/i)[1]
        } : i ? {
            name: "PhantomJS",
            webkit: t,
            phantom: t,
            version: e.match(/phantomjs\/(\d+(\.\d+)+)/i)[1]
        } : a ? {
            name: "TouchPad",
            webkit: t,
            touchpad: t,
            version: e.match(/touchpad\/(\d+(\.\d+)?)/i)[1]
        } : o || u ? (m = {
            name: o ? "iPhone" : "iPad",
            webkit: t,
            mobile: t,
            ios: t,
            iphone: o,
            ipad: u
        }, d.test(e) && (m.version = e.match(d)[1]), m) : f ? {
            name: "Android",
            webkit: t,
            android: t,
            mobile: t,
            version: (e.match(d) || e.match(v))[1]
        } : s ? {name: "Safari", webkit: t, safari: t, version: e.match(d)[1]} : h ? (m = {
            name: "Gecko",
            gecko: t,
            mozilla: t,
            version: e.match(v)[1]
        }, c && (m.name = "Firefox", m.firefox = t), m) : p ? {
            name: "SeaMonkey",
            seamonkey: t,
            version: e.match(/seamonkey\/(\d+(\.\d+)?)/i)[1]
        } : {}
    }

    var e = navigator.userAgent, t = !0, n = /(msie|trident)/i.test(e), r = /chrome|crios/i.test(e),
        i = /phantom/i.test(e), s = /safari/i.test(e) && !r && !i, o = /iphone/i.test(e), u = /ipad/i.test(e),
        a = /touchpad/i.test(e), f = /android/i.test(e), l = /opera/i.test(e) || /opr/i.test(e), c = /firefox/i.test(e),
        h = /gecko\//i.test(e), p = /seamonkey\//i.test(e), d = /version\/(\d+(\.\d+)?)/i,
        v = /firefox\/(\d+(\.\d+)?)/i, m, y = g();
    return y.msie && y.version >= 8 || y.chrome && y.version >= 10 || y.firefox && y.version >= 4 || y.safari && y.version >= 5 || y.opera && y.version >= 10 ? y.a = t : y.msie && y.version < 8 || y.chrome && y.version < 10 || y.firefox && y.version < 4 || y.safari && y.version < 5 || y.opera && y.version < 10 ? y.c = t : y.x = t, y
});
if (bowser.msie && bowser.version < 9) {
    jQuery('.demo_changer').remove();
} else {
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
    //语言切换的
    (function ($) {
        "use strict";
        $(".languages a").on('click', function (event) {
            var action=$(this).data("action");
            var href=$(this).data("href");
            var lang=$(this).data("lang");

            $.ajax({
                type: 'POST',
                url: action,
                data:'',
                async: true,
                dataType: "json",
                timeout: 3000,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (res) {
                    console.log(res);
                    console.log(lang+href);
                    window.location.href='/'+lang+href;
                    //window.location.reload();
                }
            });
            return false;
        });
    })(jQuery);

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"), results = regex.exec(location.search);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    (function ($) {
        "use strict";
        $("#logo_pos").on('change', function (event) {
            var selectedValue = $('option:selected', this).val();
            var url = "";
            url = $(location).attr('protocol') + "//" + $(location).attr('hostname') + $(location).attr('pathname');
            if ($(location).attr('search') == "") {
                url = $(location).attr('href') + "?header_design=design1&logo_pos=" + selectedValue;
            } else {
                url = $(location).attr('href') + "&header_design=design1&logo_pos=" + selectedValue;
            }
            var skin = getParameterByName("skin") ? "&skin=" + getParameterByName("skin") : "";
            url = $(location).attr('protocol') + "//" + $(location).attr('hostname') + $(location).attr('pathname') + "?header_design=design1&logo_pos=" + selectedValue + skin;
            window.location = url;
        });
    })(jQuery);
    (function ($) {
        "use strict";
        $("#header_design").on('change', function (event) {
            var selectedValue = $('option:selected', this).val();
            var url = "";
            url = $(location).attr('protocol') + "//" + $(location).attr('hostname') + $(location).attr('pathname') + "?header_design=" + selectedValue;
            window.location = url;
        });
    })(jQuery);
    (function ($) {
        "use strict";
        $("#layout").on('change', function (event) {
            var selectedValue = $('option:selected', this).val();
            $("body").removeClass("boxed-body").removeClass("half-boxed").removeClass("wide").addClass(selectedValue);
        });
    })(jQuery);
    (function ($) {
        "use strict";
        $("#navigation_style").on('change', function (event) {
            var selectedValue = $('option:selected', this).val();
            $("body").removeClass("menu-style-one").removeClass("menu-style-two").addClass(selectedValue);
        });
    })(jQuery);
    (function ($) {
        "use strict";
        $("#menu-item-1742").removeClass("current-menu-ancestor");
    })(jQuery);
    (function ($) {
        "use strict";
        $(".sub_titles").on('click', function (event) {
            var scope = $(this).attr("data-scope");
            if ($("#navigation_bar").hasClass("with_subs")) {
                $("#navigation_bar").removeClass("with_subs");
                $("body").removeClass("with_subs");
                $("#header .sticky-wrapper").removeAttr("style");
                $(this).addClass("icon-check-empty");
                $(this).removeClass("icon-check");
            } else {
                $("#navigation_bar").addClass("with_subs");
                $(this).addClass("icon-check");
                $(this).removeClass("icon-check-empty");
            }
        });
    })(jQuery);
    (function ($) {
        var picker_position = getCookie("picker_position");
        if (picker_position == "off") {
            jQuery('.demo_changer').css({"left": "-210px"}).toggleClass("active");
        }
        jQuery('.demo_changer .demo-icon').click(function () {
            if (jQuery('.demo_changer').hasClass("active")) {
                jQuery('.demo_changer').animate({"left": "-210px"}, function () {
                    jQuery('.demo_changer').toggleClass("active");
                    setCookie("picker_position", "off", 365);
                });
            } else {
                jQuery('.demo_changer').toggleClass("active");
                jQuery('.demo_changer').animate({"left": "0px"}, function () {
                    setCookie("picker_position", "on", 365);
                });
            }
        });
        jQuery(window).load(function () {
            if (picker_position == "") {
                setTimeout(function () {
                    jQuery('.demo_changer').animate({"left": "-210px"}, function () {
                        jQuery('.demo_changer').toggleClass("active");
                        picker_position = "off";
                    });
                    setCookie("picker_position", "off", 365);
                }, 1500);
            }
        });
    })(jQuery);
}
