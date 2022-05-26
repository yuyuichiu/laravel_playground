<h1>{{$header}}</h1>

@if(count($listings) == 0)
  <h2>No Listing found</h2>
@endif

@foreach($listings as $listing)
  <h2>
    {{$listing['title']}}
  </h2>
  <p>
    {{$listing['description']}}
  </p>
  <br>
@endforeach