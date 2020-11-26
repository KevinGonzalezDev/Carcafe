@extends('layout.general')

@section('content')
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKEgETPo4kJvx2voMi9i60eAzPlzq-LAU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>

<div class="main-container">

    <div class="valores-container">

        <div>
            <span>
                <h2>{{__('Misión')}}</h2>
                <img src="img/templates/about/mision.jpg" alt="mision image">
            </span>
        <p>{{__('Texto-mision')}}</p>
        </div>

        <div>
            <span>
            <h2>{{__('Visión')}}</h2>
                <img src="img/templates/about/vision.jpg" alt="vision image">
            </span>
            <p>{{__('Texto-vision')}}</p>
        </div>

        <div>
            <span>
            <h2>{{__('Nuestros Valores')}}</h2>
                <img src="img/templates/about/valores.jpg" alt="valores image">
            </span>
        <p>{{__('Texto-valores')}}</p>
        </div>
    </div>


    <div class="history-container">
        <div class="history-info-container">
            <h2>{{__('Nuestra Historia')}}</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aperiam aspernatur illo fugiat inventore dolorem sit praesentium adipisci voluptatibus, aliquam delectus, quae sequi vitae asperiores laboriosam maiores consequuntur obcaecati, veritatis itaque ullam. Nesciunt vero, neque assumenda iste beatae porro architecto provident eaque iusto odio, sunt tempora, minima recusandae incidunt aperiam facere corporis debitis magnam repellat? Esse quo harum, vero distinctio, eligendi possimus iusto dolores aperiam, ad incidunt deserunt modi amet accusantium magni nihil tenetur eum labore laboriosam laborum repellendus mollitia. Laboriosam quos temporibus architecto quisquam ullam? Rem possimus molestias asperiores.</p>

            <span>
                <img src="img/icons/black-arrow-left.png" alt="black left arrow"><img src="img/icons/black-arrow-right.png" alt="black right arrow">
            </span>
        </div>

        <div class="time-line-container">
            <span id="full-line"></span>

            <div id="history-block1" class="history-blocks">

                <div>
                    <a href="#"></a>
                    <h2>1998</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatem ipsam libero magni laboriosam amet autem itaque pariatur, blanditiis temporibus!</p>
                </div>

                <div>
                    <a href="#"></a>
                    <h2>2001</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatem ipsam libero magni laboriosam amet autem itaque pariatur, blanditiis temporibus!</p>
                </div>

                <div>
                    <a href="#"></a>
                    <h2>2005</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatem ipsam libero magni laboriosam amet autem itaque pariatur, blanditiis temporibus!</p>
                </div>

                <div>
                    <a href="#"></a>
                    <h2>2010</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatem ipsam libero magni laboriosam amet autem itaque pariatur, blanditiis temporibus!</p>
                </div>

                <div>
                    <a href="#"></a>
                    <h2>2015</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatem ipsam libero magni laboriosam amet autem itaque pariatur, blanditiis temporibus!</p>
                </div>


            </div>
        </div>






        <div class="map-about-container">

            <div id="map"></div>

            <div class="info-map-about-container">
                <h2>¿Dónde Encontrarnos?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dignissimos accusantium atque fuga quod, officiis, recusandae animi tempore, esse harum fugit minus quidem. Explicabo ab quis laborum ipsa, pariatur quaerat.</p>
                <div class="locations-container">

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                    <span>
                        <img src="img/icons/green-location.png" alt="green location image">
                        <span>
                            <h2>Lorem, ipsum dolor.</h2>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                        </span>
                    </span>

                </div>
            </div>
        </div>





        <div class="footer-about-container">

        <h2>{{__('Nuestras gratificaciones')}}</h2>

        <div>
            <span>
                <h2>Recompensa Efectiva</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, odit? Cum eius adipisci molestias praesentium incidunt itaque, ullam ipsum delectus qui voluptatum nemo pariatur libero tempora sequi corporis enim earum velit! Totam a officiis aperiam maiores, assumenda vel, praesentium reprehenderit optio possimus voluptatem harum, consequatur voluptates quidem eligendi! Expedita amet tenetur, eos ut, in aspernatur laudantium dolore aliquid molestias sapiente eaque voluptatibus nobis inventore temporibus impedit magni minus, ducimus laborum est accusamus illum rerum consequuntur ad? Magni doloremque unde dolorem?</p>
            </span>

            <span>
                <h2>Retribución al esfuerzo</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum non modi veniam recusandae odit aliquam facilis ea minus voluptates sed sit, sapiente cupiditate accusamus dicta animi aspernatur, a, porro repudiandae corporis voluptas voluptatibus illo maxime cum. Impedit nihil veritatis magnam consequatur sapiente beatae esse, odio, sequi nemo laboriosam iste inventore commodi. Velit doloribus nam ut! Aspernatur mollitia excepturi itaque quis cum, adipisci odit deserunt repellendus velit iusto laudantium sunt sequi commodi, cumque voluptatem officia. Illum magni dolorum repellendus obcaecati fuga?</p>
            </span>
        </div>

        </div>

    </div>



</div>
<script>
// Initialize and add the map

const markers = [];

function initMap() {

  const blue_dot = "http://maps.google.com/mapfiles/ms/icons/blue-dot.png";
  const red_dot = "http://maps.google.com/mapfiles/ms/icons/red-dot.png";
  const green_dot = "http://maps.google.com/mapfiles/ms/icons/green-dot.png";

  // The location of sale points
  const sale_points = [];
  const santa_marta = { lat: 11.206068, lng: -74.195228 };
  sale_points.push(santa_marta);
  const san_gil = { lat: 6.553854, lng: -73.153399 };
  sale_points.push(san_gil);
  const andes = { lat: 5.659291, lng: -75.878335 };
  sale_points.push(andes);
  const ciudad_bolivar = { lat: 5.847499, lng: -76.014279 };
  sale_points.push(ciudad_bolivar);
  const jardin = { lat: 5.599963, lng: -75.826023 };
  sale_points.push(jardin);
  const pereira = { lat: 4.810281, lng: -75.751351 };
  sale_points.push(pereira);
  const pacho = { lat: 5.132444, lng: -74.157078 };
  sale_points.push(pacho);
  const fresno = { lat: 5.152581, lng: -75.042028 };
  sale_points.push(fresno);
  const popayan = { lat: 2.447003, lng: -76.604487 };
  sale_points.push(popayan);
  const garzon = { lat: 2.196593, lng: -75.628507 };
  sale_points.push(garzon);
  const pitalito = { lat: 1.843199, lng: -76.066309 };
  sale_points.push(pitalito);
  const la_union = { lat: 1.607608, lng: -77.132905 };
  sale_points.push(la_union);
  const taminango = { lat: 1.570711, lng: -77.282840 };
  sale_points.push(taminango);
  const cosaca = { lat: 1.208069, lng: -77.463079 };
  sale_points.push(cosaca);

  // The location of main thresher
  const threshers = [];
  const amaga = { lat: 6.032364, lng: -75.688729 };
  threshers.push(amaga);
  const cartago = { lat: 4.656547, lng: -74.058102 };
  threshers.push(cartago);
  const bogota = { lat: 4.609237, lng: -74.083996 };
  threshers.push(bogota);
  const neiva = { lat: 2.909590, lng: -75.285177 };
  threshers.push(neiva);
  const pasto = { lat: 1.232744, lng: -77.296838 };
  threshers.push(pasto);

  // The location of main office
  const bogotaMO = { lat: 4.656547, lng: -74.058102 };

  // The location of map
  const colombia = { lat: 4.5709, lng: -74.2973 };



  // The map, centered at Colombia
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 5.6,
    center: colombia,
  });

  const marker1 = new google.maps.Marker({
      position: bogotaMO,
      map: map,
    });
    markers.push(marker1);

  for (index = 0; index < sale_points.length; index++) {
    const marker = new google.maps.Marker({
        position: sale_points[index],
        map: map,
        icon: {
          url: blue_dot
        }
      });
      markers.push(marker);
    //console.log(array[index]);
  }

  for (index = 0; index < threshers.length; index++) {
    const marker = new google.maps.Marker({
        position: threshers[index],
        map: map,
        icon: {
          url: green_dot
        }
      });
      markers.push(marker);
    //console.log(array[index]);
  }

    markers[0].setAnimation(google.maps.Animation.BOUNCE);






  // The marker, positioned at Uluru
/*  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
    icon: {
      url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
    }
  });
*/

}
</script>

@endsection
