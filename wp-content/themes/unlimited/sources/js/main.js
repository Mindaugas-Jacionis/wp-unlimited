document.addEventListener('DOMContentLoaded', function() {

	var mobileMenuButton = document.querySelector(".main-content .menu-container .mobile-menu");
	var menuContainer = document.querySelector(".main-content .menu-container");
	var menuContainerClasses = menuContainer.className;
	var menuItems = document.querySelectorAll(".main-content .menu-container .site-menu .menu-item");

	mobileMenuButton.onclick = function(){
		menuContainerClasses = menuContainer.className;
		if((menuContainerClasses.indexOf("active") != -1)){
			menuContainer.className = menuContainerClasses.replace("active","");
		} else{
			menuContainer.className = menuContainerClasses + " active";
		}
	};
	
	for(var i = 0; i < menuItems.length; i++){
		if(!!menuItems[i].querySelector(".sub-menu")){
			menuItems[i].addEventListener("click", subMenuClick, false);
			menuItems[i].querySelector("a").addEventListener("click", preventDefaultAction, false);
		}
	}

});

function subMenuClick(){
	if(window.innerWidth <= 850){
		var itemClasses = this.className;
		
		if((itemClasses.indexOf("active") != -1)){
			this.className = itemClasses.replace("active","");
		} else{
			this.className = itemClasses + " active";
		}
	}
}

function preventDefaultAction(event){
	event.preventDefault();
}