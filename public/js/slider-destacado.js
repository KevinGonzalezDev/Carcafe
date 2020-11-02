
addEventListener('DOMContentLoaded', () =>{
    const next = document.getElementById('destacado-next-arrow');
    const back = document.getElementById('destacado-back-arrow');

    const grupos = document.getElementsByClassName('group-wrap');

    let counter = 0;

    next.addEventListener('click', siguiente);
    back.addEventListener('click', atras);

    grupos[0].classList.add('displayed-flex');

    function siguiente(){
        counter++;

        if(counter >= grupos.length){
            counter = grupos.length - 1;
        }

        elementoAnterior = counter - 1;

        grupos[elementoAnterior].classList.remove('displayed-flex');
        grupos[counter].classList.add('displayed-flex');

        console.log(counter);
;
    }

    function atras(){
        counter -= 1;

        if(counter <= 0){
            counter = 0;
        }

        elementoPosterior = counter + 1;

        grupos[elementoPosterior].classList.remove('displayed-flex');
        grupos[counter].classList.add('displayed-flex');

        console.log(counter);

    }


})