$( document ).ready(function() {
    $("#question1").hide;
    $("#parti").show();
});

$("body").on("click", "#parti", function() {
    $("#parti").hide();
    $("#question1").show();
});
