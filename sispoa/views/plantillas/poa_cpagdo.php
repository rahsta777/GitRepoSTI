<?PHP
   session_start ();
?>
<?php header('Content-type: text/html; charset=utf-8'); ?>

<script type="text/javascript">
$(document).ready(function() {	
	$('.paginate').live('click', function(){
		//$('#contentpag111').html('<div class="loading"><img src="images/gif-load.gif" width="20px" height="20px"/></div>');//loading.gif
		var page = $(this).attr('data');		
		var dataString = 'page='+page;
		
		$.ajax({
            type: "GET",
            url: "views/plantillas/poa_cpagdo_0.php",
            data: dataString,
            success: function(data) {
				$('#contentpag111').fadeIn(1000).html(data);
            }
        });
    });              
});    
</script>
</head>
<body>
   
	
  <div id="contentpag111"><?php require('poa_cpagdo_0.php'); ?></div>
					
        		
	
</body>
	</html>	   
