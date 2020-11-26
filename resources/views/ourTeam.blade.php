@extends('layout.general')

@section('content')

<div class="main-container">
    
    <div class="slider-info-withTitle-container">

    <h2>{{__('Equipo de calidad')}}</h2>

    <span>

        <img src="img/icons/green-arrow-left.png" alt="left arrow" id="back-ourteam-slider">
    
            <div class="img-slider-home-container">
                <span class="img-mask-slider-ourteam">
                    <img alt="wrap image" id="img-ourteam-slider">
                </span>
            </div>
    
        <img src="img/icons/green-arrow-right.png" alt="right arrow" id="next-ourteam-slider">

    </span>
    
    
    </div>


    <div class="flex-row-nowrap-space margin-sections">
        <span class="div-row-img-mask">
            <img src="img/templates/ourteam/info.png">
        </span>

        <div class="info-ourteam">
            <h2>Organización de Apoyo<br>al Productor (OAP)</h2>
            
            <div class="flex-row-nowrap sub-info-ourteam">
                <img src="img/icons/check.png" alt="green check image">
                <span>
                    <h2>Conocimiento</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia explicabo ullam beatae a sint sapiente voluptatibus repellendus nam. Id, dignissimos?</p>
                </span>                
            </div>

            <div class="flex-row-nowrap sub-info-ourteam">
                <img src="img/icons/check.png" alt="green check image">
                <span>
                    <h2>Programas</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia explicabo ullam beatae a sint sapiente voluptatibus repellendus nam. Id, dignissimos?</p>
                </span>                
            </div>

            <div class="flex-row-nowrap sub-info-ourteam">
                <img src="img/icons/check.png" alt="green check image">
                <span>
                    <h2>Acompañamiento</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia explicabo ullam beatae a sint sapiente voluptatibus repellendus nam. Id, dignissimos?</p>
                </span>                
            </div>



        </div>
    </div>



    <div class="footer-our-team-container">
        <span class="general-img-mask">
            <img src="img/templates/ourteam/footer.png" alt="footer of our team section">
            <span class="black-filter"></span>
        </span>

        <div class="absolute info-our-team-footer">
            <h2>Soporte Comercial y Financiero</h2>
            <div class="flex-row-nowrap-space">

                <div class="text-block">
                    <h2>Trilladoras</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto odit eius natus quisquam blanditiis incidunt dolore veritatis repellat accusamus? Illum.</p>
                </div>

                <div class="text-block">
                    <h2>Puntos de Compra</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto odit eius natus quisquam blanditiis incidunt dolore veritatis repellat accusamus? Illum.</p>
                </div>

                <div class="text-block">
                    <h2>Soporte Financiero</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto odit eius natus quisquam blanditiis incidunt dolore veritatis repellat accusamus? Illum.</p>
                </div>
                
            </div>
        </div>

    </div>
    
</div>

    
@endsection