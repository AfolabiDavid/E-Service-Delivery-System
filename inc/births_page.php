
<a target="_blank" href="#" class="rightlink">
<h2>Lorem ipsum dolor</h2>
</a>
<a target="_blank" href="#" class="rightlink">
<h2>Lorem ipsum dolor</h2>
</a>
<a target="_blank" href="#" class="rightlink">
<h2>Lorem ipsum dolor</h2>
</a>



<script>
$(document).ready(function(){
		$("#births").click(function(){
				 $(".curated").addClass("rightcontent");
				 $(".rightcontent").removeClass("curated");
				 $(".postcontent").remove();	
				 $(".content_curated").addClass("content");
				 $(".content_curated.content").removeClass("content_curated");
				 $(".categorypost").addClass("contentcategorypost");
				 $(".categorypost.contentcategorypost").removeClass("contentcategorypost");
			});
			
			$("#births_name").click(function(){
				 $(".curated").addClass("rightcontent");
				 $(".rightcontent").removeClass("curated");
				 $(".content_curated").addClass("content");
				 $(".content_curated.content").removeClass("content_curated");
				 $(".postcontent").remove();	
				 $(".contentcategorypost").addClass("categorypost1");
				 $(".contentcategorypost.categorypost1").removeClass("contentcategorypost");
				 
				 $("#births_name").click(function(){
				$(".categorypost1").addClass("contentcategorypost");
				 $(".categorypost1.contentcategorypost").removeClass("categorypost1");
				 $(".rightcontent").addClass("curated");
				 $(".content").addClass("content_curated");
				 $(".curated").removeClass("rightcontent");
				 $(".content_curated").removeClass("content");
				 $(".curated").append('<div class="postcontent"></div>');
				 $(".postcontent").load("inc/births_page.php");
					
				});
				 
			});
});
</script>