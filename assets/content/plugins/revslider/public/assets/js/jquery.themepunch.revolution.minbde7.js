/**************************************************************************
 * jquery.themepunch.revolution.js - jQuery Plugin for Revolution Slider
 * @version: 5.4.6.4 (28.11.2017)
 * @requires jQuery v1.7 or later (tested on 1.9)
 * @author ThemePunch
 **************************************************************************/

!function (jQuery, undefined) {
    "use strict";
    var version = {
        core: "5.4.6.4",
        "revolution.extensions.actions.min.js": "2.1.0",
        "revolution.extensions.carousel.min.js": "1.2.1",
        "revolution.extensions.kenburn.min.js": "1.3.1",
        "revolution.extensions.layeranimation.min.js": "3.6.4",
        "revolution.extensions.navigation.min.js": "1.3.3",
        "revolution.extensions.parallax.min.js": "2.2.0",
        "revolution.extensions.slideanims.min.js": "1.7",
        "revolution.extensions.video.min.js": "2.2.0"
    };
    jQuery.fn.extend({
        revolution: function (e) {
            var i = {
                delay: 9e3,
                responsiveLevels: 4064,
                visibilityLevels: [2048, 1024, 778, 480],
                gridwidth: 960,
                gridheight: 500,
                minHeight: 0,
                autoHeight: "off",
                sliderType: "standard",
                sliderLayout: "auto",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLimit: 0,
                hideSliderAtLimit: 0,
                disableProgressBar: "off",
                stopAtSlide: -1,
                stopAfterLoops: -1,
                shadow: 0,
                dottedOverlay: "none",
                startDelay: 0,
                lazyType: "smart",
                spinner: "spinner0",
                shuffle: "off",
                viewPort: {enable: !1, outof: "wait", visible_area: "60%", presize: !1},
                fallbacks: {
                    isJoomla: !1,
                    panZoomDisableOnMobile: "off",
                    simplifyAll: "on",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: !0,
                    ignoreHeightChanges: "off",
                    ignoreHeightChangesSize: 0,
                    allowHTML5AutoPlayOnAndroid: !0
                },
                parallax: {
                    type: "off",
                    levels: [10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                    origo: "enterpoint",
                    speed: 400,
                    bgparallax: "off",
                    opacity: "on",
                    disable_onmobile: "off",
                    ddd_shadow: "on",
                    ddd_bgfreeze: "off",
                    ddd_overflow: "visible",
                    ddd_layer_overflow: "visible",
                    ddd_z_correction: 65,
                    ddd_path: "mouse"
                },
                scrolleffect: {
                    fade: "off",
                    blur: "off",
                    scale: "off",
                    grayscale: "off",
                    maxblur: 10,
                    on_layers: "off",
                    on_slidebg: "off",
                    on_static_layers: "off",
                    on_parallax_layers: "off",
                    on_parallax_static_layers: "off",
                    direction: "both",
                    multiplicator: 1.35,
                    multiplicator_layers: .5,
                    tilt: 30,
                    disable_on_mobile: "on"
                },
                carousel: {
                    easing: punchgs.Power3.easeInOut,
                    speed: 800,
                    showLayersAllTime: "off",
                    horizontal_align: "center",
                    vertical_align: "center",
                    infinity: "on",
                    space: 0,
                    maxVisibleItems: 3,
                    stretch: "off",
                    fadeout: "on",
                    maxRotation: 0,
                    minScale: 0,
                    vary_fade: "off",
                    vary_rotation: "on",
                    vary_scale: "off",
                    border_radius: "0px",
                    padding_top: 0,
                    padding_bottom: 0
                },
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "off",
                        touchOnDesktop: "off",
                        swipe_treshold: 75,
                        swipe_min_touches: 1,
                        drag_block_vertical: !1,
                        swipe_direction: "horizontal"
                    },
                    arrows: {
                        style: "",
                        enable: !1,
                        hide_onmobile: !1,
                        hide_onleave: !0,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        hide_under: 0,
                        hide_over: 9999,
                        tmp: "",
                        rtl: !1,
                        left: {h_align: "left", v_align: "center", h_offset: 20, v_offset: 0, container: "slider"},
                        right: {h_align: "right", v_align: "center", h_offset: 20, v_offset: 0, container: "slider"}
                    },
                    bullets: {
                        container: "slider",
                        rtl: !1,
                        style: "",
                        enable: !1,
                        hide_onmobile: !1,
                        hide_onleave: !0,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        hide_under: 0,
                        hide_over: 9999,
                        direction: "horizontal",
                        h_align: "left",
                        v_align: "center",
                        space: 0,
                        h_offset: 20,
                        v_offset: 0,
                        tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>'
                    },
                    thumbnails: {
                        container: "slider",
                        rtl: !1,
                        style: "",
                        enable: !1,
                        width: 100,
                        height: 50,
                        min_width: 100,
                        wrapper_padding: 2,
                        wrapper_color: "#f5f5f5",
                        wrapper_opacity: 1,
                        tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title"></span>',
                        visibleAmount: 5,
                        hide_onmobile: !1,
                        hide_onleave: !0,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        hide_under: 0,
                        hide_over: 9999,
                        direction: "horizontal",
                        span: !1,
                        position: "inner",
                        space: 2,
                        h_align: "left",
                        v_align: "center",
                        h_offset: 20,
                        v_offset: 0
                    },
                    tabs: {
                        container: "slider",
                        rtl: !1,
                        style: "",
                        enable: !1,
                        width: 100,
                        min_width: 100,
                        height: 50,
                        wrapper_padding: 10,
                        wrapper_color: "#f5f5f5",
                        wrapper_opacity: 1,
                        tmp: '<span class="tp-tab-image"></span>',
                        visibleAmount: 5,
                        hide_onmobile: !1,
                        hide_onleave: !0,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        hide_under: 0,
                        hide_over: 9999,
                        direction: "horizontal",
                        span: !1,
                        space: 0,
                        position: "inner",
                        h_align: "left",
                        v_align: "center",
                        h_offset: 20,
                        v_offset: 0
                    }
                },
                extensions: "extensions/",
                extensions_suffix: ".min.js",
                debugMode: !1
            };
            return e = jQuery.extend(!0, {}, i, e), this.each(function () {
                var i = jQuery(this);
                e.minHeight = e.minHeight != undefined ? parseInt(e.minHeight, 0) : e.minHeight, e.scrolleffect.on = "on" === e.scrolleffect.fade || "on" === e.scrolleffect.scale || "on" === e.scrolleffect.blur || "on" === e.scrolleffect.grayscale, "hero" == e.sliderType && i.find(">ul>li").each(function (e) {
                    e > 0 && jQuery(this).remove()
                }), e.jsFileLocation = e.jsFileLocation || getScriptLocation("themepunch.revolution.min.js"), e.jsFileLocation = e.jsFileLocation + e.extensions, e.scriptsneeded = getNeededScripts(e, i), e.curWinRange = 0, e.rtl = !0, e.navigation != undefined && e.navigation.touch != undefined && (e.navigation.touch.swipe_min_touches = e.navigation.touch.swipe_min_touches > 5 ? 1 : e.navigation.touch.swipe_min_touches), jQuery(this).on("scriptsloaded", function () {
                    if (e.modulesfailing) return i.html('<div style="margin:auto;line-height:40px;font-size:14px;color:#fff;padding:15px;background:#e74c3c;margin:20px 0px;">!! Error at loading Slider Revolution 5.0 Extrensions.' + e.errorm + "</div>").show(), !1;
                    _R.migration != undefined && (e = _R.migration(i, e)), punchgs.force3D = !0, "on" !== e.simplifyAll && punchgs.TweenLite.lagSmoothing(1e3, 16), prepareOptions(i, e), initSlider(i, e)
                }), i[0].opt = e, waitForScripts(i, e)
            })
        }, getRSVersion: function (e) {
            if (!0 === e) return jQuery("body").data("tp_rs_version");
            var i = jQuery("body").data("tp_rs_version"), t = "";
            t += "---------------------------------------------------------\n", t += "    Currently Loaded Slider Revolution & SR Modules :\n", t += "---------------------------------------------------------\n";
            for (var a in i) t += i[a].alias + ": " + i[a].ver + "\n";
            return t += "---------------------------------------------------------\n"
        }, revremoveslide: function (e) {
            return this.each(function () {
                var i = jQuery(this), t = i[0].opt;
                if (!(e < 0 || e > t.slideamount) && i != undefined && i.length > 0 && jQuery("body").find("#" + i.attr("id")).length > 0 && t && t.li.length > 0 && (e > 0 || e <= t.li.length)) {
                    var a = jQuery(t.li[e]), n = a.data("index"), r = !1;
                    t.slideamount = t.slideamount - 1, t.realslideamount = t.realslideamount - 1, removeNavWithLiref(".tp-bullet", n, t), removeNavWithLiref(".tp-tab", n, t), removeNavWithLiref(".tp-thumb", n, t), a.hasClass("active-revslide") && (r = !0), a.remove(), t.li = removeArray(t.li, e), t.carousel && t.carousel.slides && (t.carousel.slides = removeArray(t.carousel.slides, e)), t.thumbs = removeArray(t.thumbs, e), _R.updateNavIndexes && _R.updateNavIndexes(t), r && i.revnext(), punchgs.TweenLite.set(t.li, {minWidth: "99%"}), punchgs.TweenLite.set(t.li, {minWidth: "100%"})
                }
            })
        }, revaddcallback: function (e) {
            return this.each(function () {
                this.opt && (this.opt.callBackArray === undefined && (this.opt.callBackArray = new Array), this.opt.callBackArray.push(e))
            })
        }, revgetparallaxproc: function () {
            return jQuery(this)[0].opt.scrollproc
        }, revdebugmode: function () {
            return this.each(function () {
                var e = jQuery(this);
                e[0].opt.debugMode = !0, containerResized(e, e[0].opt)
            })
        }, revscroll: function (e) {
            return this.each(function () {
                var i = jQuery(this);
                jQuery("body,html").animate({scrollTop: i.offset().top + i.height() - e + "px"}, {duration: 400})
            })
        }, revredraw: function (e) {
            return this.each(function () {
                var e = jQuery(this);
                containerResized(e, e[0].opt)
            })
        }, revkill: function (e) {
            var i = this, t = jQuery(this);
            if (punchgs.TweenLite.killDelayedCallsTo(_R.showHideNavElements), t != undefined && t.length > 0 && jQuery("body").find("#" + t.attr("id")).length > 0) {
                t.data("conthover", 1), t.data("conthover-changed", 1), t.trigger("revolution.slide.onpause");
                var a = t.parent().find(".tp-bannertimer"), n = t[0].opt;
                n.tonpause = !0, t.trigger("stoptimer");
                r = "resize.revslider-" + t.attr("id");
                jQuery(window).unbind(r), punchgs.TweenLite.killTweensOf(t.find("*"), !1), punchgs.TweenLite.killTweensOf(t, !1), t.unbind("hover, mouseover, mouseenter,mouseleave, resize");
                var r = "resize.revslider-" + t.attr("id");
                jQuery(window).off(r), t.find("*").each(function () {
                    var e = jQuery(this);
                    e.unbind("on, hover, mouseenter,mouseleave,mouseover, resize,restarttimer, stoptimer"), e.off("on, hover, mouseenter,mouseleave,mouseover, resize"), e.data("mySplitText", null), e.data("ctl", null), e.data("tween") != undefined && e.data("tween").kill(), e.data("kenburn") != undefined && e.data("kenburn").kill(), e.data("timeline_out") != undefined && e.data("timeline_out").kill(), e.data("timeline") != undefined && e.data("timeline").kill(), e.remove(), e.empty(), e = null
                }), punchgs.TweenLite.killTweensOf(t.find("*"), !1), punchgs.TweenLite.killTweensOf(t, !1), a.remove();
                try {
                    t.closest(".forcefullwidth_wrapper_tp_banner").remove()
                } catch (e) {
                }
                try {
                    t.closest(".rev_slider_wrapper").remove()
                } catch (e) {
                }
                try {
                    t.remove()
                } catch (e) {
                }
                return t.empty(), t.html(), t = null, n = null, delete i.c, delete i.opt, delete i.container, !0
            }
            return !1
        }, revpause: function () {
            return this.each(function () {
                var e = jQuery(this);
                e != undefined && e.length > 0 && jQuery("body").find("#" + e.attr("id")).length > 0 && (e.data("conthover", 1), e.data("conthover-changed", 1), e.trigger("revolution.slide.onpause"), e[0].opt.tonpause = !0, e.trigger("stoptimer"))
            })
        }, revresume: function () {
            return this.each(function () {
                var e = jQuery(this);
                e != undefined && e.length > 0 && jQuery("body").find("#" + e.attr("id")).length > 0 && (e.data("conthover", 0), e.data("conthover-changed", 1), e.trigger("revolution.slide.onresume"), e[0].opt.tonpause = !1, e.trigger("starttimer"))
            })
        }, revstart: function () {
            var e = jQuery(this);
            if (e != undefined && e.length > 0 && jQuery("body").find("#" + e.attr("id")).length > 0 && e[0].opt !== undefined) return e[0].opt.sliderisrunning ? (console.log("Slider Is Running Already"), !1) : (e[0].opt.c = e, e[0].opt.ul = e.find(">ul"), runSlider(e, e[0].opt), !0)
        }, revnext: function () {
            return this.each(function () {
                var e = jQuery(this);
                e != undefined && e.length > 0 && jQuery("body").find("#" + e.attr("id")).length > 0 && _R.callingNewSlide(e, 1)
            })
        }, revprev: function () {
            return this.each(function () {
                var e = jQuery(this);
                e != undefined && e.length > 0 && jQuery("body").find("#" + e.attr("id")).length > 0 && _R.callingNewSlide(e, -1)
            })
        }, revmaxslide: function () {
            return jQuery(this).find(".tp-revslider-mainul >li").length
        }, revcurrentslide: function () {
            var e = jQuery(this);
            if (e != undefined && e.length > 0 && jQuery("body").find("#" + e.attr("id")).length > 0) return parseInt(e[0].opt.act, 0) + 1
        }, revlastslide: function () {
            return jQuery(this).find(".tp-revslider-mainul >li").length
        }, revshowslide: function (e) {
            return this.each(function () {
                var i = jQuery(this);
                i != undefined && i.length > 0 && jQuery("body").find("#" + i.attr("id")).length > 0 && _R.callingNewSlide(i, "to" + (e - 1))
            })
        }, revcallslidewithid: function (e) {
            return this.each(function () {
                var i = jQuery(this);
                i != undefined && i.length > 0 && jQuery("body").find("#" + i.attr("id")).length > 0 && _R.callingNewSlide(i, e)
            })
        }
    });
    var _R = jQuery.fn.revolution;
    jQuery.extend(!0, _R, {
        getversion: function () {
            return version
        }, compare_version: function (e) {
            var i = jQuery("body").data("tp_rs_version");
            return (i = i === undefined ? new Object : i).Core === undefined && (i.Core = new Object, i.Core.alias = "Slider Revolution Core", i.Core.name = "jquery.themepunch.revolution.min.js", i.Core.ver = _R.getversion().core), "stop" != e.check && (_R.getversion().core < e.min_core ? (e.check === undefined && (console.log("%cSlider Revolution Warning (Core:" + _R.getversion().core + ")", "color:#c0392b;font-weight:bold;"), console.log("%c     Core is older than expected (" + e.min_core + ") from " + e.alias, "color:#333"), console.log("%c     Please update Slider Revolution to the latest version.", "color:#333"), console.log("%c     It might be required to purge and clear Server/Client side Caches.", "color:#333")), e.check = "stop") : _R.getversion()[e.name] != undefined && e.version < _R.getversion()[e.name] && (e.check === undefined && (console.log("%cSlider Revolution Warning (Core:" + _R.getversion().core + ")", "color:#c0392b;font-weight:bold;"), console.log("%c     " + e.alias + " (" + e.version + ") is older than requiered (" + _R.getversion()[e.name] + ")", "color:#333"), console.log("%c     Please update Slider Revolution to the latest version.", "color:#333"), console.log("%c     It might be required to purge and clear Server/Client side Caches.", "color:#333")), e.check = "stop")), i[e.alias] === undefined && (i[e.alias] = new Object, i[e.alias].alias = e.alias, i[e.alias].ver = e.version, i[e.alias].name = e.name), jQuery("body").data("tp_rs_version", i), e
        }, currentSlideIndex: function (e) {
            var i = e.c.find(".active-revslide").index();
            return i = -1 == i ? 0 : i
        }, simp: function (e, i, t) {
            var a = Math.abs(e) - Math.floor(Math.abs(e / i)) * i;
            return t ? a : e < 0 ? -1 * a : a
        }, iOSVersion: function () {
            var e = !1;
            return navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) ? navigator.userAgent.match(/OS 4_\d like Mac OS X/i) && (e = !0) : e = !1, e
        }, isIE: function (e, i) {
            var t = jQuery('<div style="display:none;"/>').appendTo(jQuery("body"));
            t.html("\x3c!--[if " + (i || "") + " IE " + (e || "") + "]><a>&nbsp;</a><![endif]--\x3e");
            var a = t.find("a").length;
            return t.remove(), a
        }, is_mobile: function () {
            var e = ["android", "webos", "iphone", "ipad", "blackberry", "Android", "webos", , "iPod", "iPhone", "iPad", "Blackberry", "BlackBerry"],
                i = !1;
            for (var t in e) navigator.userAgent.split(e[t]).length > 1 && (i = !0);
            return i
        }, is_android: function () {
            var e = ["android", "Android"], i = !1;
            for (var t in e) navigator.userAgent.split(e[t]).length > 1 && (i = !0);
            return i
        }, callBackHandling: function (e, i, t) {
            try {
                e.callBackArray && jQuery.each(e.callBackArray, function (e, a) {
                    a && a.inmodule && a.inmodule === i && a.atposition && a.atposition === t && a.callback && a.callback.call()
                })
            } catch (e) {
                console.log("Call Back Failed")
            }
        }, get_browser: function () {
            var e, i = navigator.appName, t = navigator.userAgent,
                a = t.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
            return a && null != (e = t.match(/version\/([\.\d]+)/i)) && (a[2] = e[1]), (a = a ? [a[1], a[2]] : [i, navigator.appVersion, "-?"])[0]
        }, get_browser_version: function () {
            var e, i = navigator.appName, t = navigator.userAgent,
                a = t.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
            return a && null != (e = t.match(/version\/([\.\d]+)/i)) && (a[2] = e[1]), (a = a ? [a[1], a[2]] : [i, navigator.appVersion, "-?"])[1]
        }, isSafari11: function () {
            return "safari" === jQuery.trim(_R.get_browser().toLowerCase()) && parseFloat(_R.get_browser_version()) >= 11
        }, getHorizontalOffset: function (e, i) {
            var t = gWiderOut(e, ".outer-left"), a = gWiderOut(e, ".outer-right");
            switch (i) {
                case"left":
                    return t;
                case"right":
                    return a;
                case"both":
                    return t + a
            }
        }, callingNewSlide: function (e, i) {
            var t = e.find(".next-revslide").length > 0 ? e.find(".next-revslide").index() : e.find(".processing-revslide").length > 0 ? e.find(".processing-revslide").index() : e.find(".active-revslide").index(),
                a = 0, n = e[0].opt;
            e.find(".next-revslide").removeClass("next-revslide"), e.find(".active-revslide").hasClass("tp-invisible-slide") && (t = n.last_shown_slide), i && jQuery.isNumeric(i) || i.match(/to/g) ? (a = 1 === i || -1 === i ? (a = t + i) < 0 ? n.slideamount - 1 : a >= n.slideamount ? 0 : a : (i = jQuery.isNumeric(i) ? i : parseInt(i.split("to")[1], 0)) < 0 ? 0 : i > n.slideamount - 1 ? n.slideamount - 1 : i, e.find(".tp-revslider-slidesli:eq(" + a + ")").addClass("next-revslide")) : i && e.find(".tp-revslider-slidesli").each(function () {
                var e = jQuery(this);
                e.data("index") === i && e.addClass("next-revslide")
            }), a = e.find(".next-revslide").index(), e.trigger("revolution.nextslide.waiting"), t === a && t === n.last_shown_slide || a !== t && -1 != a ? swapSlide(e) : e.find(".next-revslide").removeClass("next-revslide")
        }, slotSize: function (e, i) {
            i.slotw = Math.ceil(i.width / i.slots), "fullscreen" == i.sliderLayout ? i.sloth = Math.ceil(jQuery(window).height() / i.slots) : i.sloth = Math.ceil(i.height / i.slots), "on" == i.autoHeight && e !== undefined && "" !== e && (i.sloth = Math.ceil(e.height() / i.slots))
        }, setSize: function (e) {
            var i = (e.top_outer || 0) + (e.bottom_outer || 0), t = parseInt(e.carousel.padding_top || 0, 0),
                a = parseInt(e.carousel.padding_bottom || 0, 0), n = e.gridheight[e.curWinRange], r = 0,
                o = -1 === e.nextSlide || e.nextSlide === undefined ? 0 : e.nextSlide;
            if (e.paddings = e.paddings === undefined ? {
                    top: parseInt(e.c.parent().css("paddingTop"), 0) || 0,
                    bottom: parseInt(e.c.parent().css("paddingBottom"), 0) || 0
                } : e.paddings, e.rowzones && e.rowzones.length > 0) for (var s = 0; s < e.rowzones[o].length; s++) r += e.rowzones[o][s][0].offsetHeight;
            if (n = n < e.minHeight ? e.minHeight : n, n = n < r ? r : n, "fullwidth" == e.sliderLayout && "off" == e.autoHeight && punchgs.TweenLite.set(e.c, {maxHeight: n + "px"}), e.c.css({
                    marginTop: t,
                    marginBottom: a
                }), e.width = e.ul.width(), e.height = e.ul.height(), setScale(e), e.height = Math.round(e.gridheight[e.curWinRange] * (e.width / e.gridwidth[e.curWinRange])), e.height > e.gridheight[e.curWinRange] && "on" != e.autoHeight && (e.height = e.gridheight[e.curWinRange]), "fullscreen" == e.sliderLayout || e.infullscreenmode) {
                e.height = e.bw * e.gridheight[e.curWinRange];
                e.c.parent().width();
                var l = jQuery(window).height();
                if (e.fullScreenOffsetContainer != undefined) {
                    try {
                        var d = e.fullScreenOffsetContainer.split(",");
                        d && jQuery.each(d, function (e, i) {
                            l = jQuery(i).length > 0 ? l - jQuery(i).outerHeight(!0) : l
                        })
                    } catch (e) {
                    }
                    try {
                        e.fullScreenOffset.split("%").length > 1 && e.fullScreenOffset != undefined && e.fullScreenOffset.length > 0 ? l -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : e.fullScreenOffset != undefined && e.fullScreenOffset.length > 0 && (l -= parseInt(e.fullScreenOffset, 0))
                    } catch (e) {
                    }
                }
                l = l < e.minHeight ? e.minHeight : l, l -= i, e.c.parent().height(l), e.c.closest(".rev_slider_wrapper").height(l), e.c.css({height: "100%"}), e.height = l, e.minHeight != undefined && e.height < e.minHeight && (e.height = e.minHeight), e.height = parseInt(r, 0) > parseInt(e.height, 0) ? r : e.height
            } else e.minHeight != undefined && e.height < e.minHeight && (e.height = e.minHeight), e.height = parseInt(r, 0) > parseInt(e.height, 0) ? r : e.height, e.c.height(e.height);
            var c = {height: t + a + i + e.height + e.paddings.top + e.paddings.bottom};
            e.c.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").css(c), e.c.closest(".rev_slider_wrapper").css(c), setScale(e)
        }, enterInViewPort: function (e) {
            e.waitForCountDown && (countDown(e.c, e), e.waitForCountDown = !1), e.waitForFirstSlide && (swapSlide(e.c), e.waitForFirstSlide = !1, setTimeout(function () {
                e.c.removeClass("tp-waitforfirststart")
            }, 500)), "playing" != e.sliderlaststatus && e.sliderlaststatus != undefined || e.c.trigger("starttimer"), e.lastplayedvideos != undefined && e.lastplayedvideos.length > 0 && jQuery.each(e.lastplayedvideos, function (i, t) {
                _R.playVideo(t, e)
            })
        }, leaveViewPort: function (e) {
            e.sliderlaststatus = e.sliderstatus, e.c.trigger("stoptimer"), e.playingvideos != undefined && e.playingvideos.length > 0 && (e.lastplayedvideos = jQuery.extend(!0, [], e.playingvideos), e.playingvideos && jQuery.each(e.playingvideos, function (i, t) {
                e.leaveViewPortBasedStop = !0, _R.stopVideo && _R.stopVideo(t, e)
            }))
        }, unToggleState: function (e) {
            e != undefined && e.length > 0 && jQuery.each(e, function (e, i) {
                i.removeClass("rs-toggle-content-active")
            })
        }, toggleState: function (e) {
            e != undefined && e.length > 0 && jQuery.each(e, function (e, i) {
                i.addClass("rs-toggle-content-active")
            })
        }, swaptoggleState: function (e) {
            e != undefined && e.length > 0 && jQuery.each(e, function (e, i) {
                jQuery(i).hasClass("rs-toggle-content-active") ? jQuery(i).removeClass("rs-toggle-content-active") : jQuery(i).addClass("rs-toggle-content-active")
            })
        }, lastToggleState: function (e) {
            var i = 0;
            return e != undefined && e.length > 0 && jQuery.each(e, function (e, t) {
                i = t.hasClass("rs-toggle-content-active")
            }), i
        }
    });
    var _ISM = _R.is_mobile(), _ANDROID = _R.is_android(), checkIDS = function (e, i) {
        if (e.anyid = e.anyid === undefined ? [] : e.anyid, -1 != jQuery.inArray(i.attr("id"), e.anyid)) {
            var t = i.attr("id") + "_" + Math.round(9999 * Math.random());
            i.attr("id", t)
        }
        e.anyid.push(i.attr("id"))
    }, removeArray = function (e, i) {
        var t = [];
        return jQuery.each(e, function (e, a) {
            e != i && t.push(a)
        }), t
    }, removeNavWithLiref = function (e, i, t) {
        t.c.find(e).each(function () {
            var e = jQuery(this);
            e.data("liref") === i && e.remove()
        })
    }, lAjax = function (e, i) {
        return !jQuery("body").data(e) && (i.filesystem ? (i.errorm === undefined && (i.errorm = "<br>Local Filesystem Detected !<br>Put this to your header:"), console.warn("Local Filesystem detected !"), i.errorm = i.errorm + '<br>&lt;script type="text/javascript" src="' + i.jsFileLocation + e + i.extensions_suffix + '"&gt;&lt;/script&gt;', console.warn(i.jsFileLocation + e + i.extensions_suffix + " could not be loaded !"), console.warn("Please use a local Server or work online or make sure that you load all needed Libraries manually in your Document."), console.log(" "), i.modulesfailing = !0, !1) : (jQuery.ajax({
            url: i.jsFileLocation + e + i.extensions_suffix + "?version=" + version.core,
            dataType: "script",
            cache: !0,
            error: function (t) {
                console.warn("Slider Revolution 5.0 Error !"), console.error("Failure at Loading:" + e + i.extensions_suffix + " on Path:" + i.jsFileLocation), console.info(t)
            }
        }), void jQuery("body").data(e, !0)))
    }, getNeededScripts = function (e, i) {
        var t = new Object, a = e.navigation;
        return t.kenburns = !1, t.parallax = !1, t.carousel = !1, t.navigation = !1, t.videos = !1, t.actions = !1, t.layeranim = !1, t.migration = !1, i.data("version") && i.data("version").toString().match(/5./gi) ? (i.find("img").each(function () {
            "on" == jQuery(this).data("kenburns") && (t.kenburns = !0)
        }), ("carousel" == e.sliderType || "on" == a.keyboardNavigation || "on" == a.mouseScrollNavigation || "on" == a.touch.touchenabled || a.arrows.enable || a.bullets.enable || a.thumbnails.enable || a.tabs.enable) && (t.navigation = !0), i.find(".tp-caption, .tp-static-layer, .rs-background-video-layer").each(function () {
            var e = jQuery(this);
            (e.data("ytid") != undefined || e.find("iframe").length > 0 && e.find("iframe").attr("src").toLowerCase().indexOf("youtube") > 0) && (t.videos = !0), (e.data("vimeoid") != undefined || e.find("iframe").length > 0 && e.find("iframe").attr("src").toLowerCase().indexOf("vimeo") > 0) && (t.videos = !0), e.data("actions") !== undefined && (t.actions = !0), t.layeranim = !0
        }), i.find("li").each(function () {
            jQuery(this).data("link") && jQuery(this).data("link") != undefined && (t.layeranim = !0, t.actions = !0)
        }), !t.videos && (i.find(".rs-background-video-layer").length > 0 || i.find(".tp-videolayer").length > 0 || i.find(".tp-audiolayer").length > 0 || i.find("iframe").length > 0 || i.find("video").length > 0) && (t.videos = !0), "carousel" == e.sliderType && (t.carousel = !0), ("off" !== e.parallax.type || e.viewPort.enable || "true" == e.viewPort.enable || "true" === e.scrolleffect.on || e.scrolleffect.on) && (t.parallax = !0)) : (t.kenburns = !0, t.parallax = !0, t.carousel = !1, t.navigation = !0, t.videos = !0, t.actions = !0, t.layeranim = !0, t.migration = !0), "hero" == e.sliderType && (t.carousel = !1, t.navigation = !1), window.location.href.match(/file:/gi) && (t.filesystem = !0, e.filesystem = !0), t.videos && void 0 === _R.isVideoPlaying && lAjax("revolution.extension.video", e), t.carousel && void 0 === _R.prepareCarousel && lAjax("revolution.extension.carousel", e), t.carousel || void 0 !== _R.animateSlide || lAjax("revolution.extension.slideanims", e), t.actions && void 0 === _R.checkActions && lAjax("revolution.extension.actions", e), t.layeranim && void 0 === _R.handleStaticLayers && lAjax("revolution.extension.layeranimation", e), t.kenburns && void 0 === _R.stopKenBurn && lAjax("revolution.extension.kenburn", e), t.navigation && void 0 === _R.createNavigation && lAjax("revolution.extension.navigation", e), t.migration && void 0 === _R.migration && lAjax("revolution.extension.migration", e), t.parallax && void 0 === _R.checkForParallax && lAjax("revolution.extension.parallax", e), e.addons != undefined && e.addons.length > 0 && jQuery.each(e.addons, function (i, t) {
            "object" == typeof t && t.fileprefix != undefined && lAjax(t.fileprefix, e)
        }), t
    }, waitForScripts = function (e, i) {
        var t = !0, a = i.scriptsneeded;
        i.addons != undefined && i.addons.length > 0 && jQuery.each(i.addons, function (e, i) {
            "object" == typeof i && i.init != undefined && _R[i.init] === undefined && (t = !1)
        }), a.filesystem || "undefined" != typeof punchgs && t && (!a.kenburns || a.kenburns && void 0 !== _R.stopKenBurn) && (!a.navigation || a.navigation && void 0 !== _R.createNavigation) && (!a.carousel || a.carousel && void 0 !== _R.prepareCarousel) && (!a.videos || a.videos && void 0 !== _R.resetVideo) && (!a.actions || a.actions && void 0 !== _R.checkActions) && (!a.layeranim || a.layeranim && void 0 !== _R.handleStaticLayers) && (!a.migration || a.migration && void 0 !== _R.migration) && (!a.parallax || a.parallax && void 0 !== _R.checkForParallax) && (a.carousel || !a.carousel && void 0 !== _R.animateSlide) ? e.trigger("scriptsloaded") : setTimeout(function () {
            waitForScripts(e, i)
        }, 50)
    }, getScriptLocation = function (e) {
        var i = new RegExp("themepunch.revolution.min.js", "gi"), t = "";
        return jQuery("script").each(function () {
            var e = jQuery(this).attr("src");
            e && e.match(i) && (t = e)
        }), t = t.replace("jquery.themepunch.revolution.min.js", ""), t = t.replace("jquery.themepunch.revolution.js", ""), t = t.split("?")[0]
    }, setCurWinRange = function (e, i) {
        var t = 9999, a = 0, n = 0, r = 0, o = jQuery(window).width(),
            s = i && 9999 == e.responsiveLevels ? e.visibilityLevels : e.responsiveLevels;
        s && s.length && jQuery.each(s, function (e, i) {
            o < i && (0 == a || a > i) && (t = i, r = e, a = i), o > i && a < i && (a = i, n = e)
        }), a < t && (r = n), i ? e.forcedWinRange = r : e.curWinRange = r
    }, prepareOptions = function (e, i) {
        i.carousel.maxVisibleItems = i.carousel.maxVisibleItems < 1 ? 999 : i.carousel.maxVisibleItems, i.carousel.vertical_align = "top" === i.carousel.vertical_align ? "0%" : "bottom" === i.carousel.vertical_align ? "100%" : "50%"
    }, gWiderOut = function (e, i) {
        var t = 0;
        return e.find(i).each(function () {
            var e = jQuery(this);
            !e.hasClass("tp-forcenotvisible") && t < e.outerWidth() && (t = e.outerWidth())
        }), t
    }, initSlider = function (container, opt) {
        if (container == undefined) return !1;
        container.data("aimg") != undefined && ("enabled" == container.data("aie8") && _R.isIE(8) || "enabled" == container.data("amobile") && _ISM) && container.html('<img class="tp-slider-alternative-image" src="' + container.data("aimg") + '">'), container.find(">ul").addClass("tp-revslider-mainul"), opt.c = container, opt.ul = container.find(".tp-revslider-mainul"), opt.ul.find(">li").each(function (e) {
            var i = jQuery(this);
            "on" == i.data("hideslideonmobile") && _ISM && i.remove(), (i.data("invisible") || !0 === i.data("invisible")) && (i.addClass("tp-invisible-slide"), i.appendTo(opt.ul))
        }), opt.addons != undefined && opt.addons.length > 0 && jQuery.each(opt.addons, function (i, obj) {
            "object" == typeof obj && obj.init != undefined && _R[obj.init](eval(obj.params))
        }), opt.cid = container.attr("id"), opt.ul.css({visibility: "visible"}), opt.slideamount = opt.ul.find(">li").not(".tp-invisible-slide").length, opt.realslideamount = opt.ul.find(">li").length, opt.slayers = container.find(".tp-static-layers"), opt.slayers.data("index", "staticlayers"), 1 != opt.waitForInit && (container[0].opt = opt, runSlider(container, opt))
    }, onFullScreenChange = function () {
        jQuery("body").data("rs-fullScreenMode", !jQuery("body").data("rs-fullScreenMode")), jQuery("body").data("rs-fullScreenMode") && setTimeout(function () {
            jQuery(window).trigger("resize")
        }, 200)
    }, runSlider = function (e, i) {
        if (i.sliderisrunning = !0, i.ul.find(">li").each(function (e) {
                jQuery(this).data("originalindex", e)
            }), i.allli = i.ul.find(">li"), jQuery.each(i.allli, function (e, i) {
                (i = jQuery(i)).data("origindex", i.index())
            }), i.li = i.ul.find(">li").not(".tp-invisible-slide"), "on" == i.shuffle) {
            var t = new Object, a = i.ul.find(">li:first-child");
            t.fstransition = a.data("fstransition"), t.fsmasterspeed = a.data("fsmasterspeed"), t.fsslotamount = a.data("fsslotamount");
            for (var n = 0; n < i.slideamount; n++) {
                var r = Math.round(Math.random() * i.slideamount);
                i.ul.find(">li:eq(" + r + ")").prependTo(i.ul)
            }
            var o = i.ul.find(">li:first-child");
            o.data("fstransition", t.fstransition), o.data("fsmasterspeed", t.fsmasterspeed), o.data("fsslotamount", t.fsslotamount), i.allli = i.ul.find(">li"), i.li = i.ul.find(">li").not(".tp-invisible-slide")
        }
        if (i.inli = i.ul.find(">li.tp-invisible-slide"), i.thumbs = new Array, i.slots = 4, i.act = -1, i.firststart = 1, i.loadqueue = new Array, i.syncload = 0, i.conw = e.width(), i.conh = e.height(), i.responsiveLevels.length > 1 ? i.responsiveLevels[0] = 9999 : i.responsiveLevels = 9999, jQuery.each(i.allli, function (e, t) {
                var a = (t = jQuery(t)).find(".rev-slidebg") || t.find("img").first(), n = 0;
                t.addClass("tp-revslider-slidesli"), t.data("index") === undefined && t.data("index", "rs-" + Math.round(999999 * Math.random()));
                var r = new Object;
                r.params = new Array, r.id = t.data("index"), r.src = t.data("thumb") !== undefined ? t.data("thumb") : a.data("lazyload") !== undefined ? a.data("lazyload") : a.attr("src"), t.data("title") !== undefined && r.params.push({
                    from: RegExp("\\{\\{title\\}\\}", "g"),
                    to: t.data("title")
                }), t.data("description") !== undefined && r.params.push({
                    from: RegExp("\\{\\{description\\}\\}", "g"),
                    to: t.data("description")
                });
                for (n = 1; n <= 10; n++) t.data("param" + n) !== undefined && r.params.push({
                    from: RegExp("\\{\\{param" + n + "\\}\\}", "g"),
                    to: t.data("param" + n)
                });
                if (i.thumbs.push(r), t.data("link") != undefined) {
                    var o = t.data("link"), s = t.data("target") || "_self",
                        l = "back" === t.data("slideindex") ? 0 : 60, d = t.data("linktoslide"), c = d;
                    d != undefined && "next" != d && "prev" != d && i.allli.each(function () {
                        var e = jQuery(this);
                        e.data("origindex") + 1 == c && (d = e.data("index"))
                    }), "slide" != o && (d = "no");
                    var u = '<div class="tp-caption slidelink" style="cursor:pointer;width:100%;height:100%;z-index:' + l + ';" data-x="center" data-y="center" data-basealign="slide" ',
                        p = "scroll_under" === d ? '[{"event":"click","action":"scrollbelow","offset":"100px","delay":"0"}]' : "prev" === d ? '[{"event":"click","action":"jumptoslide","slide":"prev","delay":"0.2"}]' : "next" === d ? '[{"event":"click","action":"jumptoslide","slide":"next","delay":"0.2"}]' : '[{"event":"click","action":"jumptoslide","slide":"' + d + '","delay":"0.2"}]',
                        f = ' data-frames=\'[{"delay":0,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]\'';
                    u = "no" == d ? u + f + " >" : u + "data-actions='" + p + "'" + f + " >", u += '<a style="width:100%;height:100%;display:block"', u = "slide" != o ? u + ' target="' + s + '" href="' + o + '"' : u, u += '><span style="width:100%;height:100%;display:block"></span></a></div>', t.append(u)
                }
            }), i.rle = i.responsiveLevels.length || 1, i.gridwidth = cArray(i.gridwidth, i.rle), i.gridheight = cArray(i.gridheight, i.rle), "on" == i.simplifyAll && (_R.isIE(8) || _R.iOSVersion()) && (e.find(".tp-caption").each(function () {
                var e = jQuery(this);
                e.removeClass("customin customout").addClass("fadein fadeout"), e.data("splitin", ""), e.data("speed", 400)
            }), i.allli.each(function () {
                var e = jQuery(this);
                e.data("transition", "fade"), e.data("masterspeed", 500), e.data("slotamount", 1), (e.find(".rev-slidebg") || e.find(">img").first()).data("kenburns", "off")
            })), i.desktop = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i), i.autoHeight = "fullscreen" == i.sliderLayout ? "on" : i.autoHeight, "fullwidth" == i.sliderLayout && "off" == i.autoHeight && e.css({maxHeight: i.gridheight[i.curWinRange] + "px"}), "auto" != i.sliderLayout && 0 == e.closest(".forcefullwidth_wrapper_tp_banner").length && ("fullscreen" !== i.sliderLayout || "on" != i.fullScreenAutoWidth)) {
            var s = e.parent(), l = s.css("marginBottom"), d = s.css("marginTop"), c = e.attr("id") + "_forcefullwidth";
            l = l === undefined ? 0 : l, d = d === undefined ? 0 : d, s.wrap('<div class="forcefullwidth_wrapper_tp_banner" id="' + c + '" style="position:relative;width:100%;height:auto;margin-top:' + d + ";margin-bottom:" + l + '"></div>'), e.closest(".forcefullwidth_wrapper_tp_banner").append('<div class="tp-fullwidth-forcer" style="width:100%;height:' + e.height() + 'px"></div>'), e.parent().css({
                marginTop: "0px",
                marginBottom: "0px"
            }), e.parent().css({position: "absolute"})
        }
        if (i.shadow !== undefined && i.shadow > 0 && (e.parent().addClass("tp-shadow" + i.shadow), e.parent().append('<div class="tp-shadowcover"></div>'), e.parent().find(".tp-shadowcover").css({
                backgroundColor: e.parent().css("backgroundColor"),
                backgroundImage: e.parent().css("backgroundImage")
            })), setCurWinRange(i), setCurWinRange(i, !0), !e.hasClass("revslider-initialised")) {
            e.addClass("revslider-initialised"), e.addClass("tp-simpleresponsive"), e.attr("id") == undefined && e.attr("id", "revslider-" + Math.round(1e3 * Math.random() + 5)), checkIDS(i, e), i.firefox13 = !1, i.ie = !jQuery.support.opacity, i.ie9 = 9 == document.documentMode, i.origcd = i.delay;
            var u = jQuery.fn.jquery.split("."), p = parseFloat(u[0]), f = parseFloat(u[1]);
            parseFloat(u[2] || "0");
            1 == p && f < 7 && e.html('<div style="text-align:center; padding:40px 0px; font-size:20px; color:#992222;"> The Current Version of jQuery:' + u + " <br>Please update your jQuery Version to min. 1.7 in Case you wish to use the Revolution Slider Plugin</div>"), p > 1 && (i.ie = !1);
            var h = new Object;
            h.addedyt = 0, h.addedvim = 0, h.addedvid = 0, i.scrolleffect.on && (i.scrolleffect.layers = new Array), e.find(".tp-caption, .rs-background-video-layer").each(function (e) {
                var t = jQuery(this), a = t.data(), n = a.autoplayonlyfirsttime, r = a.autoplay,
                    o = (a.videomp4 !== undefined || a.videowebm !== undefined || a.videoogv, t.hasClass("tp-audiolayer")),
                    s = a.videoloop, l = !0, d = !1;
                a.startclasses = t.attr("class"), a.isparallaxlayer = a.startclasses.indexOf("rs-parallax") >= 0, t.hasClass("tp-static-layer") && _R.handleStaticLayers && (_R.handleStaticLayers(t, i), i.scrolleffect.on && ("on" === i.scrolleffect.on_parallax_static_layers && a.isparallaxlayer || "on" === i.scrolleffect.on_static_layers && !a.isparallaxlayer) && (d = !0), l = !1);
                var c = t.data("noposteronmobile") || t.data("noPosterOnMobile") || t.data("posteronmobile") || t.data("posterOnMobile") || t.data("posterOnMObile");
                t.data("noposteronmobile", c);
                var u = 0;
                if (t.find("iframe").each(function () {
                        punchgs.TweenLite.set(jQuery(this), {autoAlpha: 0}), u++
                    }), u > 0 && t.data("iframes", !0), t.hasClass("tp-caption")) {
                    var p = t.hasClass("slidelink") ? "width:100% !important;height:100% !important;" : "",
                        f = t.data(), g = "", v = f.type, m = "row" === v || "column" === v ? "relative" : "absolute",
                        y = "";
                    "row" === v ? (t.addClass("rev_row").removeClass("tp-resizeme"), y = "rev_row_wrap") : "column" === v ? (g = f.verticalalign === undefined ? " vertical-align:bottom;" : " vertical-align:" + f.verticalalign + ";", y = "rev_column", t.addClass("rev_column_inner").removeClass("tp-resizeme"), t.data("width", "auto"), punchgs.TweenLite.set(t, {width: "auto"})) : "group" === v && t.removeClass("tp-resizeme");
                    var w = "", b = "";
                    "row" !== v && "group" !== v && "column" !== v ? (w = "display:" + t.css("display") + ";", t.closest(".rev_column").length > 0 ? (t.addClass("rev_layer_in_column"), l = !1) : t.closest(".rev_group").length > 0 && (t.addClass("rev_layer_in_group"), l = !1)) : "column" === v && (l = !1), f.wrapper_class !== undefined && (y = y + " " + f.wrapper_class), f.wrapper_id !== undefined && (b = 'id="' + f.wrapper_id + '"');
                    var _ = "";
                    t.hasClass("tp-no-events") && (_ = ";pointer-events:none"), t.wrap("<div " + b + ' class="tp-parallax-wrap ' + y + '" style="' + g + " " + p + "position:" + m + ";" + w + ";visibility:hidden" + _ + '"><div class="tp-loop-wrap" style="' + p + "position:" + m + ";" + w + ';"><div class="tp-mask-wrap" style="' + p + "position:" + m + ";" + w + ';" ></div></div></div>'), l && i.scrolleffect.on && ("on" === i.scrolleffect.on_parallax_layers && a.isparallaxlayer || "on" === i.scrolleffect.on_layers && !a.isparallaxlayer) && i.scrolleffect.layers.push(t.parent()), d && i.scrolleffect.layers.push(t.parent()), "column" === v && (t.append('<div class="rev_column_bg rev_column_bg_man_sized" style="visibility:hidden"></div>'), t.closest(".tp-parallax-wrap").append('<div class="rev_column_bg rev_column_bg_auto_sized"></div>'));
                    var x = ["pendulum", "rotate", "slideloop", "pulse", "wave"], j = t.closest(".tp-loop-wrap");
                    jQuery.each(x, function (e, i) {
                        var a = t.find(".rs-" + i), n = a.data() || "";
                        "" != n && (j.data(n), j.addClass("rs-" + i), a.children(0).unwrap(), t.data("loopanimation", "on"))
                    }), t.attr("id") === undefined && t.attr("id", "layer-" + Math.round(999999999 * Math.random())), checkIDS(i, t), punchgs.TweenLite.set(t, {visibility: "hidden"})
                }
                var R = t.data("actions");
                R !== undefined && _R.checkActions(t, i, R), checkHoverDependencies(t, i), _R.checkVideoApis && (h = _R.checkVideoApis(t, i, h)), o || 1 != n && "true" != n && "1sttime" != r || "loopandnoslidestop" == s || t.closest("li.tp-revslider-slidesli").addClass("rs-pause-timer-once"), o || 1 != r && "true" != r && "on" != r && "no1sttime" != r || "loopandnoslidestop" == s || t.closest("li.tp-revslider-slidesli").addClass("rs-pause-timer-always")
            }), e[0].addEventListener("mouseenter", function () {
                e.trigger("tp-mouseenter"), i.overcontainer = !0
            }, {passive: !0}), e[0].addEventListener("mouseover", function () {
                e.trigger("tp-mouseover"), i.overcontainer = !0
            }, {passive: !0}), e[0].addEventListener("mouseleave", function () {
                e.trigger("tp-mouseleft"), i.overcontainer = !1
            }, {passive: !0}), e.find(".tp-caption video").each(function (e) {
                var i = jQuery(this);
                i.removeClass("video-js vjs-default-skin"), i.attr("preload", ""), i.css({display: "none"})
            }), "standard" !== i.sliderType && (i.lazyType = "all"), loadImages(e.find(".tp-static-layers"), i, 0, !0), waitForCurrentImages(e.find(".tp-static-layers"), i, function () {
                e.find(".tp-static-layers img").each(function () {
                    var e = jQuery(this), t = e.data("lazyload") != undefined ? e.data("lazyload") : e.attr("src"),
                        a = getLoadObj(i, t);
                    e.attr("src", a.src)
                })
            }), i.rowzones = [], i.allli.each(function (e) {
                var t = jQuery(this);
                i.rowzones[e] = [], t.find(".rev_row_zone").each(function () {
                    i.rowzones[e].push(jQuery(this))
                }), "all" != i.lazyType && ("smart" != i.lazyType || 0 != e && 1 != e && e != i.slideamount && e != i.slideamount - 1) || (loadImages(t, i, e), waitForCurrentImages(t, i, function () {
                }))
            });
            var g = getUrlVars("#")[0];
            if (g.length < 9 && g.split("slide").length > 1) {
                var v = parseInt(g.split("slide")[1], 0);
                v < 1 && (v = 1), v > i.slideamount && (v = i.slideamount), i.startWithSlide = v - 1
            }
            e.append('<div class="tp-loader ' + i.spinner + '"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>'), i.loader = e.find(".tp-loader"), 0 === e.find(".tp-bannertimer").length && e.append('<div class="tp-bannertimer" style="visibility:hidden"></div>'), e.find(".tp-bannertimer").css({width: "0%"}), i.ul.css({display: "block"}), prepareSlides(e, i), ("off" !== i.parallax.type || i.scrolleffect.on) && _R.checkForParallax && _R.checkForParallax(e, i), _R.setSize(i), "hero" !== i.sliderType && _R.createNavigation && _R.createNavigation(e, i), _R.resizeThumbsTabs && _R.resizeThumbsTabs && _R.resizeThumbsTabs(i), contWidthManager(i);
            var m = i.viewPort;
            i.inviewport = !1, m != undefined && m.enable && (jQuery.isNumeric(m.visible_area) || -1 !== m.visible_area.indexOf("%") && (m.visible_area = parseInt(m.visible_area) / 100), _R.scrollTicker && _R.scrollTicker(i, e)), "carousel" === i.sliderType && _R.prepareCarousel && (punchgs.TweenLite.set(i.ul, {opacity: 0}), _R.prepareCarousel(i, new punchgs.TimelineLite, undefined, 0), i.onlyPreparedSlide = !0), setTimeout(function () {
                if (!m.enable || m.enable && i.inviewport || m.enable && !i.inviewport && "wait" == !m.outof) swapSlide(e); else if (i.c.addClass("tp-waitforfirststart"), i.waitForFirstSlide = !0, m.presize) {
                    var t = jQuery(i.li[0]);
                    loadImages(t, i, 0, !0), waitForCurrentImages(t.find(".tp-layers"), i, function () {
                        _R.animateTheCaptions({slide: t, opt: i, preset: !0})
                    })
                }
                _R.manageNavigation && _R.manageNavigation(i), i.slideamount > 1 && (!m.enable || m.enable && i.inviewport ? countDown(e, i) : i.waitForCountDown = !0), setTimeout(function () {
                    e.trigger("revolution.slide.onloaded")
                }, 100)
            }, i.startDelay), i.startDelay = 0, jQuery("body").data("rs-fullScreenMode", !1), window.addEventListener("fullscreenchange", onFullScreenChange, {passive: !0}), window.addEventListener("mozfullscreenchange", onFullScreenChange, {passive: !0}), window.addEventListener("webkitfullscreenchange", onFullScreenChange, {passive: !0});
            var y = "resize.revslider-" + e.attr("id");
            jQuery(window).on(y, function () {
                if (e == undefined) return !1;
                0 != jQuery("body").find(e) && contWidthManager(i);
                var t = !1;
                if ("fullscreen" == i.sliderLayout) {
                    var a = jQuery(window).height();
                    "mobile" == i.fallbacks.ignoreHeightChanges && _ISM || "always" == i.fallbacks.ignoreHeightChanges ? (i.fallbacks.ignoreHeightChangesSize = i.fallbacks.ignoreHeightChangesSize == undefined ? 0 : i.fallbacks.ignoreHeightChangesSize, t = a != i.lastwindowheight && Math.abs(a - i.lastwindowheight) > i.fallbacks.ignoreHeightChangesSize) : t = a != i.lastwindowheight
                }
                (e.outerWidth(!0) != i.width || e.is(":hidden") || t) && (i.lastwindowheight = jQuery(window).height(), containerResized(e, i))
            }), hideSliderUnder(e, i), contWidthManager(i), i.fallbacks.disableFocusListener || "true" == i.fallbacks.disableFocusListener || !0 === i.fallbacks.disableFocusListener || (e.addClass("rev_redraw_on_blurfocus"), tabBlurringCheck())
        }
    }, cArray = function (e, i) {
        if (!jQuery.isArray(e)) {
            t = e;
            (e = new Array).push(t)
        }
        if (e.length < i) for (var t = e[e.length - 1], a = 0; a < i - e.length + 2; a++) e.push(t);
        return e
    }, checkHoverDependencies = function (e, i) {
        var t = e.data();
        ("sliderenter" === t.start || t.frames !== undefined && t.frames[0] != undefined && "sliderenter" === t.frames[0].delay) && (i.layersonhover === undefined && (i.c.on("tp-mouseenter", function () {
            i.layersonhover && jQuery.each(i.layersonhover, function (e, t) {
                var a = t.data("closestli") || t.closest(".tp-revslider-slidesli"),
                    n = t.data("staticli") || t.closest(".tp-static-layers");
                t.data("closestli") === undefined && (t.data("closestli", a), t.data("staticli", n)), (a.length > 0 && a.hasClass("active-revslide") || a.hasClass("processing-revslide") || n.length > 0) && (t.data("animdirection", "in"), _R.playAnimationFrame && _R.playAnimationFrame({
                    caption: t,
                    opt: i,
                    frame: "frame_0",
                    triggerdirection: "in",
                    triggerframein: "frame_0",
                    triggerframeout: "frame_999"
                }), t.data("triggerstate", "on"))
            })
        }), i.c.on("tp-mouseleft", function () {
            i.layersonhover && jQuery.each(i.layersonhover, function (e, t) {
                t.data("animdirection", "out"), t.data("triggered", !0), t.data("triggerstate", "off"), _R.stopVideo && _R.stopVideo(t, i), _R.playAnimationFrame && _R.playAnimationFrame({
                    caption: t,
                    opt: i,
                    frame: "frame_999",
                    triggerdirection: "out",
                    triggerframein: "frame_0",
                    triggerframeout: "frame_999"
                })
            })
        }), i.layersonhover = new Array), i.layersonhover.push(e))
    }, contWidthManager = function (e) {
        var i = _R.getHorizontalOffset(e.c, "left");
        if ("auto" == e.sliderLayout || "fullscreen" === e.sliderLayout && "on" == e.fullScreenAutoWidth) "fullscreen" == e.sliderLayout && "on" == e.fullScreenAutoWidth ? punchgs.TweenLite.set(e.ul, {
            left: 0,
            width: e.c.width()
        }) : punchgs.TweenLite.set(e.ul, {left: i, width: e.c.width() - _R.getHorizontalOffset(e.c, "both")}); else {
            var t = Math.ceil(e.c.closest(".forcefullwidth_wrapper_tp_banner").offset().left - i);
            punchgs.TweenLite.set(e.c.parent(), {
                left: 0 - t + "px",
                width: jQuery(window).width() - _R.getHorizontalOffset(e.c, "both")
            })
        }
        e.slayers && "fullwidth" != e.sliderLayout && "fullscreen" != e.sliderLayout && punchgs.TweenLite.set(e.slayers, {left: i})
    }, cv = function (e, i) {
        return e === undefined ? i : e
    }, hideSliderUnder = function (e, i, t) {
        var a = e.parent();
        jQuery(window).width() < i.hideSliderAtLimit ? (e.trigger("stoptimer"), "none" != a.css("display") && a.data("olddisplay", a.css("display")), a.css({display: "none"})) : e.is(":hidden") && t && (a.data("olddisplay") != undefined && "undefined" != a.data("olddisplay") && "none" != a.data("olddisplay") ? a.css({display: a.data("olddisplay")}) : a.css({display: "block"}), e.trigger("restarttimer"), setTimeout(function () {
            containerResized(e, i)
        }, 150)), _R.hideUnHideNav && _R.hideUnHideNav(i)
    }, containerResized = function (e, i) {
        if (e.trigger("revolution.slide.beforeredraw"), 1 == i.infullscreenmode && (i.minHeight = jQuery(window).height()), setCurWinRange(i), setCurWinRange(i, !0), !_R.resizeThumbsTabs || !0 === _R.resizeThumbsTabs(i)) {
            if (hideSliderUnder(e, i, !0), contWidthManager(i), "carousel" == i.sliderType && _R.prepareCarousel(i, !0), e === undefined) return !1;
            _R.setSize(i), i.conw = i.c.width(), i.conh = i.infullscreenmode ? i.minHeight : i.c.height();
            var t = e.find(".active-revslide .slotholder"), a = e.find(".processing-revslide .slotholder");
            removeSlots(e, i, e, 2), "standard" === i.sliderType && (punchgs.TweenLite.set(a.find(".defaultimg"), {opacity: 0}), t.find(".defaultimg").css({opacity: 1})), "carousel" === i.sliderType && i.lastconw != i.conw && (clearTimeout(i.pcartimer), i.pcartimer = setTimeout(function () {
                _R.prepareCarousel(i, !0), "carousel" == i.sliderType && "on" === i.carousel.showLayersAllTime && jQuery.each(i.li, function (e) {
                    _R.animateTheCaptions({slide: jQuery(i.li[e]), opt: i, recall: !0})
                })
            }, 100), i.lastconw = i.conw), _R.manageNavigation && _R.manageNavigation(i), _R.animateTheCaptions && e.find(".active-revslide").length > 0 && _R.animateTheCaptions({
                slide: e.find(".active-revslide"),
                opt: i,
                recall: !0
            }), "on" == a.data("kenburns") && _R.startKenBurn(a, i, a.data("kbtl") !== undefined ? a.data("kbtl").progress() : 0), "on" == t.data("kenburns") && _R.startKenBurn(t, i, t.data("kbtl") !== undefined ? t.data("kbtl").progress() : 0), _R.animateTheCaptions && e.find(".processing-revslide").length > 0 && _R.animateTheCaptions({
                slide: e.find(".processing-revslide"),
                opt: i,
                recall: !0
            }), _R.manageNavigation && _R.manageNavigation(i)
        }
        e.trigger("revolution.slide.afterdraw")
    }, setScale = function (e) {
        e.bw = e.width / e.gridwidth[e.curWinRange], e.bh = e.height / e.gridheight[e.curWinRange], e.bh > e.bw ? e.bh = e.bw : e.bw = e.bh, (e.bh > 1 || e.bw > 1) && (e.bw = 1, e.bh = 1)
    }, prepareSlides = function (e, i) {
        if (e.find(".tp-caption").each(function () {
                var e = jQuery(this);
                e.data("transition") !== undefined && e.addClass(e.data("transition"))
            }), i.ul.css({
                overflow: "hidden",
                width: "100%",
                height: "100%",
                maxHeight: e.parent().css("maxHeight")
            }), "on" == i.autoHeight && (i.ul.css({
                overflow: "hidden",
                width: "100%",
                height: "100%",
                maxHeight: "none"
            }), e.css({maxHeight: "none"}), e.parent().css({maxHeight: "none"})), i.allli.each(function (e) {
                var t = jQuery(this), a = t.data("originalindex");
                (i.startWithSlide != undefined && a == i.startWithSlide || i.startWithSlide === undefined && 0 == e) && t.addClass("next-revslide"), t.css({
                    width: "100%",
                    height: "100%",
                    overflow: "hidden"
                })
            }), "carousel" === i.sliderType) {
            i.ul.css({overflow: "visible"}).wrap('<div class="tp-carousel-wrapper" style="width:100%;height:100%;position:absolute;top:0px;left:0px;overflow:hidden;"></div>');
            var t = '<div style="clear:both;display:block;width:100%;height:1px;position:relative;margin-bottom:-1px"></div>';
            i.c.parent().prepend(t), i.c.parent().append(t), _R.prepareCarousel(i)
        }
        e.parent().css({overflow: "visible"}), i.allli.find(">img").each(function (e) {
            var t = jQuery(this), a = t.closest("li"), n = a.find(".rs-background-video-layer");
            n.addClass("defaultvid").css({zIndex: 30}), t.addClass("defaultimg"), "on" == i.fallbacks.panZoomDisableOnMobile && _ISM && (t.data("kenburns", "off"), t.data("bgfit", "cover"));
            var r = a.data("mediafilter");
            r = "none" === r || r === undefined ? "" : r, t.wrap('<div class="slotholder" style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;"></div>'), n.appendTo(a.find(".slotholder"));
            var o = t.data();
            t.closest(".slotholder").data(o), n.length > 0 && o.bgparallax != undefined && (n.data("bgparallax", o.bgparallax), n.data("showcoveronpause", "on")), "none" != i.dottedOverlay && i.dottedOverlay != undefined && t.closest(".slotholder").append('<div class="tp-dottedoverlay ' + i.dottedOverlay + '"></div>');
            var s = t.attr("src");
            o.src = s, o.bgfit = o.bgfit || "cover", o.bgrepeat = o.bgrepeat || "no-repeat", o.bgposition = o.bgposition || "center center";
            t.closest(".slotholder");
            var l = t.data("bgcolor"), d = "";
            d = l !== undefined && l.indexOf("gradient") >= 0 ? '"background:' + l + ';width:100%;height:100%;"' : '"background-color:' + l + ";background-repeat:" + o.bgrepeat + ";background-image:url(" + s + ");background-size:" + o.bgfit + ";background-position:" + o.bgposition + ';width:100%;height:100%;"', t.data("mediafilter", r), r = "on" === t.data("kenburns") ? "" : r;
            var c = jQuery('<div class="tp-bgimg defaultimg ' + r + '" data-bgcolor="' + l + '" style=' + d + "></div>");
            t.parent().append(c);
            var u = document.createComment("Runtime Modification - Img tag is Still Available for SEO Goals in Source - " + t.get(0).outerHTML);
            t.replaceWith(u), c.data(o), c.attr("src", s), "standard" !== i.sliderType && "undefined" !== i.sliderType || c.css({opacity: 0})
        }), i.scrolleffect.on && "on" === i.scrolleffect.on_slidebg && (i.allslotholder = new Array, i.allli.find(".slotholder").each(function () {
            jQuery(this).wrap('<div style="display:block;position:absolute;top:0px;left:0px;width:100%;height:100%" class="slotholder_fadeoutwrap"></div>')
        }), i.allslotholder = i.c.find(".slotholder_fadeoutwrap"))
    }, removeSlots = function (e, i, t, a) {
        i.removePrepare = i.removePrepare + a, t.find(".slot, .slot-circle-wrapper").each(function () {
            jQuery(this).remove()
        }), i.transition = 0, i.removePrepare = 0
    }, cutParams = function (e) {
        var i = e;
        return e != undefined && e.length > 0 && (i = e.split("?")[0]), i
    }, relativeRedir = function (e) {
        return location.pathname.replace(/(.*)\/[^/]*/, "$1/" + e)
    }, abstorel = function (e, i) {
        var t = e.split("/"), a = i.split("/");
        t.pop();
        for (var n = 0; n < a.length; n++) "." != a[n] && (".." == a[n] ? t.pop() : t.push(a[n]));
        return t.join("/")
    }, imgLoaded = function (e, i, t) {
        i.syncload--, i.loadqueue && jQuery.each(i.loadqueue, function (i, a) {
            var n = a.src.replace(/\.\.\/\.\.\//gi, ""), r = self.location.href, o = document.location.origin,
                s = r.substring(0, r.length - 1) + "/" + n, l = o + "/" + n, d = abstorel(self.location.href, a.src);
            r = r.substring(0, r.length - 1) + n, (cutParams(o += n) === cutParams(decodeURIComponent(e.src)) || cutParams(r) === cutParams(decodeURIComponent(e.src)) || cutParams(d) === cutParams(decodeURIComponent(e.src)) || cutParams(l) === cutParams(decodeURIComponent(e.src)) || cutParams(s) === cutParams(decodeURIComponent(e.src)) || cutParams(a.src) === cutParams(decodeURIComponent(e.src)) || cutParams(a.src).replace(/^.*\/\/[^\/]+/, "") === cutParams(decodeURIComponent(e.src)).replace(/^.*\/\/[^\/]+/, "") || "file://" === window.location.origin && cutParams(e.src).match(new RegExp(n))) && (a.progress = t, a.width = e.width, a.height = e.height)
        }), progressImageLoad(i)
    }, progressImageLoad = function (e) {
        3 != e.syncload && e.loadqueue && jQuery.each(e.loadqueue, function (i, t) {
            if (t.progress.match(/prepared/g) && e.syncload <= 3) {
                if (e.syncload++, "img" == t.type) {
                    var a = new Image;
                    a.onload = function () {
                        imgLoaded(this, e, "loaded"), t.error = !1
                    }, a.onerror = function () {
                        imgLoaded(this, e, "failed"), t.error = !0
                    }, a.src = t.src
                } else jQuery.get(t.src, function (i) {
                    t.innerHTML = (new XMLSerializer).serializeToString(i.documentElement), t.progress = "loaded", e.syncload--, progressImageLoad(e)
                }).fail(function () {
                    t.progress = "failed", e.syncload--, progressImageLoad(e)
                });
                t.progress = "inload"
            }
        })
    }, addToLoadQueue = function (e, i, t, a, n) {
        var r = !1;
        if (i.loadqueue && jQuery.each(i.loadqueue, function (i, t) {
                t.src === e && (r = !0)
            }), !r) {
            var o = new Object;
            o.src = e, o.starttoload = jQuery.now(), o.type = a || "img", o.prio = t, o.progress = "prepared", o.static = n, i.loadqueue.push(o)
        }
    }, loadImages = function (e, i, t, a) {
        e.find("img,.defaultimg, .tp-svg-layer").each(function () {
            var e = jQuery(this),
                n = e.data("lazyload") !== undefined && "undefined" !== e.data("lazyload") ? e.data("lazyload") : e.data("svg_src") != undefined ? e.data("svg_src") : e.attr("src"),
                r = e.data("svg_src") != undefined ? "svg" : "img";
            e.data("start-to-load", jQuery.now()), addToLoadQueue(n, i, t, r, a)
        }), progressImageLoad(i)
    }, getLoadObj = function (e, i) {
        var t = new Object;
        return e.loadqueue && jQuery.each(e.loadqueue, function (e, a) {
            a.src == i && (t = a)
        }), t
    }, waitForCurrentImages = function (e, i, t) {
        var a = !1;
        e.find("img,.defaultimg, .tp-svg-layer").each(function () {
            var t = jQuery(this),
                n = t.data("lazyload") != undefined ? t.data("lazyload") : t.data("svg_src") != undefined ? t.data("svg_src") : t.attr("src"),
                r = getLoadObj(i, n);
            if (t.data("loaded") === undefined && r !== undefined && r.progress && r.progress.match(/loaded/g)) {
                if (t.attr("src", r.src), "img" == r.type) if (t.hasClass("defaultimg")) _R.isIE(8) ? defimg.attr("src", r.src) : -1 == r.src.indexOf("images/transparent.png") && -1 == r.src.indexOf("assets/transparent.png") || t.data("bgcolor") === undefined ? t.css({backgroundImage: 'url("' + r.src + '")'}) : t.data("bgcolor") !== undefined && t.css({background: t.data("bgcolor")}), e.data("owidth", r.width), e.data("oheight", r.height), e.find(".slotholder").data("owidth", r.width), e.find(".slotholder").data("oheight", r.height); else {
                    var o = t.data("ww"), s = t.data("hh");
                    t.data("owidth", r.width), t.data("oheight", r.height), o = o == undefined || "auto" == o || "" == o ? r.width : o, s = s == undefined || "auto" == s || "" == s ? r.height : s, !jQuery.isNumeric(o) && o.indexOf("%") > 0 && (s = o), t.data("ww", o), t.data("hh", s)
                } else "svg" == r.type && "loaded" == r.progress && (t.append('<div class="tp-svg-innercontainer"></div>'), t.find(".tp-svg-innercontainer").append(r.innerHTML));
                t.data("loaded", !0)
            }
            if (r && r.progress && r.progress.match(/inprogress|inload|prepared/g) && (!r.error && jQuery.now() - t.data("start-to-load") < 5e3 ? a = !0 : (r.progress = "failed", r.reported_img || (r.reported_img = !0, console.warn(n + "  Could not be loaded !")))), 1 == i.youtubeapineeded && (!window.YT || YT.Player == undefined) && (a = !0, jQuery.now() - i.youtubestarttime > 5e3 && 1 != i.youtubewarning)) {
                i.youtubewarning = !0;
                l = "YouTube Api Could not be loaded !";
                "https:" === location.protocol && (l += " Please Check and Renew SSL Certificate !"), console.error(l), i.c.append('<div style="position:absolute;top:50%;width:100%;color:#e74c3c;  font-size:16px; text-align:center; padding:15px;background:#000; display:block;"><strong>' + l + "</strong></div>")
            }
            if (1 == i.vimeoapineeded && !window.Vimeo && (a = !0, jQuery.now() - i.vimeostarttime > 5e3 && 1 != i.vimeowarning)) {
                i.vimeowarning = !0;
                var l = "Vimeo Api Could not be loaded !";
                "https:" === location.protocol && (l += " Please Check and Renew SSL Certificate !"), console.error(l), i.c.append('<div style="position:absolute;top:50%;width:100%;color:#e74c3c;  font-size:16px; text-align:center; padding:15px;background:#000; display:block;"><strong>' + l + "</strong></div>")
            }
        }), !_ISM && i.audioqueue && i.audioqueue.length > 0 && jQuery.each(i.audioqueue, function (e, i) {
            i.status && "prepared" === i.status && jQuery.now() - i.start < i.waittime && (a = !0)
        }), jQuery.each(i.loadqueue, function (e, i) {
            !0 !== i.static || "loaded" == i.progress && "failed" !== i.progress || ("failed" == i.progress ? i.reported || (i.reported = !0, console.warn("Static Image " + i.src + "  Could not be loaded in time. Error Exists:" + i.error)) : !i.error && jQuery.now() - i.starttoload < 5e3 ? a = !0 : i.reported || (i.reported = !0, console.warn("Static Image " + i.src + "  Could not be loaded within 5s! Error Exists:" + i.error)))
        }), a ? punchgs.TweenLite.delayedCall(.18, waitForCurrentImages, [e, i, t]) : punchgs.TweenLite.delayedCall(.18, t)
    }, swapSlide = function (e) {
        var i = e[0].opt;
        if (clearTimeout(i.waitWithSwapSlide), e.find(".processing-revslide").length > 0) return i.waitWithSwapSlide = setTimeout(function () {
            swapSlide(e)
        }, 150), !1;
        var t = e.find(".active-revslide"), a = e.find(".next-revslide"), n = a.find(".defaultimg");
        if ("carousel" !== i.sliderType || i.carousel.fadein || (punchgs.TweenLite.to(i.ul, 1, {opacity: 1}), i.carousel.fadein = !0), a.index() === t.index() && !0 !== i.onlyPreparedSlide) return a.removeClass("next-revslide"), !1;
        !0 === i.onlyPreparedSlide && (i.onlyPreparedSlide = !1, jQuery(i.li[0]).addClass("processing-revslide")), a.removeClass("next-revslide").addClass("processing-revslide"), -1 === a.index() && "carousel" === i.sliderType && (a = jQuery(i.li[0])), a.data("slide_on_focus_amount", a.data("slide_on_focus_amount") + 1 || 1), "on" == i.stopLoop && a.index() == i.lastslidetoshow - 1 && (e.find(".tp-bannertimer").css({visibility: "hidden"}), e.trigger("revolution.slide.onstop"), i.noloopanymore = 1), a.index() === i.slideamount - 1 && (i.looptogo = i.looptogo - 1, i.looptogo <= 0 && (i.stopLoop = "on")), i.tonpause = !0, e.trigger("stoptimer"), i.cd = 0, "off" === i.spinner && (i.loader !== undefined ? i.loader.css({display: "none"}) : i.loadertimer = setTimeout(function () {
            i.loader !== undefined && i.loader.css({display: "block"})
        }, 50)), loadImages(a, i, 1), _R.preLoadAudio && _R.preLoadAudio(a, i, 1), waitForCurrentImages(a, i, function () {
            a.find(".rs-background-video-layer").each(function () {
                var e = jQuery(this);
                e.hasClass("HasListener") || (e.data("bgvideo", 1), _R.manageVideoLayer && _R.manageVideoLayer(e, i)), 0 == e.find(".rs-fullvideo-cover").length && e.append('<div class="rs-fullvideo-cover"></div>')
            }), swapSlideProgress(n, e)
        })
    }, swapSlideProgress = function (e, i) {
        var t = i.find(".active-revslide"), a = i.find(".processing-revslide"), n = t.find(".slotholder"),
            r = a.find(".slotholder"), o = i[0].opt;
        o.tonpause = !1, o.cd = 0, clearTimeout(o.loadertimer), o.loader !== undefined && o.loader.css({display: "none"}), _R.setSize(o), _R.slotSize(e, o), _R.manageNavigation && _R.manageNavigation(o);
        var s = {};
        s.nextslide = a, s.currentslide = t, i.trigger("revolution.slide.onbeforeswap", s), o.transition = 1, o.videoplaying = !1, a.data("delay") != undefined ? (o.cd = 0, o.delay = a.data("delay")) : o.delay = o.origcd, "true" == a.data("ssop") || !0 === a.data("ssop") ? o.ssop = !0 : o.ssop = !1, i.trigger("nulltimer");
        var l = t.index(), d = a.index();
        o.sdir = d < l ? 1 : 0, "arrow" == o.sc_indicator && (0 == l && d == o.slideamount - 1 && (o.sdir = 1), l == o.slideamount - 1 && 0 == d && (o.sdir = 0)), o.lsdir = o.lsdir === undefined ? o.sdir : o.lsdir, o.dirc = o.lsdir != o.sdir, o.lsdir = o.sdir, t.index() != a.index() && 1 != o.firststart && _R.removeTheCaptions && _R.removeTheCaptions(t, o), a.hasClass("rs-pause-timer-once") || a.hasClass("rs-pause-timer-always") ? o.videoplaying = !0 : i.trigger("restarttimer"), a.removeClass("rs-pause-timer-once");
        var c, u;
        if (o.currentSlide = t.index(), o.nextSlide = a.index(), "carousel" == o.sliderType) u = new punchgs.TimelineLite, _R.prepareCarousel(o, u), letItFree(i, r, n, a, t, u), o.transition = 0, o.firststart = 0; else {
            (u = new punchgs.TimelineLite({
                onComplete: function () {
                    letItFree(i, r, n, a, t, u)
                }
            })).add(punchgs.TweenLite.set(r.find(".defaultimg"), {opacity: 0})), u.pause(), _R.animateTheCaptions && _R.animateTheCaptions({
                slide: a,
                opt: o,
                preset: !0
            }), 1 == o.firststart && (punchgs.TweenLite.set(t, {autoAlpha: 0}), o.firststart = 0), punchgs.TweenLite.set(t, {zIndex: 18}), punchgs.TweenLite.set(a, {
                autoAlpha: 0,
                zIndex: 20
            }), "prepared" == a.data("differentissplayed") && (a.data("differentissplayed", "done"), a.data("transition", a.data("savedtransition")), a.data("slotamount", a.data("savedslotamount")), a.data("masterspeed", a.data("savedmasterspeed"))), a.data("fstransition") != undefined && "done" != a.data("differentissplayed") && (a.data("savedtransition", a.data("transition")), a.data("savedslotamount", a.data("slotamount")), a.data("savedmasterspeed", a.data("masterspeed")), a.data("transition", a.data("fstransition")), a.data("slotamount", a.data("fsslotamount")), a.data("masterspeed", a.data("fsmasterspeed")), a.data("differentissplayed", "prepared")), a.data("transition") == undefined && a.data("transition", "random"), c = 0;
            var p = a.data("transition") !== undefined ? a.data("transition").split(",") : "fade",
                f = a.data("nexttransid") == undefined ? -1 : a.data("nexttransid");
            "on" == a.data("randomtransition") ? f = Math.round(Math.random() * p.length) : f += 1, f == p.length && (f = 0), a.data("nexttransid", f);
            var h = p[f];
            o.ie && ("boxfade" == h && (h = "boxslide"), "slotfade-vertical" == h && (h = "slotzoom-vertical"), "slotfade-horizontal" == h && (h = "slotzoom-horizontal")), _R.isIE(8) && (h = 11), u = _R.animateSlide(c, h, i, a, t, r, n, u), "on" == r.data("kenburns") && (_R.startKenBurn(r, o), u.add(punchgs.TweenLite.set(r, {autoAlpha: 0}))), u.pause()
        }
        _R.scrollHandling && (_R.scrollHandling(o, !0, 0), u.eventCallback("onUpdate", function () {
            _R.scrollHandling(o, !0, 0)
        })), "off" != o.parallax.type && o.parallax.firstgo == undefined && _R.scrollHandling && (o.parallax.firstgo = !0, o.lastscrolltop = -999, _R.scrollHandling(o, !0, 0), setTimeout(function () {
            o.lastscrolltop = -999, _R.scrollHandling(o, !0, 0)
        }, 210), setTimeout(function () {
            o.lastscrolltop = -999, _R.scrollHandling(o, !0, 0)
        }, 420)), _R.animateTheCaptions ? "carousel" === o.sliderType && "on" === o.carousel.showLayersAllTime ? (jQuery.each(o.li, function (e) {
            o.carousel.allLayersStarted ? _R.animateTheCaptions({
                slide: jQuery(o.li[e]),
                opt: o,
                recall: !0
            }) : o.li[e] === a ? _R.animateTheCaptions({
                slide: jQuery(o.li[e]),
                maintimeline: u,
                opt: o,
                startslideanimat: 0
            }) : _R.animateTheCaptions({slide: jQuery(o.li[e]), opt: o, startslideanimat: 0})
        }), o.carousel.allLayersStarted = !0) : _R.animateTheCaptions({
            slide: a,
            opt: o,
            maintimeline: u,
            startslideanimat: 0
        }) : u != undefined && setTimeout(function () {
            u.resume()
        }, 30), punchgs.TweenLite.to(a, .001, {autoAlpha: 1})
    }, letItFree = function (e, i, t, a, n, r) {
        var o = e[0].opt;
        "carousel" === o.sliderType || (o.removePrepare = 0, punchgs.TweenLite.to(i.find(".defaultimg"), .001, {
            zIndex: 20,
            autoAlpha: 1,
            onComplete: function () {
                removeSlots(e, o, a, 1)
            }
        }), a.index() != n.index() && punchgs.TweenLite.to(n, .2, {
            zIndex: 18, autoAlpha: 0, onComplete: function () {
                removeSlots(e, o, n, 1)
            }
        })), e.find(".active-revslide").removeClass("active-revslide"), e.find(".processing-revslide").removeClass("processing-revslide").addClass("active-revslide"), o.act = a.index(), o.c.attr("data-slideactive", e.find(".active-revslide").data("index")), "scroll" != o.parallax.type && "scroll+mouse" != o.parallax.type && "mouse+scroll" != o.parallax.type || (o.lastscrolltop = -999, _R.scrollHandling(o)), r.clear(), t.data("kbtl") != undefined && (t.data("kbtl").reverse(), t.data("kbtl").timeScale(25)), "on" == i.data("kenburns") && (i.data("kbtl") != undefined ? (i.data("kbtl").timeScale(1), i.data("kbtl").play()) : _R.startKenBurn(i, o)), a.find(".rs-background-video-layer").each(function (e) {
            if (_ISM && !o.fallbacks.allowHTML5AutoPlayOnAndroid) return !1;
            var i = jQuery(this);
            _R.resetVideo(i, o, !1, !0), punchgs.TweenLite.fromTo(i, 1, {autoAlpha: 0}, {
                autoAlpha: 1,
                ease: punchgs.Power3.easeInOut,
                delay: .2,
                onComplete: function () {
                    _R.animcompleted && _R.animcompleted(i, o)
                }
            })
        }), n.find(".rs-background-video-layer").each(function (e) {
            if (_ISM) return !1;
            var i = jQuery(this);
            _R.stopVideo && (_R.resetVideo(i, o), _R.stopVideo(i, o)), punchgs.TweenLite.to(i, 1, {
                autoAlpha: 0,
                ease: punchgs.Power3.easeInOut,
                delay: .2
            })
        });
        var s = {};
        if (s.slideIndex = a.index() + 1, s.slideLIIndex = a.index(), s.slide = a, s.currentslide = a, s.prevslide = n, o.last_shown_slide = n.index(), e.trigger("revolution.slide.onchange", s), e.trigger("revolution.slide.onafterswap", s), o.startWithSlide !== undefined && "done" !== o.startWithSlide && "carousel" === o.sliderType) {
            for (var l = o.startWithSlide, d = 0; d <= o.li.length - 1; d++) jQuery(o.li[d]).data("originalindex") === o.startWithSlide && (l = d);
            0 !== l && _R.callingNewSlide(o.c, l), o.startWithSlide = "done"
        }
        o.duringslidechange = !1;
        var c = n.data("slide_on_focus_amount"), u = n.data("hideafterloop");
        0 != u && u <= c && o.c.revremoveslide(n.index());
        var p = -1 === o.nextSlide || o.nextSlide === undefined ? 0 : o.nextSlide;
        o.rowzones != undefined && (p = p > o.rowzones.length ? o.rowzones.length : p), o.rowzones != undefined && o.rowzones.length > 0 && o.rowzones[p] != undefined && p >= 0 && p <= o.rowzones.length && o.rowzones[p].length > 0 && _R.setSize(o)
    }, removeAllListeners = function (e, i) {
        e.children().each(function () {
            try {
                jQuery(this).die("click")
            } catch (e) {
            }
            try {
                jQuery(this).die("mouseenter")
            } catch (e) {
            }
            try {
                jQuery(this).die("mouseleave")
            } catch (e) {
            }
            try {
                jQuery(this).unbind("hover")
            } catch (e) {
            }
        });
        try {
            e.die("click", "mouseenter", "mouseleave")
        } catch (e) {
        }
        clearInterval(i.cdint), e = null
    }, countDown = function (e, i) {
        i.cd = 0, i.loop = 0, i.stopAfterLoops != undefined && i.stopAfterLoops > -1 ? i.looptogo = i.stopAfterLoops : i.looptogo = 9999999, i.stopAtSlide != undefined && i.stopAtSlide > -1 ? i.lastslidetoshow = i.stopAtSlide : i.lastslidetoshow = 999, i.stopLoop = "off", 0 == i.looptogo && (i.stopLoop = "on");
        var t = e.find(".tp-bannertimer");
        e.on("stoptimer", function () {
            var e = jQuery(this).find(".tp-bannertimer");
            e[0].tween.pause(), "on" == i.disableProgressBar && e.css({visibility: "hidden"}), i.sliderstatus = "paused", _R.unToggleState(i.slidertoggledby)
        }), e.on("starttimer", function () {
            i.forcepause_viatoggle || (1 != i.conthover && 1 != i.videoplaying && i.width > i.hideSliderAtLimit && 1 != i.tonpause && 1 != i.overnav && 1 != i.ssop && (1 === i.noloopanymore || i.viewPort.enable && !i.inviewport || (t.css({visibility: "visible"}), t[0].tween.resume(), i.sliderstatus = "playing")), "on" == i.disableProgressBar && t.css({visibility: "hidden"}), _R.toggleState(i.slidertoggledby))
        }), e.on("restarttimer", function () {
            if (!i.forcepause_viatoggle) {
                var e = jQuery(this).find(".tp-bannertimer");
                if (i.mouseoncontainer && "on" == i.navigation.onHoverStop && !_ISM) return !1;
                1 === i.noloopanymore || i.viewPort.enable && !i.inviewport || 1 == i.ssop || (e.css({visibility: "visible"}), e[0].tween.kill(), e[0].tween = punchgs.TweenLite.fromTo(e, i.delay / 1e3, {width: "0%"}, {
                    force3D: "auto",
                    width: "100%",
                    ease: punchgs.Linear.easeNone,
                    onComplete: a,
                    delay: 1
                }), i.sliderstatus = "playing"), "on" == i.disableProgressBar && e.css({visibility: "hidden"}), _R.toggleState(i.slidertoggledby)
            }
        }), e.on("nulltimer", function () {
            t[0].tween.kill(), t[0].tween = punchgs.TweenLite.fromTo(t, i.delay / 1e3, {width: "0%"}, {
                force3D: "auto",
                width: "100%",
                ease: punchgs.Linear.easeNone,
                onComplete: a,
                delay: 1
            }), t[0].tween.pause(0), "on" == i.disableProgressBar && t.css({visibility: "hidden"}), i.sliderstatus = "paused"
        });
        var a = function () {
            0 == jQuery("body").find(e).length && (removeAllListeners(e, i), clearInterval(i.cdint)), e.trigger("revolution.slide.slideatend"), 1 == e.data("conthover-changed") && (i.conthover = e.data("conthover"), e.data("conthover-changed", 0)), _R.callingNewSlide(e, 1)
        };
        t[0].tween = punchgs.TweenLite.fromTo(t, i.delay / 1e3, {width: "0%"}, {
            force3D: "auto",
            width: "100%",
            ease: punchgs.Linear.easeNone,
            onComplete: a,
            delay: 1
        }), i.slideamount > 1 && (0 != i.stopAfterLoops || 1 != i.stopAtSlide) ? e.trigger("starttimer") : (i.noloopanymore = 1, e.trigger("nulltimer")), e.on("tp-mouseenter", function () {
            i.mouseoncontainer = !0, "on" != i.navigation.onHoverStop || _ISM || (e.trigger("stoptimer"), e.trigger("revolution.slide.onpause"))
        }), e.on("tp-mouseleft", function () {
            i.mouseoncontainer = !1, 1 != e.data("conthover") && "on" == i.navigation.onHoverStop && (1 == i.viewPort.enable && i.inviewport || 0 == i.viewPort.enable) && (e.trigger("revolution.slide.onresume"), e.trigger("starttimer"))
        })
    }, vis = function () {
        var e, i, t = {
            hidden: "visibilitychange",
            webkitHidden: "webkitvisibilitychange",
            mozHidden: "mozvisibilitychange",
            msHidden: "msvisibilitychange"
        };
        for (e in t) if (e in document) {
            i = t[e];
            break
        }
        return function (t) {
            return t && document.addEventListener(i, t, {pasive: !0}), !document[e]
        }
    }(), restartOnFocus = function () {
        jQuery(".rev_redraw_on_blurfocus").each(function () {
            var e = jQuery(this)[0].opt;
            if (e == undefined || e.c == undefined || 0 === e.c.length) return !1;
            1 != e.windowfocused && (e.windowfocused = !0, punchgs.TweenLite.delayedCall(.3, function () {
                "on" == e.fallbacks.nextSlideOnWindowFocus && e.c.revnext(), e.c.revredraw(), "playing" == e.lastsliderstatus && e.c.revresume()
            }))
        })
    }, lastStatBlur = function () {
        jQuery(".rev_redraw_on_blurfocus").each(function () {
            var e = jQuery(this)[0].opt;
            e.windowfocused = !1, e.lastsliderstatus = e.sliderstatus, e.c.revpause();
            var i = e.c.find(".active-revslide .slotholder"), t = e.c.find(".processing-revslide .slotholder");
            "on" == t.data("kenburns") && _R.stopKenBurn(t, e), "on" == i.data("kenburns") && _R.stopKenBurn(i, e)
        })
    }, tabBlurringCheck = function () {
        var e = document.documentMode === undefined, i = window.chrome;
        1 !== jQuery("body").data("revslider_focus_blur_listener") && (jQuery("body").data("revslider_focus_blur_listener", 1), e && !i ? jQuery(window).on("focusin", function () {
            restartOnFocus()
        }).on("focusout", function () {
            lastStatBlur()
        }) : window.addEventListener ? (window.addEventListener("focus", function (e) {
            restartOnFocus()
        }, {capture: !1, passive: !0}), window.addEventListener("blur", function (e) {
            lastStatBlur()
        }, {capture: !1, passive: !0})) : (window.attachEvent("focus", function (e) {
            restartOnFocus()
        }), window.attachEvent("blur", function (e) {
            lastStatBlur()
        })))
    }, getUrlVars = function (e) {
        for (var i, t = [], a = window.location.href.slice(window.location.href.indexOf(e) + 1).split("_"), n = 0; n < a.length; n++) a[n] = a[n].replace("%3D", "="), i = a[n].split("="), t.push(i[0]), t[i[0]] = i[1];
        return t
    }
}(jQuery);