function projectImage(imgID,projName,toolsUsed,imageSRC){
	this.imgID = imgID;
	this.projName = projName;
	this.toolsUsed = toolsUsed;
	this.imageSRC = imageSRC;
	this.collectAll = function(){

		var container, image, title, tools, newline;
		container = document.createElement('div');
		container.id = imgID;
		container.className = 'portfolio';

		image = document.createElement('img');
		image.setAttribute('src', 'images/'+imageSRC);
		image.setAttribute('alt', imageSRC);
		image.setAttribute('title', projName);
		image.setAttribute('class', 'portfolioImages');
		container.appendChild(image);

		title = document.createElement('p');
		tools = document.createElement('strong');
		newline = document.createElement('br');

		tools.appendChild(document.createTextNode(toolsUsed));
		title.appendChild(newline,tools);
		title.insertBefore(tools,newline);
		title.appendChild(document.createTextNode(projName));
		container.appendChild(title);

		document.getElementById('portfolio').appendChild(container);


		title.style.visibility = "hidden";

//SET EVENT LISTENER TO DIV IMAGES
		document.getElementById(imgID).addEventListener('mouseover',imgMouseOver,true);
		document.getElementById(imgID).addEventListener('mouseout', imgMouseOut,true);
//FUNCTION FOR EVENT LISTENER		
		function imgMouseOver(){
			title.style.color = '#fff';
			title.style.visibility = "visible";
			
			title.onclick = function(){
				title.style.background = "rgba(0,0,0,0.8)";	
				title.className = 'expandedImage';
				title.innerHTML = "Click Me again!";
			}
		}

		function imgMouseOut(){
			title.style.visibility = 'hidden';
		}

		
	}


}


var fruits = [];
fruits.push('Help');
console.log(fruits);

var saraJones = new projectImage('saraJones', "Test Image", "Photoshop", '20141209_160148.jpg');
saraJones.collectAll();

var thomas = new projectImage('thomas', 'Test2', "Illustrator, Photoshop, Indesign", 'spain-mountains_00444267.jpg');
thomas.collectAll();

var james = new projectImage(2012, "Test 3", "Javascript, Jquery, Ajax, JSON, Photoshop, Illustrator", '20141209_155848.jpg');
james.collectAll();

var elizabeth = new projectImage(2014, "Test Image", "Photoshop", '20141209_160148.jpg');
elizabeth.collectAll();
