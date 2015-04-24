@foreach ($galleries as $gallery) 

<h1>{{ $gallery->title }}</h1> <small>posted by {{ $gallery->artist_id }}</small>
<h2>{{ $gallery->pricing}}</h2>

@endforeach