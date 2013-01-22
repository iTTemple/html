$(document).ready(function(){  
		ftpBrowseBind();
		
		$(".folder-fieldset").hide();
		$(".showroom-fieldset").hide();
		
		if ($("#edit-share-type-folder:checked").val())
			$(".folder-fieldset").show();
			
		if ($("#edit-share-type-showroom:checked").val())
			$(".showroom-fieldset").show();
		
		$(".menu-item-form").hide();
		
    $("#edit-share-type-showroom").bind('click',
      function() {
      	$(".folder-fieldset").hide();
      	$(".showroom-fieldset").show();
			}
    );
    
    $("#edit-share-type-folder").bind('click',
      function() {
      	$(".folder-fieldset").show();
      	$(".showroom-fieldset").hide();
			}
    );
    
});

function ftpBrowseBind() {    
		$(".ftp-browser .folder a").bind('click',
      function() {
      		$(".ftp-browser").empty().html('<img src="/sites/default/files/progress.gif" />');
      
      		var url = $(this).attr('href');
          $.get(url, null, function(response) {
						$("#edit-share-folder").val(response['folder']);
						$(".ftp-browser").replaceWith(response['html']);
					}, 'json');
					
          return false;
       }
    );
}