
//validate fields before submit
$('form').on('submit', function(e) {
	e.preventDefault();
	if($('#due')[0].value==="") {
		console.log($('#due').value);
		alert('Please enter a due date');
	}else{
		this.submit(); //now submit the form
	}
});

//unfocus button after press
$(".btn").mouseup(function(){
	$(this).blur();
});

//add task button functionality
$('#btnAdd').on('click', function (e) {
	location.href="addtask.html";
});

//edit task button functionality
$('#btnEdit').on('click', function (e) {
	var id = $("#tasklist tr.info").attr('id')
	console.log(id);
	if(id===undefined) {
		alert("please select a task first");
	} else {
		location.href="edittask.php?id="+id;
	}
});

//delete task button functionality
$('#btnDelete').on('click', function (e) {
	var id = $("#tasklist tr.info").attr('id')
	console.log(id);
	if(id===undefined) {
		alert("please select a task first");
	}
   	else {
		var selected_row = $("#tasklist tr.info");

		//delete task and remove row from page 
		$.ajax({
			url: "deletetask.php?id="+ selected_row.attr('id'),
			success: function(result) {

				//hide element user wants to delete.
				selected_row.fadeOut(300,function(){ 
					selected_row.remove();                    
				});
			}
		});
	}
});

//make table rows selectable
$('#tasklist').on('click', '.clickable-row', function(event) {
console.log('hi');
		if($(this).hasClass('info')){
			$(this).removeClass('info'); 
		} else {
			$(this).addClass('info').siblings().removeClass('info');
		}
});

//look for add task due date and insert default date
if($(".default-due").length > 0){
	$(document).ready(function(){
		$('#due')[0].valueAsDate = new Date();
	});
}

//set padding top of body depending on height of navbar
var nav_body_height = $('nav').height();
var nav_padding = 20;
var nav_border_bottom = 1;
var body_padding_top = nav_body_height + nav_padding + nav_border_bottom;
$('body').css("padding-top", body_padding_top);


//make shadow on bottom of nav if not at top
$(window).scroll(function() {
	if($(window).scrollTop() !== 0) {
		$('nav').css("box-shadow","0px 1px 20px 3px rgba(0,0,0,.075)");
	} else {
		$('nav').css("box-shadow","");
	} 
});
