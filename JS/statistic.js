//popup

var Alert = new CustomAlert();
function CustomAlert(){
    this.render = function(){
        //Show Modal
        let popUpBox = document.getElementById('popUpBox');
        popUpBox.style.display = "block";
        popup_btn.style.visibility = "hidden";
      
        //Close Modal
        document.getElementById('closeModal').innerHTML = '<button onclick="Alert.ok()">&nbsp; X &nbsp;</button>';
    }  

	this.ok = function(){
	  document.getElementById('popUpBox').style.display = "none";
	  document.getElementById('popUpOverlay').style.display = "none";
	  popup_btn.style.visibility = "visible";
	}
}

