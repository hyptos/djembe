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
            getNextExercices($('#idExercice').val()).done(function(res){
                var response = res[0];
                $('#Revoir_cours').html(createA(response.exo_review_basics_id, 'Revoir le cours'));
                $('#Plus_facile').html(createA(response.exo_redo_simple_id, 'Plus facile'));
                $('#Recommencer').html(createA($('#idExercice').val(), 'Recommencer'));
                $('#ContinuerHard').html(createA(response.exo_continue_difficult_id, 'Refaire en plus difficile !'));
                $('#Continuer').html(createA(response.exo_continue_id,'Continuer'));
            });
        });
}

function createA(id, txt){
    if(txt === "Revoir le cours" || txt === "Continuer")
        return '<a class="btn btn-warning" href="/chapitre/'+id+'">'+ txt +'</a>';
    else
        return '<a class="btn  btn-warning" href="/exercice/'+id+'">'+ txt +'</a>';
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
                        $(this).append('<img src="'+smiley+'">')
                    }
                });
            });
        });
}


function animateArrowChapter(){
    console.log('hey arrow');
    $('body').on('click', function(e){
        e.preventDefault();
        $( ".container" ).animate({ "margin-left": "+=2000px" }, "slow", function(){
            $(this).remove();
            window.location = e.target.href;
        });
    });
}
