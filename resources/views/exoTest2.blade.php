@extends('layouts.master')

@section('title', 'exo test 2')

@section('include')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="/djembe/js/jquery"></script>
	<script src="/djembe/js/interact.min.js"></script>
@stop

@section('content')
	<style>
.b {
	margin: 0px auto 0px;
	padding: 10px;
	transition: background-color 0.3s;
	height: 25px;
}

.n, .nn {
	background-color: black;
	margin: 0px auto 0px;
	padding: 10px;
	transition: background-color 0.3s;
	height: 2px;
}

.nn {
	background-color: #FFFFFF;
}


.drop-target {
  background-color: #29e;
}

.drag-drop {
	z-index: 999;
  display: inline-block;
  position: relative;
  min-width: 40px;
  padding: 2px;
  color: #fff;
  -webkit-transform: translate(0px, 0px);
          transform: translate(0px, 0px);
  transition: background-color 0.3s;
}

.nomNote {
	position: absolute;
	padding: 5px;
	padding-left: 10px;
}

.drag-drop.can-drop {
  background-color: #FEFA7A;
}
	</style>
	<script>
		


// target elements with the "draggable" class
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
		//event.relatedTarget.textContent = 'Dropped';
		var dropzoneElement = event.target;
		//alert(dropzoneElement.id);
	},
	ondropdeactivate: function (event) {
		// remove active dropzone feedback
		event.target.classList.remove('drop-active');
		event.target.classList.remove('drop-target');
	}
});
	</script>

<div id="yes-drop" class="draggable drag-drop">
	<div class="nomNote">do</div>
	<img id="do" src="/djembe/images/teteNote.png" width="40px">
</div>
<div id="yes-drop" class="draggable drag-drop">
	<div class="nomNote">mi</div>
	<img id="mi" src="/djembe/images/teteNote.png" width="40px">
</div>
<div id="yes-drop" class="draggable drag-drop">
	<div class="nomNote">sol</div>
	<img id="sol" src="/djembe/images/teteNote.png" width="40px">
</div>
<div id="yes-drop" class="draggable drag-drop">
	<div class="nomNote">fa</div>
	<img id="fa" src="/djembe/images/teteNote.png" width="40px">
</div>
<br/><br/><br/><br/>

<div id="zone0" class="dropzone b"></div>
<div id="zone1" class="dropzone nn"></div>
<div id="zone2" class="dropzone b"></div>
<div id="zone3" class="dropzone n"></div>
<div id="zone4" class="dropzone b"></div>
<div id="zone5" class="dropzone n"></div>
<div id="zone6" class="dropzone b"></div>
<div id="zone7" class="dropzone n"></div>
<div id="zone8" class="dropzone b"></div>
<div id="zone9" class="dropzone n" style="position: relative;">
	<div style="position: absolute; top: -250px;"><img src="/djembe/images/cleDeSol.png"></div>
</div>
<div id="zone10" class="dropzone b"></div>
<div id="zone11" class="dropzone n"></div>
<div id="zone12" class="dropzone b"></div>
<div id="zone13" class="dropzone nn"></div>
<div id="zone14" class="dropzone b"></div>
<div id="zone15" class="dropzone nn"></div>


@stop
