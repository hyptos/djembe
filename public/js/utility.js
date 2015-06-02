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

/*function shuffle(sourceArray) {
	var origin = sourceArray;
    for (var n = 0; n < sourceArray.length - 1; n++) {
        var k = n + Math.floor(Math.random() * (sourceArray.length - n));

        var temp = sourceArray[k];
        sourceArray[k] = sourceArray[n];
        sourceArray[n] = temp;
    }
    return origin;
}*/

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
    console.log(mess.smiley);
    $('#message').addClass('alert-warning').fadeIn(1000).html('<p>'+mess.conseil+'</p><br/><p>'+mess.choix+'</p><img src='+mess.smiley+'>');
}