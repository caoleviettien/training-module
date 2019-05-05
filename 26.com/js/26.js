$(document).ready(function(){
	$('.item').on('click', function() {
	  $(this).addClass('active').siblings('li').removeClass('active');
	});
});