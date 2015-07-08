<!--<header id="portfolio-header" class="grid">
<div class="col-4-4">
<div id="portfolio" class="col-1-2">
	
	<!--<p>For more examples please view: <a href="http://wwww.behance.net/rsosa12">www.behance.net/rsosa12</a></p>
	--><!--
</div>
<div id="portfolioButtons" class="col-1-4">
	<!--	<a class='portButton' href='https://www.behance.net/rsosa12'>Behance</a>
		<a class='portButton' href='https://github.com/raulsosa'>GitHub</a>-->
	<!--<p>Welcome to my site. Take a look around explore some of my work on the web to your right and have a good time. If you like what you see than please leave a message.</p>
</div>


</div>-->





<header id="portfolio-header" class="grid">
<div class="col-4-4">
	<h2 class="portfolio-intro">Portafolio</h2>
</div>
<div id="portfolio" class="col-4-4 portfolio-area clearfix">      
    <script id="portfolio-template" type="text/x-handlebars-template">
    <ul class="portfolio-list clearfix">
     	{{#each projects}}
    <li class="portfolio-item">

    <div class="portfolio-content">
    <figure class="portfolio-cover" title="{{this.name}}" data-project-id="{{this.id}}">
        {{#if this.covers.[404]}}
    <img class="portfolio-image" src="{{this.covers.[404]}}" alt="">
        {{else}}
        {{#if this.covers.[230]}}
    <img class="portfolio-image" src="{{this.covers.[230]}}" alt="">
        {{else}}
    <img class="portfolio-image" src="{{this.covers.[202]}}" alt="">
        {{/if}}
        {{/if}}
    </figure>
    <div class="portfolio-fields">
    <p class="portfolio-title">{{this.name}}</p>
    <ul class="field-list">
        {{#each this.fields}}
     <li class="field-item">{{this}}</li>
        {{/each}}
     </ul>
    </div>
	</div> 
    </li>
        {{/each}}
    </ul>
    </script>
</div>
	<script type="text/javascript">
		var apiKey  = 'nu8U2ae6wMrteSul6WPIS7DAckIkUqAq';
		var userID  = 'rsosa12';
	
	(function() {
    var perPage = 12;
    var behanceProjectAPI = 'http://www.behance.net/v2/users/'+ userID +'/projects?callback=?&api_key=' + apiKey + '&per_page=' + perPage;
 
    function setPortfolioTemplate() {
	    var projectData = JSON.parse(sessionStorage.getItem('behanceProject')),
	            getTemplate = $('#portfolio-template').html(),
	            template    = Handlebars.compile(getTemplate),
	            result      = template(projectData);
	        $('#portfolio').html(result);
	    };
	 
	    if(sessionStorage.getItem('behanceProject')) {
	        setPortfolioTemplate();
	    } else {
	        $.getJSON(behanceProjectAPI, function(project) {
	            var data = JSON.stringify(project);
	            sessionStorage.setItem('behanceProject', data);
	            setPortfolioTemplate();
	        });
	    };
	})();

	$('#portfolio').on('click', '.portfolio-cover', function() {
    var $this = $(this),
        projectID = $this.data('project-id'),
        beProjectContentAPI = 'http://www.behance.net/v2/projects/'+ projectID +'?callback=?&api_key=' + apiKey,
        keyName = 'behanceProjectImages-' + projectID;
     
    function showGallery(dataSource) {  
        $this.magnificPopup({
            items: dataSource,
            gallery: {
                enabled: true
            },
            type: 'image'
        }).magnificPopup('open');
    };
 
    if(localStorage.getItem(keyName)) {
        var srcItems = JSON.parse(localStorage.getItem(keyName));
        showGallery(srcItems);
    } else {
        $.getJSON(beProjectContentAPI, function(projectContent) {
            var src = [];
            $.each(projectContent.project.modules, function(index, mod) {
                if(mod.src != undefined) {
                    src.push({ src: mod.src }); 
                }
            });
            showGallery(src);
            var data = JSON.stringify(src);
            localStorage.setItem(keyName, data);
        });
    };
});
	</script>

</header>

<!--Modular Font Size

16 -> 25.89 -> 41.89 -> 67.78 -> 109.67-->