@extends('layout.admin')
@section('content') 
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<div class="row m-2">
    <div class="col-md-6">
    <div class="card m-2">
            <div class="card-body">
                <h5  class="card-title">
                    Header Banner
                </h5>
                <form action="{{route('admin.landingpage.media_upload')}}" method="post" class="row" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col">
                        <label for="file">File</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">upload</button>
                    </div>
                    <input type="hidden" name="media_type_of" value="header_banner">
                </form>
                <table class="table">
                    <tr>
                        <th>Thumnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($header_banner_media as $index => $data)
                    <tr>
                        <td class="w-auto ratio ratio-1x1">
                        @if($data['type'] == 'video')

                            <video id="video1" class="d-block w-100 csabout" controls autoplay muted> 
                                    <source src="{{asset('/uploads').'/' .$data['filename']}}" type="video/mp4"> 
                                    Your browser does not support the video tag.
                            </video>
                       
                            @else
                        
                            
                                <img src="{{asset('/uploads').'/' .$data['filename']}}" class="d-block w-100 img-fluid"  alt="swiss"> 
                           
                            @endif
                        </td>
                        <td>{{$data['filename']}}</td>
                        <td>
                            @php
                            $id = $data['id'];
                            @endphp
                            <a href="{{route('admin.landingpage.media.delete', ['id' => $id])}}" class="badge bg-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="card m-2">
            <div class="card-body">
                <h5  class="card-title">
                    Logo
                </h5>
                <form action="{{route('admin.landingpage.media_upload')}}" method="post" class="row" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col">
                        <label for="file">File</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">upload</button>
                    </div>
                    <input type="hidden" name="media_type_of" value="logo">
                </form>
                <table class="table">
                    <tr>
                        <th>Thumnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($logo as $data)
                    <tr>
                        <td class="w-auto">
                        
                            
                                <img src="{{asset('/uploads').'/' .$data['filename']}}" class="d-block w-100 img-fluid"  alt="swiss"> 
                           
        
                        </td>
                        <td>{{$data['filename']}}</td>
                        <td>
                            @php
                            $id = $data['id'];
                            @endphp
                            <a href="{{route('admin.landingpage.media.delete', ['id' => $id])}}" class="badge bg-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card m-2">
            <div class="card-body">
                <h5  class="card-title">
                    About Us Form
                </h5>
                <form action="{{route('admin.landingpage.about_us')}}" method="post" class="row">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{$about_us->name}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tagline">Tag Line</label>
                        <input type="text" name="tagline" id="tagline" class="form-control" required value="{{$about_us->tagline}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" >{{$about_us->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card m-2">
            <div class="card-body">
                <h5  class="card-title">
                    About Us File Carousel
                </h5>
                <form action="{{route('admin.landingpage.media_upload')}}" method="post" class="row" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col">
                        <label for="file">File</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">upload</button>
                    </div>
                    <input type="hidden" name="media_type_of" value="carousel_about_us">
                </form>
                <table class="table">
                    <tr>
                        <th>Thumnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($about_us_media as $index => $data)
                    <tr>
                        <td class="w-auto ratio ratio-1x1">
                        @if($data['type'] == 'video')

                            <video id="video1" class="d-block w-100 csabout" controls autoplay muted> 
                                    <source src="{{asset('/uploads').'/' .$data['filename']}}" type="video/mp4"> 
                                    Your browser does not support the video tag.
                            </video>
                       
                            @else
                        
                            
                                <img src="{{asset('/uploads').'/' .$data['filename']}}" class="d-block w-100 img-fluid"  alt="swiss"> 
                           
                            @endif
                        </td>
                        <td>{{$data['filename']}}</td>
                        <td>
                            @php
                            $id = $data['id'];
                            @endphp
                            <a href="{{route('admin.landingpage.media.delete', ['id' => $id])}}" class="badge bg-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card m-2">
            <div class="card-body">
                <h5  class="card-title">
                    How To Order
                </h5>
                <form action="{{route('admin.landingpage.how_to_order.add')}}" method="post" class="row">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="name">Step</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="type">icon</label>
                        <input type="text" name="icon" id="icon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description2">Description</label>
                        <textarea name="description" id="description2" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">add</button>
                    </div>
                </form>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                    @foreach($order_step as $data)
                    <tr>
                        <td>{{$data['name']}}</td>
                        <td>{{$data['icon']}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card m-2">
            <div class="card-body">
                <h5  class="card-title">
                    How To Order
                </h5>
                <form action="" method="post" class="row">
                    @csrf
                    <div class="form-group">
                        <label for="question">Question</label>
                        <textarea name="question" id="question" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea name="answer" id="answer" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">add</button>
                    </div>
                </form>
                <p class="d-inline-flex gap-1">
                <a class="text-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a>
                </p>
                <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
                </div>v
            </div>
        </div>
    </div>

</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ))
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#description2' ))
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#answer' ))
        .catch( error => {
            console.error( error );
        } );
</script>



@endsection
