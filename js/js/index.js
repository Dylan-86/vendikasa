$('.form .stages label').click(function() {
	var radioButtons = $('.form input:radio');
	var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
	selectedIndex = selectedIndex + 1;
});

$('.form button').click(function() {
	var radioButtons = $('.form input:radio');
	var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));

	selectedIndex = selectedIndex + 2;

	$('.form input[type="radio"]:nth-of-type(' + selectedIndex + ')').prop('checked', true);

	if (selectedIndex == 5) {

		var x = document.getElementById("submit");
		var y = document.getElementById("avanti");
		
		x.style.display = "block";
		y.style.display = "none";
		
	}
});