<nav id="nav-wrap" class="main-nav grid">
	<ul id="nav">
		<li><a class="hireMe" href="#bio"> Home </a></li>
		<li><a class="hireMe" href="#portfolio-header"> Portfolio </a></li>
		<li><a class="hireMe" href="#resume"> Resume </a></li>
		<li><a class="hireMe" href="#contact-form-header"> Contact </a></li>
	</ul>
</nav>
<script>
jQuery(document).ready(function($){
	/*prepend menu icon */
	$('#nav-wrap').prepend("<div id='menu-icon'>Menu</div>");

	/*toggle nav */
	$("#menu-icon").on("click",function(){
		$("#nav").slideToggle();
		$(this).toggleClass("active");
	});
});

</script>