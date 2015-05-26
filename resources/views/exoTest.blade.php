@extends('layouts.master')

@section('title', 'exo test')

@section('include')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
@stop

@section('content')
	<style>
		ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; float:left;}
		li { margin: 5px; padding: 2px; width: 60px; text-align: center; float:left;}
		.ui-state-default {background: none;}
	</style>
	<script>
		$(function() {
			$( "#sortable" ).sortable({
				revert: true
			});
			$( "#draggable" ).draggable({
				connectToSortable: "#sortable",
				helper: "clone",
				revert: "invalid"
			});
			$( "ul, li" ).disableSelection();
		});
	</script>
	<img style="float:left;" src="/djembe/images/cleDeSol.jpg">
	<ul id="sortable">
		<li class="ui-state-default"><img src="/djembe/images/re.jpg"></li>
		<li class="ui-state-default"><img src="/djembe/images/fa.jpg"></li>
		<li class="ui-state-default"><img src="/djembe/images/do.jpg"></li>
		<li class="ui-state-default"><img src="/djembe/images/mi.jpg"></li>
		<li class="ui-state-default"><img src="/djembe/images/la.jpg"></li>
		<li class="ui-state-default"><img src="/djembe/images/si.jpg"></li>
		<li class="ui-state-default"><img src="/djembe/images/sol.jpg"></li>
	</ul>
@stop
