 $(document).ready(function(e) {
      $("*[role=tab]").each(function() {
        $(this).one("show.bs.tab", function() {
            var e = $(this).attr("href") || "",
                t = $(e).data() || !1;
            t.target && (e = t.target), $(e).length > 0 && t && (t.targetLink ? $(e).load(t.targetLink, function() {
                $(e).find("*[role=ajax]").ajaxMagic()
            }) : ($(e).find("*[role=ajax]").ajaxMagic(), $("*[role=map]").maps()))
        })
    })
 });