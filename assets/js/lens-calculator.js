function MakeArray(n) {
    this.length = n;
    for (var i = 1; i <= n; i++) {
        this[i] = 0;
    }
    return this;
}

var SensorBreedtes = new MakeArray(6);
	SensorBreedtes[0] = 12.8; 
	SensorBreedtes[1] = 8.8; 
	SensorBreedtes[2] = 6.4; 
	SensorBreedtes[3] = 4.4; 
	SensorBreedtes[4] = 3.2;

var SensorHoogtes = new MakeArray(6);
	SensorHoogtes[0] = 9.525;
	SensorHoogtes[1] = 6.6;
	SensorHoogtes[2] = 4.8;
	SensorHoogtes[3] = 3.6;
	SensorHoogtes[4] = 2.4;

function compute_it_hoogte(form) {
    var i = 0;

    var result1 = document.hoogte.answer1.selectedIndex;
    var result2 = parseFloat(document.hoogte.objectafstand.value);
    var result3 = parseFloat(document.hoogte.objecthoogte.value);

    if (result1 == 0) {
        alert(Joomla.JText._('MOD_LENS_CALCULATOR_MESSAGE_1'));
    }
    if (isNaN(result2)) {
        alert(Joomla.JText._('MOD_LENS_CALCULATOR_MESSAGE_2'));
        document.hoogte.objectafstand.focus();
    }
    if (isNaN(result3)) {
        alert(Joomla.JText._('MOD_LENS_CALCULATOR_MESSAGE_3H'));
        document.hoogte.objecthoogte.focus();
    }
    // Bereken nu het totaal.
    if (result1 != 0 && !isNaN(result2) && !isNaN(result3)) {
        document.hoogte.output.value = Math.round(result2 * parseFloat(SensorHoogtes[result1 - 1]) / result3 );
        console.log(parseFloat(SensorHoogtes[result1 - 1]));
    } else {
        document.hoogte.output.value = (Joomla.JText._('MOD_LENS_CALCULATOR_NNB'));
    }
}

function compute_it_breedte(form) {
    var i = 0;

    var result1 = document.breedte.answer1.selectedIndex;
    var result2 = parseFloat(document.breedte.objectafstand.value);
    var result3 = parseFloat(document.breedte.objectbreedte.value);

    if (result1 == 0) {
        alert(Joomla.JText._('MOD_LENS_CALCULATOR_MESSAGE_1'));
    }
    if (isNaN(result2)) {
        alert(Joomla.JText._('MOD_LENS_CALCULATOR_MESSAGE_2'));
        document.breedte.objectafstand.focus();
    }
    if (isNaN(result3)) {
        alert(Joomla.JText._('MOD_LENS_CALCULATOR_MESSAGE_3B'));
        document.breedte.objectbreedte.focus();
    }
    // Bereken nu het totaal.
    if (result1 != 0 && !isNaN(result2) && !isNaN(result3)) {
        document.breedte.output.value = Math.round(result2 * parseFloat(SensorBreedtes[result1 - 1]) / result3 );
        console.log(parseFloat(SensorBreedtes[result1 - 1]));
    } else {
        document.breedte.output.value = (Joomla.JText._('MOD_LENS_CALCULATOR_NNB'));
    }
}
