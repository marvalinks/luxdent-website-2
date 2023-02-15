"use strict";
var app_faq = {
    init: function () {
        $(".app-faq-item").on("click", function () {
            $(this).toggleClass("open"),
                delayBeforeFire(function () {
                    $(window).resize();
                }, 100);
        }),
            $("#app_faq_open").on("click", function () {
                $(".app-faq .app-faq-item").addClass("open"),
                    delayBeforeFire(function () {
                        $(window).resize();
                    }, 100);
            }),
            $("#app_faq_hide").on("click", function () {
                $(".app-faq .app-faq-item").removeClass("open"),
                    delayBeforeFire(function () {
                        $(window).resize();
                    }, 100);
            }),
            $("#app_faq_remove").on("click", function () {
                $(".app-faq")
                    .find(".app-faq-highlight")
                    .each(function () {
                        var a = $(this).html();
                        $(this).after(a), $(this).remove();
                    }),
                    $("#app_faq_hide").trigger("click");
            }),
            this.search();
    },
    search: function () {
        $("#app_faq_form").on("submit", function () {
            var a = $("#app_faq_search").val();
            if (a.length >= 3) {
                $(".app-faq .app-faq-item").removeClass("open"),
                    $(".app-faq").removeHighlight();
                var i = $(
                    ".app-faq .app-faq-item-content:containsi('" + a + "')"
                );
                i.highlight(a),
                    i.each(function () {
                        $(this).parent(".app-faq-item").addClass("open");
                    }),
                    delayBeforeFire(function () {
                        $(window).resize();
                    }, 100);
            }
            return !1;
        });
    },
};
$(function () {
    app_faq.init();
});
