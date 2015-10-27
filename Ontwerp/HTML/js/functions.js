var toggle = 0;
function menuToggle(){
	if(toggle==0){
		$('#menuCat ul').css("display","block");
		toggle = 1;
	}
	else{
		$('#menuCat ul').css("display","none");
		toggle = 0;
	}
}