@foreach( $voitures as $v)
    <br>
        {{$v->immatriculation}}
    <br>
    {{$v->modele}}
    <br>
    <img src="{{$v->url}}" alt="car">

@endforeach
