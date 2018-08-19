<?php header('Content-type: text/html; charset=utf-8'); ?>

<script type="text/javascript">
$(document).ready(function() {	
	$('.paginate').live('click', function(){
		
		//$('#contentpag').html('<div class="loading"><img src="views/images/loading.gif" width="20px" height="20px"/></div>');

		var page = $(this).attr('data');		
		var dataString = 'page='+page;
		
		$.ajax({
            type: "GET",
            url: "views/plantillas/consul_user2.php",
            data: dataString,
            success: function(data) {
				$('#contentpag').fadeIn(1000).html(data);
            }
        });
    });              
});    
</script>
</head>
<body>
   
	
  <div id="contentpag"><?php require('consul_user2.php'); ?></div>
					
        		
	
</body>
	</html>	   
