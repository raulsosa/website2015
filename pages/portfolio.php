<header id="elephant">
	<h2>Portafolio</h2>
	<!--<p>For more examples please view: <a href="http://wwww.behance.net/rsosa12">www.behance.net/rsosa12</a></p>
	-->
	<div id="portfolioButtons">
		<a class='portButton' href='https://www.behance.net/rsosa12'>Behance</a>
		<a class='portButton' href='https://github.com/raulsosa'>GitHub</a>
	</div>
	<ul id='portList'></ul>
</header>

<script type="text/javascript" src="JavaScript/portfolioObjects.js"></script>


<!--Modular Font Size

16 -> 25.89 -> 41.89 -> 67.78 -> 109.67-->
<script>
var xhr = new XMLHttpRequest();
xhr.onload = function(){
	function getNodeValue(obj, tag){
			return obj.getElementsByTagName(tag)[0].firstChild.nodeValue;
		}
	if(xhr.status === 200){

		var response = xhr.responseXML;
		var projectFiles = response.getElementsByTagName('file');
			for(var i=0; i < projectFiles.length; i++){
				var container, name, software, photo, newline;
				container = document.createElement('li');
				container.className = 'portfolio';

				photo = document.createElement('img');
				photo.className = 'portfolioImages';
				photo.setAttribute('src', getNodeValue(projectFiles[i], 'image'));
				photo.setAttribute('alt', getNodeValue(projectFiles[i], 'image'));
				photo.appendChild(document.createTextNode(getNodeValue[i], 'image'));
				container.appendChild(photo);

				name = document.createElement('p');
				software = document.createElement('br');
				newline = document.createElement('br');
				name.appendChild(document.createTextNode(getNodeValue(projectFiles[i], 'name')));
				name.appendChild(newline);
				name.insertBefore(software, newline);
				name.appendChild(document.createTextNode(getNodeValue(projectFiles[i], 'software')));
				name.appendChild(newline);
				container.appendChild(name);

				document.getElementById('portList').appendChild(container); 


			}
	
	}
};
xhr.open('GET', 'XML/portfolio.xml', true);
xhr.send(null);

</script>