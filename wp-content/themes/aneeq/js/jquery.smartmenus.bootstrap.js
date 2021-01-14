/*! SmartMenus jQuery Plugin Bootstrap Addon - v0.1.0 - March 27, 2014
 * http://www.smartmenus.org/
 * Copyright 2014 Vasil Dinkov, Vadikom Web Ltd. http://vadikom.com; Licensed MIT */
(function(t) {
    t(function() {
        t("ul.navbar-nav").each(function() {
            var s = t(this);
            s.addClass("sm").smartmenus({
                subMenusSubOffsetX: 2,
                subMenusSubOffsetY: -6,
                subIndicatorsPos: "append",
                subIndicatorsText: "...",
                collapsibleShowFunction: null,
                collapsibleHideFunction: null,
                rightToLeftSubMenus: s.hasClass("navbar-right"),
                bottomToTopSubMenus: s.closest(".navbar").hasClass("navbar-fixed-bottom")
            }).find("a.current").parent().addClass("active")
        }).bind({
            "show.smapi": function(s, e) {
                var i = t(e),
                    o = i.dataSM("scroll-arrows"),
                    a = t(this).data("smartmenus");
                o && o.css("background-color", t(document.body).css("background-color")), i.parent().addClass("open" + (a.isCollapsible() ? " collapsible" : ""))
            },
            "hide.smapi": function(s, e) {
                t(e).parent().removeClass("open collapsible")
            },
            "click.smapi": function(s, e) {
                var i = t(this).data("smartmenus");
                if (i.isCollapsible()) {
                    var o = t(e),
                        a = o.parent().dataSM("sub");
                    if (a && a.dataSM("shown-before") && a.is(":visible")) return i.itemActivate(o), i.menuHide(a), !1
                }
            }
        })
    }), t.SmartMenus.prototype.isCollapsible = function() {
        return "left" != this.$firstLink.parent().css("float")
    }
})(jQuery);