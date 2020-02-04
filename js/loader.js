function require(name) {
    $("head").append('<link class="page_link" rel="stylesheet" href="./css/'+name+'">');
}
function load_page(page, options = "") {
    document.location.hash = page+"?"+options;
}
if ("onhashchange" in window) {
    function locationHashChanged() {
        $("#nav_slide").slideUp();
        $("#container").fadeOut(400, function () {
            setTimeout(function () {

                let page = location.hash.split("#").join("").split("?")[0].length == 0 ? "home" : location.hash.split("#").join("").split("?")[0];
                let options = location.hash.split("#").join("").split("?").length >= 2 ? location.hash.split("#").join("").split("?")[1] : "";

                if(options.length != 0){
                    options = "?"+options;
                }
                $("head .page_link").remove();
                $("#container").empty().load("./pages/"+page+".php"+options, function () {
                    $("head").append(
                        '<link class="page_link" rel="stylesheet" href="./css/pages/'+page+'/style.css" media="(max-width: 900px)">\n' +
                        '<link class="page_link" rel="stylesheet" href="./css/pages/'+page+'/lap.css" media="(min-width: 900px)">'
                    );
                    $("#container").fadeIn();
                });
            }, 100);
        });
    }
    $("#nav_slide").toggle();
    locationHashChanged();
    window.onhashchange = locationHashChanged;
}