@extends('layout.general')

@section('content')

    <div class="info-home-container">
        <div class="text-info-home-container">
            <h2>{{ __('Qué Hacemos')}}</h2>
            <article>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam beatae distinctio velit, cupiditate exercitationem aut architecto sequi iusto magnam saepe numquam, libero commodi laboriosam illum vel consequuntur assumenda asperiores quam!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe autem natus modi deleniti optio obcaecati debitis vel expedita eos odio temporibus aut repudiandae soluta, illum placeat. Consectetur, fugit quas.</p>
            </article>
        </div>



        <div class="slider-info-home-container">


        <img src="img/icons/green-arrow-left.png" alt="left arrow" id="back-home-slider">

            <div class="img-slider-home-container">
                <img alt="wrap image" id="img-home-slider">
            </div>

        <img src="img/icons/green-arrow-right.png" alt="right arrow" id="next-home-slider">


        </div>



        <div class="producto-destacado-container">

            <h2 id="producto-destacado-title">Productos Destacados</h2>

            <div class="producto-destacado-main-media-container">

                <img src="img/icons/green-arrow-left.png" alt="left green arrow" id="destacado-back-arrow">

                <div class="wraps-destacado-container">


                    <div class="group-wrap">

                        <div class="wrap">
                            <div class="img-circular-mask">
                                <img src="img/destacado/1.jpg" alt="producto destacado">
                            </div>

                            <div class="destacado-info">
                                <h2>Video</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam sed, aperiam obcaecati cumque illo qui eum ratione vero tenetur officiis voluptas fugit quas et beatae delectus, doloribus maxime ab magnam quisquam omnis, provident necessitatibus magni iusto nulla? Tenetur ex rerum soluta cum iure corporis repellat aperiam accusantium perferendis! Officia, sed.</p>
                            </div>

                        </div>




                        <div class="wrap">
                            <div class="img-circular-mask">
                                <img src="img/destacado/1.jpg" alt="producto destacado">
                            </div>

                            <div class="destacado-info">
                                <h2>Video</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam sed, aperiam obcaecati cumque illo qui eum ratione vero tenetur officiis voluptas fugit quas et beatae delectus, doloribus maxime ab magnam quisquam omnis, provident necessitatibus magni iusto nulla? Tenetur ex rerum soluta cum iure corporis repellat aperiam accusantium perferendis! Officia, sed.</p>
                            </div>

                        </div>




                        <div class="wrap">
                            <div class="img-circular-mask">
                                <img src="img/destacado/1.jpg" alt="producto destacado">
                            </div>

                            <div class="destacado-info">
                                <h2>Video</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam sed, aperiam obcaecati cumque illo qui eum ratione vero tenetur officiis voluptas fugit quas et beatae delectus, doloribus maxime ab magnam quisquam omnis, provident necessitatibus magni iusto nulla? Tenetur ex rerum soluta cum iure corporis repellat aperiam accusantium perferendis! Officia, sed.</p>
                            </div>

                        </div>


                    </div>






                    <div class="group-wrap">

                        <div class="wrap">
                            <div class="img-circular-mask">
                                <img src="img/destacado/1.jpg" alt="producto destacado">
                            </div>

                            <div class="destacado-info">
                                <h2>Video2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam sed, aperiam obcaecati cumque illo qui eum ratione vero tenetur officiis voluptas fugit quas et beatae delectus, doloribus maxime ab magnam quisquam omnis, provident necessitatibus magni iusto nulla? Tenetur ex rerum soluta cum iure corporis repellat aperiam accusantium perferendis! Officia, sed.</p>
                            </div>

                        </div>




                        <div class="wrap">
                            <div class="img-circular-mask">
                                <img src="img/destacado/1.jpg" alt="producto destacado">
                            </div>

                            <div class="destacado-info">
                                <h2>Video3</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam sed, aperiam obcaecati cumque illo qui eum ratione vero tenetur officiis voluptas fugit quas et beatae delectus, doloribus maxime ab magnam quisquam omnis, provident necessitatibus magni iusto nulla? Tenetur ex rerum soluta cum iure corporis repellat aperiam accusantium perferendis! Officia, sed.</p>
                            </div>

                        </div>




                        <div class="wrap">
                            <div class="img-circular-mask">
                                <img src="img/destacado/1.jpg" alt="producto destacado">
                            </div>

                            <div class="destacado-info">
                                <h2>Video4</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam sed, aperiam obcaecati cumque illo qui eum ratione vero tenetur officiis voluptas fugit quas et beatae delectus, doloribus maxime ab magnam quisquam omnis, provident necessitatibus magni iusto nulla? Tenetur ex rerum soluta cum iure corporis repellat aperiam accusantium perferendis! Officia, sed.</p>
                            </div>

                        </div>


                    </div>


            </div>

            <img src="img/icons/green-arrow-right.png" alt="right green arrow" id="destacado-next-arrow">

        </div>



        <div class="about-us-container">

            <div class="about-us-info">
                <h2>Sobre Nosotros</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam sunt soluta error laudantium harum voluptatibus? Maiores quidem, magni debitis odit illum nesciunt qui nulla illo ex facere ipsam temporibus dignissimos!</p>
            <a href="{{route('about')}}">Conocer más</a>
            </div>

            <div class="img-about-us-mask">
                <img src="img/templates/home/aboutUs.jpg" alt="About us image">
            </div>

            </div>

        </div>
    </div>

@endsection
