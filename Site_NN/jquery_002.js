(function (e) {
    e.fn.extend({
        blueberry: function (t) {
            var n = {
                interval: 5e3,
                duration: 500,
                lineheight: 7.4,
                height: "auto",
                hoverpause: false,
                pager: false,
                nav: false,
                keynav: false
            };
            var t = e.extend(n, t);
            return this.each(function () {
                var n = t;
                var r = e(this);
                var i = e(".slides li", r);
                var s = e(".pager li", r);
                var o = 0;
                var u = o + 1;
                var a = i.eq(o).find("img").height();
                var f = i.eq(o).find("img").width();
                var l = f / a;
                var c = 0;
                var h = 0;
                i.hide().eq(o).fadeIn(n.duration).addClass("active");
                if (s.length) {
                    s.eq(o).addClass("active")
                } else if (n.pager) {
                    r.append('<ul class="pager"></ul>');
                    i.each(function (t) {
                        e(".pager", r).append("<li><a><span>" + t + "</span></a></li>")
                    });
                    s = e(".pager li", r);
                    s.eq(o).addClass("active")
                }
                if (s) {
                    e("a", s).click(function () {
                        clearTimeout(r.play);
                        u = e(this).parent().index();
                        p();
                        return false
                    })
                }
                var p = function () {
                    i.eq(o).fadeOut(n.duration).removeClass("active").end().eq(u).fadeIn(n.duration).addClass("active").queue(function () {
                        d();
                        e(this).dequeue()
                    });
                    if (s) {
                        s.eq(o).removeClass("active").end().eq(u).addClass("active")
                    }
                    o = u;
                    u = o >= i.length - 1 ? 0 : o + 1
                };
                var d = function () {
                    r.play = setTimeout(function () {
                        p()
                    }, n.interval)
                };
                d();
                if (n.hoverpause) {
                    i.hover(function () {
                        clearTimeout(r.play)
                    }, function () {
                        d()
                    })
                }
                var v = function () {
                    c = e(".slides", r).width();
                    h = Math.floor(c / l / n.lineheight);
                    e(".slides", r).css({
                        height: h
                    })
                };
                v();
                e(window).resize(function () {
                    v()
                });
                if (n.keynav) {
                    e(document).keyup(function (e) {
                        switch (e.which) {
                            case 39:
                            case 32:
                                clearTimeout(r.play);
                                p();
                                break;
                            case 37:
                                clearTimeout(r.play);
                                u = o - 1;
                                p();
                                break
                        };
                    });
                };
            });
        }
    });
})(jQuery)