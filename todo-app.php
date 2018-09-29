<!DOCTYPE html>
<html>
<head>
	  <title>Todo App With Jquery</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
      
      <div class="container">
      	   <div class="jumbotron">
      	   	   Todo App With Jquery
      	   </div>
      	   <form name="toDoList">
			<input type="text" name="ListItem" class="form-control">
			<br>
			<button class="btn btn-primary" id="button">Aygygydd</button>
		  </form>
          <br>
		<ul></ul>
      </div>

      <script type="text/javascript">
	      	$(document).ready(function(){
		        $('#button').click(function(e){
		        	    e.preventDefault();
		                var toAdd = $('input[type=text]').val();
		                 $('ul').append('<li>' + toAdd + '</li>');
		            });
	       
		       $("input[type=text]").keyup(function(event){
		          if(event.keyCode === 13){
		            $("#button").click();
		          }         
		      });

		      $(document).on('click','li', function(){
		        $(this).toggleClass('strike').fadeOut('slow');    
		      });
	      
		      $('input').focus(function() {
		        $(this).val('');
		      });
	      
	          $('ol').sortable();  
      
              }
           );
		   
		   
		   // jvn sjvnjsvnjsnv jsnvjsnvjsn
		   
		   
		   
      </script>
</body>
</html>