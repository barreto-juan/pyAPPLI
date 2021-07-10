window.onload = function(){
    var txtTitulo = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
    var txt1 = document.getElementById("titulo");
    
    var speed = 100;
    var cont = 0;

    function typeWriter () {
        if(cont < txtTitulo.length){
            txt1.innerHTML += "<b>" + txtTitulo.charAt(cont) + "<b/>";
            cont++;
            setTimeout(typeWriter, speed);
        }else{
            cont = 0;
        }
    }

    typeWriter();
};