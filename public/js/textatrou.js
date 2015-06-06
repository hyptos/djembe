var erreur = 0;
var timeStart, timeEnd;
timeStart = Date.now();


$("body").on("click", "#finish", function() {
    timeEnd = Date.now() - timeStart;

    var reponses = new Array ("Terre", "mélodies", "sentiments", "rythme", "mains", "danses", "doux", "voix") ;

    if (document.getElementById("a").value != reponses[0])
    { erreur = erreur + 1 ; }
    if (document.getElementById("b").value != reponses[1])
    { erreur = erreur + 1 ; }
    if (document.getElementById("c").value != reponses[2])
    { erreur = erreur + 1 ; }
    if (document.getElementById("d").value != reponses[3])
    { erreur = erreur + 1 ; }
    if (document.getElementById("e").value != reponses[4])
    { erreur = erreur + 1 ; }
    if (document.getElementById("f").value != reponses[5])
    { erreur = erreur + 1 ; }
    if (document.getElementById("g").value != reponses[6])
    { erreur = erreur + 1 ; }
    if (document.getElementById("h").value != reponses[7])
    { erreur = erreur + 1 ; }

    sendAnswerToFuzzy(erreur,$('#nbResponses').val(),timeEnd);
});

