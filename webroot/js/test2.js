$(document).ready(function(){
	$('#loading-image').bind('ajaxStart', function(){
    $(this).show();
	}).bind('ajaxStop', function(){
    	$(this).hide();
});






	function ajaxcall(id,output,dest){
		$.ajax({
			url 	: dest,
			method  :"POST",
			data	: ,
			beforeSend : function(){
				$().show();
			}
			success	   : function(){
				$(id).html(output);
			}
			afterSend  : function(){
				$().hide();
			}
		});

	}

	var test2 = 4;
	$("#testid").click(function(){
	$.ajax({
		
		url		: "/test/testfunction", 
		method	: "POST",
		data    :{test:1,test2:test2},
		success: function(data){
		$('#show').html(data);
		}
	})
	
	});
	

})

