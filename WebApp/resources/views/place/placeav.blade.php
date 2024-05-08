<!DOCTYPE html>
<html>
<head>
    {{-- <title>Sign up</title> --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_places.css')}}"></head>
    
    <title>Liste des Places</title>
</head>
<body style="background-color: #5c5c5c">
    <div style="position: fixed;top:0%; height :5%;width:100%; background-color: #cdc211"></div>
    <div style="position: fixed;bottom:0%;height: 5%;width:100% ;background-color: #cdc211"></div>
    <div style="position: fixed;bottom:0%; right:0%;height: 100%;width:2.5%;background-color: #cdc211"></div>
    <div style="position: fixed;bottom:0%; left:0%;height: 100%;width:2.5% ;background-color: #cdc211"></div>
    <div style="position: fixed;top: 5%;right:18%;height: 35%;width:2.5%;background-color: #cdc211"></div>
    <div style="position: fixed;bottom: 5%;right:18%;height: 35%;width:2.5%;background-color: #cdc211"></div>
    <div style="position: fixed;top: 5%;right:36%;height: 35%;width:2.5%;background-color: #cdc211"></div>
    <div style="position: fixed;bottom: 5%;right:36%;height: 35%;width:2.5%;background-color: #cdc211"></div>
    <div style="position: fixed;top: 5%;right:54%;height: 35%;width:2.5%;background-color: #cdc211"></div>
    <div style="position: fixed;bottom: 5%;right:54%;height: 35%;width:2.5%;background-color: #cdc211"></div>
    @foreach ($places as $place)
    <div aria-valuenow="P12" class="div1" id="div{{ $place->id }}" style="background-color: {{ $place->disponibilite == 1 ? 'green' : ($place->disponibilite == 0 ? 'red' : 'blue') }}"></div>
    <div class="div2" id="div{{ $place->id }}" style="background-color: {{ $place->disponibilite == 1 ? 'green' : ($place->disponibilite == 0 ? 'red' : 'blue') }}"></div>
    <div class="div3" id="div{{ $place->id }}" style="background-color: {{ $place->disponibilite == 1 ? 'green' : ($place->disponibilite == 0 ? 'red' : 'blue') }}"></div>
    <div class="div4" id="div{{ $place->id }}" style="background-color: {{ $place->disponibilite == 1 ? 'green' : ($place->disponibilite == 0 ? 'red' : 'blue') }}"></div>
    <div class="div5" id="div{{ $place->id }}" style="background-color: {{ $place->disponibilite == 1 ? 'green' : ($place->disponibilite == 0 ? 'red' : 'blue') }}"></div>
    <div class="div6" id="div{{ $place->id }}" style="background-color: {{ $place->disponibilite == 1 ? 'green' : ($place->disponibilite == 0 ? 'red' : 'blue') }}"></div>
    @endforeach
    <div class="p1">P1</div>
    <div class="p2">P2</div>
    <div class="p3">P3</div>
    <div class="p4">P4</div>
    <div class="p5">P5</div>
    <div class="p6">P6</div>
    <div class="div11">
        <div class="green"></div> <div class="av"> &nbsp;&nbsp;Available</div>
        <div class="red"></div> <div class="nav">&nbsp;&nbsp;Not Available</div>
    </div>    
    <a style="position: fixed; left:3%; bottom: 7% ;width: 7%; height: 6%;" href="{{route('utilisateur_login')}}" class="btn btn-danger me-2">Log out</a>

    <script>
        setInterval(function(){
            location.reload();
        }, 2000); //refresh every 30 seconds
        </script>
</body>
</html>