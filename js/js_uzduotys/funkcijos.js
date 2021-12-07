//Sukurti funkcijas sudeties, atimties, dalybos ir daugybos funkcijas, kurioms bus perduodami du parametrai a, b ir rezultatas bus gražinamas per funkcijos return'ą.
function sudetis (a, b) {
    return a + b;
}

function atimtis (a,b) {
    return a - b;
}

function daugyba (a,b) {
    return a * b;
}

function dalyba (a,b) {
    return a / b;
}

//Panaudoti funkcijas kai kintamasis a keičiasi a++ žingsniu, sukant ciklą 5 kartus. Atsakyma spausdinti elemente #rezultatai
// Panaudoti dar karta funkcijas (papildant sena koda) kai kintamasis b keičiasi b += 2 žingsniu, sukant ciklą 10 kartų.
function desimt(){
    let result = document.getElementById('rezultatas');
    for (let a = 1; a <= 5; a++) { // kintam. prasideda nuo 1; ciklu skaicius - 5; atsakymas - +1;
        for(let b = 1; b <= 20; b += 2){ // sena cikla: prasideda nuo 1; ciklu skaicius 20, nes jei rasysime 10, bus tik ivykdyta 5 ciklai nes b+2; atsakymas + 2;
            result.innerHTML += 'Skaicius' + a + ' , ' + b + '<br>';
            result.innerHTML += 'Skaiciu ' + a + ' ir ' + b + ' suma = ' + sudetis(a, b) + '<br>';
            result.innerHTML += 'Skaiciu ' + a + ' ir ' + b + ' atimtis = ' + atimtis(a, b) + '<br>';
            result.innerHTML += 'Skaiciu ' + a + ' ir ' + b + ' daugyba = ' + daugyba(a, b) + '<br>';
            result.innerHTML += 'Skaiciu ' + a + ' ir ' + b + ' dalyba = ' + dalyba(a, b) + '<br>';

        }
    }
}


