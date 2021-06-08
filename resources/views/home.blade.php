<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


       <link rel="stylesheet" href="{{asset('css/app.css') }}">
       </head>
    <body>
    {{-- HEADER --}}
    @include('partials.header');
<section class="black">
<section class="container">
<div class="card-container">

@foreach ($cards as $card)
                <div class="card">
                    <img src=" {{$card['image'] }}" alt="">
                    <h5 class="titolo"> {{ $card['title'] }}</h5>
                </div>

            @endforeach

        </div>
<div class="button">
LOAD MORE
</div>

</section>



</section>
<section class="blu">

</section>
{{-- FOOTER --}}
    @include('partials.footer');

<!-- JS -->
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

<style>
.black {
    height: 770px;
    background-color: black;
}

.blu {
    background-color: #1C7CEC;
    height: 30px;
}

.button {
    height: 50px;
    width: 180px;
    background-color: #1C7CEC;
    font-weight: 800;
    padding: 15px 35px;
position: relative;
top: 40px;
left: 600px;


}

.card-container {
    display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
padding-top: 100px;

  flex-basis: calc(100% / 6 - 10px);

}
.card {
    width: 180px;
    margin: 20px;
}

</style>
