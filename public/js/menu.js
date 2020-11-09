

    let count = 0;

    const flechita = document.getElementsByClassName('subMenuOpen');

    for(let i = 0; i < flechita.length; i++){
        flechita[i].addEventListener('click', function(){
            count ++;
            console.log(count);

            if(count == 2 || count == 3){
                count = 0;
            }


            window.addEventListener('click', function(e){

                if(flechita[i].contains(e.target)){
                    //count = 1;
                }else if(document.querySelector('body').contains(e.target)){
                    //count = 0;
                }
            });



            switch(count){
                case 0:
                    ocultar(flechita[i].getAttribute('data-numero'));
                    break;
                case 1:
                    mostrar(flechita[i].getAttribute('data-numero'));
                    break;
            }

        });
    }

function mostrar(numero){
    document.getElementById('sub-menu'+numero).style.display = 'flex';
}

function ocultar(numero){
    document.getElementById('sub-menu'+numero).style.display = 'none';
}