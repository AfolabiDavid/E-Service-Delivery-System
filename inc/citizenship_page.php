<a href="#" class="rightlink">
<h2>Lorem ipsum dolor</h2>
</a>
<a href="#" class="rightlink">
<h2>Lorem ipsum dolor</h2>
</a>
<a href="#" class="rightlink">
<h2>Lorem ipsum dolor</h2>
</a>


<script>
$(document).ready(function(){
		$("#citizenship").click(function(){
				 $(".curated").addClass("rightcontent");
				 $(".rightcontent").removeClass("curated");
				 $(".postcontent").remove();	
				 $(".content_curated").addClass("content");
				 $(".content_curated.content").removeClass("content_curated");
				 $(".categorypost").addClass("contentcategorypost");
				 $(".categorypost.contentcategorypost").removeClass("contentcategorypost");
			});
			
			$("#food_agriculture").click(function(){
				 $(".curated").addClass("rightcontent");
				 $(".rightcontent").removeClass("curated");
				 $(".content_curated").addClass("content");
				 $(".content_curated.content").removeClass("content_curated");
				 $(".postcontent").remove();	
				 $(".contentcategorypost").addClass("categorypost1");
				 $(".contentcategorypost.categorypost1").removeClass("contentcategorypost");
				 
				 $("#food_agriculture").click(function(){
				$(".categorypost1").addClass("contentcategorypost");
				 $(".categorypost1.contentcategorypost").removeClass("categorypost1");
				 $(".rightcontent").addClass("curated");
				 $(".rightcontent").addClass("curated");
				 $(".content").addClass("content_curated");
				 $(".curated").removeClass("rightcontent");
				 $(".content_curated").removeClass("content");
				 $(".curated").append('<div class="postcontent"></div>');
				 $(".postcontent").load("inc/citizenship_page.php");
					
				});
				 
			});
});
</script>