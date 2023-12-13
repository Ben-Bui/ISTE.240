<script>
        function validate(){
            name = document.getElementById("name").value;
            age = document.getElementById("age").value;
            age = parseInt(age)
            
            if(name == ""){
                alert("Please fill in a name");
                return false
            }
            
            if(!Number.isInteger(age)){
                alert("age must be numeric");
                return false
            }
            return true;
        }

    </script>

    <form method="post" action="process.php" onsubmit="return validate()">
        Name: <input type="text" name="name" id="name"/> <br/>
        Age: <input type="text" name="age" id="age"/> <br/>
        Favorite Color:<br/>
        <input type="radio" name="favcolor" id="red"/> Red <br/>
        <input type="radio" name="favcolor" id="green"/> Green <br/>
        <input type="radio" name="favcolor" id="blue"/> Blue <br/>

        <input type="submit" value = "submit">