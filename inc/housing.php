<h2>Housing</h2>

<div class="categorypost">
<a id="food_agriculture" href="#" class="rightlink">
<h5>Housing and Lands Services</h5></a>
<p>Lorem ipsum dolor sit amet, nulla feugiat magnis sem dictum tristique orci, pellentesque nulla justo mauris integer proin, arcu ornare ut pellentesque volutpat viverra, dignissim libero. Id sit posuere velit, proin curabitur vitae, sapien nulla, erat placerat ligula. Cras eros orci, sociosqu tincidunt ridiculus nulla euismod. Integer eleifend turpis odio libero pellentesque, curabitur a nec. Adipiscing etiam. Mattis fusce. Magnis sem metus ut eros. Neque urna sed
</p>
</div>



<script>
$(document).ready(function(){
		$("#food_agriculture").click(function(){
				 $(".rightcontent").addClass("curated");
				 $(".content").addClass("content_curated");
				 $(".curated").removeClass("rightcontent");
				 $(".content_curated").removeClass("content");
				 $(".curated").append('<div class="postcontent"></div>');
				 $(".postcontent").load("inc/housing_page.php");
				 
				  $(".categorypost").addClass("contentcategorypost");
				 $(".categorypost.contentcategorypost").removeClass("categorypost");
					
			});
});
</script>