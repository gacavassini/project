    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="{{ url('/js/scripts.js') }}"></script>

    <script> CKEDITOR.replace( 'editor1' ); </script>

    	<script>

	        CKEDITOR.config.resize_enabled = true;
	        CKEDITOR.config.width = '100%';
	        CKEDITOR.config.resize_enabled = false;
	        CKEDITOR.config.height = '50vh';
   		 </script>

   		 <script type="text/javascript">
   		 	$("select").on("click" , function() {

	  		$(this).parent(".select-box").toggleClass("open");

			});

			$(document).mouseup(function (e)
			{
			    var container = $(".select-box");

			    if (container.has(e.target).length === 0)
			    {
			        container.removeClass("open");
			    }
			});


			$("select").on("change" , function() {

			  var selection = $(this).find("option:selected").text(),
			      labelFor = $(this).attr("id"),
			      label = $("[for='" + labelFor + "']");

			  label.find(".label-desc").html(selection);

			});
   		 </script>
  </body>

</html>
