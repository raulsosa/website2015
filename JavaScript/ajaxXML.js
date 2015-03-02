var xhr = new XMLHttpRequest();
xhr.onload = function(){
	if(xhr.status === 200){

		var response = xhr.responseXML;
		var people = response.getElementsByTagName('person');
			for(var i=0; i < people.length; i++){
				var container, name, birthdate, profession, newline;
				container = document.createElement('div');
				container.className = 'person';

				name = document.createElement('p');
				birthdate = document.createElement('p');
				profession = document.createElement('b');
				newline = document.createElement('br');
				name.appendChild(document.createTextNode(getNodeValue(people[i], 'name')));
				name.appendChild(newline);
				name.insertBefore(birthdate, newline);
				name.appendChild(document.createTextNode(getNodeValue(people[i], 'birthdate')));
				name.appendChild(newline);
				name.appendChild(document.createTextNode(getNodeValue(people[i], 'profession')));
				container.appendChild(name);

				document.getElementById('whoAmI').appendChild(container); 
			}
		function getNodeValue(obj, tag){
			return obj.getElementsByTagName(tag)[0].firstChild.nodeValue;
		}
	}
};
xhr.open('GET', 'XML/people.xml', true);
xhr.send(null);