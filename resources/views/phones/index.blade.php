@extends('layouts.app')

@section('content')
    <div class="container">
      <h3>Phone datas</h3>
      @if (count($phones) > 0)
          <ul>
            @foreach ($phones as $phone)
          <li>{{$phone->name}}, {{number_format($phone->price,2)}}</li>
            @endforeach
          </ul>
        <p>{{ $phones->links() }}</p>
          @else
          <p>No data</p>
      @endif
    </div>
@endsection