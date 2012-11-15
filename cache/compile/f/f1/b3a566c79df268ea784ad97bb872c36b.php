<div>
 This is the index.html
</div>
<div>IndexControl index</div>
<div>Array</div>
<script language="javascript">
$(document).ready(function(){
    var d = {
        c: 'index',
        f: 'getAjax',
        data: []
    };
    $.post('?r=ajax',d,function(d){
        checkAjaxStatus(d);
    },'json');
});
</script>