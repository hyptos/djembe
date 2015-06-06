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
        //récupération données question précèdente
        if (($('input[name="guitare"]:checked').val()) == "corde"){
            instru1_res=30;
        }
    });

    $("body").on("click", "#instru2_b", function() {
        //
        $("#instru2").hide();
        $("#instru3").show();
        //récupération données question précèdente
        if (($('input[name="flute"]:checked').val()) == "vent"){
            instru2_res=30;
        }

    });
    $("body").on("click", "#instru3_b", function() {
        //
        $("#instru3").hide();
        $("#hist1").show();
        //récupération données question précèdente
        if (($('input[name="piano"]:checked').val()) == "corde"){
            instru3_res=40;
        }
    });
    $("body").on("click", "#hist1_b", function() {
        //
        $("#hist1").hide();
        $("#hist2").show();
        //récupération données question précèdente
        if (($('input[name="mozart"]:checked').val()) == "requiem"){
            hist1_res=40;
        }
    });
    $("body").on("click", "#hist2_b", function() {
        //
        $("#hist2").hide();
        $("#hist3").show();
        //récupération données question précèdente
        if (($('input[name="beethovven"]:checked').val()) == "lettre"){
            hist2_res=30;
        }
    });
    $("body").on("click", "#hist3_b", function() {
        //
        $("#hist3").hide();
        $("#termine").show();
        //affichage du res final
        //récupération données question précèdente
        if (($('input[name="patrick"]:checked').val()) == "bruel"){
            hist3_res=30;
        }

    });
    $("body").on("click", "#termine", function() {
        //renvoie à l'accueil connnecté
        //
        var html="solfege1_res="+solfege1_res+" solfege2_res="+solfege2_res;
        html += "</br>instru1_res="+instru1_res+" instru2_res= "+instru2_res+" instru3_res= "+instru3_res;
        html += "</br>hist1_res="+hist1_res+" hist2_res= "+hist2_res+" hist3_res= "+hist3_res;
        document.getElementById('res').innerHTML = html;
        resSolfege=solfege1_res+solfege2_res;
        resInstru = instru1_res+instru2_res+instru3_res;
        resHist = hist1_res+hist2_res+hist3_res;
    });
});

