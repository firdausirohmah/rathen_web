@extends('layout.admin')
@section('content') 
<table class="table">
    <tr>
        <th>nama</th>
        <th>namn tim</th>
        <th>kesesuaian</th>
        <th>kualitas</th>
        <th>fitur</th>
        <th>waktu produksi</th>
        <th>pelayanan</th>
        <th>alasan</th>
        <th>pesan</th>
        <th>penilaian</th>
        <th>image</th>
    </tr>
    @foreach($data as $dt)
    <tr>
        <td>{{$dt->name}}</td>
        <td>{{$dt->team_name}}</td>
        <td>{{$dt->kesesuain}}</td>
        <td>{{$dt->kualitas}}</td>
        <td>{{$dt->fitur}}</td>
        <td>{{$dt->waktu_produksi}}</td>
        <td>{{$dt->pelayanan}}</td>
        <td>
            @if(isset($dt->alasan))

            @foreach(json_decode($dt->alasan) as $index => $alasan)
            {!!($index+1).' '.$alasan.'<br>'!!}
            @endforeach
            @endif
        </td>
        <td>{{$dt->pesan}}</td>
        <td>{{$dt->penilaian}}</td>
        <td><img src="{{asset('uploads/'.$dt->media->filename)}}" alt="" class="img-thumbnail"></td>
    </tr>
    @endforeach
</table>
@endsection