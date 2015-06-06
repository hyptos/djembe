timeStart = Date.now();

$('.rep').on('click',function(e){
	openAndPlay(e.target.innerHTML);
});

$('#find').on('click',function(e){
	openAndPlay($('#find').attr("note"));
});


$(function() {
	var e = random_solution(notes,1);
	$('#find').attr("note", e[0].label);
});

$('#sendAnswers').on('click',function(e){
	var time = Date.now() - timeStart;
	// calcul du nombre d'erreur

	var response = $('#find').attr('note');
	var answerUser = $('input[name=answer]:checked').attr('note');

	var nbErr = 0;
	if(response !== answerUser){
		nbErr = 1;
	}

	if(typeof(answerUser) === 'undefined'){
		var content = '<div class="alert alert-warning">Tu as oublié de donner une réponse !</div>';
		$('#message').html(content);
	} else {
		//requete ajax
		sendAnswerToFuzzy(nbErr, $('#nbResponses').val(), time);
		getNextExercices($('#idExercice').val());
		getFuzzyNote(12);
	}
});

