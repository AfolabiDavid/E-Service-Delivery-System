<h2>Births</h2>
<div class="categorypost">
<a id="births_name" href="#" class="rightlink">
<h5>Births, Marriages, &amp; Deaths</h5></a>
<p>Lorem ipsum dolor sit amet, nulla feugiat magnis sem dictum tristique orci, pellentesque nulla justo mauris integer proin, arcu ornare ut pellentesque volutpat viverra, dignissim libero. Id sit posuere velit, proin curabitur vitae, sapien nulla, erat placerat ligula. Cras eros orci, sociosqu tincidunt ridiculus nulla euismod. Integer eleifend turpis odio libero pellentesque, curabitur a nec. Adipiscing etiam. Mattis fusce. Magnis sem metus ut eros. Neque urna sed
</p>
</div>


<script>
$(document).ready(function(){
		$("#births_name").click(function(){
				 $(".rightcontent").addClass("curated");
				 $(".content").addClass("content_curated");
				 $(".rightcontent.curated").removeClass("rightcontent");
				 $(".content.content_curated").removeClass("content");
				 $(".curated").append('<div class="postcontent"></div>');
				 $(".categorypost").addClass("contentcategorypost");
				 $(".categorypost.contentcategorypost").removeClass("categorypost");
				$(".postcontent").load("inc/births_page.php");
			
			});
});
</script>