$(document).ready(function() {
	$("#form1").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail1.php",
			data: $(this).serialize()
		}).done(function() {
			$("#form1").html('<div class="popup-title">Спасибо! Ваша заявка отправлена.</div>');
		});
		return false;
	});
	$("#form2").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail1.php",
			data: $(this).serialize()
		}).done(function() {
			$("#form2").html('<div class="popup-title">Спасибо! Ваша заявка отправлена.</div>');
		});
		return false;
	});
});
jQuery(document).ready(function($){
	$('#nav-wrap').prepend('<div id="menu-icon"></div>');
	$("#menu-icon").on("click", function(){
		$("#nav").slideToggle();
		$(this).toggleClass("active");
	});
});
jQuery(function($){
	$(".in1").mask("+7 (999) 999-9999");
});
