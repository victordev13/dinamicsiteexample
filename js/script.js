function modalLogin(){
	// 			MODAL  			//
	var modal = document.getElementById("modal");
	var bgModal = document.getElementById("bg-modal");
	var iconClose = document.getElementById("close");
	var btnClose = document.getElementById("btnClose");
	var menuIcon = document.getElementById("menu-icon");
	var menu = document.getElementById("menu");

	modal.classList.add("show");
	bgModal.classList.add("show");
		
	iconClose.onclick = function(){
		modal.classList.remove("show");
		bgModal.classList.remove("show");
	}
	// 			FIM MODAL 		//
}




function showMenu(){
	if(menu.classList.contains("show")){
		menu.classList.remove("show");
	}else{
		menu.classList.add("show");
	}
}
	