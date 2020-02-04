$(document).ready(function ()   {
    $("#login").load("./includes/login/login.php", function () {
        $("#login_close").click(function () {
            $("#login").slideUp();
        });
    });
    $("head").append(
        "<link rel=\'stylesheet\' href=\'./includes/login/style.css\' media=\'(max-width: 900px)\'>\n"+
        "<link rel=\'stylesheet\' href=\'./includes/login/lap.css\' media=\'(min-width: 900px)\'>"
    );
});
function login(){
    $("#sign_up").slideUp();
    $("#nav_slide").slideUp();
    $("#login").slideToggle();
}
