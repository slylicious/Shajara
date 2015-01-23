// JavaScript Document
$(function(){
		   
		  	$('#login_link').click(function(){
					$('#loginpop').dialog('open');
					return false;
				});
			
			$('#loginpop').dialog({
					autoOpen: false,
					width: 440,
					modal:true,
					buttons: {
						
						"Cancel": function() { 
							$(this).dialog("close"); 
						} 
					}
				});
			
	 $("#login_err").css('display', 'none', 'important');

     $("#loginfxn").click(function(){   

			

          username=$("#inputEmail").val();

          password=$("#inputPassword").val();
		
	
          $.ajax({

           type: "POST",

           url: "php/clogin.php",

            data: "name="+username+"&pwd="+password,

           success: function(html){    

            if(html=='true')    {

             //$("#add_err").html("right username or password");

			 //$("#addlogin_err").css('display', 'inline', 'important');

            //$("#addlogin_err").html("<img src='img/tick.png' /> Loading...");

             window.location="./";

            }

            else    {

            $("#login_err").css('display', 'inline', 'important');

             $("#login_err").html("<span class='clientlogin_err'><i class='fa fa-exclamation'></i> Wrong username or password</span><br>");

            }

           },

           beforeSend:function()

           {

            $("#login_err").css('display', 'inline', 'important');

            $("#login_err").html("<i class='fa fa-circle-o-notch fa-spin'></i> Loading...<br>");

           }

          });

        return false;

  	  });
		   
		   
		  	$('#c_link').click(function(){
					$('#changepixpop').dialog('open');
					return false;
				});
			
			$('#changepixpop').dialog({
					autoOpen: false,
					width: 440,
					modal:true,
					buttons: {
						
						"Cancel": function() { 
							$(this).dialog("close"); 
						} 
					}
				});
		   
});