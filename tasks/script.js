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
	location.href="deletetask.php?id="+$("#tasklist tr.table-info").attr('id');
});


//make table rows selectable
$('#tasklist').on('click', '.clickable-row', function(event) {
		if($(this).hasClass('table-info')){
			$(this).removeClass('table-info'); 
		} else {
			$(this).addClass('table-info').siblings().removeClass('table-info');
		}
});

