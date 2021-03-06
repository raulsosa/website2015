function portfolioXML(){
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

				//name = document.createElement('p');
				//software = document.createElement('br');
				//newline = document.createElement('br');
				//name.appendChild(document.createTextNode(getNodeValue(projectFiles[i], 'name')));
				//name.appendChild(newline);
				//name.insertBefore(newline);
				//name.appendChild(document.createTextNode(getNodeValue(projectFiles[i], 'software')));
				//name.appendChild(newline);
				//container.appendChild(name);

				document.getElementById('portList').appendChild(container); 


			}
	
	}
}
xhr.open('GET', 'XML/portfolio.xml', true);
xhr.send(null);
}

function resumeXML(){
var resumeXhr = new XMLHttpRequest();
resumeXhr.onload = function(){
	function getNodeValue(obj, tag){
			return obj.getElementsByTagName(tag)[0].firstChild.nodeValue;
		}
	if(resumeXhr.status === 200){

		var workListResponse = resumeXhr.responseXML;
		var workHistory = workListResponse.getElementsByTagName('job');
			for(var i=0; i < workHistory.length; i++){
				var workContainer, listContainer, company, position, description, newline, pdfLink;
				workContainer = document.createElement('li');
				workContainer.className = 'jobContainer';

				listContainer=document.createElement('div');
				listContainer.className= "listContainer";
				workContainer.appendChild(listContainer);

				company = document.createElement('p');
				company.className = 'companyName';
				company.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'company')));
				listContainer.appendChild(company);

				position = document.createElement('p');
				position.className = 'positionName';
				position.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'position')));
				listContainer.appendChild(position);

				description = document.createElement('p');
				description.className = 'jobDescription';
				description.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'description')));
				listContainer.appendChild(description);

				pdfLink = document.createElement('a');
				pdfLink.className = 'resumeButton';
				pdfLink.href = 'Documents/Raul_Sosa-CV_English.pdf';
				pdfLink.appendChild(document.createTextNode("view resume") );
				listContainer.appendChild(pdfLink);

				document.getElementById('resumeList').appendChild(workContainer); 

			}

	
	}
}
resumeXhr.open('GET', 'XML/workHistory.xml', true);
resumeXhr.send(null);

}

resumeXML();