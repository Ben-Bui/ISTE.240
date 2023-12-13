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
