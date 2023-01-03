window.onload = function(){
    var a= document.getElementById("div1");
    var b= document.getElementById("div2");
    var c= document.getElementById("div3");
    var d= document.getElementById("div4");
   
    a.style.display="block";
    b.style.display="none";
    c.style.display="none";
    d.style.display="none";


    document.getElementById('Div1').className="active";
    document.getElementById('Div2').className="desactive";
    document.getElementById('Div3').className="desactive";
    //document.getElementById('Div4').className="desactive";
}

function show(param_div_id){
    var a= document.getElementById("div1");
    var b= document.getElementById("div2");
    var c= document.getElementById("div3");
   var d= document.getElementById("div4");
    if(param_div_id==="Div1"){
        a.style.display="block";
        b.style.display="none";
        c.style.display="none";
       d.style.display="none";
        document.getElementById('Div1').className="active";
        document.getElementById('Div2').className="desactive";
        document.getElementById('Div3').className="desactive";
        document.getElementById('Div4').className="desactive";
    }else if(param_div_id=="Div2"){
        a.style.display="none";
        b.style.display="block";
        c.style.display="none";
       d.style.display="none";
        document.getElementById('Div1').className="desactive";
        document.getElementById('Div2').className="active";
        document.getElementById('Div3').className="desactive";
        document.getElementById('Div4').className="desactive";
    }
    else if(param_div_id=="Div3"){
        a.style.display="none";
        b.style.display="none";
        c.style.display="block";
       d.style.display="none";
        document.getElementById('Div1').className="desactive";
        document.getElementById('Div2').className="desactive";
        document.getElementById('Div3').className="active";
        document.getElementById('Div4').className="desactive";
    }
    else if(param_div_id=="Div4"){
        a.style.display="none";
        b.style.display="none";
        c.style.display="none";
       d.style.display="block";
        document.getElementById('Div1').className="desactive";
        document.getElementById('Div2').className="desactive";
        document.getElementById('Div3').className="desactive";
        document.getElementById('Div4').className="active";
    }
}

/*
Este script es una función que permite mostrar y ocultar diferentes elementos HTML 
en la página, en función de la acción del usuario. La función se ejecuta cuando se
carga la página y muestra el elemento con el ID "div1" y oculta los elementos con 
los IDs "div2", "div3" y "div4". También establece la clase "active" para el elemento
con el ID "Div1" y la clase "desactive" para los elementos con los IDs "Div2", "Div3" y "Div4".

La función "show" toma un parámetro llamado "param_div_id" que representa el ID del elemento 
que se desea mostrar. Luego, utiliza la función "getElementById" de JavaScript para obtener una 
referencia a los elementos HTML con los IDs "div1", "div2", "div3" y "div4". Después, dependiendo 
del valor de "param_div_id", se muestra el elemento correspondiente y se ocultan los demás. 
Por último, se establece la clase "active" para el elemento con el ID especificado y la clase "desactive" para los demás elementos.
*/