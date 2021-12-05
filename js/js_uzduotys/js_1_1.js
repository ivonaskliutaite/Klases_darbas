let a = 1;
let tekstas = 'Kintamojo a reiksme: ';
console.log(tekstas + a);

a = 2;
console.log(tekstas + a);

let b = 'Jusu vardas: ';
let c = 'Vardas Pavardenis';
console.log(b + c);

console.log("Sudarykite programą, kuri iš Jūsų gimimo datos (metai, mėnuo, diena) paskutinių skaitmenų sumą ir ją parodykite developer tools konsolėje (pvz., jei gimimo data yra 1999-12-28, tai suma bus lygi 19).")
let metai = 1999;
let menuo = 12;
let diena = 28;
console.log(metai + menuo + diena);

metai = metai %= 10;
console.log(metai);

menuo = menuo %= 10;
console.log(menuo);

diena = diena %= 10;
console.log(diena);

console.log(metai + menuo + diena);

