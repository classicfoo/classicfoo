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

//look for add task due date and insert default date
if($(".default-due").length > 0){
	$(document).ready(function(){
		$('#due')[0].valueAsDate = new Date();
	});
}

$('#btnAdd').click(function() {
	console.log('click');
	window.location.href = "addtask.html";
});