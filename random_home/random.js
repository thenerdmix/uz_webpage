window.onload = choosePic;

function choosePic(){
    var r = Math.floor(Math.random() * data.length);
    document.getElementById("immagine").src = data[r].src;
    document.getElementById("descrizione").innerHTML = data[r].caption;
}
