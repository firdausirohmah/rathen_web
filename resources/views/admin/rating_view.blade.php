@extends('layout.admin')
@section('content') 
<table class="table">
    <tr>
        <th>nama</th>
        <th>namn tim</th>
        <th>rating</th>
        <th>pesan</th>
    </tr>
    @foreach($data as $dt)
    <tr>
        <td>{{$dt->name}}</td>
        <td>{{$dt->team_name}}</td>
        <td>{{$dt->rating}}</td>
        <td>{{$dt->pesan}}</td>
    </tr>
    @endforeach
</table>
@endsection