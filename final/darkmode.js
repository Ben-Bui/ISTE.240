function darkmode(){
    elements = document.getElementsByTagName("body")

    for( var i = 0; i< elements.length;i++){
        elements[i].style.backgroundColor = "black";
    }
    document.body.style.color='white';

}
function lightmode(){
    elements = document.getElementsByTagName("body")

    for( var i = 0; i< elements.length;i++){
        elements[i].style.backgroundColor = "lightslategray";
    }
    document.body.style.color='black';

}