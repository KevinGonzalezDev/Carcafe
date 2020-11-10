addEventListener('DOMContentLoaded', () =>{
    const siguiente = document.getElementById('next-ourteam-slider');
    const atras = document.getElementById('back-ourteam-slider');
    
    const imagen = document.getElementById('img-ourteam-slider');
    const imagenes = ['img/templates/sliders/ourTeam1.jpg', 'img/templates/sliders/ourTeam2.jpg', 'img/templates/sliders/ourTeam3.jpg'];
    
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