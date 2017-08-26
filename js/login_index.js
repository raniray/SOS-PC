$('form').submit(function(e) {
		  var url = "./php/login.php"; // the script where you handle the form input.
		  $.ajax({
           type: "POST",
           url: url,
           data: $("form").serialize(), // serializes the form's elements.
           success: function(data)
           {
           		if (data== 'client') {
           			    

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



	  					if (data== 'client') {
           			    

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
						
	      				

           		}else   {


	  					if (data== 'admin') {
           			    

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
   						window.open("accueilAdmin.php","_self");
						
	      				

           		}else   {


 							if (data== 'rep') {
           			    

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
   						window.open("accueilRep.php","_self");
						
	      				

           		}else   {


	  				  	errorMessage = "Mauvais mot de passe ou nom d'utilisateur  ! ";
    					$('#err').show();
						document.getElementById('err').innerHTML=errorMessage;


           		}


           		}

           		}




	  					
	  			}
           }

           
         });
		  e.preventDefault();

       });
