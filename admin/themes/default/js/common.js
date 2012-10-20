$(document).ready(function() {
    /**
     * 更新顶部菜单样式(背景、选中)
     * 更新顶部链接地址说明(navlink)内容
     */
    $("#header .nav ul.hmenu li").click(function() {
        $("#header .nav ul.hmenu li").removeClass('navon');
        $(this).addClass("navon");
        
        var hnavlink = $(this).find("em a").html();
        //var lnavlink = $("#menu", top.frames["body"].document.body).contents().find(".menu ul li a:eq(0)").html();
        $("#header .nav .navlink p").html(hnavlink+"&nbsp;&gt;");
    });
    
    /**
     * 更改左侧菜单选中背景样式
     * 更新顶部链接地址说明(navlink)内容
     */
    $(".menu ul li a").click(function() {
        var that = $(top.frames["head"].document.body).contents();
        var hnavlink = that.find("ul.hmenu li.navon em a").html();
        that.find("#navlink p").html(hnavlink+'&nbsp;&gt;&nbsp;'+$(this).html()+'&nbsp;');

        var thisp = $(this).parent().parent().find(".menusub");
        if (thisp.css('display') == 'block') {
            thisp.css('display','none');
        } else {
            thisp.css('display','block');
        }
    });
    $(".menu .menusub li a").click(function() {
        var that = $(top.frames["head"].document.body).contents();
        var hnavlink = that.find("ul.hmenu li.navon em a").html();
        var pnavlink = $(this).parent().parent().parent().find("div:first a").html();
        that.find("#navlink p").html(hnavlink+'&nbsp;&gt;&nbsp;'+pnavlink+'&nbsp;&gt;&nbsp;'+$(this).html()+'&nbsp;');

        $(".menu .menusub li a").removeClass('tabon');
        $(this).addClass('tabon');
    });


    /*添加的FORM ajax提交方法*/
    $('#addajaxform').submit(function(){
        // $("#addajaxform input:[type=submit]").attr('disabled','disabled');
        if($('#addajaxform').length>0){
            var data = $("#addajaxform").serialize();
            var url = $('#addajaxform').attr('action');
            $.post(url,data,function(data){
                alert(data.info);
                if (!data.status) {
                    location.href = location.href;
                    // $("#addajaxform input:[type=submit]").removeAttr('disabled');
                }
            }, 'json');
            return false;
        } else {
            alert('表单为空');
        }
    });
    /*添加的FORM ajax提交方法*/

    //修改资料
    if($('#modify_div').length>0){
        var delfunction = true;
        var m_d = new Div_window('modify_div');
        if ($(".updateblock1").length > 0) {
            classhtml1 = $(".updateblock1").html();
        }
        if ($(".updateblock2").length > 0) {
            classhtml2 = $(".updateblock2").html();
        }
        
        $('a[name="modify"]').click(function(event){
            var e = event;
            var that = $(this);
            var thattd = $(this).parent().parent().find('li');
            var param_array = [
            {targetname:'id', val:that.attr('mcid'), type:'text'},
            {targetname:'model_id', val:that.attr('mcid'), type:'text'},
            {targetname:'parent_id', val:that.attr('parent_id'), type:'text'},
            {targetname:'name', val:thattd.eq(1).html(), type:'text'},
            {targetname:'userid', val:that.attr('mcid'), type:'text'},
            {targetname:'username', val:thattd.eq(1).html(), type:'text'},
            {targetname:'isopen', val:thattd.eq(4).attr('status'), type:'checkbox'},
            {targetname:'url', val:that.attr('url'), type:'text'},
            {targetname:'controller', val:that.attr('controller'), type:'text'},
            {targetname:'action', val:that.attr('action'), type:'text'},
            {targetname:'stime', val:thattd.eq(2).html(), type:'text'},
            {targetname:'etime', val:thattd.eq(3).html(), type:'text'},
            {targetname:'sstime', val:that.attr('receive_start_time'), type:'text'},
            {targetname:'estime', val:that.attr('receive_end_time'), type:'text'},
            {targetname:'sptime', val:that.attr('award_start_time'), type:'text'},
            {targetname:'eptime', val:that.attr('award_end_time'), type:'text'},
            {targetname:'unopen_time', val:that.attr('not_start_time'), type:'text'},
            {targetname:'unopen_url', val:that.attr('end_url'), type:'text'},                           
            {targetname:'end_url', val:that.attr('end_url'), type:'text'},
            {targetname:'old_sort', val:that.attr('old_sort'), type:'text'},
            {targetname:'firstclassid', val:that.attr('firstclassid'), type:'text'},
            {targetname:'secondclassid', val:that.attr('secondclassid'), type:'text'},
            {targetname:'channel_name', val:that.attr('channel_name'), type:'text'},
            {targetname:'channelid', val:that.attr('channelid'), type:'text'},
            {targetname:'channeldesc', val:that.attr('channeldesc'), type:'textarea'},
            {targetname:'firstclass', val:that.attr('firstclass'), type:'text'},
            {targetname:'sort', val:that.attr('sort'), type:'select'},
            {targetname:'ctype', val:that.attr('type'), type:'text'},
            {targetname:'secondclass', val:that.attr('secondclass'), type:'text'},
            {targetname:'usertype', val:that.attr('usertype'), type:'radio'},
            {targetname:'bind_account', val:that.attr('bind_account'), type:'textarea'}
            ];
            if (that.attr('type')) {
                var typeval = that.attr('type');
                $("input[name=type]").each(function (){if ($(this).val() == typeval) $(this).attr("checked","checked")});
                if (typeval == 1 && $(".updateblock2").length > 0) {
                    $(".updateblock1").html(classhtml1).css('display','block');
                    $(".updateblock2").html('').css('display','none');
                }
                if (typeval == 2 && $(".updateblock1").length > 0) {
                    $(".updateblock2").html(classhtml2).css('display','block');
                    $(".updateblock1").html('').css('display','none');
                    var d = {
                        firstclassid : that.attr('firstclassid')
                    }
                    $.post(__APP__+'/Class/getSecondCountList', d, function(data) {
                        var data = $.parseJSON(data);
                        $("select:[name=sort]").html(data.data);
                        if ($("select[name=sort]")) $("select[name=sort]").find("option[value="+that.attr('sort')+"]").attr("selected",true);
                    })
                }
            }
            m_d.insertvalue(param_array).open(e);

            if ($("select[name=pid]")) $("select[name=pid]").find("option[value="+param_array[2].val+"]").attr("selected",true);
            if ($("select[name=firstclassid]")) $("select[name=firstclassid]").find("option[value="+param_array[20].val+"]").attr("selected",true);
            
            if (that.attr('secondclassid')){
                var d = {
                    firstclassid : $("select:[name=firstclassid]").val()
                }
                $.post(__APP__+'/Class/getSecondClassList', d, function(data) {
                    var data = $.parseJSON(data);
                    $("select:[name=secondclassid]").html(data.data);
                    if ($("select[name=secondclassid]")) $("select[name=secondclassid]").find("option[value="+param_array[21].val+"]").attr("selected",true);
                });
            }
            if (that.attr('e_f_url')){
                $.post(that.attr('e_f_url'), '', function(data) {
                    var data = $.parseJSON(data);
                    $("#element_info").html(data.errormsg);
                });
            }
        });
        
        $('#modify_div_close').click(function(){
            m_d.close();
            if ($("#element_info").html()){
                $("#element_info").empty();
            }
        });
        
        $('a[name="del"]').click(function(){
            m_d.close();
            ullilist.delajax($(this));
        });
        
        $('#modify_div_form').submit(function(){
            m_d.formsubmit($(this).attr('action'), function(data){
                //var data = $.parseJSON(data);
                alert(data.errormsg);
                if (!data.errorcode) {
                    m_d.close();
                    var locat = $("a[name=modify]").attr('location');
                    if (locat) location.href = locat;
                    else location.href = location.href;
                    
                };
            });
            return false;
        });

        $('a[name=reset]').click(function (){
            $.post($(this).attr('reseturl'), {userid:$(this).attr('mcid'),action:'reset'},function (data){
                alert(data.errormsg);
            },'json');
        });
    }
    //修改资料

    ullilist={};
    //数据表格操作
    /*删除按钮绑定*/
    ullilist.alertres = function(data){
        alert(data.errormsg);
        if(!data.errorcode){
            location.href = location.href;
        }
    }

    ullilist.delajax = function(that){
        if (that.attr('channel_use')){
            var d = {delid:that.attr('delid'), action:'channel_check'};
            $.post(that.attr('delurl'), d, function(data){
                if (data.errorcode == 9){
                    alert(data.errormsg);
                    return false;
                } else {
                    ullilist.opertefunction(that);
                };
            }, 'json');
        } else {
            ullilist.opertefunction(that);
        }
        
                    
    }
    /*删除按钮绑定*/
    
    /*删除按钮方法*/
    ullilist.opertefunction = function(that){
        if (that.attr('isdel')){
            var msg = "确定恢复吗？";
        } else if (that.attr('ischeck')){
            var msg = "确定通过吗？";
        } else {
            var msg = "确定删除吗？";
        }
        if(confirm(msg)){
            var d = {delid:that.attr('delid'), action:'del',delname:that.attr('delname')};
            if(that.attr('a')) d.a = that.attr('a');
            if(that.attr('m')) d.m = that.attr('m');
            $.post(that.attr('delurl'), d, function(data){
                if(ullilist.alertres(data)){
                    that.parent().parent().hide();
                };          
            }, 'json'); 
        };      
    }
    /*删除按钮方法*/
    
    if (!delfunction) {
        $('a[name="del"]').click(function(){
            ullilist.delajax($(this));
        });
    }
});