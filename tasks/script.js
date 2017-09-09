//unfocus button after press
$(".btn").mouseup(function(){
	$(this).blur();
});

//add task button functionality
$('#btnAdd').on('click', function (e) {
	location.href="addtask.html";
});

//delete task button functionality
$('#btnDelete').on('click', function (e) {
	location.href=console.log("deletetask.php?id="+$("#tasklist tr.table-info").attr('id'));
});


//make table rows selectable
$('#tasklist').on('click', '.clickable-row', function(event) {
		if($(this).hasClass('table-info')){
			$(this).removeClass('table-info'); 
		} else {
			$(this).addClass('table-info').siblings().removeClass('table-info');
		}
});

