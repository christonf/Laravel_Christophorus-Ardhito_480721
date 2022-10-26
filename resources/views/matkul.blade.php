@extends('layouts.utsapp')

@section('content')

@foreach($matkul as $data)
    <tr>    
      <th>{{$data->id}}</th>
      <th>{{$data->nama_matkul}}</th>
      <th>{{$data->keminatan}}</th>
      <th>{{$data->alasan}}</th>          
    </tr>
@endforeach

@endsection