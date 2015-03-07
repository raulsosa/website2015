<header id='resume'>
<div>
<h2>Resume</h2>
<q>Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it's really how it works.
<br/> - Steve Jobs</q>
<ul id="resumeList">

</ul>
<script>
var resumeXhr = new XMLHttpRequest();
resumeXhr.onload = function(){
	function getNodeValue(obj, tag){
			return obj.getElementsByTagName(tag)[0].firstChild.nodeValue;
		}
	if(xhr.status === 200){

		var workListResponse = resumeXhr.responseXML;
		var workHistory = workListResponse.getElementsByTagName('job');
			for(var i=0; i < workHistory.length; i++){
				var workContainer, company, position, description, newline;
				workContainer = document.createElement('li');
				workContainer.className = 'jobContainer';

				company = document.createElement('h4');
				company.className = 'companyName';
				company.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'company')));
				workContainer.appendChild(company);

				position = document.createElement('p');
				position.className = 'positionName';
				position.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'position')));
				workContainer.appendChild(position);

				description = document.createElement('p');
				description.className = 'jobDescription';
				description.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'description')));
				workContainer.appendChild(description);
				/*company = document.createElement('p');
				position = document.createElement('p');
				newline = document.createElement('br');
				description = document.createElement('p');

				workContainer.appendChild(description);
				workContainer.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'company')));
				workContainer.appendChild(newline);
				workContainer.insertBefore(position, newline, description);
				workContainer.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'position')));
				workContainer.appendChild(newline);
				workContainer.appendChild(document.createTextNode(getNodeValue(workHistory[i], 'description')));
				workContainer.appendChild(company);*/

				document.getElementById('resumeList').appendChild(workContainer); 


			}
	
	}
};
resumeXhr.open('GET', 'XML/workHistory.xml', true);
resumeXhr.send(null);

</script>
<div id="resumePdf">
	<a class="resumeButton" href='Documents/Raul_Sosa-CV.pdf' target="_blank" />Spanish CV</a>
	<a class="resumeButton" href='Documents/Raul_Sosa-CV.pdf' target="_blank" />English CV</a>
</div>
</div>
</header>