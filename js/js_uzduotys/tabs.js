let sheets = document.getElementsByClassName('sheet');

function tabai (tabas) {
    for (var i = 0; i<sheets.length; i++) {
        sheets[i].style.display ='none';
    }

    document.getElementById(tabas)
        .style.display = 'block';
}
