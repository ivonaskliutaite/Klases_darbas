// 1. Naudodamiesi Jquery biblioteka sukurkite funkcionaluma kuris paspaudus ant bet kokio HTML elemento, elemente #kasas
// parasytų koks tai elementas yra (tagName)
$("*", document.body).click(function (event) {
    event.stopPropagation();
    let elementas = $(this).get(0); //duos pirma elementa jquery'je
    $("#kasas").text(elementas.nodeName);
});

//The read-only nodeName property of Node returns the name of the current node as a string. Value.
//An event represents the precise moment when something happens.