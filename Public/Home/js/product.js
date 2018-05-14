$(function(){
	var listdata = {
		result : {
			"status" : true ,
			"data" : {
				"list" : [
					{
						"id" : "1" ,
						"image" : "file-1523413316-0.jpg",
						"title" : "豆瓣精品挂耳咖啡-甜橙庄园系列" ,
						"introduce" : "以经典电影为图案灵感，自然元素塑造独特造型，高质量双重材质，保护你的手机。" ,
						"price" : "￥48" ,
						"type" : "新品" ,
					}
				]
			}
		}
	}
	$.ajax({
		url : "",
		type : "get",
		dataType : "json",
		success : function(res){
			var blogStr = "";
			var t = listdata.result.data.list;
			for(var i=0;i<t.length;i++){
				blogStr += "<div class='new-product-list-a clearfix'><div class='new-product-list-a-img'><img src='./image/"+t[i].image+"'></div><div class='new-product-list-a-content'><h4>"+t[i].title+"</h4><p>"+t[i].introduce+"</p><strong>"+t[i].price+"</strong><div><a>"+t[i].type+"</a></div></div></div>"			
			}
			$(".new-product-list").html(blogStr);
		},
		error : function(res){
			var blogStr = "";
			var t = listdata.result.data.list;
			for(var i=0;i<t.length;i++){
				blogStr += "<div class='new-product-list-a clearfix'><div class='new-product-list-a-img'><img src='./image/"+t[i].image+"'></div><div class='new-product-list-a-content'><h4>"+t[i].title+"</h4><p>"+t[i].introduce+"</p><strong>"+t[i].price+"</strong><div><a>"+t[i].type+"</a></div></div></div>"			
			}
			$(".new-product-list").html(blogStr);
		}
	})
});
