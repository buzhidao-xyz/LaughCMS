$(document).ready(function(){
    checkAjaxStatus = function(d){
        if (parseInt(d.status) == 999) {
            alert(d.data);
            return false;
        }
    }
});