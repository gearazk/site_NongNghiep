__twttrll([1], {
    60: function (t, e, n) {
        var r = n(61);
        t.exports = r.build([n(71)])
    },
    71: function (t, e, n) {
        function r(t) {
            return "large" === t ? "l" : "m"
        }

        function i(t) {
            t.params({
                screenName: {
                    required: !0
                },
                lang: {
                    required: !0,
                    transform: m.matchLanguage,
                    fallback: "en"
                },
                size: {
                    fallback: "medium",
                    transform: r
                },
                showScreenName: {
                    fallback: !0
                },
                showCount: {
                    fallback: !0
                },
                partner: {
                    fallback: h(s.val, s, "partner")
                },
                count: {},
                preview: {}
            }), t.define("getUrlParams", function () {
                return l.compact({
                    id: this.id,
                    lang: this.params.lang,
                    size: this.params.size,
                    screen_name: this.params.screenName,
                    show_count: "none" === this.params.count ? !1 : this.params.showCount,
                    show_screen_name: this.params.showScreenName,
                    preview: this.params.preview,
                    partner: this.params.partner,
                    dnt: c.enabled(),
                    _: +new Date
                })
            }), t.around("widgetDataAttributes", function (t) {
                return l.aug({
                    "screen-name": this.params.screenName
                }, t())
            }), t.override("render", function () {
                var t = f(v, {
                        lang: this.params.lang
                    }),
                    e = d.encode(this.getUrlParams()),
                    n = u.base() + t + "#" + e;
                return o.all([this.sandbox.setTitle(g), this.sandbox.addClass(w), this.sandbox.loadDocument(n)])
            })
        }
        var o = n(2),
            a = n(61),
            s = n(16),
            u = n(72),
            c = n(36),
            f = n(73),
            l = n(14),
            d = n(28),
            h = n(20),
            p = n(74),
            m = n(75),
            v = p.followButtonHtmlPath,
            g = "Twitter Follow Button",
            w = "twitter-follow-button";
        t.exports = a.couple(n(78), i)
    },
    73: function (t, e) {
        function n(t, e) {
            return t.replace(r, function (t, n) {
                return void 0 !== e[n] ? e[n] : t
            })
        }
        var r = /\{\{([\w_]+)\}\}/g;
        t.exports = n
    },
    74: function (t, e) {
        t.exports = {
            tweetButtonHtmlPath: "/widgets/tweet_button.c633b87376883931e7436b93bb46a699.{{lang}}.html",
            followButtonHtmlPath: "/widgets/follow_button.c633b87376883931e7436b93bb46a699.{{lang}}.html",
            hubHtmlPath: "/widgets/hub.c633b87376883931e7436b93bb46a699.html"
        }
    },
    198: function (t, e, n) {
        var r = n(61);
        t.exports = r.build([n(199)])
    },
    199: function (t, e, n) {
        function r(t) {
            return "large" === t ? "l" : "m"
        }

        function i(t) {
            return v.contains(I, t)
        }

        function o(t) {
            return w.hashTag(t, !1)
        }

        function a(t) {
            var e = /\+/.test(t) && !/ /.test(t);
            return e ? t.replace(/\+/g, " ") : t
        }

        function s(t) {
            t.params({
                lang: {
                    required: !0,
                    transform: x.matchLanguage,
                    fallback: "en"
                },
                size: {
                    fallback: "medium",
                    transform: r
                },
                type: {
                    fallback: "share",
                    validate: i
                },
                text: {
                    transform: a
                },
                screenName: {
                    transform: w.screenName
                },
                buttonHashtag: {
                    transform: o
                },
                partner: {
                    fallback: b(l.val, l, "partner")
                },
                via: {},
                related: {},
                hashtags: {},
                url: {}
            }), t.define("getUrlParams", function () {
                var t = this.params.text,
                    e = this.params.url,
                    n = this.params.via,
                    r = this.params.related,
                    i = m.getScreenNameFromPage();
                return "share" === this.params.type ? (t = t || c.title, e = e || m.getCanonicalURL() || f.href, n = n || i) : i && (r = r ? i + "," + r : i), v.compact({
                    id: this.id,
                    lang: this.params.lang,
                    size: this.params.size,
                    type: this.params.type,
                    text: t,
                    url: e,
                    via: n,
                    related: r,
                    button_hashtag: this.params.buttonHashtag,
                    screen_name: this.params.screenName,
                    hashtags: this.params.hashtags,
                    partner: this.params.partner,
                    original_referer: f.href,
                    dnt: h.enabled(),
                    _: +new Date
                })
            }), t.around("widgetDataAttributes", function (t) {
                return "mention" == this.params.type ? v.aug({
                    "screen-name": this.params.screenName
                }, t()) : "hashtag" == this.params.type ? v.aug({
                    hashtag: this.params.buttonHashtag
                }, t()) : v.aug({
                    url: this.params.url
                }, t())
            }), t.override("render", function () {
                var t, e = p(_, {
                        lang: this.params.lang
                    }),
                    n = g.encode(this.getUrlParams()),
                    r = d.base() + e + "#" + n;
                switch (this.params.type) {
                    case "hashtag":
                        t = N;
                        break;
                    case "mention":
                        t = R;
                        break;
                    default:
                        t = C
                }
                return u.all([this.sandbox.setTitle(A), this.sandbox.addClass(T), this.sandbox.addClass(t), this.sandbox.loadDocument(r)])
            })
        }
        var u = n(2),
            c = n(9),
            f = n(13),
            l = n(16),
            d = n(72),
            h = n(36),
            p = n(73),
            m = n(38),
            v = n(14),
            g = n(28),
            w = n(27),
            y = n(61),
            b = n(20),
            E = n(74),
            x = n(75),
            _ = E.tweetButtonHtmlPath,
            A = "Twitter Tweet Button",
            T = "twitter-tweet-button",
            C = "twitter-share-button",
            N = "twitter-hashtag-button",
            R = "twitter-mention-button",
            I = ["share", "hashtag", "mention"];
        t.exports = y.couple(n(78), s)
    }
});