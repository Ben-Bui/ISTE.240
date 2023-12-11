function darkmode(){
    elements = document.getElementsByTagName("body")

    for( var i = 0; i< elements.length;i++){
        elements[i].style.backgroundColor = "black";
    }
    document.getElementById("ex2instructions").style.color='white';

}