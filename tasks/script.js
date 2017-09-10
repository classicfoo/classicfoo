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
	var id = $("#tasklist tr.table-info").attr('id')
	console.log(id);
	if(id===undefined) {
		alert("please select a task first");
	} else {
		location.href="edittask.php?id="+id;
	}
});

//delete task button functionality
$('#btnDelete').on('click', function (e) {

	var selected_row = $("#tasklist tr.table-info");

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
});

//	location.href="deletetask.php?id="+$("#tasklist tr.table-info").attr('id');
//});


//make table rows selectable
$('#tasklist').on('click', '.clickable-row', function(event) {
		if($(this).hasClass('table-info')){
			$(this).removeClass('table-info'); 
		} else {
			$(this).addClass('table-info').siblings().removeClass('table-info');
		}
});

//on any page load, look for #due and insert default date
if($("#due").length > 0){
	$(document).ready(function(){
		$('#due')[0].valueAsDate = new Date();
	});
}



