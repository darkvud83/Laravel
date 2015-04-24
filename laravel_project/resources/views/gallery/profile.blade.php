<h1>{{ $artist->name }}'s Profile</h1>
<hr>


@foreach ($artist->galleries as $gallery)

<h3>{{ $gallery->title }}</h3>

<p>{{ $gallery->pricing }}</p>
@endforeach
