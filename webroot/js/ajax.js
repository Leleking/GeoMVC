$(document).ready(function(){
	
	$('#loading-image').hide();
	$('#result').hide();
	
	$('#add').click(function(e){
		e.preventDefault();
		$.ajax({

			url		: '/addnew/memberfunction',
			method  : 'POST',
			data    : $("#addform").serialize(),
			beforeSend  : function(){
				//$('.se-pre-con').show();
				$('#loading-image').show();
			},
			complete  : function(){
				$('#loading-image').hide();
			},
			success : function(data){
				$('#result').click();
				$('#resultdata').html(data);

			},
			
		})
	})

	
	});
function ajaxcall(id,dest,output){
	$.ajax({
		url		: dest,
		method  : "POST",
		data    : $("#addform").serialize(),
			beforeSend  : function(){
				//$('.se-pre-con').show();
				$('#loading-image').show();
			},
			complete  : function(){
				$('#loading-image').hide();
			},
			success : function(data){
				$('#result').click();
				$('#resultdata').html(data);

			},

	})

}


	





	
