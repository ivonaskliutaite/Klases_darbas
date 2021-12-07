let a = -5;
let b = 0;
let c = -4;
let d = 4;
let x = '???';
let y = '???';

if (a > b || d < c) {
    windows.alert('Negalima');
}

if (c <= a && a<=d) {
    x = a;} else if
(a <= c && c <= b) {
    x = c;
}

if (a <= d && d <=b){
    y = d;
} else if (c <= b && b <= d){
    y = b;
}

let atsakymas = 'X: ' + x + 'Y: ' + y;
if (atsakymas !== 'X: ??? Y: ???') {
    document.getElementById('ats').innerHTML = atsakymas;
}
