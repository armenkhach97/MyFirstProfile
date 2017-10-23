<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<section class='first-section'>
	<div class='fs-content'>
		<div class="container">
  <button type="button" id="idheader" class="btn btn-info btn-lg uphe" data-toggle="modal" data-target="#myModal" data-attrss="text" name = "text"><?php 
		$a = $this -> lists; 
		 print($a[0]["header"]);
	?></button>
	<button type="button"  class="btn btn-info btn-lg uphe" data-toggle="modal" data-target="#myModal" data-attrss="header"   name="header">
		update text
	</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Text</h4>
        </div>
        <div class="modal-body">
          
		  <textarea id="submitbutton1" rows="10" cols="50" name="text"><?php print($a[0]["text"]);?></textarea>
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button id="submitbutton" type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
		<div class = 'map-icon'>
		</div>
	</div>
</section>
<script>
function setpage(text,header){
	$('#submitbutton1').text(text);
	$('#idheader').text(header);
}
function getLang(lang)
{
	$.ajax({	
		type:"POST",
		url: url+"/about/lang/",
		data:{'lang':lang},
		success:function(ab)
		{
			if(ab)
			{
				var ab = JSON.parse(ab);
				// console.log(ab);
					setpage(ab["text"],ab["header"]);
			}
		}
	});
}


$(document).ready(function(){
	
	
	
	
	
	$(".lang").click(function(){
		getLang($(this).attr('data-lang'));
	});
	
	$('.uphe').on("click",function(){
		$('#submitbutton').attr("asd",$(this).attr('data-attrss'));
	});
			
				$( "#submitbutton" ).on( "click", function( event ) {
					console.log($(this).attr('asd'));
					var atr = $(this).attr('asd');
				var ss= {"textsave":$("#submitbutton1").val(),"atr":atr};
				// console.log($("#submitbutton1").val());
					$.ajax(
					{	
						type:"POST",
						url: url+"/about/upd/",
						data:ss,
						success:function(aa){
							console.log(aa);
						},
						error:function(aaaaaa){
							// console.log(aaaaaa);
							
						}
					})
				});
});
			
</script>
