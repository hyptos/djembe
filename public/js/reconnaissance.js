$('button').on('click',function(e){
	openAndPlay(e.target.innerHTML);
});

$('#find').on('click',function(e){
	openAndPlay($('#find').attr("note"));
});


$(function() {
	var e = random_solution(notes,1);
	$('#find').attr("note", e[0].label);
});
