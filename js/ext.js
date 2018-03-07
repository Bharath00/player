var max_count = 0 ;
$("#add_more").click(function(){
    if(max_count >=4)
		return ;	
	max_count ++ ;
	$("#file_id").append("<br/><br/><input type='file' name='file_"+ max_count +"'/>") ;
	
});
