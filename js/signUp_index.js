$(document).ready(function() {
   

	$('form').submit(function(e) {
	if ( $('#pwd').val() != $('#pwd2').val() ) 
	{
    errorMessage = "Les deux mot de passe que vous avez saisi ne correspondent pas ! ";
	var element = $("#pwd2")[0];
    element.setCustomValidity("");
    $('#err').show();
	document.getElementById('err').innerHTML=errorMessage;
	
	}else
	{

   		 var url = "./php/signUp.php"; // the script where you handle the form input.
		   $.ajax({
           type: "POST",
           url: url,
           data: $("form").serialize(), // serializes the form's elements.
           success: function(data)
           {
           		if (data== 'successful') {
          				$('form').empty();
	      				$('.wrapper').addClass('form-success');
	      				$('#head').empty();
	      				
	      				$('#head').append("Bienvenue dans SOS-PC...");
	      				var start = new Date().getTime();
	      				for (var i = 0; i < 1e7; i++) {
  						  if ((new Date().getTime() - start) > 10000000){
						      break;
						    }
						  } 
   						window.open("home.php","_self");
						
	      				

           		}else
	  			{
	  					alert("Un compte existe déjà pour cet email");
	  			}
           }
           
         });

    }
    e.preventDefault(); // avoid to execute the actual submit of the form.
	});
	  
 
});