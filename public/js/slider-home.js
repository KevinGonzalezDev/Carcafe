
addEventListener('DOMContentLoaded', () =>{
    const siguiente = document.getElementById('next-home-slider');
    const atras = document.getElementById('back-home-slider');
    
    const imagen = document.getElementById('img-home-slider');
    const imagenes = ['img/templates/home/wrap1.png', 'img/templates/home/wrap2.png'];
    
    let counter = 0;

    imagen.src = imagenes[0];

    siguiente.addEventListener('click', siguientef);
    atras.addEventListener('click', anteriorf);

    function siguientef(){
        counter++;

        if(counter >= imagenes.length){
            counter = imagenes.length - 1;
            imagen.src = imagenes[counter];
        }

        imagen.src = imagenes[counter];

        console.log(counter);
    }

    function anteriorf(){
        counter -= 1;

        imagen.src = imagenes[counter];

        if(counter <= 0){
            counter = 0;
            imagen.src = imagenes[0];
        }

        console.log(counter);
    }

});