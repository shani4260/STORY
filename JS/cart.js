// calculate full price of the cart
function changeTotal() {
    var price = 0;
    $(".full-price").each(function(index){
        price += parseFloat($(".full-price").eq(index).html());
    });
    
    var fullPrice = price;
    if(price == 0) {
        fullPrice = 0;
    }

    $(".totalPrice span").html(fullPrice.toFixed(0));
}


$(document).ready(function(){ 
          
    // highlight payment method - bit 
    $(".pay1").click(function(){
        $(".pay1").css("background-color", "white");
        $(".pay2").css("background-color", "#F5F1F8");
        $(".pay3").css("background-color", "#F5F1F8");
    });
    
    // highlight payment method - paypal
    $(".pay2").click(function(){
        $(".pay2").css("background-color", "white");
        $(".pay1").css("background-color", "#F5F1F8");
        $(".pay3").css("background-color", "#F5F1F8");
    });
    
    // highlight payment method - visa
    $(".pay3").click(function(){
        $(".pay3").css("background-color", "white");
        $(".pay2").css("background-color", "#F5F1F8");
        $(".pay1").css("background-color", "#F5F1F8");
    });
    
    //increase the amount of gift
    $(".qt-plus").click(function(){
        var price = parseInt($(this).parent().children(".price").text());
        $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
        $(this).parent().children(".full-price").html(parseInt($(this).parent().children(".full-price").html()) + price);
        changeTotal(); 
    });

    //decrease the amount of gift
    $(".qt-minus").click(function(){
        var price = parseInt($(this).parent().children(".price").text());
        child = $(this).parent().children(".qt");
        if(parseInt(child.html()) > 1) {
	        child.html(parseInt(child.html()) - 1);
	        $(this).parent().children(".full-price").html(parseInt($(this).parent().children(".full-price").html()) - price);
        }
        else{
            alert("על מנת להסיר את התשורה מהסל יש ללחוץ על פח האשפה");
        }
        changeTotal(); 
    });
    
        

     // Remove Item From Cart
    $(".removeTrash").click(function(){
          var sound = document.createElement("audio");
          sound.src = "../sound/removeTrashSound.mp3";
          var el = $(this);
	      sound.play();
	      
          el.parent().parent().parent().remove();
          if(!($(".product").length))
          {
            $("#cart") .append('<h2 style="text-align:center;">!סל הקניות שלך ריק</h2>');
            $("#cart") .append('<img id="emptyCart" style="display:block; margin:auto; width=100px;" src="../Images/emptyCart.png"/>');
          }
          changeTotal();
    });	
    
    if ($("#cart").length){ 

        changeTotal(); 
        
    }
		    
		   
});	
              
