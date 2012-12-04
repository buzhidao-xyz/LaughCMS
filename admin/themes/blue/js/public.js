$(document).ready(function() {
    /**
     * input样式定义 为Hover兼容IE样式
     */
    $("input:[type='text'],textarea").hover(function() {
        $(this).addClass("input_textarea_hover");
    },function() {
        $(this).removeClass("input_textarea_hover");
    });
    $("input:[type='text'],textarea").focus(function(){
        $(this).css("border-color","#1D3647");
        $(this).css("background","#F5F9FD");
    });
    $("input:[type='text'],textarea").blur(function(){
        $(this).css("border-color","");
        $(this).css("background","");
    });
    /** end */
});