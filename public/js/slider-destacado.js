
addEventListener('DOMContentLoaded', () =>{
    const next = document.getElementById('destacado-next-arrow');
    const back = document.getElementById('destacado-back-arrow');

    const grupos = document.getElementsByClassName('group-wrap');

    let counter = 0;

    next.addEventListener('click', siguiente);
    back.addEventListener('click', atras);

    function siguiente(){
        counter++;

        if(counter >= grupos.length){
            counter = grupos.length - 1;
        }

        grupos[counter].classList.add('displayed-flex');

        console.log(counter);

        setTimeout( () => {
            grupos[counter].classList.remove('displayed-flex');
        }, 1000);
    }

    function atras(){
        counter -= 1;

        if(counter <= 0){
            counter = 0;
        }

        grupos[counter].classList.remove('displayed-flex');

        console.log(counter);

    }


})