$(document).ready(function() {	
	$('.showWhole').click(function() {		
		$('#hiddenHome').toggle('slow' , function(){});	
	});
	$(".lightGreen").css({'height':($(".darkGreen").height()+'px')});
});	
!function ($) {
  $(function(){	
  	$(".collapse").collapse()
  
    // make code pretty
    window.prettyPrint && prettyPrint()
})
}(window.jQuery)