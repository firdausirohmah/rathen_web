@extends('layout.admin')
@section('content') 

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="{{asset('asset/css/tables.css')}}">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

<script src="{{asset('asset/js/tables.js')}}"></script>
<div class="container-fluid py-4">
    <div class="col-lg-12">
        <div class="card card-tab mb-4 rounded">
            <div class="card-header pb-0 d-flex">
                <h6>Rating View</h6>

            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 display" id="view-rating" style="width:100%">
                        <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama tim</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kesesuaian</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kualitas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fitur</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">waktu produksi</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">pelayanan</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">alasan</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">pesan</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">penilaian</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">created at</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php
                        // Function to generate star HTML based on rating and color
                        function generateStars($rating, $color = 'black') {
                            $stars = '';
                            // Loop to generate filled stars
                            for ($i = 1; $i <= $rating; $i++) {
                                $stars .= '<i class="fas fa-star" style="color: ' . $color . '"></i>'; // Assuming you're using Font Awesome for stars
                            }
                            // Loop to generate empty stars
                            for ($i = $rating + 1; $i <= 5; $i++) {
                                $stars .= '<i class="far fa-star" style="color: ' . $color . '"></i>'; // Assuming you're using Font Awesome for stars
                            }
                            return $stars;
                        }

                        @endphp
                        
                        @foreach($data as $dt)
                        <tr>
                            <td>{{$dt->name}}</td>
                            <td>{{$dt->team_name}}</td>
                            <td>{!! generateStars($dt->kesesuaian, '#f2af13') !!}</td>
                            <td>{!! generateStars($dt->kualitas, '#f2af13') !!}</td>
                            <td>{!! generateStars($dt->fitur, '#f2af13') !!}</td>
                            <td>{!! generateStars($dt->waktu_produksi, '#f2af13') !!}</td>
                            <td>{!! generateStars($dt->pelayanan, '#f2af13') !!}</td>
                            <td>
                                @if(isset($dt->alasan))

                                @foreach(json_decode($dt->alasan) as $index => $alasan)
                                {!!($index+1).' '.$alasan.'<br>'!!}
                                @endforeach
                                @endif
                            </td>
                            <td>{{$dt->pesan}}</td>
                            <td>{{$dt->penilaian}}</td>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#view{{$dt->id_media}}" class=""><img src="{{asset('uploads/'.$dt->media->filename)}}" alt="" class="img-thumbnail"></a>
                            </td>
                            <td>
                                @php
                                $utcTimestamp = $dt->created_at;

                                $dateUtc = new DateTime($utcTimestamp, new DateTimeZone('UTC'));

                                $dateUtc->setTimezone(new DateTimeZone('Asia/Jakarta'));

                                $jakartaTime = $dateUtc->format('Y-m-d / H:i');
                                @endphp
                                {{ $jakartaTime}}  
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($data as $dt)
<!-- Modal -->
<div class="modal fade" id="view{{$dt->id_media}}" tabindex="-1" aria-labelledby="editProductionLabel" aria-hidden="true">
<div class="modal-dialog">
    
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="editProductionLabel">View Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
                  
        <img src="{{asset('uploads/'.$dt->media->filename)}}" alt="" class="img-thumbnail">

        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>
</div>
@endforeach

@endsection