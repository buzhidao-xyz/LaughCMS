$(document).ready(function() {
//图片切换tab
$("ul#ImgboxTab").idTabs(function(id,list,set){ 
	$("a",set).removeClass("selected").filter("[href='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide(); 
	$(id).fadeIn(); 
	return false; 
});
//友情链接切换tab
$("ul#FlinkboxTab").idTabs(function(id,list,set){ 
	$("a",set).removeClass("selected").filter("[href='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide(); 
	$(id).fadeIn(); 
	return false; 
});
});