/*
Este script está escrito en JavaScript y tiene como objetivo implementar una funcionalidad de carrito de compras.
La primera línea guarda en la constante Clickbutton una lista de elementos del DOM que tienen la clase 'button'.
*/
const Clickbutton = document.querySelectorAll('.button');
let carrito=[];
//La segunda línea inicializa un array vacío llamado carrito.
Clickbutton.forEach(btn=> {
    //La tercera línea itera sobre cada elemento de la lista Clickbutton y agrega un event listener a cada uno de ellos que ejecuta la función addToCarritoItem cuando se hace click en el elemento.
    btn.addEventListener('click', addToCarritoItem);
})
//La función addToCarritoItem toma como parámetro un evento 'e' y hace lo siguiente:

function addToCarritoItem(e){
    const button= e.target;
    const item = button.closest('.card');
    const itemTitle=item.querySelector('.card-title').textContent;
    const itemPrice = item.querySelector('.precio').textContent;
    const itemImg =item.querySelector('.img-cat').src;
/*
Declara la constante button y le asigna el elemento que disparó el evento (el botón que se hizo click).
Declara la constante item y le asigna el elemento padre más cercano con la clase 'card' del elemento que disparó el evento.
Declara la constante itemTitle y le asigna el contenido del elemento hijo con la clase 'card-title' del elemento item.
Declara la constante itemPrice y le asigna el contenido del elemento hijo con la clase 'precio' del elemento item.
Declara la constante itemImg y le asigna la fuente de la imagen del elemento hijo con la clase 'img-cat' del elemento item.

Luego, se crea un objeto literal llamado newItem con las propiedades 'title', 'precio', 'img' y 'cantidad' y se le asignan los valores de itemTitle, itemPrice, itemImg y 1 respectivamente.
*/
    const newItem ={
        title: itemTitle,
        precio:itemPrice,
        img:itemImg,
        cantidad:1
    }
    addItemCarrito(newItem);
}
//Finalmente, se llama a la función addItemCarrito y se le pasa el objeto newItem como argumento.
//La función addItemCarrito toma como parámetro un objeto llamado newItem y hace lo siguiente:

function addItemCarrito(newItem){
    //Agrega el objeto newItem al array carrito utilizando el método push.
    carrito.push(newItem);
    //Llama a la función renderCarrito.
    renderCarrito();
}
/*
La función renderCarrito hace lo siguiente:

Establece el valor del contenido HTML del elemento tbody en vacío.
Itera sobre cada elemento del array carrito y para cada uno de ellos:
Crea un elemento tr.
Le agrega la clase 'ItemCarrito' al elemento tr.
Declara una constante Content y le asigna una cadena de texto vacía.
*/
function renderCarrito(){
    tbody.innerHTML=''
    carrito.map(item=>{
        const tr=document.createElement('tr')
        tr.classList.add('ItemCarrito')
        const Content= ''
    })
}

/*










