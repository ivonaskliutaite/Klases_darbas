let images = document.getElementsByTagName('img');
console.log(images.length);

let elementas = document.getElementById('uuid');
elementas.innerHTML = 'Šiame puslapyje yra ' + images.length + 'paveiksleliai';

for(let i = 0; i < images.length; i += 2) {
    let elem = images[i];
    elem.alt = 'Testas';
}

elementas.style = 'font-size: 24px; background-color: green;  width: 200px; height:200px;'