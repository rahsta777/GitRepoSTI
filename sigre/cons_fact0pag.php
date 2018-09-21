<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<script language= "JavaScript" src="js/checkcolor.js"></script>
<script language= "JavaScript" src="js/ajax_cambia_status.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link type="text/css" href="css/css_paginar/styles.css" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function() {	
	$('.paginate').live('click', function(){
		
		$('#content').html('<div class="loading"><img src="images/loading.gif" width="70px" height="70px"/></div>');

		var page = $(this).attr('data');		
		var dataString = 'page='+page;
		
		$.ajax({
            type: "GET",
            url: "con_fact_pag.php",
            data: dataString,
            success: function(data) {
				$('#content').fadeIn(1000).html(data);
            }
        });
    });              
});    
</script>
</head>
<body>
   
	
  <div id="content"><?php require('con_fact_pag.php'); ?></div>
					
        		
	
</body>
	</html>	   
