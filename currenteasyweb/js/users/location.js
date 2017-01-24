$(document).ready(function(){
// according to country state change 
$('#country_change').change(function(){
	var contry_id=this.value;			
$.ajax({
url:'../classes/Location.php',
type:'get',
data:{country_set:contry_id},
success: function(records){
//alert(records);
$("#states").html(records);
},
error: function(ts) { 
 // alert(ts.responseText);
}

});
	});

// acording to state city get
$('#states').change(function(){
	var state_id=this.value;	
			
$.ajax({
url:'../classes/Location.php',
type:'get',
data:{state_set:state_id},
success: function(records){
//alert(records);
$("#city").html(records);
},
error: function(ts) { 
 // alert(ts.responseText);
}

});
	});


});

