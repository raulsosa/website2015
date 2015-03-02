var xhr = new XMLHttpRequest();

xhr.onload = function(){

	if(xhr.status === 200){
		var response = xhr.responseXML;
		var projects = response.getElementsByTagName('project');
		for(var i=0; i < projects.length; i++){
			var container, image, name, tools, newline;
			container = document.createElement('div');
			container.className = 'project';

			image = document.createElement('img');
			image.setAttribute('src', getNodeValue(projects[i], 'images'));
			image.appendChild(document.createTextNode(getNodeValue(projects[i], 'images')));
			container.appendChild(image);

			name = document.createElement('p');
			tools =	document.createElement('strong');
			newline = document.createElement('br');

			tools.appendChild(document.createTextNode(getNodeValue(projects[i], 'name')));
			name.appendChild(newline);
			name.insertBefore(tools, newline);
			name.appendChild(document.createTextNode(getNodeValue(projects[i], 'date')));
			container.appendChild(name);

			document.getElementById('whoAmI').appendChild(container);
		}
		function getNodeValue(obj, tag){
			return obj.getElementsByTagName(tag)[0].firstChild.nodeValue;
		}

	}
};
xhr.open('GET', 'XML/portfolio.xml', true);
xhr.send(null);