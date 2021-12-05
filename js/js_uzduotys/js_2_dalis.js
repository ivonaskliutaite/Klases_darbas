console.log(" 1. Susikurkite šiuos kintamuosius apie studentą:\n" +
    "    - vardas\n" +
    "    - pavardė\n" +
    "    - kursas\n" +
    "    - kur mokosi\n" +
    "    - pažymių masyvas")

let vardas = 'Tomas';
let pavarde = 'Tomauskas';
let kursas = 4;
let uni = 'KTU';
let pazymiai = [7, 4, 5];


console.log("2. Išveskite visus šiuos duomenis sakinio pavidalu, pvz:\n" +
    "    Tomas Tomauskas mokosi KTU, 4 kurse, jo pažymiai: [7, 4, 5]. ")
console.log(vardas + " " + pavarde + " mokosi " + uni + ", " + kursas + " kurse, jo pazymiai: [" + pazymiai + "].\n");


console.log("3. Išveskite visų kintamųjų apibūdinimus su tipais (naudoti typeof), pvz:\n" +
    "\"vardas yra string\"\n" +
    "\"kursas yra number\"\n" +
    "\"...\"\n")

console.log("Vardas yra: " + typeof vardas + ".");
console.log("Pavarde yra: " + typeof pavarde + ".");
console.log("Kursas yra: " + typeof kursas + ".");
console.log("Universitetas (uni) yra: " + typeof uni + ".");
console.log("Pazymiai yra: " + typeof pazymiai + ".");


console.log("4.Sukurkite studento objektą, naudokite tuos pačius duomenis (vardas, pavarde, ...).");
let studentas =
    {
        vardas: "Tomas",
        pavarde: "Tomauskas",
        kursas: 4,
        uni: "KTU",
        pazymiai: [7, 4, 5]
    };


console.log("5. Sukurkite Objektų masyvą pagal katik sukurto Studento objekto struktura.");
let studentai = [
    {},
    {},
    {},
    {},
    {
        vardas: "Tomas",
        pavarde: "Tomauskas",
        kursas: 4,
        uni: "KTU",
        pazymiai: [7, 4, 5]
    }
]

console.log("\n");
console.log("6. Išveskite penkto objekto duomenis (vienas bendras console.log().");
console.log(studentai[4]);


console.log("7. Išveskite tokį patį informacinį sakinį iš objekto duomenų kaip prieš tai išvedėte iš paprastų kintamųjų " +
    "(\"Tomas Tomauskas mokosi KTU, 4 kurse, jo pažymiai: [7, 4, 5].\").\n" +
    "Išbandykite tiek dot notation, tiek bracket notation traukiant duomenis iš masyvo.");
console.log(studentas.vardas + ' ' + studentas.pavarde + ' ' + 'mokosi ' + studentas.uni + ', ' + studentas.kursas + ' kurse, jo pazymiai: ' + studentas.pazymiai + '.');
console.log(studentas['vardas'] + ' ' + studentas['pavarde'] + ' ' + 'mokosi ' + studentas['uni'] + ', ' + studentas['kursas'] + ' kurse, jo pazymiai: ' + studentas['pazymiai'] + '.' + "\n");

console.log("8. Išveskite visus studento pažymius, esančius objekte. Naudojant for ciklą.\n");

console.log("9. Pakelkite tris pasirinktus pažymius per vieną skaičių. Tačiau atkreipkite dėmesį ar keliamas pažymys gali būti pakeltas (jei dar ne max), jei jis jau ir taip yra 10, tuomet palikite tokį koks yra.");
