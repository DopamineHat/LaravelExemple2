@extends('layouts.layout')
@section('header')
	Page Premium
@endsection
@section('content')
<div id="youtube">
<!--<iframe width="800" height="600" id="youtube"
src="https://www.youtube.com/embed/qAmlzY-ypuU">
</iframe> -->
<button class="btn btn-warning" id="prem">payer 10 credits pour voir cette vidéo</button>
</div>
@endsection
@section('js-content')
<script>
	$( document ).ready(function() {
    $("#prem").click(function() {
                    $('<iframe />');  // Create an iframe element
                    $('<iframe />', {
                        id: 'youtube',
                        width: 800,
                        height: 600,
                        src: 'https://www.youtube.com/embed/qAmlzY-ypuU'
                    }).appendTo('#youtube');
                   	$.ajax({
						method: 'GET', // Type of response and matches what we said in the route
						url: '/premium/credit', // This is the url we gave in the route
						success: function(response){ // What to do if we succeed
 					   		console.log(response);
						},
// 		error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
//     		console.log(JSON.stringify(jqXHR));
//     		console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
// 		}
					});
					$("#prem").remove();
                });
	});
</script>
@endsection