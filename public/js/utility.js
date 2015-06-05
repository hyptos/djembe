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
        conseil += '<a class="btn btn-warning"' +
            'href="#">' + mess.choix[i] + '</a>&nbsp;';
    };
    conseil += '</p>';
    content += '<p>'+mess.conseil+'</p><p>'+ conseil +'</p><br/><img src='+mess.smiley+'>';
    $('#game').addClass('text-center');
    $('#game').addClass('alert').fadeIn(1000).html(content);
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
        });
}


function getNextExercices(idExercice){
    return $.ajax({
          url: "/nextExercices",
          method: "POST",
          data: {
            idExercice:idExercice,
            _token: $('#token').val()
          }
        }).done(function(response){
            console.log(response);
        });
}
