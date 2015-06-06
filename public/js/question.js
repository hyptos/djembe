var solfege1_res=0;
var solfege2_res=0;

var instru1_res=0;
var instru2_res=0;
var instru3_res=0;

var hist1_res=0;
var hist2_res=0;
var hist3_res=0;

$( document ).ready(function() {
    $("#solfege1").hide();
    $("#solfege2").hide();
    $("#instru1").hide();
    $("#instru2").hide();
    $("#instru3").hide();
    $("#hist1").hide();
    $("#hist2").hide();
    $("#hist3").hide();
    $("#termine").hide();

    $("#parti").show();

    $("body").on("click", "#parti_b", function() {
       //
        $("#parti").hide();
        $("#solfege1").show();
    });
    $("body").on("click", "#solfege1_b", function() {
        //
        $("#solfege1").hide();
        $("#solfege2").show();

    });

    $("body").on("click", "#solfege2_b", function() {
        //
        $("#solfege2").hide();
        $("#instru1").show();
    });

    $("body").on("click", "#instru1_b", function() {
        //
        $("#instru1").hide();
        $("#instru2").show();
    });

    $("body").on("click", "#instru2_b", function() {
        //
        $("#instru2").hide();
        $("#instru3").show();
    });
    $("body").on("click", "#instru3_b", function() {
        //
        $("#instru3").hide();
        $("#hist1").show();
    });
    $("body").on("click", "#hist1_b", function() {
        //
        $("#hist1").hide();
        $("#hist2").show();
    });
    $("body").on("click", "#hist2_b", function() {
        //
        $("#hist2").hide();
        $("#hist3").show();
    });
});

