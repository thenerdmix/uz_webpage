window.onload = choosePic;

function choosePic(){
    var r = Math.floor(Math.random() * data.length);
    document.getElementById("immagine").src = data[r].src;
    document.getElementById("descrizione").innerHTML = data[r].age;
    alert(data[0].name);
    alert(data[0].age);
    alert(data[1].name);
    alert(data[1].age);
    alert(data.length);
}
