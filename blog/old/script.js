//set padding top of body depending on height of navbar
var nav_body_height = $('nav').height();
console.log(nav_body_height);
var nav_padding = 20;
var nav_border_bottom = 1;
var body_padding_top = nav_body_height + nav_padding + nav_border_bottom;
$('body').css("padding-top", body_padding_top);


//make shadow on bottom of nav if not at top
$(window).scroll(function() {
	if($(window).scrollTop() !== 0) {
		$('nav').css("box-shadow","rgba(0, 0, 0, 0.075) 0px 5px 10px 2px");
	} else {
		$('nav').css("box-shadow","");
	} 
});
