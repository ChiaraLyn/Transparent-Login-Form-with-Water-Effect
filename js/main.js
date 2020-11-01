
/* water effect Ripple jquery*/
$(".water").ripples({
	resolution: 256,
	perturbance: 0.01
});



function Login() {	
	setInterval(function () { document.getElementById("form").style.display = "block"; }, 600);
	setInterval(function () { document.getElementById("user_div").style.display = "none";  }, 500);
}
function scale_out() {
	var element = document.getElementById("user_div");
	element.classList.remove("scale-in-center");
	element.classList.add("scale-out-center");
}
function scale_in() {
var element = document.getElementById("user_div");
	element.classList.add("scale-in-center");
}

$('input').focus(function () {
	$(this).data('placeholder', $(this).attr('placeholder'))
		.attr('placeholder', '');
}).blur(function () {
	$(this).attr('placeholder', $(this).data('placeholder'));
});