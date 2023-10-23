var moving;

function $(id){
    return document.getElementById(id)
}

function right(id_string){

    stopMoving();

    currentpos = $(id_string).style.left
    newpos = parseInt(currentpos) + 1 + "px";
    $(id_string).style.left = newpos;

    moving = setTimeout(function(){ right(id_string) } ,50)
    
}

function left(id_string){

    stopMoving();

    currentpos = $(id_string).style.left
    newpos = (parseInt(currentpos) - 1) + "px";
    $(id_string).style.left = newpos;
    console.log( newpos)

    moving = setTimeout(left ,50, id_string)

}

function fadeOut(id_string){
    if( $(id_string).style.opacity >= 0 ){
        $(id_string).style.opacity = parseFloat($(id_string).style.opacity) - .01;
        setTimeout(fadeOut,10,id_string)

        document.getElementsByTagName('button')[4].disabled = true;

    }else{
        document.getElementsByTagName('button')[4].disabled = false;
    }
}

function fadeIn(id){

}

function stopMoving(){
    clearTimeout(moving);

}