var res = [];
var nbErr = 0;
var timeStart, timeEnd;
timeStart = Date.now();

interact('.draggable').draggable({
    inertia: true,
    restrict: {
      restriction: "parent",
      endOnly: true,
      elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
    },
    onmove: dragMoveListener
  });

function dragMoveListener (event) {
	var target = event.target,
		// keep the dragged position in the data-x/data-y attributes
		x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
		y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;
	// translate the element
	target.style.webkitTransform = target.style.transform = 'translate(' + x + 'px, ' + y + 'px)';
	// update the posiion attributes
	target.setAttribute('data-x', x);
	target.setAttribute('data-y', y);
}
// this is used later in the resizing demo
window.dragMoveListener = dragMoveListener;

// enable draggables to be dropped into this
interact('.dropzone').dropzone({
	accept: '#yes-drop',
	// Require a 75% element overlap for a drop to be possible
	overlap: 0.55,

	// listen for drop related events:
	ondropactivate: function (event) {
		// add active dropzone feedback
		event.target.classList.add('drop-active');
	},
	ondragenter: function (event) {
		var draggableElement = event.relatedTarget,
			dropzoneElement = event.target;

		// feedback the possibility of a drop
		dropzoneElement.classList.add('drop-target');
		draggableElement.classList.add('can-drop');
	},
	ondragleave: function (event) {
		// remove the drop feedback style
		event.target.classList.remove('drop-target');
		event.relatedTarget.classList.remove('can-drop');
	},
	ondrop: function (event) {
		var nouv = true;
		var dropzoneElement = event.target;
		for(var i = 0; i < res.length; i++) {
			if(res[i][1] == event.relatedTarget.children[1].id) {
				nouv = false;
				res[i][0] = dropzoneElement.id;
			}
		}
		if(nouv) {
			res.push([dropzoneElement.id, event.relatedTarget.children[1].id]);
		}
	},
	ondropdeactivate: function (event) {
		// remove active dropzone feedback
		event.target.classList.remove('drop-active');
		event.target.classList.remove('drop-target');
	}
});

var tabNote = random_solution(notes, 4, true);

function insertNotes(element, index, array) {
	console.log(element.label);
    $('#lesNotes').append('<div id="yes-drop" class="draggable drag-drop"><div class="nomNote">'+ element.label +'</div><img id="'+ element.label +'" src="/images/teteNote.png" width="40px"></div>');
}

tabNote.forEach(insertNotes);

$("body").on("click", "#finish", function() {
	timeEnd = Date.now() - timeStart;
	$.each(res, function( index, value ) {
		switch(value[0]) {
		    case 'zone0':
		    	nbErr++;
		        break;
		    case 'zone1':
		    	nbErr++;
		        break;
		    case 'zone2':
		    	nbErr++;
		        break;
		    case 'zone3':
		    	nbErr++;
		        break;
		    case 'zone4':
		    	nbErr++;
		        break;
		    case 'zone5':
		    	nbErr++;
		        break;
		    case 'zone6':
		    	nbErr++;
		        break;
		    case 'zone7':
		    	if(value[1] !== 'si') {
		    		nbErr++;
		    	}
		        break;
		    case 'zone8':
		    	if(value[1] !== 'la') {
		    		nbErr++;
		    	}
		        break;
		    case 'zone9':
		    	if(value[1] !== 'sol') {
		    		nbErr++;
		    	}
		        break;
		    case 'zone10':
		    	if(value[1] !== 'fa') {
		    		nbErr++;
		    	}
		        break;
		    case 'zone11':
		    	if(value[1] !== 'mi') {
		    		nbErr++;
		    	}
		        break;
		    case 'zone12':
		    	if(value[1] !== 're') {
		    		nbErr++;
		    	}
		        break;
		    case 'zone13':
		    	if(value[1] !== 'do') {
		    		nbErr++;
		    	}
		        break;
		    case 'zone14':
		    	nbErr++;
		        break;
		    case 'zone15':
		    	nbErr++;
		        break;
		    default:
        		nbErr++;
		}
		if(res.length < 4) {
			nbErr += 4 - res.length;
		}
	});
	if(res.length === 0) {
		nbErr = 4;
	}
	$.ajax({
		url: "http://djembe.com/fuzzy",
		method: "POST",
		data: {
			nbErrors:nbErr,
			nbResponses:4,
			time: timeEnd/1000,
			timeAvg:$('#timeAvg').val(),
			idUser:$('#idUser').val(),
			idCours:$('#idCours').val(),
			_token: $('#token').val()
		}
    }).done(function(mess){
        success(mess);
    });
});
