$('#add').on('click', function (e) {
	location.href="addtask.html";
});

$('#tasklist').on('click', '.clickable-row', function(event) {
		if($(this).hasClass('table-info')){
			$(this).removeClass('table-info'); 
		} else {
			$(this).addClass('table-info').siblings().removeClass('table-info');
		}
});
