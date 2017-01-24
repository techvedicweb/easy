		 
function location_delete_form(id){

var result = confirm("Sure Want to delete?");
if (result) {
document.getElementById(id).submit();
}
 
}


function department_delete_form(id){

var result = confirm("Sure Want to delete?");
if (result) {
document.getElementById(id).submit();
}
 
}


		 
function Assets_category_delete_form(categoryid){

var result = confirm("Sure Want to delete?");
if (result) {
	window.location.href="../classes/DeleteAssets.php?assets_id="+categoryid;
//document.getElementById(categoryid).submit();

}
 
}


function group_delete_form(id){
var result = confirm("Sure Want to delete?");
if (result) {
document.getElementById(id).submit();
}
 
}


function agent_delete_form(id){

var result = confirm("Sure Want to delete?");
if (result) {
document.getElementById(id).submit();
}
 
}

function item_delete_form(id){

var result = confirm("Sure Want to delete?");
if (result) {
document.getElementById(id).submit();
}
 
}



function product_delete_form(id){

var result = confirm("Sure Want to delete?");
if (result) {
document.getElementById(id).submit();
}
 
}
