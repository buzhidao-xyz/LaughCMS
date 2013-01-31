$(document).ready(function() {
/**idBoxTab切换**/
$("ul#boxTabDOM1").idTabs(function(id,list,set){ 
	$("a",set).removeClass("selected").filter("[href='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide(); 
	$(id).fadeIn(); 
	return false; 
});
});