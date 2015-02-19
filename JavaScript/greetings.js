function changeGreetings(){
var today = new Date();
var hourNow = today.getHours();
var specificDate = today.getDate();
//Create all the months
var getMonths = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
var findMonth = getMonths[today.getMonth()];
var greetings;
//if date is october 31 say happy halloween
var holidays;

holidays = [''];

//Get Hour of the Day --- will be in International Format
if(hourNow> 18){
	greetings = 'Buenas Noches y Bienvenidos!';
}else if (hourNow > 12){
	greetings = 'Buenas Tardes y Bienvenidos!';
}else if (hourNow > 0){
	greetings = 'Buenos Dias y Bienvenidos!';
}else{
	greetings = 'Bienvenidos!';
}

// Note: Jan. is #0, Dec. is #11
if (getMonths[9] && specificDate === 31){
	holidays=' Feliz Noche de Terror - \'La Noche de Brujas\'! ';
}else{
	holidays='';
}

var elHello = document.getElementById('changeH1').innerHTML = greetings + '<br/>' + '<hr/>';
};

