<?
/********************************************************************************************************************
* Created by Interwox
* Website: www.interwox.com
* License: GNU
* 
*********************************************************************************************************************/
?>

<script type="text/javascript">
$(document).ready(function(){
  

  $('#btn-search').on('click',function(e){
  	e.preventDefault();
    var 
        search_domain= $('#txtkey').val(),
        $sresult = $('#response'),
    	label = '<span class="label label-danger">URL</span>';
    
	if(search_domain){
	var formData = {
            'search_domain'              : search_domain,
        };
	
	$sresult.html("<h3>SEARCH<h3>");
$.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'include/domain.php', // the url where we want to POST
            data        : formData, // our data object
                  
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
               
				$sresult.html(data);
				
                // here we will handle errors and validation messages
            });

	e.preventDefault();
	
	}
	
	
  });
});
  

</script>


	
	  <div id="lookup_form">
<form>
              <input   id="txtkey" placeholder="Pl. google.com" aria-describedby="ddlsearch" type="text">
                <button id="btn-search" type="button">SEARCH</button>
</form>
			
	</div>		
      <div>
      	<div class="row">
          <div id="response"></div>
        </div>
      </div>


