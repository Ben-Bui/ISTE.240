function validate(){
    name = document.getElementById("name").value;
    rating = document.getElementById("rating").value;
    age = parseInt(age)
    
    if(name == ""){
        alert("Please fill in a name");
        return false
    }
    
    if(!Number.isInteger(rating)){
        alert("age must be numeric");
        return false
    }
    return true;
}

function darkmode(){
    elements = document.getElementsByTagName("body")

    for( var i = 0; i< elements.length;i++){
        elements[i].style.backgroundColor = "black";
    }
    document.body.style.color='white';
    elements = document.getElementsByClassName("container")

    for( var i = 0; i< elements.length;i++){
        elements[i].style.backgroundColor = "gray";
    }
    document.body.style.color='white';

}