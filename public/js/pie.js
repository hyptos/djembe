var tab = [];
var suite = [];
var numberOfClicks = 0;
var contents = [
    {
        "label": "do",
        "value": 20,
        "color": "#2484c1"
    },
    {
        "label": "re",
        "value": 20,
        "color": "#0c6197"
    },
    {
        "label": "mi",
        "value": 20,
        "color": "#4daa4b"
    },
    {
        "label": "fa",
        "value": 20,
        "color": "#90c469"
    },
    {
        "label": "sol",
        "value": 20,
        "color": "#daca61"
    },
    {
        "label": "la",
        "value": 20,
        "color": "#e4a14b"
    },
    {
        "label": "si",
        "value": 20,
        "color": "#e98125"
    }
];
var pie = new d3pie("pieChart", {
    "header": {
        "title": {
            "text": "Game sound ",
            "fontSize": 24,
            "font": "open sans"
        },
        "subtitle": {
            "text": "Clique sur une zone pour faire un bruit.",
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
            "fontSize": 11
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
            if(numberOfClicks === 3){
                // On stocke en bdd le résultat
                // $.ajax(url, settings, settings);
                if(isNoteRight(tab)){
                    success();
                } else {
                    tab = [];
                    fail();
                }
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

function success(){
    $('#message').addClass('alert-success').fadeIn(1000).html('<p>Bravo, tu es le meilleur !</p>').complete()
}

function fail(){
    $('#message').addClass('alert-danger').fadeIn(1000).html('<p>OMG, tu es mauvais !</p>');
}

function isNoteRight(tab){
    if(tab[0] !== 'do')
        return false;
    if(tab[1] !== 're')
        return false;
    if(tab[2] !== 'mi')
        return false;

    return true;
}

$('body').on('click', '#beginGame', function(){
    console.log('On demarre le jeu');
    melody(3);

});

function melody(number){
    for (var i = 0; i <= number; i++) {
        if(i >= 0){
            setTimeout(function(){
                openAndPlay('do');
            },0);
        }
        if(i >= 1){
            setTimeout(function(){
                openAndPlay('re');
            },500);
        }
        if(i >= 2){
            setTimeout(function(){
                openAndPlay('mi');
            },1000);
        }
        if(i >= 3){
            setTimeout(function(){
                openAndPlay('fa');
            },1500);
        }
        if(i >= 4){
            setTimeout(function(){
                openAndPlay('sol');
            },2000);
        }
        if(i >= 5){
            setTimeout(function(){
                openAndPlay('la');
            },2500);
        }
        if(i >= 6){
            setTimeout(function(){
                openAndPlay('si');
            },3000);
        }
    }
}

function openAndPlay(note){
    $('#'+note).trigger('pause');
    $('#'+note).prop("currentTime",0);
    $('#'+note).trigger('play');
    var index = getIndexForShuffled(contents, note);
    pie.openSegment(index);
}