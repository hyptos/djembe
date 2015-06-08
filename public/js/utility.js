var notes = [
    {
        "label": "do",
        "value": 20,
        "color": "#0000FF"
    },
    {
        "label": "re",
        "value": 20,
        "color": "#00FFFF"
    },
    {
        "label": "mi",
        "value": 20,
        "color": "#00CD00"
    },
    {
        "label": "fa",
        "value": 20,
        "color": "#FFFF00"
    },
    {
        "label": "sol",
        "value": 20,
        "color": "#FFA500"
    },
    {
        "label": "la",
        "value": 20,
        "color": "#FF0000"
    },
    {
        "label": "si",
        "value": 20,
        "color": "#FF00FF"
    }
];

function random_solution(sourceArray, n, doublon) {
	var solution = [];

	for ( var i = 0 ; i < n ; i++){
		var k = Math.floor(Math.random() * sourceArray.length);
        if(doublon && solution.indexOf(sourceArray[k]) === -1) {
            solution.push(sourceArray[k]);
        } else if(doublon) {
            i--;
        } else {
            solution.push(sourceArray[k]);
        }
	}

	return solution;
}

function success(mess){
    var content = '<p>Tu as fais ' + mess.error + ' erreurs !</p>';
    var conseil = '<p>';
    for (var i = mess.choix.length - 1; i >= 0; i--) {
        conseil += '<div id="' + mess.choix[i] + '"' +
            '></div>&nbsp;';
    };
    conseil += '</p>';
    content += '<p>'+mess.conseil+'</p><p>'+ conseil +'</p><br/><img src='+mess.smiley+'>';
    $('#game').addClass('text-center');
    $('#game').addClass('alert').html(content).fadeIn(1000);
}

function getIndexForShuffled(tab, note){
    for(var i in tab){
        if(tab[i].label === note){
            return i;
        }
    }
}


function openAndPlay(note){
    $('#'+note).trigger('pause');
    $('#'+note).prop("currentTime",0);
    $('#'+note).trigger('play');
}

function sendAnswerToFuzzy(nbErr, nbResponses, time){
    return $.ajax({
          url: "/fuzzy",
          method: "POST",
          data: {
            nbErrors:nbErr,
            nbResponses:nbResponses,
            time: time/1000,
            timeAvg:$('#timeAvg').val(),
            idUser:$('#idUser').val(),
            idCours:$('#idCours').val(),
            idExercice:$('#idExercice').val(),
            _token: $('#token').val()
          }
        }).done(function(mess){
            success(mess);
            var choix = mess.choix;
            var idExercice = parseInt($('#idExercice').val());
            getNextExercices(idExercice).done(function(res){
                var response = res[0];
                $('#Revoir_cours').html(createA(response.exo_review_basics_id, 'Revoir le cours', choix.indexOf('Revoir_cours')));
                $('#Plus_facile').html(createA(response.exo_redo_simple_id, 'Plus facile', choix.indexOf('Plus_facile')));
                $('#Recommencer').html(createA($('#idExercice').val(), 'Recommencer', choix.indexOf('Recommencer')));
                $('#ContinuerHard').html(createA(response.exo_continue_difficult_id, 'Refaire en plus difficile !', choix.indexOf('ContinuerHard')));
                $('#Continuer').html(createA(response.exo_continue_id, 'Continuer', choix.indexOf('Continuer')));
            });
        });
}

function createA(id, txt, index){

    var retour = '<a class=';
    if(index == 0)
        retour += '"btn btn-success"'
    else
        retour += '"btn btn-warning"'

    if(txt === "Revoir le cours" || txt === "Continuer")
        retour += ' href="/chapitre/';
    else
        retour += ' href="/exercice/';

    retour += id+'">'+ txt +'</a>';

    return retour;
}


function getNextExercices(idExercice){
    return $.ajax({
          url: "/nextExercices",
          method: "POST",
          data: {
            idExercice:idExercice,
            _token: $('#token').val()
          }
        });
}

function getFuzzyNote(note, idExercice){
    return $.ajax({
          url: "/fuzzyNote",
          method: "POST",
          data: {
            note:note,
            _token: $('#token').val()
          }
        }).done(function(response){
            $(response).each(function(index){
                var notes = $('.note');
                var smiley = this.smiley;
                notes.each(function( index ) {
                    if($( this ).attr('data') === idExercice){
                        $(this).html('<img src="'+smiley+'">');
                    }
                });
            });
        });
}


function getConnaissance(){
    return $.ajax({
        url: "/getCon",
        method: "GET",
        data: {
            _token: $('#token').val()
        }
    });
}

function animateArrowChapter(){
    $('.nextExo').on('click', function(e){
        e.preventDefault();
        $( ".container" ).animate({ "margin-left": "+=2000px" }, "slow", function(){
            $(this).remove();
            window.location = e.target.href;
        });
    });
    $('.precExo').on('click', function(e){
        e.preventDefault();
        $( ".container" ).animate({ "margin-left": "-=2000px" }, "slow", function(){
            $(this).remove();
            window.location = e.target.href;
        });
    });
}

function changeColorButton(notes){
    $.each(notes,function(e){
        var buttons = $('.rep');
        for (var i = buttons.length - 1; i >= 0; i--) {
            if(this.label == buttons[i].innerHTML){
                $(buttons[i]).css('background-color',this.color);
            }
        }
    });
    console.log();
}

function getChapitre(){
    return $.ajax({
        url: "/getChapitre",
        method: "POST",
        data: {
            idExercice: $('#idExercice').val(),
            _token: $('#token').val()
        }
    });
}

function getChapitreContent(idChapitre){
    return $.ajax({
        url: "/getChapitreContent",
        method: "POST",
        data: {
            idChapitre: idChapitre,
            _token: $('#token').val()
        }
    });
}
