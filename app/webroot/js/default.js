$(document).ready(function() {
	$('.shadow-text.email').click(function() {
		$('.newsletter-signup #email').focus();
	});
	$('.shadow-text.name').click(function() {
		$('.newsletter-signup #name').focus();
	});
	$('.newsletter-signup #email').blur(function () {
		$('.shadow-text.email').removeClass('focused');
	});
	$('.newsletter-signup #email').focus(function () {
		$('.shadow-text.email').addClass('focused');
	});
	$('.newsletter-signup #email').keyup(function () {
		if ($(this).val().length > 0)
			$('.shadow-text.email').addClass('filled');
		else
			$('.shadow-text.email').removeClass('filled');
	});
	$('.newsletter-signup #name').blur(function () {
		$('.shadow-text.name').removeClass('focused');
	});
	$('.newsletter-signup #name').focus(function () {
		$('.shadow-text.name').addClass('focused');
	});
	$('.newsletter-signup #name').keyup(function () {
		if ($(this).val().length > 0)
			$('.shadow-text.name').addClass('filled');
		else
			$('.shadow-text.name').removeClass('filled');
	});
});