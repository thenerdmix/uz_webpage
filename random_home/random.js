window.onload = choosePic;

var myPix = new Array("images/lion.jpg","images/tiger.jpg","images/bear.jpg");

function choosePic(){
    var randomNum = Math.floor(Math.random() * myPix.length);
    document.getElementById("myPicture").src = myPix[randomNum];
    alert(data[0].name);
    alert(data[0].age);
    alert(data[1].name);
    alert(data[1].age);
    alert(data.length);
}
