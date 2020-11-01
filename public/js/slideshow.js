addEventListener('DOMContentLoaded', () =>{
    const imagenes = ['img/templates/home/1.jpg', 'img/templates/home/2.jpg', 'img/templates/home/3.jpg'];

    let index = 1;
    let time = 6000;
    const img1 = document.getElementById('img1');
    const img2 = document.getElementById('img2');
    const indicadorContainer = document.getElementById('indicators-container');

    for(let i = 0; i < imagenes.length; i++){
        const span = document.createElement('span')
        span.classList.add('indicator');
        span.id = i;
        indicadorContainer.appendChild(span);
    }

    img1.src = imagenes[0];

    const indicadores = document.getElementsByClassName('indicator');
    indicadores[0].classList.add('indicator-selected');

    const slideshow = () =>{
        img2.src = imagenes[index];

        const actualIndicator = Array.from(indicadores).find(el => el.id == index);
        Array.from(indicadores).forEach(ind => ind.classList.remove('indicator-selected'));
        actualIndicator.classList.add('indicator-selected');

        img2.classList.add('active');
        index++;

        if(index == imagenes.length){
            index = 0;
        }

        setTimeout(() => {
            img1.src = img2.src;
            img2.classList.remove('active');
        }, 1000);
    }


    const slideshowBack = () =>{
        img2.src = imagenes[-index];

        const actualIndicator = Array.from(indicadores).find(el => el.id == index);
        Array.from(indicadores).forEach(ind => ind.classList.remove('indicator-selected'));
        actualIndicator.classList.add('indicator-selected');

        img2.classList.add('active');
        index++;

        if(index == imagenes.length){
            index = 0;
        }

        if(index <= 0){
            index = 0;
        }

        setTimeout(() => {
            img1.src = img2.src;
            img2.classList.remove('active');
        }, 1000);
    }

    
    const back = document.getElementById('left-arrow');
    const next = document.getElementById('right-arrow');

    next.addEventListener('click', slideshow);
   // back.addEventListener('click', slideshowBack);
    
    setInterval(slideshow, time);

});