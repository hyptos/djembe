var tab = [];
var numberOfClicks = 1;
var contents = notes;
var solution = random_solution(contents, 5);
var timeStart, timeEnd;
var pie = new d3pie("pieChart", {
    "header": {
        "title": {
            "text": "Reconnais les notes ",
            "fontSize": 24,
            "font": "open sans"
        },
        "subtitle": {
            "text": "Clique sur une zone pour jouer une note.",
            "color": "#999999",
            "fontSize": 12,
            "font": "open sans"
        },
        "titleSubtitlePadding": 9
    },
    "size": {
        "canvasWidth": 590,
        "pieOuterRadius": "90%"
    },
    "data": {
        "content": contents
    },
    "labels": {
        "inner": {
            "format":'none'
        },
        "mainLabel": {
            "fontSize": 18
        },
        "lines": {
            "enabled": true
        },
        "truncation": {
            "enabled": true
        }
    },
    "effects": {
        "pullOutSegmentOnClick": {
            "effect": "elastic",
            "speed": 400,
            "size": 16
        }
    },
    "misc": {
        "gradient": {
            "enabled": true,
            "percentage": 100
        }
    },
    "callbacks": {
        onClickSegment: function(a) {
            $('#'+a.data.label).trigger('pause');
            $('#'+a.data.label).prop("currentTime",0);
            $('#'+a.data.label).trigger('play');
            tab.push(a.data.label);

            if(numberOfClicks === 1){
                timeStart = Date.now();
            }
            if(numberOfClicks === 5){
                numberOfClicks = 0;
                var currentdate = Date.now() - timeStart;
                // On stocke en bdd le résultat
                $.ajax({
                  url: "http://djembe.com/fuzzy",
                  method: "POST",
                  data: {
                    nbErrors:numberOfErrors(tab, solution),
                    nbResponses:5,
                    time: currentdate/1000,
                    timeAvg:$('#timeAvg').val(),
                    idUser:$('#idUser').val(),
                    idCours:$('#idCours').val(),
                    idExercice:$('#idExercice').val(),
                    _token: $('#token').val()
                  }
                }).done(function(mess){
                    success(mess);
                    if(numberOfErrors(tab, solution) !== 0){
                        tab = [];
                    }
                });

            }
            numberOfClicks++;
        }
    }
});

function getIndexForShuffled(tab, note){
    for(var i in tab){
        if(tab[i].label === note){
            return i;
        }
    }
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
    $('#game').addClass('alert').fadeIn(1000).html(content);
}

function numberOfErrors(tab_reponse, tab_solution){

    var nb_error = 0;
    for(var i in tab_solution){
        if(tab_reponse[i] != tab_solution[i].label)
            nb_error++;
    }

    return nb_error;
}

$('body').on('click', '#beginGame', function(){
    console.log('On demarre le jeu');
    melody(solution);
});

function melody(tab){
    var i = 0;
    for (var n in tab){
        setTimeout(function(){
            openAndPlay(tab[i].label);
            i++;
        }, n*500);
    }
}

function openAndPlay(note){
    $('#'+note).trigger('pause');
    $('#'+note).prop("currentTime",0);
    $('#'+note).trigger('play');

    var index = getIndexForShuffled(contents, note);
    pie.openSegment(index);
}
