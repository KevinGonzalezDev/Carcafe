@extends('layout.general')

@section('content')

<div class="main-container">
    
    <div class="slider-info-withTitle-container">

    <h2>{{__('Equipo de calidad')}}</h2>

    <span>

        <img src="img/icons/green-arrow-left.png" alt="left arrow" id="back-ourteam-slider">
    
            <div class="img-slider-home-container">
                <img alt="wrap image" id="img-ourteam-slider">
            </div>
    
        <img src="img/icons/green-arrow-right.png" alt="right arrow" id="next-ourteam-slider">

    </span>
    
    
    </div>
    
</div>

    
@endsection