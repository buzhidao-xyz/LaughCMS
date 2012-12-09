void function(){

/*获取url参数加强版*/
var Get_QueryString_Plus = function(url){
	var no_q = 1;
	var now_url = url && (url.split('?')[1] || no_q) || document.location.search.slice(1) || no_q;
	if(now_url === no_q) return false;
    var q_array = now_url.split('&'),
    q_o = {},
    v_array; 
    for(var i=0;i<q_array.length;i++){
          v_array = q_array[i].split('=');
    	  q_o[v_array[0]] = decodeURIComponent(v_array[1]);
    };
    return q_o;
}

var __APP__ = JS_APP;
var Rolemanage = function(){
	this.treeextend = false;
}

//角色分配 	
if($('.role_send_table').length>0){
	var roleshow={
		sel:$('#roles'),
		addbt:$('#addrole'),
		u_role_class:'userrole',
		insert_after:$('#rolehr'),
		del_class:'role_del',
		roleidinput:'roleid',
		rolesubmit:$('#rolesubmit')
	}

	roleshow.getname = function(rolearray){
		var obj = {
			name :'',
			desc :'',
			roleid:''
		};
		if(rolearray.length === 0) return obj;
		for(var i=0;i<rolearray.length;i++){
				roleshow.sel.find('option').each(function(){
					if($(this).val() == rolearray[i]){
						obj.name+=$(this).html()+',';
						obj.desc+=$(this).attr('desc')+',';
						obj.roleid+=$(this).val()+',';
					}
				})
		}
		obj.name = obj.name.slice(0,obj.name.length-1)
		return obj;
	}
	
	roleshow.cleardivtable = function(){
		roleshow.binddelclick(false); //解除绑定
		$('.'+roleshow.u_role_class).remove();
	}

	roleshow.removeinputid = function(id){
		var val = $('#'+roleshow.roleidinput).val(),
		    str = val.replace(id+',','');
		$('#'+roleshow.roleidinput).val(str);
	}
	
	roleshow.binddelclick = function(bool){
		var delobj = $('.'+roleshow.del_class);
		if(bool){
			delobj.click(function(){
				if(confirm('确定删除吗？')){
					var rid = $(this).attr('roleid');
					$(this).parent().parent().remove();
					roleshow.removeinputid(rid);
				}
				//return false;
			})
		}
		else{
			delobj.unbind();
		}
	}

	roleshow.createstr = function(namearray){
		var str = '';
		for(var i=0; i<namearray.length; i++){			
			if(!namearray[i].name) continue;
			str += '<tr height="18" class="userrole">'+
			   	   '<td align="center" class="stgap" colspan="2" title="'+namearray[i].desc+'"><b>'+namearray[i].name+'</b>&nbsp;&nbsp;&nbsp;<a class="role_del" roleid="'+namearray[i].roleid+'" href="javascript:;">删除</a></td>'+ 
			 	   '</tr>' 
		}
		return str;
	}

	roleshow.putdivtable = function(that){
		if(that.val()==','){
			that.val('');
			return false;}
		if(that.val()==''){return false;}
		var rolearray = that.val().split(','),
			rolearray = $.grep(rolearray, function(n, i){
				if(parseInt(n)>0 && (parseInt(n) == n)){
					return true;
				}
				return false;				
			});
			namearray =	roleshow.getname(rolearray).name.split(',');
			descarray = roleshow.getname(rolearray).desc.split(',');
			strobj=[];	
		for(var j=0;j<namearray.length;j++){
			strobj[j]={};
			strobj[j].roleid = rolearray[j];
			strobj[j].name = namearray[j];
			strobj[j].desc = descarray[j];
		}
		var str = roleshow.createstr(strobj);
		roleshow.insert_after.after(str);
		roleshow.binddelclick(true); //添加绑定
	}

    roleshow.hascheck = function(id){//判断是否存在
		var val = $('#'+roleshow.roleidinput).val();
	    var str = val.indexOf(id+',');
	    if(str === -1) return false;
	    return true;
	}

	roleshow.bindaddclick = function(){//绑定添加
		roleshow.addbt.click(function(){
			var rid = roleshow.sel.find('option:selected').val(),
				name = roleshow.sel.find('option:selected').html(),
				desc = roleshow.sel.find('option:selected').attr('desc');
			if (!roleshow.hascheck(rid)){
				var strarray=[{roleid:rid,name:name,desc:desc}],
					val = $('#'+roleshow.roleidinput).val(),
					str = roleshow.createstr(strarray);
					roleshow.rolesubmit.before(str);
					$('#'+roleshow.roleidinput).val(val+rid+',');
					roleshow.binddelclick(true); //绑定删除
				return true;
			};
			alert('角色已存在');
			return false;
		})
	}();

	//修改资料
	if($('#modify_div').length>0){
		var m_d = new Div_window('modify_div');
		$('a[name="modify"]').click(function(event){
			var e = event;
			var that = $(this);
			var thattd = that.parent().parent().find('li[name=role]');
			var param_array = [
			{
				targetname:'roleid', val:thattd.attr('roleid')+',', type:'text',callback:function(that){
				roleshow.cleardivtable();
				roleshow.putdivtable(that);
			}},
			{targetname:'id', val:that.attr('id'), type:'text'}
			];
			m_d.insertvalue(param_array).open(e);
		});
		
		$('#modify_div_close').click(function(){
			m_d.close();
		});
		
		$('#user_role_modify_div_form').submit(function(){
			m_d.formsubmit(__APP__+'/index.php?s=Role/roleAdmin', function(data){
				alert(data.info);
				if (!data.status) {
					location.href = location.href;
				};
			}).close();
			return false;
		})
	}
}
}()