(function (c) {
    var M = function (a) {
            a = c.extend(c.Event(a), function () {
                for (var a = {}, z = c.address.parameterNames(), d = 0, e = z.length; d < e; d++) a[z[d]] = c.address.parameter(z[d]);
                return {
                    value: c.address.value(),
                    path: c.address.path(),
                    pathNames: c.address.pathNames(),
                    parameterNames: z,
                    parameters: a,
                    queryString: c.address.queryString()
                }
            }.call(c.address));
            c(c.address).trigger(a);
            return a
        }, u = function (a) {
            return Array.prototype.slice.call(a)
        }, A = function (a, b, z) {
            c().bind.apply(c(c.address), Array.prototype.slice.call(arguments));
            return c.address
        }, $ = function (a, b) {
            c().unbind.apply(c(c.address), Array.prototype.slice.call(arguments));
            return c.address
        }, B = function () {
            return v.pushState && d.state !== j
        }, Q = function () {
            return ("/" + k.pathname.replace(RegExp(d.state), "") + k.search + (I() ? "#" + I() : "")).replace(P, "/")
        }, I = function () {
            var a = k.href.indexOf("#");
            return -1 != a ? p(k.href.substr(a + 1), h) : ""
        }, q = function () {
            return B() ? Q() : I()
        }, N = function (a) {
            a = a.toString();
            return (d.strict && "/" != a.substr(0, 1) ? "/" : "") + a
        }, p = function (a, b) {
            return d.crawlable && b ? ("" !== a ? "!" : "") + a : a.replace(/^\!/, "")
        }, r = function (a, b) {
            return parseInt(a.css(b), 10)
        }, E = function () {
            if (!t) {
                var a = q();
                decodeURI(e) != decodeURI(a) && (s && 7 > w ? k.reload() : (s && (!C && d.history) && n(J, 50), _old = e, e = a, D(h)))
            }
        }, D = function (a) {
            var b = M(R);
            a = M(a ? S : T);
            n(aa, 10);
            if (b.isDefaultPrevented() || a.isDefaultPrevented()) e = _old, B() ? v.popState({}, "", d.state.replace(/\/$/, "") + ("" === e ? "/" : e)) : (t = l, x ? d.history ? k.hash = "#" + p(e, l) : k.replace("#" + p(e, l)) : e != q() && (d.history ? k.hash = "#" + p(e, l) : k.replace("#" + p(e, l))), s && !C && d.history && n(J, 50), x ? n(function () {
                t = h
            }, 1) : t = h)
        }, aa = function () {
            if ("null" !== d.tracker && d.tracker !== F) {
                var a = c.isFunction(d.tracker) ? d.tracker : f[d.tracker],
                    b = (k.pathname + k.search + (c.address && !B() ? c.address.value() : "")).replace(/\/\//, "/").replace(/^\/$/, "");
                c.isFunction(a) ? a(b) : c.isFunction(f.urchinTracker) ? f.urchinTracker(b) : f.pageTracker !== j && c.isFunction(f.pageTracker._trackPageview) ? f.pageTracker._trackPageview(b) : f._gaq !== j && c.isFunction(f._gaq.push) && f._gaq.push(["_trackPageview", decodeURI(b)])
            }
        }, J = function () {
            var a = "javascript:" + h + ";document.open();document.writeln('<html><head><title>" + m.title.replace(/\'/g, "\\'") + "</title><script>var " + y + ' = "' + encodeURIComponent(q()).replace(/\'/g, "\\'") + (m.domain != k.hostname ? '";document.domain="' + m.domain : "") + "\";\x3c/script></head></html>');document.close();";
            7 > w ? g.src = a : g.contentWindow.location.replace(a)
        }, V = function () {
            if (G && -1 != U) {
                var a, b, c = G.substr(U + 1).split("&");
                for (a = 0; a < c.length; a++) b = c[a].split("="), /^(autoUpdate|crawlable|history|strict|wrap)$/.test(b[0]) && (d[b[0]] = isNaN(b[1]) ? /^(true|yes)$/i.test(b[1]) : 0 !== parseInt(b[1], 10)), /^(state|tracker)$/.test(b[0]) && (d[b[0]] = b[1]);
                G = F
            }
            _old = e;
            e = q()
        }, X = function () {
            if (!W) {
                W = l;
                V();
                var a = function () {
                    var a, b = c("a"), e = b.size(), f = -1, j = function () {
                        ++f != e && (a = c(b.get(f)), a.is('[rel*="address:"]') && a.address('[rel*="address:"]'), n(j, 1))
                    };
                    n(j, 1);
                    if (d.crawlable) {
                        var h = k.pathname.replace(/\/$/, "");
                        -1 != c("body").html().indexOf("_escaped_fragment_") && c('a[href]:not([href^=http]), a[href*="' + document.domain + '"]').each(function () {
                            var a = c(this).attr("href").replace(/^http:/, "").replace(RegExp(h + "/?$"), "");
                            ("" === a || -1 != a.indexOf("_escaped_fragment_")) && c(this).attr("href", "#" + encodeURI(decodeURIComponent(a.replace(/\/(.*)\?_escaped_fragment_=(.*)$/, "!$2"))))
                        })
                    }
                }, b = c("body").ajaxComplete(a);
                a();
                d.wrap && (c("body > *").wrapAll('<div style="padding:' + (r(b, "marginTop") + r(b, "paddingTop")) + "px " + (r(b, "marginRight") + r(b, "paddingRight")) + "px " + (r(b, "marginBottom") + r(b, "paddingBottom")) + "px " + (r(b, "marginLeft") + r(b, "paddingLeft")) + 'px;" />').parent().wrap('<div id="' + y + '" style="height:100%;overflow:auto;position:relative;' + (x && !window.statusbar.visible ? "resize:both;" : "") + '" />'), c("html, body").css({
                    height: "100%",
                    margin: 0,
                    padding: 0,
                    overflow: "hidden"
                }), x && c('<style type="text/css" />').appendTo("head").text("#" + y + "::-webkit-resizer { background-color: #fff; }"));
                s && !C && (a = m.getElementsByTagName("frameset")[0], g = m.createElement((a ? "" : "i") + "frame"), g.src = "javascript:" + h, a ? (a.insertAdjacentElement("beforeEnd", g), a[a.cols ? "cols" : "rows"] += ",0", g.noResize = l, g.frameBorder = g.frameSpacing = 0) : (g.style.display = "none", g.style.width = g.style.height = 0, g.tabIndex = -1, m.body.insertAdjacentElement("afterBegin", g)), n(function () {
                    c(g).bind("load", function () {
                        var a = g.contentWindow;
                        _old = e;
                        e = a[y] !== j ? a[y] : "";
                        e != q() && (D(h), k.hash = p(e, l))
                    });
                    g.contentWindow[y] === j && J()
                }, 50));
                n(function () {
                    M("init");
                    D(h)
                }, 1);
                B() || (s && 7 < w || !s && C ? f.addEventListener ? f.addEventListener(H, E, h) : f.attachEvent && f.attachEvent("on" + H, E) : ba(E, 50));
                "state" in window.history && c(window).trigger("popstate")
            }
        }, j, F = null, y = "jQueryAddress", H = "hashchange", R = "change", S = "internalChange", T = "externalChange",
        l = !0, h = !1, d = {autoUpdate: l, crawlable: h, history: l, strict: l, wrap: h},
        K = navigator.userAgent.toLowerCase(), w = 9, s = -1 !== K.search("msie"), x = -1 !== K.search("webkit"), f;
    try {
        f = top.document !== j && top.document.title !== j ? top : window
    } catch (da) {
        f = window
    }
    var m = f.document, v = f.history, k = f.location, ba = setInterval, n = setTimeout, P = /\/{2,9}/g,
        C = "on" + H in f, g, G = c("script:last").attr("src"), U = G ? G.indexOf("?") : -1, O = m.title, t = h, W = h,
        Y = l, L = h, e = q();
    _old = e;
    if (s) {
        w = parseFloat(K.substr(K.indexOf("msie") + 4));
        m.documentMode && m.documentMode != w && (w = 8 != m.documentMode ? 7 : 8);
        var Z = m.onpropertychange;
        m.onpropertychange = function () {
            Z && Z.call(m);
            m.title != O && -1 != m.title.indexOf("#" + q()) && (m.title = O)
        }
    }
    v.navigationMode && (v.navigationMode = "compatible");
    if ("complete" == document.readyState) var ca = setInterval(function () {
        c.address && (X(), clearInterval(ca))
    }, 50); else V(), c(X);
    c(window).bind("popstate", function () {
        decodeURI(e) != decodeURI(q()) && (_old = e, e = q(), D(h))
    }).bind("unload", function () {
        f.removeEventListener ? f.removeEventListener(H, E, h) : f.detachEvent && f.detachEvent("on" + H, E)
    });
    c.address = {
        bind: function (a, b, c) {
            return A.apply(this, u(arguments))
        }, unbind: function (a, b) {
            return $.apply(this, u(arguments))
        }, init: function (a, b) {
            return A.apply(this, ["init"].concat(u(arguments)))
        }, change: function (a, b) {
            return A.apply(this, [R].concat(u(arguments)))
        }, internalChange: function (a, b) {
            return A.apply(this, [S].concat(u(arguments)))
        }, externalChange: function (a, b) {
            return A.apply(this, [T].concat(u(arguments)))
        }, baseURL: function () {
            var a = k.href;
            -1 != a.indexOf("#") && (a = a.substr(0, a.indexOf("#")));
            /\/$/.test(a) && (a = a.substr(0, a.length - 1));
            return a
        }, autoUpdate: function (a) {
            return a !== j ? (d.autoUpdate = a, this) : d.autoUpdate
        }, crawlable: function (a) {
            return a !== j ? (d.crawlable = a, this) : d.crawlable
        }, history: function (a) {
            return a !== j ? (d.history = a, this) : d.history
        }, state: function (a) {
            if (a !== j) {
                d.state = a;
                var b = Q();
                d.state !== j && (v.pushState ? "/#/" == b.substr(0, 3) && k.replace(d.state.replace(/^\/$/, "") + b.substr(2)) : "/" != b && b.replace(/^\/#/, "") != I() && n(function () {
                    k.replace(d.state.replace(/^\/$/, "") + "/#" + b)
                }, 1));
                return this
            }
            return d.state
        }, strict: function (a) {
            return a !== j ? (d.strict = a, this) : d.strict
        }, tracker: function (a) {
            return a !== j ? (d.tracker = a, this) : d.tracker
        }, wrap: function (a) {
            return a !== j ? (d.wrap = a, this) : d.wrap
        }, update: function () {
            L = l;
            this.value(e);
            L = h;
            return this
        }, title: function (a) {
            return a !== j ? (n(function () {
                O = m.title = a;
                Y && (g && g.contentWindow && g.contentWindow.document) && (g.contentWindow.document.title = a, Y = h)
            }, 50), this) : m.title
        }, value: function (a) {
            if (a !== j) {
                a = N(a);
                "/" == a && (a = "");
                if (e == a && !L) return;
                _old = e;
                e = a;
                if (d.autoUpdate || L) if (D(l), B()) v[d.history ? "pushState" : "replaceState"]({}, "", d.state.replace(/\/$/, "") + ("" === e ? "/" : e)); else t = l, x ? d.history ? k.hash = "#" + p(e, l) : k.replace("#" + p(e, l)) : e != q() && (d.history ? k.hash = "#" + p(e, l) : k.replace("#" + p(e, l))), s && !C && d.history && n(J, 50), x ? n(function () {
                    t = h
                }, 1) : t = h;
                return this
            }
            return N(e)
        }, path: function (a) {
            if (a !== j) {
                var b = this.queryString(), c = this.hash();
                this.value(a + (b ? "?" + b : "") + (c ? "#" + c : ""));
                return this
            }
            return N(e).split("#")[0].split("?")[0]
        }, pathNames: function () {
            var a = this.path(), b = a.replace(P, "/").split("/");
            ("/" == a.substr(0, 1) || 0 === a.length) && b.splice(0, 1);
            "/" == a.substr(a.length - 1, 1) && b.splice(b.length - 1, 1);
            return b
        }, queryString: function (a) {
            if (a !== j) {
                var b = this.hash();
                this.value(this.path() + (a ? "?" + a : "") + (b ? "#" + b : ""));
                return this
            }
            a = e.split("?");
            return a.slice(1, a.length).join("?").split("#")[0]
        }, parameter: function (a, b, d) {
            var e, f;
            if (b !== j) {
                var h = this.parameterNames();
                f = [];
                b = b === j || b === F ? "" : b.toString();
                for (e = 0; e < h.length; e++) {
                    var k = h[e], g = this.parameter(k);
                    "string" == typeof g && (g = [g]);
                    k == a && (g = b === F || "" === b ? [] : d ? g.concat([b]) : [b]);
                    for (var l = 0; l < g.length; l++) f.push(k + "=" + g[l])
                }
                -1 == c.inArray(a, h) && (b !== F && "" !== b) && f.push(a + "=" + b);
                this.queryString(f.join("&"));
                return this
            }
            if (b = this.queryString()) {
                d = [];
                f = b.split("&");
                for (e = 0; e < f.length; e++) b = f[e].split("="), b[0] == a && d.push(b.slice(1).join("="));
                if (0 !== d.length) return 1 != d.length ? d : d[0]
            }
        }, parameterNames: function () {
            var a = this.queryString(), b = [];
            if (a && -1 != a.indexOf("=")) for (var a = a.split("&"), d = 0; d < a.length; d++) {
                var e = a[d].split("=")[0];
                -1 == c.inArray(e, b) && b.push(e)
            }
            return b
        }, hash: function (a) {
            if (a !== j) return this.value(e.split("#")[0] + (a ? "#" + a : "")), this;
            a = e.split("#");
            return a.slice(1, a.length).join("#")
        }
    };
    c.fn.address = function (a) {
        var b;
        "string" == typeof a && (b = a, a = void 0);
        c(this).attr("address") || c(b ? b : this).live("click", function (b) {
            if (b.shiftKey || b.ctrlKey || b.metaKey || 2 == b.which) return !0;
            c(this).is("a") && (b.preventDefault(), b = a ? a.call(this) : /address:/.test(c(this).attr("rel")) ? c(this).attr("rel").split("address:")[1].split(" ")[0] : void 0 !== c.address.state() && !/^\/?$/.test(c.address.state()) ? c(this).attr("href").replace(RegExp("^(.*" + c.address.state() + "|\\.)"), "") : c(this).attr("href").replace(/^(#\!?|\.)/, ""), c.address.value(b))
        }).live("submit", function (b) {
            c(this).is("form") && (b.preventDefault(), b = c(this).attr("action"), b = a ? a.call(this) : (-1 != b.indexOf("?") ? b.replace(/&$/, "") : b + "?") + c(this).serialize(), c.address.value(b))
        }).attr("address", !0);
        return this
    }
})(jQuery);

(function () {
    function z() {
        G = !1;
        for (V = t; V--;) {
            A = h[V];
            if (!A) break;
            A.isCSS || (A.cycle() ? G = !0 : A.stop(!1, A.complete, !1, !0))
        }
        O ? G ? O(z) : (H(z), A = F = null) : G ? u || (W = setInterval(z, na)) : (clearInterval(W), A = F = null);
        u = G
    }

    function X(a) {
        a.cjFadeIn ? (delete a.cjFadeIn, a.style.opacity = 1, a.style.visibility = "visible") : a.cjFadeOut && (delete a.cjFadeOut, a.style.display = "none")
    }

    function Y() {
        u || z()
    }

    function P(a, b, c, d) {
        h.splice(h.indexOf(a), 1);
        t = h.length;
        c && c(b, d)
    }

    function fa(a) {
        a.stopPropagation();
        (a = this.cj) && a.stop(a.complete)
    }

    function ga(a, b, c) {
        var d = {}, n;
        b = b.to;
        for (n in b) b.hasOwnProperty(n) && (d[n] = b[n]);
        Jacked.tween(a, d, c)
    }

    function ha(a, b) {
        return this["webkit" + a + b] || this["moz" + a + b] || this["o" + a + b] || this[a + b] || null
    }

    function ia(a) {
        var b;
        if (b = oa.exec(a)) return [parseInt(b[1], 16), parseInt(b[2], 16), parseInt(b[3], 16), 1];
        if (b = pa.exec(a)) return [17 * parseInt(b[1], 16), 17 * parseInt(b[2], 16), 17 * parseInt(b[3], 16), 1]
    }

    function ja() {
        for (var a in I) if (I.hasOwnProperty(a) && a === Q) {
            Z = I[a];
            break
        }
    }

    function qa() {
        if ("ontouchend" in document) {
            if (-1 !== y.search("iphone") || -1 !== y.search("ipad")) return "ios";
            if (-1 !== y.search("android") || -1 !== y.search("applewebkit")) return "android";
            if (-1 !== y.search("msie")) return "winMobile"
        }
        return null
    }

    var R = window.getComputedStyle ? document.defaultView.getComputedStyle : null, O = ha("Request", "AnimationFrame"),
        H = ha("Cancel", "AnimationFrame"), s = document.createElement("span").style,
        y = navigator.userAgent.toLowerCase(), J = "Quint.easeOut", K = 500, f;
    f = y.search("msie");
    -1 === f ? f = [33.3, 0] : (f = parseInt(y.substr(f + 4, f + 5), 10), f = [9 <= f ? 16.6 : 33.3, f]);
    var h = [],
        l = "WebkitTransition" in s ? ["webkitTransitionEnd", "-webkit-transition", -1 !== y.search("chrome") ? "chrome" : "safari"] : "MozTransition" in s ? ["transitionend", "-moz-transition", "firefox"] : "MSTransition" in s ? ["transitionend", "-ms-transition", "ie"] : "OTransition" in s ? ["otransitionend", "-o-transition", "opera"] : "transition" in s ? ["transitionend", "transition", null] : null,
        u, L, t = 0, ka, Q, Z, $, W, F, G, V, aa, A, ba, S, T, ca, la, ra = /,/g, sa = /[A-Z]/g, ta = / cj-tween/g,
        ua = /^\s+|\s+$/g, va = /{props}/, wa = /{easing}/, xa = /{duration}/, ma = /(right|bottom|center)/,
        pa = /#([0-9a-fA-F])([0-9a-fA-F])([0-9a-fA-F])/, oa = /#([0-9a-fA-F]{2})([0-9a-fA-F]{2})([0-9a-fA-F]{2})/,
        I = {ios: !1, android: !1, winMobile: !1, firefox: !1, chrome: !1, safari: !1, opera: !1, ie: !1}, na = f[0];
    f = f[1];
    var E = 0 !== f && 9 > f;
    if (!O || !H) O = H = null;
    if (l) {
        var U = l[1], da = document.createElement("style");
        L = "WebkitTransform" in s ? "WebkitTransform" : "MozTransform" in s ? "MozTransform" : "msTransform" in s ? "msTransform" : "OTransform" in s ? "OTransform" : "transform" in s ? "transform" : null;
        S = qa();
        da.type = "text/css";
        da.innerHTML = ".cj-tween{" + U + "-property:none !important;}";
        document.getElementsByTagName("head")[0].appendChild(da);
        ka = U + "-property:{props};" + U + "-duration:{duration}s;" + U + "-timing-function:cubic-bezier({easing});";
        Q = !S ? l[2] : S;
        la = /(chrome|opera)/.test(Q);
        l = l[0];
        ja()
    }
    if (E) if (8 === f) ba = /(#|rgb|red|blue|green|black|white|yellow|pink|gray|grey|orange|purple)/, T = /(auto|inherit|rgb|%|#|red|blue|green|black|white|yellow|pink|gray|grey|orange|purple)/, ca = {
        red: "#F00",
        blue: "#00F",
        green: "#0F0",
        black: "#000",
        white: "#FFF",
        yellow: "#FF0",
        pink: "#FFC0CB",
        gray: "#808080",
        grey: "#808080",
        orange: "#FFA500",
        purple: "#800080"
    }; else return; else ba = /(#|rgb)/, T = /(auto|inherit|rgb|%|#)/;
    Array.prototype.indexOf || (Array.prototype.indexOf = function (a) {
        for (var b = this.length; b--;) if (this[b] === a) return b;
        return -1
    });
    Date.now || (Date.now = function () {
        return +new Date
    });
    this.Jacked = {
        ready: function (a) {
            window.onload = a
        }, setEngines: function (a) {
            for (var b in a) I.hasOwnProperty(b) && (I[b] = a[b]);
            ja()
        }, tween: function (a, b, c) {
            a.cj && a.cj.stop();
            c || (c = {});
            c.mode ? "timeline" === c.mode || !l ? new CJ(a, b, c) : new CJcss(a, b, c) : !l || !Z ? new CJ(a, b, c) : new CJcss(a, b, c)
        }, fadeIn: function (a, b) {
            b || (b = {});
            b.fadeIn = !0;
            Jacked.tween(a, {opacity: 1}, b)
        }, fadeOut: function (a, b) {
            b || (b = {});
            b.fadeOut = !0;
            Jacked.tween(a, {opacity: 0}, b)
        }, percentage: function (a, b, c) {
            a.cj && a.cj.stop();
            if ("from" in b && "to" in b) {
                c || (c = {});
                var d = c.mode;
                d ? "css3" === d && l ? ga(a, b, c) : new CJpercentage(a, b, c) : l && Z ? ga(a, b, c) : new CJpercentage(a, b, c)
            }
        }, special: function (a, b) {
            a.cj && a.cj.stop();
            new CJspecial(a, b)
        }, transform: function (a, b, c, d) {
            a.cj && a.cj.stop();
            l && L ? (c || (c = {}), c.mode = "css3", "transform" in b && (b[L] = b.transform, delete b.transform), new Jacked.tween(a, b, c)) : d && new Jacked.tween(a, d, c)
        }, stopTween: function (a, b, c) {
            (a = a.cj) && (a.isCSS ? a.stop(c) : a.stop(b, c))
        }, stopAll: function (a) {
            H ? H(z) : clearInterval(W);
            var b = h.length, c;
            for (t = 0; b--;) c = h[b], c.isCSS ? c.stop(!1, !0) : c.stop(a, !1, !0, !0);
            h = [];
            u = !1;
            F = null
        }, setEase: function (a) {
            var b = a.toLowerCase().split(".");
            2 > b.length || M[b[0]] && M[b[0]][b[1]] && (J = a)
        }, setDuration: function (a) {
            isNaN(a) || (K = a)
        }, getMobile: function () {
            return S
        }, getIE: function () {
            return E
        }, getBrowser: function () {
            return Q
        }, getTransition: function () {
            return l
        }, getEngine: function () {
            return u
        }, getTransform: function () {
            return L
        }
    };
    this.CJ = function (a, b, c) {
        t = h.length;
        var d = a.cj = h[t++] = this;
        this.runner = function (n) {
            d.obj = a;
            d.complete = c.callback;
            d.completeParams = c.callbackParams;
            if (!0 === n) d.transitions = []; else {
                var m;
                n = 0;
                var g = [], e = a.style, p = c.duration || K, r = (c.ease || J).toLowerCase().split("."),
                    r = M[r[0]][r[1]];
                e.visibility = "visible";
                c.fadeIn && (e.display = c.display || "block", e.opacity = 0);
                E && "opacity" in b && (e.filter = "progid:DXImageTransform.Microsoft.Alpha(opacity=" + (c.fadeIn ? 0 : 100) + ")");
                b.borderColor && !la && (e = b.borderColor, b.borderTopColor = e, b.borderRightColor = e, b.borderBottomColor = e, b.borderLeftColor = e, delete b.borderColor);
                for (m in b) b.hasOwnProperty(m) && ("backgroundPosition" !== m ? g[n++] = d.animate(a, m, b[m], p, r) : g[n++] = d.bgPosition(a, m, b[m], p, r));
                d.transitions = g;
                u ? setTimeout(Y, 10) : z()
            }
        };
        c.fadeOut ? a.cjFadeOut = !0 : c.fadeIn && (a.cjFadeIn = !0);
        0 === c.duration ? (this.runner(!0), this.stop()) : c.delay ? this.delayed = setTimeout(this.runner, c.delay) : this.runner()
    };
    CJ.prototype.cycle = function () {
        F = this.transitions;
        if (!F) return !0;
        aa = F.length;
        for ($ = !1; aa--;) F[aa]() && ($ = !0);
        return $
    };
    CJ.prototype.animate = function (a, b, c, d, n) {
        function m() {
            t = Date.now();
            ea += t - f;
            e = n(ea, h, N, d);
            f = t;
            e = !k || E ? q ? e + 0.5 | 0 : e - 0.5 | 0 : e.toFixed(2);
            if (e === l) return !0;
            if (q) {
                if (e >= c) return p[b] = v, !1
            } else if (e <= c) return p[b] = v, !1;
            l = e;
            p[b] = e + B;
            return !0
        }

        function g() {
            return !1
        }

        var e, p, r, k = "opacity" === b, j = !0;
        !k || !E ? (p = a.style, r = p[b], e = "" !== r ? r : R ? R(a, null)[b] : a.currentStyle[b]) : (p = a.filters.item("DXImageTransform.Microsoft.Alpha"), b = "Opacity", e = p[b], c *= 100);
        if (T.test(e)) if (ba.test(e)) {
            if (-1 === c.search("rgb")) return E && e in ca && (e = ca[e]), this.color(a, b, e, c, d, n);
            j = !1
        } else e = 0; else e = parseFloat(e);
        var B = !k ? "px" : 0, N = c - e, q = e < c, f = Date.now(), h = e, ea = 0, v, l, t;
        v = c + B;
        !k || E ? q ? c -= 0.25 : c += 0.25 : q ? c -= 0.025 : c += 0.025;
        if (j) return m.stored = [b, v], m;
        g.stored = [b, v];
        return g
    };
    CJ.prototype.color = function (a, b, c, d, n, m) {
        function g() {
            f = Date.now();
            N += f - r;
            r = f;
            c = m(N, 0, 1, n);
            if (0.99 > c) {
                q = -1;
                for (l = "rgb("; 3 > ++q;) h = j[q], l += h + c * (B[q] - h) | 0, 2 > q && (l += ",");
                k[b] = l + ")";
                return !0
            }
            k[b] = p;
            return !1
        }

        function e() {
            return !1
        }

        var p = (-1 !== d.search("#") ? "" : "#") + d, r = Date.now(), k = a.style;
        a = !1;
        var j = [], B = [], N = 0, q = -1, f, h, l;
        if (-1 !== c.search("rgb")) {
            q = -1;
            for (j = c.split("(")[1].split(")")[0].split(","); 3 > ++q;) j[q] = parseInt(j[q], 10)
        } else j = ia(c);
        B = ia(d);
        for (q = -1; 3 > ++q;) j[q] !== B[q] && (a = !0);
        if (a) return g.stored = [b, p], g;
        e.stored = [b, p];
        return e
    };
    CJ.prototype.bgPosition = function (a, b, c, d, n) {
        function m() {
            y = Date.now();
            B += y - r;
            r = y;
            u = n(B, 0, 1, d);
            if (0.99 > u) {
                v && (C = w + z * u + 0.5 | 0);
                s && (D = x + A * u + 0.5 | 0);
                if (C === h && D === t) return !0;
                h = C;
                t = D;
                j ? (e.backgroundPositionX = C + "px", e.backgroundPositionY = D + "px") : e.backgroundPosition = C + "px " + D + "px";
                return !0
            }
            j ? (e.backgroundPositionX = f, e.backgroundPositionY = q) : e[b] = l;
            return !1
        }

        function g() {
            return !1
        }

        var e = a.style, p = e[b], r = Date.now(), k = !0, j = E, B = 0, f, q, l, h, t, v, s, z, A, u, y, C, D, w, x;
        if (j) {
            w = a.currentStyle.backgroundPositionX;
            x = a.currentStyle.backgroundPositionY;
            if (ma.test(w) || ma.test(x)) k = !1;
            "left" === w && (w = 0);
            "top" === x && (x = 0)
        } else u = "" !== p ? p.split(" ") : R(a, null).backgroundPosition.split(" "), w = u[0], x = u[1];
        -1 !== w.search("%") && "0%" !== w && (k = !1);
        -1 !== x.search("%") && "0%" !== x && (k = !1);
        w = parseInt(w, 10);
        x = parseInt(x, 10);
        c.hasOwnProperty("x") ? (C = c.x, v = !0) : (C = w, v = !1);
        c.hasOwnProperty("y") ? (D = c.y, s = !0) : (D = x, s = !1);
        v = v && w !== C;
        s = s && x !== D;
        !v && !s && (k = !1);
        z = C - w;
        A = D - x;
        f = C + "px";
        q = D + "px";
        l = !j ? f + " " + q : [f, q];
        if (k) return m.stored = [b, l], m;
        g.stored = [b, l];
        return g
    };
    CJ.prototype.stop = function (a, b, c) {
        var d = this.obj;
        if (d) {
            delete d.cj;
            if (a) {
                a = this.transitions;
                for (var n = a.length, m, g; n--;) if (m = a[n].stored, g = m[0], E) switch (g) {
                    case "Opacity":
                        d.filters.item("DXImageTransform.Microsoft.Alpha").Opacity = 100 * m[1];
                        break;
                    case "backgroundPosition":
                        g = d.style;
                        g.backgroundPositionX = m[1][0];
                        g.backgroundPositionY = m[1][1];
                        break;
                    default:
                        d.style[g] = m[1]
                } else d.style[g] = m[1]
            }
            X(d);
            b && (b = this.complete);
            c || P(this, d, b, this.completeParams)
        } else clearTimeout(this.delayed), this.runner(!0), this.stop(a, b)
    };
    this.CJcss = function (a, b, c) {
        t = h.length;
        var d = a.cj = h[t++] = this, n = a.style, m = L in b;
        this.isCSS = !0;
        this.storage = a;
        this.complete = c.callback;
        this.completeParams = c.callbackParams;
        this.runner = function () {
            c.cssStep ? (n.visibility = "visible", d.stepped = setTimeout(d.step, 30)) : d.step()
        };
        this.step = function (g) {
            d.obj = a;
            if (!0 === g) d.moves = ""; else {
                var e, p, r, k, j, f = 0, h;
                h = [];
                var q = [];
                g = a.getAttribute("style") || "";
                var t = c.duration || K, s = (c.ease || J).toLowerCase().split(".");
                for (p in b) if (b.hasOwnProperty(p)) {
                    r = p;
                    if (j = r.match(sa)) for (e = j.length; e--;) k = j[e], r = r.replace(RegExp(k, "g"), "-" + k.toLowerCase());
                    k = e = b[p];
                    j = "backgroundPosition" === p;
                    if (!T.test(k) && "opacity" !== p && !j && !m) k += "px;"; else if (j) {
                        k = e.x;
                        e = e.y;
                        j = isNaN(k);
                        var u = isNaN(e);
                        if (!j && !u) k += "px", e += "px"; else {
                            var v = n.backgroundPosition,
                                v = "" !== v ? v.split(" ") : R(a, null).backgroundPosition.split(" ");
                            !j ? k += "px" : k = v[0];
                            !u ? e += "px" : e = v[1]
                        }
                        k = k + " " + e + ";"
                    } else k += ";";
                    h[f] = r + ":" + k;
                    q[f++] = r;
                    if (g && (j = g.search(r), -1 !== j)) {
                        r = g.length - 1;
                        for (e = j - 1; ++e < r && ";" !== g[e];) ;
                        g = g.split(g.substring(j, e + 1)).join("")
                    }
                }
                d.moves = p = ka.replace(va, q.toString()).replace(xa, (0.001 * t).toFixed(2)).replace(wa, ya[s[0]][s[1]]);
                h = h.toString();
                m || (h = h.replace(ra, ""));
                a.className = a.className.replace(ta, "");
                a.addEventListener(l, fa, !1);
                a.setAttribute("style", g.replace(ua, "") + p + h)
            }
        };
        c.fadeIn ? (a.cjFadeIn = !0, n.display = c.display || "block", n.opacity = 0) : c.fadeOut && (a.cjFadeOut = !0);
        0 === c.duration ? (this.runner(!0), this.stop()) : (c.cssStep || (n.visibility = "visible"), this.delayed = c.delay ? setTimeout(this.runner, 30 < c.delay ? c.delay : 30) : setTimeout(this.runner, 30))
    };
    CJcss.prototype.stop = function (a, b) {
        var c = this.obj;
        a && (a = this.complete);
        c ? (delete c.cj, c.removeEventListener(l, fa, !1), c.className += " cj-tween", c.setAttribute("style", c.getAttribute("style").split(this.moves).join(";").split(";;").join(";")), X(c)) : (clearTimeout(this.delayed), clearTimeout(this.stepped), X(this.storage));
        b || P(this, c, a, this.completeParams)
    };
    this.CJpercentage = function (a, b, c) {
        t = h.length;
        var d = a.cj = h[t++] = this;
        this.obj = a;
        this.complete = c.callback;
        this.completeParams = c.callbackParams;
        this.runner = function () {
            var n = 0, m = [], g, e, p, h = b.to, k = b.from, j = c.duration || K,
                f = (c.ease || J).toLowerCase().split("."), f = M[f[0]][f[1]];
            for (g in k) k.hasOwnProperty(g) && (p = parseInt(h[g], 10), e = parseInt(k[g], 10), m[n++] = [p > e, g, p, e]);
            a.style.visibility = "visible";
            d.transitions = d.animate(a, m, j, f);
            u ? setTimeout(Y, 10) : z()
        };
        0 === c.duration ? this.stop() : c.delay ? this.delayed = setTimeout(this.runner, c.delay) : this.runner()
    };
    CJpercentage.prototype.cycle = function () {
        return this.transitions()
    };
    CJpercentage.prototype.animate = function (a, b, c, d) {
        var n, m = 0, g = Date.now(), e, f, h = a.style, k = b.length, j, l;
        return function (a) {
            e = Date.now();
            m += e - g;
            g = e;
            n = d(m, 0, 1, c);
            f = k;
            if (0.99 > n && !a) {
                for (; f--;) j = b[f], l = j[3], h[j[1]] = j[0] ? l + (j[2] - l) * n + "%" : l - (l - j[2]) * n + "%";
                return !0
            }
            for (; f--;) j = b[f], h[j[1]] = j[2] + "%";
            return !1
        }
    };
    CJpercentage.prototype.stop = function (a, b, c) {
        "delayed" in this && clearTimeout(this.delayed);
        var d = this.obj;
        delete d.cj;
        a && this.transitions && this.transitions(!0);
        b && (b = this.complete);
        c || P(this, d, b, this.completeParams)
    };
    this.CJspecial = function (a, b) {
        if (b && b.callback) {
            t = h.length;
            h[t++] = a.cj = this;
            var c = this.complete = b.callback, d = b.ease || J, d = d.toLowerCase().split("."), d = M[d[0]][d[1]];
            this.obj = a;
            this.transitions = this.numbers(a, b.duration || K, d, c);
            u ? setTimeout(Y, 10) : z()
        }
    };
    CJspecial.prototype.cycle = function () {
        return this.transitions()
    };
    CJspecial.prototype.numbers = function (a, b, c, d) {
        var f, h = 0, g = Date.now(), e;
        return function () {
            e = Date.now();
            h += e - g;
            g = e;
            f = c(h, 0, 1, b);
            return 0.97 > f ? (d(a, f), !0) : !1
        }
    };
    CJspecial.prototype.stop = function (a, b, c, d) {
        var f = this.obj;
        f && (delete f.cj, c || P(this), (a || d) && this.complete(f, 1, b))
    };
    var M = {
        linear: {
            easenone: function (a, b, c, d) {
                return c * a / d + b
            }, easein: function (a, b, c, d) {
                return c * a / d + b
            }, easeout: function (a, b, c, d) {
                return c * a / d + b
            }, easeinout: function (a, b, c, d) {
                return c * a / d + b
            }
        }, quint: {
            easeout: function (a, b, c, d) {
                return c * ((a = a / d - 1) * a * a * a * a + 1) + b
            }, easein: function (a, b, c, d) {
                return c * (a /= d) * a * a * a * a + b
            }, easeinout: function (a, b, c, d) {
                return 1 > (a /= d / 2) ? c / 2 * a * a * a * a * a + b : c / 2 * ((a -= 2) * a * a * a * a + 2) + b
            }
        }, quad: {
            easein: function (a, b, c, d) {
                return c * (a /= d) * a + b
            }, easeout: function (a, b, c, d) {
                return -c * (a /= d) * (a - 2) + b
            }, easeinout: function (a, b, c, d) {
                return 1 > (a /= d / 2) ? c / 2 * a * a + b : -c / 2 * (--a * (a - 2) - 1) + b
            }
        }, quart: {
            easein: function (a, b, c, d) {
                return c * (a /= d) * a * a * a + b
            }, easeout: function (a, b, c, d) {
                return -c * ((a = a / d - 1) * a * a * a - 1) + b
            }, easeinout: function (a, b, c, d) {
                return 1 > (a /= d / 2) ? c / 2 * a * a * a * a + b : -c / 2 * ((a -= 2) * a * a * a - 2) + b
            }
        }, cubic: {
            easein: function (a, b, c, d) {
                return c * (a /= d) * a * a + b
            }, easeout: function (a, b, c, d) {
                return c * ((a = a / d - 1) * a * a + 1) + b
            }, easeinout: function (a, b, c, d) {
                return 1 > (a /= d / 2) ? c / 2 * a * a * a + b : c / 2 * ((a -= 2) * a * a + 2) + b
            }
        }, circ: {
            easein: function (a, b, c, d) {
                return -c * (Math.sqrt(1 - (a /= d) * a) - 1) + b
            }, easeout: function (a, b, c, d) {
                return c * Math.sqrt(1 - (a = a / d - 1) * a) + b
            }, easeinout: function (a, b, c, d) {
                return 1 > (a /= d / 2) ? -c / 2 * (Math.sqrt(1 - a * a) - 1) + b : c / 2 * (Math.sqrt(1 - (a -= 2) * a) + 1) + b
            }
        }, sine: {
            easein: function (a, b, c, d) {
                return -c * Math.cos(a / d * (Math.PI / 2)) + c + b
            }, easeout: function (a, b, c, d) {
                return c * Math.sin(a / d * (Math.PI / 2)) + b
            }, easeinout: function (a, b, c, d) {
                return -c / 2 * (Math.cos(Math.PI * a / d) - 1) + b
            }
        }, expo: {
            easein: function (a, b, c, d) {
                return 0 === a ? b : c * Math.pow(2, 10 * (a / d - 1)) + b
            }, easeout: function (a, b, c, d) {
                return a === d ? b + c : c * (-Math.pow(2, -10 * a / d) + 1) + b
            }, easeinout: function (a, b, c, d) {
                return 0 === a ? b : a === d ? b + c : 1 > (a /= d / 2) ? c / 2 * Math.pow(2, 10 * (a - 1)) + b : c / 2 * (-Math.pow(2, -10 * --a) + 2) + b
            }
        }
    }, ya = {
        linear: {
            easenone: "0.250, 0.250, 0.750, 0.750",
            easein: "0.420, 0.000, 1.000, 1.000",
            easeout: "0.000, 0.000, 0.580, 1.000",
            easeinout: "0.420, 0.000, 0.580, 1.000"
        },
        quint: {
            easein: "0.755, 0.050, 0.855, 0.060",
            easeout: "0.230, 1.000, 0.320, 1.000",
            easeinout: "0.860, 0.000, 0.070, 1.000"
        },
        quad: {
            easein: "0.550, 0.085, 0.680, 0.530",
            easeout: "0.250, 0.460, 0.450, 0.940",
            easeinout: "0.455, 0.030, 0.515, 0.955"
        },
        quart: {
            easein: "0.895, 0.030, 0.685, 0.220",
            easeout: "0.165, 0.840, 0.440, 1.000",
            easeinout: "0.770, 0.000, 0.175, 1.000"
        },
        cubic: {
            easein: "0.550, 0.055, 0.675, 0.190",
            easeout: "0.215, 0.610, 0.355, 1.000",
            easeinout: "0.645, 0.045, 0.355, 1.000"
        },
        circ: {
            easein: "0.600, 0.040, 0.980, 0.335",
            easeout: "0.075, 0.820, 0.165, 1.000",
            easeinout: "0.785, 0.135, 0.150, 0.860"
        },
        sine: {
            easein: "0.470, 0.000, 0.745, 0.715",
            easeout: "0.390, 0.575, 0.565, 1.000",
            easeinout: "0.445, 0.050, 0.550, 0.950"
        },
        expo: {
            easein: "0.950, 0.050, 0.795, 0.035",
            easeout: "0.190, 1.000, 0.220, 1.000",
            easeinout: "1.000, 0.000, 0.000, 1.000"
        }
    };
    f = s = null
})(window);

(function (m) {
    function h(a, b) {
        b || (delete a.swipeLeft, delete a.swipeRight, delete a.stopProp);
        delete a.newPageX;
        delete a.pageX
    }

    function g(a) {
        var b = a.touches ? a.touches[0] : a;
        this.stopProp && a.stopImmediatePropagation();
        this.pageX = b.pageX;
        this.addEventListener(e, j);
        this.addEventListener(f, k)
    }

    function k(a) {
        var b = this.newPageX = (a.touches ? a.touches[0] : a).pageX;
        10 < Math.abs(this.pageX - b) && a.preventDefault()
    }

    function j() {
        var a = this.newPageX, b = this.pageX, c = this.cjThumbs;
        this.removeEventListener(f, k);
        this.removeEventListener(e, j);
        30 > Math.abs(b - a) || (c || this.removeEventListener(d, g), b > a ? this.swipeLeft && (a = this.swipeLeft, h(this, c), a()) : this.swipeRight && (a = this.swipeRight, h(this, c), a(1)))
    }

    var e, f, d, l = {
        touchSwipe: function (a, b) {
            l.touchSwipeLeft(a, b);
            l.touchSwipeRight(a, b)
        }, touchSwipeLeft: function (a, b, c) {
            c && (a.stopProp = !0);
            a.swipeLeft || (a.swipeLeft = b);
            a.swipeRight || a.addEventListener(d, g)
        }, touchSwipeRight: function (a, b, c) {
            c && (a.stopProp = !0);
            a.swipeRight || (a.swipeRight = b);
            a.swipeLeft || a.addEventListener(d, g)
        }, unbindSwipe: function (a) {
            a.removeEventListener(d, g);
            a.removeEventListener(f, k);
            a.removeEventListener(e, j);
            h(a)
        }
    };
    "ontouchend" in document ? (e = "touchend", f = "touchmove", d = "touchstart") : (e = "mouseup", f = "mousemove", d = "mousedown");
    m.fn.cjSwipe = function (a, b, c) {
        l[a](this[0], b, c)
    }
})(jQuery);

(function () {
    function I() {
        this.a = this.b = this.g = this.r = 0;
        this.next = null
    }

    var K = [512, 512, 456, 512, 328, 456, 335, 512, 405, 328, 271, 456, 388, 335, 292, 512, 454, 405, 364, 328, 298, 271, 496, 456, 420, 388, 360, 335, 312, 292, 273, 512, 482, 454, 428, 405, 383, 364, 345, 328, 312, 298, 284, 271, 259, 496, 475, 456, 437, 420, 404, 388, 374, 360, 347, 335, 323, 312, 302, 292, 282, 273, 265, 512, 497, 482, 468, 454, 441, 428, 417, 405, 394, 383, 373, 364, 354, 345, 337, 328, 320, 312, 305, 298, 291, 284, 278, 271, 265, 259, 507, 496, 485, 475, 465, 456, 446, 437, 428, 420, 412, 404, 396, 388, 381, 374, 367, 360, 354, 347, 341, 335, 329, 323, 318, 312, 307, 302, 297, 292, 287, 282, 278, 273, 269, 265, 261, 512, 505, 497, 489, 482, 475, 468, 461, 454, 447, 441, 435, 428, 422, 417, 411, 405, 399, 394, 389, 383, 378, 373, 368, 364, 359, 354, 350, 345, 341, 337, 332, 328, 324, 320, 316, 312, 309, 305, 301, 298, 294, 291, 287, 284, 281, 278, 274, 271, 268, 265, 262, 259, 257, 507, 501, 496, 491, 485, 480, 475, 470, 465, 460, 456, 451, 446, 442, 437, 433, 428, 424, 420, 416, 412, 408, 404, 400, 396, 392, 388, 385, 381, 377, 374, 370, 367, 363, 360, 357, 354, 350, 347, 344, 341, 338, 335, 332, 329, 326, 323, 320, 318, 315, 312, 310, 307, 304, 302, 299, 297, 294, 292, 289, 287, 285, 282, 280, 278, 275, 273, 271, 269, 267, 265, 263, 261, 259],
        L = [9, 11, 12, 13, 13, 14, 14, 15, 15, 15, 15, 16, 16, 16, 16, 17, 17, 17, 17, 17, 17, 17, 18, 18, 18, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24];
    window.StackBlurImage = function (m, E, r) {
        var y = document.getElementById(m), m = y.naturalWidth, w = y.naturalHeight, c = document.getElementById(E);
        c.style.width = m + "px";
        c.style.height = w + "px";
        c.width = m;
        c.height = w;
        c = c.getContext("2d");
        c.clearRect(0, 0, m, w);
        c.drawImage(y, 0, 0);
        if (!(isNaN(r) || 1 > r)) if (!(isNaN(r) || 1 > r)) {
            var r = r | 0, E = document.getElementById(E).getContext("2d"), y = E.getImageData(0, 0, m, w), c = y.data,
                s, x, a, d, e, F, f, g, h, t, u, v, i, j, k, n, p, q, z, b = a = null, A = K[r], B = L[r];
            s = r + r + 1;
            var G = m - 1, H = w - 1, l = r + 1, C = l * (l + 1) / 2, D = new I, b = D;
            for (a = 1; a < s; a++) if (b = b.next = new I, a == l) var J = b;
            b.next = D;
            for (x = F = e = 0; x < w; x++) {
                i = j = k = f = g = h = 0;
                t = l * (n = c[e]);
                u = l * (p = c[e + 1]);
                v = l * (q = c[e + 2]);
                f += C * n;
                g += C * p;
                h += C * q;
                b = D;
                for (a = 0; a < l; a++) b.r = n, b.g = p, b.b = q, b = b.next;
                for (a = 1; a < l; a++) d = e + ((G < a ? G : a) << 2), f += (b.r = n = c[d]) * (z = l - a), g += (b.g = p = c[d + 1]) * z, h += (b.b = q = c[d + 2]) * z, i += n, j += p, k += q, b = b.next;
                a = D;
                b = J;
                for (s = 0; s < m; s++) c[e] = f * A >> B, c[e + 1] = g * A >> B, c[e + 2] = h * A >> B, f -= t, g -= u, h -= v, t -= a.r, u -= a.g, v -= a.b, d = F + ((d = s + r + 1) < G ? d : G) << 2, i += a.r = c[d], j += a.g = c[d + 1], k += a.b = c[d + 2], f += i, g += j, h += k, a = a.next, t += n = b.r, u += p = b.g, v += q = b.b, i -= n, j -= p, k -= q, b = b.next, e += 4;
                F += m
            }
            for (s = 0; s < m; s++) {
                j = k = i = g = h = f = 0;
                e = s << 2;
                t = l * (n = c[e]);
                u = l * (p = c[e + 1]);
                v = l * (q = c[e + 2]);
                f += C * n;
                g += C * p;
                h += C * q;
                b = D;
                for (a = 0; a < l; a++) b.r = n, b.g = p, b.b = q, b = b.next;
                d = m;
                for (a = 1; a <= r; a++) e = d + s << 2, f += (b.r = n = c[e]) * (z = l - a), g += (b.g = p = c[e + 1]) * z, h += (b.b = q = c[e + 2]) * z, i += n, j += p, k += q, b = b.next, a < H && (d += m);
                e = s;
                a = D;
                b = J;
                for (x = 0; x < w; x++) d = e << 2, c[d] = f * A >> B, c[d + 1] = g * A >> B, c[d + 2] = h * A >> B, f -= t, g -= u, h -= v, t -= a.r, u -= a.g, v -= a.b, d = s + ((d = x + l) < H ? d : H) * m << 2, f += i += a.r = c[d], g += j += a.g = c[d + 1], h += k += a.b = c[d + 2], a = a.next, t += n = b.r, u += p = b.g, v += q = b.b, i -= n, j -= p, k -= q, b = b.next, e += m
            }
            E.putImageData(y, 0, 0)
        }
    }
})();

(function (c) {
    function tb() {
        I = c(window);
        $b = c("body");
        Ya = c("body, html");
        v = c("<div />").addClass("jackbox-modal");
        s = c("<div />").addClass("jackbox-holder");
        ha = c("<div />").addClass("jackbox-wrapper");
        Y = c("<div />").addClass("jackbox-preloader");
        ia = c("<span />").addClass("jackbox-panel jackbox-panel-left");
        sa = c("<span />").addClass("jackbox-panel jackbox-panel-right");
        var a = r.createDocumentFragment();
        a.appendChild(ha[0]);
        a.appendChild(Y[0]);
        v[0].appendChild(a);
        a = r.createDocumentFragment();
        a.appendChild(ia[0]);
        a.appendChild(sa[0]);
        a.appendChild(s[0]);
        ha[0].appendChild(a);
        ja = c("<div />").addClass("jackbox-container");
        ta || (a = c("<span />").addClass("jackbox-pre-outside").appendTo(Y), c("<span />").addClass("jackbox-pre-inside").appendTo(a));
        Z *= 2;
        Na = 0;
        a = r.createDocumentFragment();
        ub && (A = c(ub).hide(), a.appendChild(A[0]));
        a.appendChild(ja[0]);
        vb && (B = c(vb).hide(), a.appendChild(B[0]));
        s[0].appendChild(a);
        wb = -(F + Da);
        ua = [];
        Oa = [];
        J = [];
        K = [];
        xb.each(Uc);
        V && (c.address.internalChange(yb), c.address.externalChange(Vc));
        ac = !0;
        Pa && (V ? setTimeout(Pa, 250) : Pa(), Pa = null);
        xb = Oa = ub = vb = ua = null
    }

    function bc(a, b) {
        var d = c(this), n = K.length, g = -1, e, m;
        if (a && "object" === typeof a) {
            var f, k = d.attr("href");
            for (m in a) a.hasOwnProperty(m) && "trigger" !== m && (f = a[m], "href" === m && k || d.attr("data-" + m, f), "group" === m && (e = f))
        }
        e || (e = d.attr("data-group"));
        if (e) {
            for (e = e.split(" ").join("").toLowerCase(); n--;) if (K[n] === e) {
                g = n;
                break
            }
            if (-1 < g) {
                e = J[g];
                for (n = e.length; n--;) if (m = e[n], m[0] === d[0]) {
                    if (b) if (e.splice(n, 1), m.off("click.jackbox"), d = e.length) for (g = 0; g < d; g++) e[g].data("id", g); else J.splice(g, 1), K.splice(g, 1), Qa--;
                    return
                }
                n = e.length;
                e[n] = d
            } else {
                if (b) return;
                g = K.length;
                n = J.length;
                K[g] = e;
                Qa++;
                J[n] = [d];
                n = 0
            }
            cc(d);
            d.data({id: n, cat: g});
            a && a.trigger && d.trigger("click")
        }
    }

    function Uc() {
        var a = c(this).attr("data-group").split(" ").join("").toLowerCase();
        if (ta) {
            for (var b = K.length, d = !1; b--;) if (K[b] === a) {
                d = !0;
                break
            }
            d || dc(a)
        } else -1 === K.indexOf(a) && dc(a)
    }

    function dc(a) {
        K[K.length] = a;
        Oa = [];
        c(ec + "[data-group=" + a + "]").each(cc);
        J[J.length] = Oa;
        Qa++
    }

    function cc(a) {
        isNaN(a) ? e = a : (e = c(this).data({id: a, cat: Qa}), Oa[a] = e);
        if (h = e.attr("href") || e.attr("data-href")) {
            var b;
            a = "#" !== h.charAt(0) ? h.toLowerCase().split(".").pop() : "inline";
            if (b = -1 !== h.search("youtube.com") ? "youtube" : -1 !== h.search("vimeo.com") ? "vimeo" : "mp4" === a ? "local" : !1) e.data("type", b), e.attr("data-thumbnail") || ("vimeo" === b ? Wc(e, h) : "youtube" === b && e.attr("data-thumbnail", "https://img.youtube.com/vi/" + h.split("https://www.youtube.com/watch?v=")[1] + "/1.jpg")); else if ("jpg" === a || "png" === a || "jpeg" === a || "gif" === a) e.data("type", "image"); else switch (a) {
                case "mp3":
                    e.data("type", "audio");
                    break;
                case "swf":
                    e.data("type", "swf");
                    break;
                case "inline":
                    e.data("type", "inline");
                    break;
                default:
                    e.data("type", "iframe")
            }
            e.on("click.jackbox", Xc);
            if (P = e.attr("data-description")) {
                if (ua) if (a = ua.indexOf(P), -1 === a) {
                    P = c(P);
                    if (!P.length) return;
                    ua[ua.length] = P
                } else P = ua[a]; else if (P = c(P), !P.length) return;
                e.data("description", P)
            }
        }
    }

    function Vc(a) {
        if (fc) {
            fc = !1;
            var b = r.URL.split("?url=");
            if (2 === b.length) {
                window.location = b[0] + "#/" + b[1];
                return
            }
        }
        clearTimeout(Ra);
        gc(a.value);
        -1 !== G ? hc ? (hc = !1, yb()) : Ra = setTimeout(yb, 750) : $ && zb()
    }

    function yb(a) {
        "object" === typeof a && (clearTimeout(Ra), gc(a.value));
        -1 !== G ? ic() : $ && zb()
    }

    function gc(a) {
        !L || (ka || Ea) || w[f].removeClass("jb-thumb-active");
        "/" !== a ? (a = a.split("/"), 3 === a.length ? (f = parseInt(a[2], 10) - 1, isNaN(f) && (f = 0), la = a[1]) : isNaN(a[1]) ? (f = 0, la = a[1]) : (f = parseInt(a[1], 10) - 1, la = "/")) : (la = "/", f = 0);
        if ("/" !== la) for (a = Qa; a--;) {
            if (K[a] === la) {
                G = a;
                Q = J[G].length;
                W = 1 !== Q;
                break
            }
        } else G = -1;
        Ea = !1
    }

    function Za() {
        clearTimeout(jc);
        jc = setTimeout(ma, 100)
    }

    function Xc(a) {
        a.stopPropagation();
        a.preventDefault();
        a = c(this).data();
        $a(a.cat, a.id, !0)
    }

    function $a(a, b, d) {
        clearTimeout(Ra);
        if (!d) {
            if (L) for (d = w.length; d--;) w[d].off("click.jackbox");
            ia.off(".jackbox");
            sa.off(".jackbox");
            Fa && Ga.off("keydown.jackbox");
            t && Ab && k.cjSwipe("unbindSwipe")
        }
        V ? c.address.value(K[a] + "/" + (b + 1)) : (!L || (ka || Ea) || w[f].removeClass("jb-thumb-active"), f = b, G = a, Q = J[G].length, W = 1 !== Q, ic())
    }

    function ab(a) {
        if (a && (a.stopPropagation(), Sa)) return !1;
        $ && (L && !ka && w[f].removeClass("jb-thumb-active"), f < J[G].length - 1 ? f++ : f = 0, Ea = !0, $a(G, f))
    }

    function bb(a) {
        if (a && (a.stopPropagation(), Sa)) return !1;
        $ && (L && !ka && w[f].removeClass("jb-thumb-active"), 0 < f ? f-- : f = J[G].length - 1, Ea = !0, $a(G, f))
    }

    function kc() {
        for (var a = [v[0], ha[0], s[0], ja[0]], b = 4; b--;) a[b].removeEventListener("touchstart", C, !1), a[b].removeEventListener("touchmove", C, !1), a[b].removeEventListener("touchend", C, !1)
    }

    function ic() {
        cb = J[G];
        if (e = cb[f]) {
            if (t) for (var a = [v[0], ha[0], s[0], ja[0]], b = 4; b--;) a[b].addEventListener("touchstart", C, !1), a[b].addEventListener("touchmove", C, !1), a[b].addEventListener("touchend", C, !1);
            h = e.attr("href") || e.attr("data-href");
            if ($) Sa = !0, lc(), mc(); else {
                $ = !0;
                t || Ya.stop();
                Na = I.scrollTop();
                v.appendTo($b).one("click.jackbox", Bb);
                Ha || (nc = v.parents().each(Yc));
                if (Fa) Ga.on("keydown.jackbox_keyboard", Zc);
                oc || (oc = !0, db = parseInt(s.css("padding-left"), 10) + parseInt(s.css("padding-right"), 10), Ia = parseInt(s.css("padding-top"), 10) + parseInt(s.css("padding-bottom"), 10), Cb = parseInt(ia.css("width"), 10) + 14, eb = Ia + Z, Db = F + (Da << 1), fb = parseInt(Y.css("margin-top"), 10), pc = fb - (Db >> 1), qc = parseInt(s.css("padding-left"), 10), rc = parseInt(s.css("padding-top"), 10), R = c(".jackbox-fullscreen"), R.length || (R = null), va = !t && "safari" !== gb && ("webkitRequestFullScreen" in v[0] || "mozFullScreenEnabled" in r));
                na = !Eb && hb && W ? 0 : wb;
                H = I.width();
                M = I.height();
                s.css({width: H, height: M, marginLeft: -(H >> 1) - qc, marginTop: -(M >> 1) - rc});
                Jacked.fadeIn(v[0], {callback: $c});
                sc = setTimeout(mc, 250);
                ha.on("click.jackbox", tc)
            }
        }
    }

    function Yc() {
        c(this).addClass("jackbox-overflow")
    }

    function ad() {
        c(this).removeClass("jackbox-overflow")
    }

    function $c() {
        Ha || I[0].scrollTo(0, 0)
    }

    function mc() {
        L && (w[f].addClass("jb-thumb-active"), ka ? ka = !1 : uc(!1, !0));
        var a;
        a = e.attr("data-autoplay") ? e.attr("data-autoplay") : vc;
        a = "true" === a || !0 === a;
        var b = e.data("description") || null, d = e.attr("data-title") || "", n;
        ib = "true" === e.attr("data-scaleUp");
        jb = b && "string" !== typeof b ? b.html() : !1;
        N = e.data("type");
        a = "true" === a || !0 === a;
        d ? (Fb = d, oa = escape(Fb)) : (oa = !1, "undefined" !== typeof D && (D.data("links") && D.data("links").off(".jackbox"), D.empty()));
        t && (Ab = "image" === N, "inline" !== N && "iframe" !== N && r.addEventListener("touchmove", C, !1));
        "image" !== N && wc();
        kb = !1;
        568 < H ? Y.css("margin-top", 0 === na ? pc : fb) : Y.css("margin-top", fb);
        ha.show();
        Y.addClass("jackbox-spin-preloader");
        switch (N) {
            case "image":
                Ta = !0;
                k = c("<img />").addClass("jackbox-content").one("load.jackbox", lb).prependTo(ja);
                t && (k[0].addEventListener("touchstart", C, !1), k[0].addEventListener("touchmove", C, !1), k[0].addEventListener("touchend", C, !1));
                k.attr("src", h);
                break;
            case "youtube":
                t && (kb = !0);
                Ja(bd.split("{url}").join(h.split("watch?v=")[1]).split("{autoplay}").join(a ? 1 : 0));
                break;
            case "vimeo":
                Ja(cd.split("{url}").join(h.substring(h.lastIndexOf("/"))).split("{autoplay}").join(a));
                break;
            case "local":
                var b = Gb(), d = "true" === e.attr("data-firefoxUsesFlash") ? "true" : "false",
                    g = e.attr("data-flashHasPriority") ? e.attr("data-flashHasPriority") : xc.toString();
                n = "false" === g && va && "firefox" !== gb;
                b = e.attr("data-poster") ? b + e.attr("data-poster") : "false";
                Ja(Hb + "?video=" + h + "&autoplay=" + a + "&flashing=" + g + "&width=" + S + "&height=" + T + "&poster=" + b + "&firefox=" + d, !0);
                break;
            case "audio":
                Gb();
                Ja(Ib + "?audio=" + h + "&title=" + (e.attr("data-audiotitle") ? e.attr("data-audiotitle") : oa) + "&autoplay=" + a);
                break;
            case "swf":
                Gb();
                Ja(Jb + "?swf=" + h + "&width=" + (q.toString() + "&height=" + p.toString()));
                break;
            case "inline":
                a = c(h);
                a = a.length ? a.html() : "";
                k = c("<div />").addClass("jackbox-content jackbox-html").html(a).prependTo(ja);
                k.css("width", q).find("a").on("click", pa);
                e.attr("data-height", k.outerHeight(!0));
                wc();
                lb();
                break;
            default:
                Ja(h, !1, !0)
        }
        va && (n ? R.hide() : R.show())
    }

    function Gb() {
        if (-1 !== h.search("http")) return "";
        var a = r.URL.split("#")[0];
        "/" !== a[a.length - 1] && (a = a.substring(0, a.lastIndexOf("/") + 1));
        h = a + h;
        return a
    }

    function dd(a) {
        switch (a.keyCode) {
            case 39:
                ab();
                break;
            case 37:
                bb();
                break;
            case 40:
                Kb();
                break;
            case 38:
                Kb()
        }
    }

    function Zc(a) {
        27 === a.keyCode && Bb(a)
    }

    function ed() {
        E.css("visibility", "hidden")
    }

    function fd() {
        u.data("offLeft", u.offset().left)
    }

    function yc() {
        Ka.css({opacity: 0, visibility: "hidden"})
    }

    function zc(a) {
        "object" === typeof a && a.stopPropagation();
        x < Q - qa && (x++, Lb(!1, !0))
    }

    function Ac(a) {
        "object" === typeof a && a.stopPropagation();
        0 < x && (x--, Lb(!1, !0))
    }

    function gd(a) {
        a.stopPropagation();
        a = c(this).parent();
        a.addClass("jb-thumb-fadein");
        t || a.addClass("jb-thumb-hover");
        a.data("id") === f && a.addClass("jb-thumb-active")
    }

    function Bc(a) {
        a.stopPropagation();
        if (Sa) return !1;
        a = c(this).data("id");
        a !== f && (L && w[f].removeClass("jb-thumb-active"), f = a, ka = !0, $a(G, f))
    }

    function hd() {
        Ua ? Cc() : (I.off(".jackbox"), Ua = !0, r.mozFullScreenEnabled ? (r.addEventListener("mozfullscreenchange", mb, !1), v[0].mozRequestFullScreen()) : v[0].webkitRequestFullScreen && (r.addEventListener("webkitfullscreenchange", mb, !1), v[0].webkitRequestFullScreen()))
    }

    function mb() {
        r.webkitIsFullScreen || r.mozFullScreen ? ma() : Cc(!0)
    }

    function Mb(a) {
        r.removeEventListener(a.type, Mb, !1);
        ma();
        I.on("resize.jackbox", Za)
    }

    function Cc(a) {
        Ua = !1;
        r.mozFullScreenEnabled ? (r.removeEventListener("mozfullscreenchange", mb, !1), a ? (ma(), I.on("resize.jackbox", Za)) : (r.addEventListener("mozfullscreenchange", Mb, !1), r.mozCancelFullScreen())) : v[0].webkitRequestFullScreen && (r.removeEventListener("webkitfullscreenchange", mb, !1), a ? (ma(), I.on("resize.jackbox", Za)) : (r.addEventListener("webkitfullscreenchange", Mb, !1), r.webkitCancelFullScreen()))
    }

    function wc() {
        Ta = !1;
        S = e.attr("data-width") ? parseInt(e.attr("data-width"), 10) : Dc;
        T = e.attr("data-height") ? parseInt(e.attr("data-height"), 10) : Ec;
        ib = "true" === e.attr("data-scaleUp");
        Fc()
    }

    function Fc() {
        nb = S + db + Cb + Z;
        Nb = T + eb;
        ma("true")
    }

    function lc() {
        clearTimeout(sc);
        Jacked.stopTween(s[0]);
        I.off(".jackbox");
        t && r.removeEventListener("touchmove", C, !1);
        k && (Jacked.stopTween(k[0]), k.remove(), k = null);
        ob && (ob.remove(), ob = null);
        A && (Jacked.stopTween(A[0], !0), A.hide());
        B && (Jacked.stopTween(B[0], !0), B.hide());
        y && (y.removeClass("jb-info-inactive"), Jacked.stopTween(O[0]), O.empty().hide())
    }

    function Bb(a) {
        a.stopPropagation();
        V ? c.address.value("") : zb()
    }

    function zb() {
        clearTimeout(Ra);
        lc();
        v.unbind(".jackbox");
        Fa && Ga.off("keydown.jackbox_keyboard");
        if (W) {
            Fa && Ga.off("keydown.jackbox");
            wa && wa.off(".jackbox");
            xa && xa.off(".jackbox");
            Va && u && u.off(".jackbox");
            Jacked.stopTween(sa[0], !0);
            Jacked.stopTween(ia[0], !0);
            var a = {opacity: 0, visibility: "hidden"};
            sa.off(".jackbox").css(a);
            ia.off(".jackbox").css(a)
        } else ya && ya.show(), z && z.show();
        ha.hide().off(".jackbox");
        Y.removeClass("jackbox-spin-preloader");
        "undefined" !== typeof D && (D.data("links") && D.data("links").off(".jackbox"), D.empty());
        va && R.off(".jackbox");
        za && za.unbind(".jackbox");
        y && y.off(".jackbox");
        if (L) {
            Jacked.stopTween(aa[0]);
            for (aa.off(".jackbox").hide(); w.length;) a = w[0], Jacked.stopTween(a[0]), a.remove(), w.shift();
            ba.off(".jackbox").hide();
            ca.off(".jackbox").hide();
            t && u.cjSwipe("unbindSwipe");
            Jacked.stopTween(U[0]);
            U.empty().css("margin-left", 0);
            z && (z.off(".jackbox"), z && (X.hide(), da.show()));
            L = w = null
        }
        Ha || nc.each(ad);
        Jacked.fadeOut(v[0], {duration: 1E3, callback: id});
        s.css({marginLeft: jd, marginTop: kd});
        t && (kc(), r.removeEventListener("touchmove", C, !1));
        setTimeout(ld, 10);
        E && (E.css("visibility", "hidden"), t && (E[0].removeEventListener("touchstart", pa, !1), E[0].removeEventListener("touchmove", pa, !1), E[0].removeEventListener("touchend", pa, !1)));
        e = $ = Ua = ka = Ob = pb = Ea = Pb = La = null
    }

    function ld() {
        0 !== Na && (Ha || t ? Ya.scrollTop(Na) : Ya.animate({scrollTop: Na}, {duration: 300, queue: !1}))
    }

    function id() {
        v.detach()
    }

    function md(a) {
        a ? bb() : ab()
    }

    function C(a) {
        a.preventDefault()
    }

    function nd(a, b) {
        if (!$ && "success" === b.toLowerCase() && a) {
            var d = a.length, n = document.URL;
            for (n.substring(0, n.lastIndexOf("/")); d--;) c("<img />").attr("src", ra + "/" + a[d].split("../").join(""))
        }
    }

    function Wc(a, b) {
        c.getJSON("https://vimeo.com/api/v2/video/" + b.split("https://vimeo.com/")[1] + ".json?callback=?", {format: "json"}, function (b) {
            a.attr("data-thumbnail", b[0].thumbnail_small)
        })
    }

    function od() {
        var a = c(this), b = a.next("img"), d = b.attr("src");
        b.length && (a = c("<img />").attr({
            width: b.attr("width"),
            height: b.attr("height")
        }).data("parent", a).one("load.jackbox", pd).insertAfter(b), b.remove(), a.attr("src", d))
    }

    function pd() {
        var a = c(this), b = a.data("parent"), d = parseInt(b.css("width"), 10) || b.width(),
            n = parseInt(b.css("height"), 10) || b.height(),
            b = c("<canvas />").addClass("jackbox-canvas-blur").attr({width: d, height: n}).insertBefore(b),
            n = Date.now(), d = n + 1, n = n + 2;
        a.attr("id", d);
        b.attr("id", n);
        StackBlurImage(d, n, 29)
    }

    function qd() {
        var a = c(this);
        a.parent().data({
            tip: a,
            tipWidth: a.width() - 27,
            tipHeight: a.height() + 17
        }).on("mouseenter.jackbox", rd).on("mouseleave.jackbox", sd)
    }

    function rd() {
        var a = c(this), b = a.offset(), d = a.data();
        d.tipX = b.left;
        d.tipY = b.top;
        d.tip.css({opacity: 1, visibility: "visible"});
        a.on("mousemove.jackbox", td)
    }

    function sd() {
        var a = c(this).off("mousemove.jackbox");
        ta ? a.data("tip").css("opacity", 0) : a.data("tip").css({opacity: 0, visibility: "hidden"})
    }

    function pa(a) {
        a.stopImmediatePropagation()
    }

    function tc(a) {
        c(a.target).is("a") || (a.stopPropagation(), a.preventDefault())
    }

    var l = {
            useThumbs: !0,
            deepLinking: !0,
            autoPlayVideo: !1,
            flashVideoFirst: !1,
            defaultVideoWidth: 960,
            defaultVideoHeight: 540,
            thumbnailWidth: 75,
            thumbnailHeight: 50,
            useThumbTooltips: !0,
            dynamic: !1,
            baseName: "jackbox",
            className: ".jackbox",
            preloadGraphics: !0,
            showInfoByDefault: !1,
            thumbsStartHidden: !1,
            showPageScrollbar: !1,
            useKeyboardControls: !0,
            fullscreenScalesContent: !0,
            defaultShareImage: "jackbox/img/default_share.jpg"
        }, Z = 10, Da = 2, Qb = "", Jb = "/modules/jackbox_swf.html", Rb = "/img/thumbs/default.jpg",
        Hb = "/modules/jackbox_video.html", Ib = "/modules/jackbox_audio.html", Sb = "",
        cd = "",
        bd = "",
        ub = '<div class="jackbox-top clearfix"><div class="jackbox-social"></div><div class="jackbox-top-icons"><span class="jackbox-fullscreen"><span class="jackbox-button jackbox-fs"></span><span class="jackbox-button jackbox-ns"></span></span><span class="jackbox-button jackbox-button-margin jackbox-close"></span></div><div />',
        vb = '<div class="jackbox-bottom clearfix"><div class="jackbox-controls"><span class="jackbox-button jackbox-arrow-left"></span><span class="jackbox-button jackbox-arrow-right"></span></div><div class="jackbox-title-text"><span class="jb-current"></span><span class="jb-divider">/</span><span class="jb-total"></span><span class="jackbox-title-txt"></span></div><div class="jackbox-bottom-icons"><span class="jackbox-button jackbox-info"></span><span class="jackbox-button-margin jackbox-button-thumbs"><span class="jackbox-button jackbox-hide-thumbs"></span><span class="jackbox-button jackbox-show-thumbs"></span></span></div></div>',
        jc, B, va, qc, rc, Tb, Db, qb, wb, Ua, Ub, Gc, Ia, db, Hc, E, Cb, Vb, U, u, Wb, ca, A, O, ea, X, da, sa, R, Na,
        ia, oa, ba, ja, Y, qa, ua, Xb, Fb, Ab, ec, ra, La, Ka, na, z, za, jb, ya, Ic, Va, Jc, Aa, Ma, x, ha, Ba, xa, W,
        fb, wa, ib, Kc, t, eb, rb, Wa, v, D, e, Oa, y, Ga, r, h, q, I, Q, Lc, K, p, la, J, ta, Ca, Yb, sc, Pa, w, $b, s,
        xb, S, sb, Ra, Mc, k, T, Ta, H, M, nb, Nb, N, nc, gb, fa, P, $, oc, Ya, Fa, kb, hb, Sa, ka, L, kd, Ob, cb, Ha,
        V, Xa, ob, aa, pb, pc, jd, Nc, Ea, Zb, Pb, vc, ga, ac, F, xc, Oc, Pc, Eb, Dc, Ec, f = 1, G = -1, Qa = 0,
        hc = !0, fc = !0, Qc = {
            init: function (a, b) {
                Nc || "undefined" === typeof Jacked || (b && c.extend(l, b), ec = l.className, hb = l.useThumbs, V = l.deepLinking, Va = l.useThumbTooltips, vc = l.autoPlayVideo, Fa = l.useKeyboardControls, Ha = l.showPageScrollbar, ga = l.thumbnailWidth, Mc = l.fullscreenScalesContent, F = l.thumbnailHeight, xc = l.flashVideoFirst, Pc = l.showInfoByDefault, Eb = l.thumbsStartHidden, Oc = l.defaultShareImage, Dc = l.defaultVideoWidth, Ec = l.defaultVideoHeight, ra = l.baseName, Jb = ra + Jb, Hb = ra + Hb, Ib = ra + Ib, Qb = ra + Qb, Rb = ra + Rb, Sb = ra + Sb, r = document, Ga = c(document), Nc = !0, fa = ga + Da, sb = -1 !== r.URL.search("file:///"), Jacked.setEngines({
                    ios: !0,
                    safari: !0,
                    opera: !0,
                    firefox: !0
                }), l.preloadGraphics && !sb && c.getJSON(Qb + "?jackbox_path=../img/graphics/", nd), xb = a, ta = Jacked.getIE(), t = Jacked.getMobile(), gb = Jacked.getBrowser(), Lc = "ie" === gb, t && (Ha = !1), "undefined" !== typeof c.address && V ? Lc || l.dynamic ? (tb(), c.address.update()) : c.address.init(tb) : (V = !1, tb()), "undefined" === typeof StackBlurImage || (sb || ta) || c(".jackbox-hover-blur").each(od), c(".jackbox-tooltip").each(qd), l = null)
            }, frameReady: function () {
                $ && lb()
            }, newItem: function (a, b) {
                a.each(bc, [b])
            }, removeItem: function (a) {
                a.each(bc, [!1, !0])
            }
        }, Ja = function () {
            var a = {
                type: "text/html",
                frameborder: 0,
                mozallowfullscreen: "mozallowfullscreen",
                webkitallowfullscreen: "webkitallowfullscreen",
                allowfullscreen: "allowfullscreen"
            };
            return function (b, d, n) {
                a.width = q;
                a.height = p;
                a.scrolling = n ? "auto" : "no";
                k = c("<iframe />").attr(a);
                kb ? k.addClass("jackbox-youtube") : k.addClass("jackbox-content");
                k.prependTo(ja);
                if (!d) k.one("load.jackbox", lb);
                console.log(b);
                k.attr("src", b)
            }
        }(), lb = function () {
            var a = {};
            return function (b) {
                b && b.stopPropagation();
                Ta && (S = this.width || k.width(), T = this.height || k.height(), Fc());
                a.width = q;
                a.height = p;
                k.css(a);
                Rc(!0);
                Ub && Ub();
                I.on("resize.jackbox", Za)
            }
        }(), Rc = function () {
            var a = {}, b = {}, d = {};
            return function (c) {
                if (c) {
                    260 > q && (Ca += 260 - q);
                    c = Math.max(q, 260);
                    if (c === La && p === Xb) {
                        Sc();
                        return
                    }
                    a.callback = Sc;
                    a.duration = La ? 50 < Math.abs(c - La) || 50 < Math.abs(p - Xb) ? 600 : 300 : 600
                } else c = q, d.width = c, a.duration = 300, delete a.callback, A && Jacked.tween(A[0], d, a), B && Jacked.tween(B[0], d, a), d.height = p, Jacked.stopTween(k[0], !0), Jacked.tween(k[0], d, a);
                b.marginLeft = -((Ca >> 1) + 0.5 | 0);
                b.marginTop = -((Yb >> 1) + 0.5 | 0);
                b.height = p;
                b.width = c;
                La || (b.opacity = 1);
                Jacked.tween(s[0], b, a);
                La = c;
                Xb = p
            }
        }(), Sc = function () {
            var a = {}, b = {opacity: 1, visibility: "visible"};
            return function () {
                ud();
                Y.removeClass("jackbox-spin-preloader");
                var d = Math.max(q, 260);
                a.duration = 600;
                Ta && !ta ? Jacked.fadeIn(k[0], a) : (kb ? k.css("visibility", "visible") : k.show(), "audio" !== N && "local" !== N || k[0].contentWindow.cjInit());
                a.duration = 300;
                ta ? (A && A.css("width", d).show(), B && B.css("width", d).show()) : (A && (A.css("width", d), Jacked.fadeIn(A[0], a)), B && (B.css("width", d), Jacked.fadeIn(B[0], a)));
                y && jb ? (y.show(), O.html(jb).show(), ea = -O.outerHeight(), E.css("height", -ea < p ? -ea : p), Pc ? (Ma = !0, y.addClass("jb-info-inactive"), O.css({
                    visibility: "visible",
                    marginTop: 0
                })) : (Ma = !1, O.css("margin-top", ea))) : y && (y.hide(), O.hide());
                Sa = !1;
                !pb && W && (ia.css(b), sa.css(b));
                if (!Pb && hb && W) {
                    var d = J[G], e = [], g = Q, f, m, l, h, s;
                    for (Pb = !0; g--;) l = d[g], l.attr("data-thumbnail") ? e[g] = !1 : (f = l.children("img"), f.length ? (l.attr("data-thumbnail", f.attr("src")), e[g] = f) : ("image" === l.data("type") ? l.attr("data-thumbnail", l.attr("href") || l.attr("data-href")) : l.attr("data-thumbnail", Rb), e[g] = !1));
                    w = [];
                    aa || (g = r.createDocumentFragment(), l = F >> 1, aa = c("<div />").addClass("jackbox-thumb-holder").css("height", F).appendTo(v), u = c("<div />").addClass("jackbox-thumb-panel").css("height", F), ca = c("<div />").addClass("jackbox-thumb-right"), ba = c("<div />").addClass("jackbox-thumb-left"), g.appendChild(u[0]), g.appendChild(ca[0]), g.appendChild(ba[0]), u[0].cjThumbs = !0, aa[0].appendChild(g), U = c("<div />").addClass("jackbox-thumb-strip").appendTo(u), ba.css("top", l), ca.css("top", l));
                    l = r.createDocumentFragment();
                    for (g = 0; g < Q; g++) {
                        m = w[g] = c("<div />").data("id", g).addClass("jackbox-thumb").css({
                            width: ga,
                            height: F,
                            left: fa * g
                        }).on("click.jackbox", Bc);
                        if (Va && (f = cb[g].attr("data-thumbTooltip") || cb[g].attr("data-title"))) m.data("theTitle", f).on("mouseenter.jackbox", vd).on("mouseleave.jackbox", yc);
                        l.appendChild(m[0]);
                        f = c("<img />").addClass("jb-thumb").one("load.jackbox", gd).appendTo(m);
                        m.data("theThumb", f);
                        e[g] ? (m = e[g].attr("width") || e[g].width(), h = e[g].attr("height") || e[g].height()) : (m = ga, h = F);
                        m > ga && h > F && (s = m > h ? ga / m : F / h, m *= s, h *= s, h < F && (s = (F - h) / F, m += m * s, h += h * s), m < ga && (s = (ga - m) / ga, m += m * s, h += h * s), m !== (m | 0) && (m = m + 1 | 0), h !== (h | 0) && (h = h + 1 | 0));
                        f.attr({width: m, height: h, src: d[g].attr("data-thumbnail")})
                    }
                    U[0].appendChild(l);
                    Hc = w.length;
                    Wb = fa * g;
                    L = !0;
                    x = 0;
                    aa.on("click.jackbox", tc).show();
                    Tc();
                    z && (Eb ? (da.hide(), X.show(), aa.css("bottom", na)) : (X.hide(), da.show(), aa.css("bottom", 0)), z.on("click.jackbox", Kb))
                }
                if (!pb) {
                    pb = !0;
                    if (va) R.on("click.jackbox", hd);
                    if (za) za.one("click.jackbox", Bb);
                    if (y) y.on("click.jackbox", wd);
                    if (W) {
                        if (xa) xa.on("click.jackbox", ab);
                        if (wa) wa.on("click.jackbox", bb);
                        if (Va && u) u.on("mouseenter.jackbox", fd);
                        t && E && (E[0].addEventListener("touchstart", pa, !1), E[0].addEventListener("touchmove", pa, !1), E[0].addEventListener("touchend", pa, !1))
                    }
                }
                t && (k[0].removeEventListener("touchstart", C, !1), k[0].removeEventListener("touchmove", C, !1), k[0].removeEventListener("touchend", C, !1), kc());
                if (W) {
                    if (L) for (d = w.length; d--;) w[d].on("click.jackbox", Bc);
                    ia.on("click.jackbox", bb);
                    sa.on("click.jackbox", ab);
                    if (Fa) Ga.on("keydown.jackbox", dd);
                    t && Ab && k.cjSwipe("touchSwipe", md)
                }
                "inline" === N && ma()
            }
        }(), ud = function () {
            var a = {
                type: "text/html",
                frameborder: 0,
                mozallowfullscreen: "mozallowfullscreen",
                webkitallowfullscreen: "webkitallowfullscreen",
                allowfullscreen: "allowfullscreen",
                scrolling: "no"
            };
            return function () {
                Ic || (Ic = !0, Wa = c(".jb-total"),
                    y = c(".jackbox-info"), Aa = c(".jb-divider"),
                    Ba = c(".jb-current"),
                    za = c(".jackbox-close"),
                    rb = c(".jackbox-title-text"), D = c(".jackbox-title-txt"),
                    ya = c(".jackbox-controls"), wa = c(".jackbox-arrow-left"),
                    Xa = c(".jackbox-social"),
                    xa = c(".jackbox-arrow-right"),
                    z = c(".jackbox-button-thumbs"),
                    X = c(".jackbox-show-thumbs"),
                    da = c(".jackbox-hide-thumbs"),
                D.length || (D = null), rb.length || (rb = null), wa.length || (wa = null), Aa.length || (Aa = null), xa.length || (xa = null), ya.length || (ya = null), za.length || (za = null), Xa.length || (Xa = null), Ba.length && Wa.length || (Ba = null), va ? (c(".jackbox-ns").hide(), R.length || (R = va = null)) : R && R.hide(), hb ? z.length && X.length && da.length ? X.hide() : z = X = da = null : (z.hide(), z = X = da = null), y.length ? (E = c("<div />").addClass("jackbox-info-text").appendTo(ja).css("visibility", "hidden"), O = c("<div />").addClass("jackbox-description-text").appendTo(E)) : y = null, Va && (Ka = c("<span />").addClass("jackbox-thumb-tip").css("bottom", F), Tb = c("<span />").addClass("jackbox-thumb-tip-text").text("render me").appendTo(Ka), Ka.appendTo(v), Gc = (parseInt(Ka.css("padding-left"), 10) << 1) - (Da << 1)));
                W || (ya && ya.hide(), z && z.hide());
                if (rb) {
                    "false" === oa && (oa = !1);
                    var b = D && oa, d = b ? " -&nbsp;" : "";
                    Ba && W ? (Ba.text(f + 1).show(), Wa.html(Q + d).show(), Aa && Aa.show()) : (Wa && Wa.hide(), Ba && Ba.hide(), Aa && Aa.hide());
                    b && (D.html(Fb), b = D.find("a"), b.length && (b.on("click.jackbox", pa), D.data("links", b)))
                }
                if (Xa && !sb) {
                    var n, b = r.URL.split("#")[0], d = b.length - 1;
                    -1 !== b.search("/") && ("/" !== b.charAt(d) ? (V ? n = b + "#/" + la + "/" + (f + 1) : n = b, b = b.substring(0, b.lastIndexOf("/"))) : (b = b.substring(0, d), V ? n = b + "/#/" + la + "/" + (f + 1) : n = b));
                    Ta ? d = e.attr("href") || e.attr("data-href") : (d = e.children("img"), d = d.length ? d.attr("src") : Oc);
                    -1 === d.search("http") && (d = "/" !== d.charAt(0) ? b + "/" + d : b + d);
                    b = oa ? oa.replace(/(<([^>]+)>)/ig, "") : r.title;
                    b = b.split(".").join("");
                    a.width = 200;
                    a.height = 21;
                    a.src = Sb + "?url=" + encodeURIComponent(n) + "&poster=" + encodeURIComponent(d) + "&title=" + escape(b);
                    ob = c("<iframe />").attr(a).appendTo("")
                }
            }
        }(), wd = function () {
            var a = {}, b = {duration: 300};
            return function (d) {
                d && d.stopPropagation();
                Ma ? (a.marginTop = ea, b.callback = ed, y.removeClass("jb-info-inactive")) : (y.addClass("jb-info-inactive"), E.css("visibility", "visible"), a.marginTop = 0, delete b.callback);
                Jacked.tween(O[0], a, b);
                Ma = !Ma
            }
        }(), vd = function () {
            var a = {opacity: 1, visibility: "visible"};
            return function () {
                t && (clearTimeout(Kc), Kc = setTimeout(yc, 2E3));
                var b = c(this), d, e, g;
                Tb.text(b.data("theTitle"));
                d = parseInt(Tb.css("width"), 10);
                g = u.data("offLeft");
                b = b.offset().left;
                e = g + u.width() - d - Gc;
                a.width = d;
                a.left = b < g ? g : b > e ? e : b;
                Ka.css(a)
            }
        }(), Kb = function () {
            var a = {}, b = {duration: 300};
            return function (d) {
                d && d.stopPropagation();
                0 === na ? (na = wb, z && (da.hide(), X.show())) : (na = 0, z && (X.hide(), da.show()));
                a.bottom = na;
                Jacked.tween(aa[0], a, b);
                569 > H || (ma("true"), Rc())
            }
        }(), Tc = function () {
            var a = {};
            return function (b) {
                var d = H - 160;
                Wb < d ? (qa = Hc, Zb = !1) : (qa = d / fa | 0, Zb = !0);
                qb = fa * qa - Da;
                Vb = qa - 1;
                a.marginLeft = -(qb >> 1) - Da;
                a.width = qb;
                u.css(a);
                U.css("width", Wb);
                uc(b)
            }
        }(), uc = function () {
            var a = {}, b = {duration: 300};
            return function (d, c) {
                if (d) x = f, 0 !== f && f + qa > Q && (x = Q - qa), Jacked.stopTween(U[0]), U.css("left", x * -fa); else {
                    if (0 === f) x = 0; else if (f > x + Vb) for (; f > x + Vb;) x++;
                    c ? (a.left = x * -fa, Jacked.tween(U[0], a, b)) : (Jacked.stopTween(U[0]), U.css("left", x * -fa))
                }
                Lb(d, !1)
            }
        }(), Lb = function () {
            var a = {}, b = {duration: 300};
            return function (d, c) {
                ba.off(".jackbox");
                ca.off(".jackbox");
                if (Zb) if (t && u.cjSwipe("unbindSwipe"), x < Q - qa ? (ca.on("click.jackbox", zc).show(), t && u.cjSwipe("touchSwipeLeft", zc, !0)) : ca.hide(), 0 < x ? (ba.on("click.jackbox", Ac).show(), t && u.cjSwipe("touchSwipeRight", Ac, !0)) : ba.hide(), c) a.left = x * -fa, Jacked.tween(U[0], a, b); else {
                    if (d || !Ob) {
                        var e = u.offset().left;
                        ba.css("left", e);
                        ca.css("left", e + qb);
                        Ob = !0
                    }
                } else ba.hide(), ca.hide()
            }
        }(), ma = function () {
            var a = {opacity: 1}, b = {};
            return function (d) {
                H = I.width();
                M = Math.max(I.height(), 226);
                var c = 568 < H && 0 === na ? Db : 0;
                Jc = "audio" !== N && "inline" !== N ? Ua ? ib || Mc : ib : !1;
                if (nb < H && Nb + c < M && !Jc) q = S, p = T; else {
                    q = H / nb;
                    p = M / Nb;
                    var e = q > p ? p : q;
                    q = S * e;
                    p = T * e;
                    H > M ? p + eb + c > M && (p = M - Ia - Z - c, q = S * (p / T)) : q > p ? q + nb > H && (q = H - Z, p = T * (q / S)) : p + eb + c > M && (p = M - Ia - Z - c, q = S * (p / T));
                    q !== (q | 0) && (q = q + 1 | 0);
                    p !== (p | 0) && (p = p + 1 | 0)
                }
                if ("inline" === N) {
                    var e = H - db - Cb - Z, f = M - Ia - Z - c;
                    q = S > e ? e : S;
                    p = T < f ? T : p
                }
                Ca = q + db;
                Yb = p + Ia + c;
                "true" !== d && (Jacked.stopTween(s[0], !1, !0), k && Jacked.stopTween(k[0], !0, !0), 260 > q && (Ca += 260 - q), d = Math.max(260, q), a.width = d, a.height = p, b.marginLeft = -(0.5 * Ca + 0.5 | 0), b.marginTop = -(0.5 * Yb + 0.5 | 0), b.width = d, b.height = p, s.css(b), k.css(a), B && (Jacked.stopTween(B[0]), B.css("width", d)), A && (Jacked.stopTween(A[0]), A.css("width", d)), y && jb && (ea = -O.outerHeight(), E.css("height", -ea < p ? -ea : p), Ma || (Jacked.stopTween(O[0], !1, !0), O.css("margin-top", ea))), L && Tc(!0))
            }
        }(), td = function () {
            var a = {};
            return function (b) {
                var d = c(this).data();
                a.left = b.pageX - d.tipX - d.tipWidth;
                a.top = b.pageY - d.tipY - d.tipHeight;
                d.tip.css(a)
            }
        }();
    c.fn.jackBox = function (a, b) {
        if (Qc.hasOwnProperty(a)) Qc[a](this, b);
        return this
    };
    c.jackBox = {
        available: function (a) {
            a && (ac ? V ? setTimeout(a, 250) : a() : Pa = a)
        }, itemLoaded: function (a) {
            Ub = a
        }
    }
})(jQuery);

function jackboxFrameReady() {
    jQuery.fn.jackBox("frameReady")
};