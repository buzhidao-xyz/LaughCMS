$(document).ready(function() {
    /** table list样式 */
    $("div.contentTableList ul.table_list").each(function (){
        if (!($(this).index()%2 == 1)) $(this).addClass("bgfff");
    });
    /** table list样式 */

    /** input样式定义 为Hover兼容IE样式 */
    $("input:[type='text'],textarea").hover(function() {
        $(this).addClass("input_textarea_hover");
    },function() {
        $(this).removeClass("input_textarea_hover");
    });
    $("input:[type='text'],textarea").focus(function(){
        $(this).addClass("input_textarea_hover");
    });
    $("input:[type='text'],textarea").blur(function(){
        $(this).removeClass("input_textarea_hover");
    });
    /** end */

    //圆角
    $(".modify_div").corner("7px");

    //对只有节点浏览权限的用户隐藏掉所有增删改查操作功能链接
    $("*[accessStatus=0]").remove();
});