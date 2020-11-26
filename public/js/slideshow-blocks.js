addEventListener('DOMContentLoaded', () =>{

    //Bloque 1 de página "Nuestro Aporte"

    const imagenesBloque1Ourcontribution = ['img/templates/ourcontribution/bloque1-img1.jpg', 'img/templates/ourcontribution/bloque1-img2.jpg', 'img/templates/ourcontribution/bloque1-img3.jpg'];

    let index = 1;
    let time = 6000;
    const img1Bloque1Ourcontribution = document.getElementById('img1-bloque1');
    const img2Bloque1Ourcontribution = document.getElementById('img1-bloque2');
    const indicatorBloque1Ourcontribution = document.getElementById('indicators-container-block1');

    for(let i = 0; i < imagenesBloque1Ourcontribution.length; i++){
        const span = document.createElement('span');
        span.classList.add('indicator');
        span.id = i;
        indicatorBloque1Ourcontribution.appendChild(span);
    }

    img1Bloque1Ourcontribution.src = imagenesBloque1Ourcontribution[0];

    const indicadores = document.getElementsByClassName('indicator');
    indicadores[0].classList.add('indicator-selected');

    const slideshowBloque1Ourcontribution = function(){
        img2Bloque1Ourcontribution.src = imagenesBloque1Ourcontribution[index];

        const ActualIndicator = Array.from(indicadores).find(el => el.id == index);
        Array.from(indicadores).forEach(ind => ind.classList.remove('indicator-selected'));
        ActualIndicator.classList.add('indicator-selected');

        img2Bloque1Ourcontribution.classList.add('active');
        index++;

        if(index == imagenesBloque1Ourcontribution.length){
            index = 0;
        }

        setTimeout(function(){
            img1Bloque1Ourcontribution.src = img2Bloque1Ourcontribution.src;
            img2Bloque1Ourcontribution.classList.remove('active');
        }, 1000);
    }

    setInterval(slideshowBloque1Ourcontribution, time);

})