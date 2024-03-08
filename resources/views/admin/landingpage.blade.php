@extends('layout.admin')
@section('content') 
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<style>
    .table-md-6 {
        display: block;
        height: 20rem;
        width: auto;
        overflow-y: scroll;
    }
    @media only screen and (max-width: 600px){
        .table-md {
            display: block;
            height: 10rem;
            width: auto;
            overflow-y: scroll;
        }
    }
</style>
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
                <table class="table table-md-6 table-md">
                    <tr>
                        <th>Thumbnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($header_banner_media as $index => $data)
                    <tr>
                        <td class="w-50 ratio ratio-1x1 bg-dark">
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
                <table class="table table-md-6 table-md">
                    <tr>
                        <th>Thumbnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($logo as $data)
                    <tr>
                        <td class="w-50 ratio ratio-1x1 bg-dark">
                        
                            
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
    <div class="col-md-6">
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
                <table class="table table-md-6">
                    <tr>
                        <th>Thumbnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($about_us_media as $index => $data)
                    <tr>
                        <td class="w-50 ratio ratio-1x1">
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
                    Instagram latest result
                </h5>
                @if(isset($instagram_edit))
                <form action="{{route('admin.landingpage.edit')}}" method="post" class="row">
                <input type="hidden" name="id" value="{{$instagram->id}}">
                @else
                <form action="{{route('admin.landingpage.instagram.add')}}" method="post" class="row">
                @endif
                    @csrf
                    
                    <div class="form-group col-md-12">
                        <label for="type">Link (contoh:https://www.instagram.com/p/C4CwtxFtPRe)</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{(isset($instagram_edit->link)?$instagram_edit->link:'')}}">
                    </div>
                    @if(isset($instagram_edit))
                    <div class="form-group col-6">
                        <a href="{{route('admin.landingpage')}}" class="form-control btn btn-primary">batal</a>
                    </div>
                    <div class="form-group col-6">
                        <input type="hidden" name="save_instagram" value="true">
                        <button type="submit" class="form-control btn btn-primary">simpan</button>
                    </div>
                    @else
                    <div class="form-group col-12">
                        <button type="submit" class="form-control btn btn-primary">add</button>
                    </div>
                    @endif
                </form>
                <table class="table table-md-6">
                    <tr>
                        <th>No</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    @foreach($instagram as $index => $data)
                    <tr>
                        <td>{{($index+1)}}</td>
                        <td>{{$data['link']}}</td>
                        <td>
                        <form action="{{route('admin.landingpage.edit')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="hidden" name="instagram_edit" value="true">
                            <button type="submit"  class="btn btn-warning">edit</button>
                        </form>
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
                    How To Order
                </h5>
                @if(isset($step_edit))
                <form action="{{route('admin.landingpage.edit')}}" method="post" class="row">
                <input type="hidden" name="id" value="{{$step_edit->id}}">
                @else
                <form action="{{route('admin.landingpage.how_to_order.add')}}" method="post" class="row">
                @endif
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="name">Step</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{(isset($step_edit->name)?$step_edit->name:'')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="type">icon</label>
                        <input type="text" name="icon" id="icon" class="form-control" value="{{(isset($step_edit->icon)?$step_edit->icon:'')}}">
                    </div>
                    <div class="form-group">
                        <label for="description2">Description</label>
                        <textarea name="description" id="description2" class="form-control" >{!!(isset($step_edit->description)?$step_edit->description:'')!!}</textarea>
                    </div>
                    @if(isset($step_edit))
                    <div class="form-group col-6">
                        <a href="{{route('admin.landingpage')}}" class="form-control btn btn-primary">batal</a>
                    </div>
                    <div class="form-group col-6">
                        <input type="hidden" name="save_step" value="true">
                        <button type="submit" class="form-control btn btn-primary">simpan</button>
                    </div>
                    @else
                    <div class="form-group col-12 pt-2">
                        <button type="submit" class="form-control btn btn-primary">add</button>
                    </div>
                    @endif
                </form>
                <table class="table table-md-6">
                    <tr>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                    @foreach($order_step as $data)
                    <tr>
                        <td>{{$data['name']}}</td>
                        <td>{{$data['icon']}}</td>
                        <td>
                        <form action="{{route('admin.landingpage.edit')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="hidden" name="step_edit" value="true">
                            <button type="submit"  class="btn btn-warning">edit</button>
                        </form>
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
                    Faq
                </h5>
                @if(isset($faq_edit))
                <form action="{{route('admin.landingpage.edit')}}" method="post" class="row">
                <input type="hidden" name="id" value="{{$faq_edit->id}}">
                @else
                <form action="{{route('admin.landingpage.faq.add')}}" method="post" class="row">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="question">Question</label>
                        <textarea name="question" id="question" class="form-control" >{{(isset($faq_edit->question)?$faq_edit->question:'')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea name="answer" id="answer" class="form-control" >{!!(isset($faq_edit->answer)?$faq_edit->answer:'')!!}</textarea>
                    </div>
                    @if(isset($faq_edit))
                    <div class="form-group col-6">
                        <a href="{{route('admin.landingpage')}}" class="form-control btn btn-primary">batal</a>
                    </div>
                    <div class="form-group col-6">
                        <input type="hidden" name="save_faq" value="true">
                        <button type="submit" class="form-control btn btn-primary">simpan</button>
                    </div>
                    @else
                    <div class="form-group col-12">
                        <button type="submit" class="form-control btn btn-primary">add</button>
                    </div>
                    @endif
                </form>
                <div class="table-md-6">
                @foreach($faq as $index => $data)
                    <p class="d-inline-flex gap-1">
                    <a class="text-dark" data-bs-toggle="collapse" href="#faq_{{$index}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                        {{$data->question}}
                    </a>
                    <form action="{{route('admin.landingpage.edit')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <input type="hidden" name="faq_edit" value="true">
                        <button type="submit"  class="btn btn-warning">edit</button>
                    </form>
                    </p>
                    <div class="collapse" id="faq_{{$index}}">
                        <div class="card card-body">
                        {!!$data->answer!!}
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card m-2">
            <div class="card-body">
                <h5  class="card-title">
                    Location Form
                </h5>
                <form action="{{route('admin.landingpage.location.add')}}" method="post" class="row">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{(isset($location->name)?$location->name:'')}}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" >{{(isset($location->address)?$location->address:'')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="iframe">Embed Google Maps</label>
                        <textarea name="iframe" id="iframe" class="form-control" >{{(isset($location->iframe_maps)?$location->iframe_maps:'')}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="card m-2">
            <div class="card-body">
                <h5  class="card-title">
                    Location Carousel
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
                    <input type="hidden" name="media_type_of" value="location_carousel">
                </form>
                <table class="table table-md-6">
                    <tr>
                        <th>Thumnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($location_carousel as $index => $data)
                    <tr>
                        <td class="w-50 ratio ratio-1x1">
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
                    Client Carousel
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
                    <input type="hidden" name="media_type_of" value="client">
                </form>
                <table class="table table-md-6">
                    <tr>
                        <th>Thumnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($client_carousel as $index => $data)
                    <tr>
                        <td class="w-25">
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
                    Footer Image
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
                    <input type="hidden" name="media_type_of" value="footer_image">
                </form>
                <table class="table">
                    <tr>
                        <th>Thumnail</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($footer_image as $index => $data)
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
                    Link Web Section 1
                </h5>
                <form action="{{route('admin.landingpage.linkweb.add')}}" method="post" class="row" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="file">Icon</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <label for="Link">Link</label>
                        <input type="text" name="link" id="link" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">Submit</button>
                    </div>
                    <input type="hidden" name="media_type_of" value="icon_link_section_1">
                </form>
                <table class="table table-md-6">
                    <tr>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Action</th>

                    </tr>
                    @foreach($link_web_section_1 as $data)
                    <tr>
                        <td class="w-25">
                        
                        
                            
                        <img src="{{asset('/uploads').'/' .$data->media['filename']}}" class="d-block w-100 img-fluid"  alt="swiss"> 
                           
                           
                        </td>
                        <td>{{$data['name']}}</td>
                        <td><a href="{{$data['link']}}">Link {{$data['name']}}</a></td>
                        <td>
                            @php
                            $id = $data['id'];
                            @endphp
                            <a href="{{route('admin.landingpage.linkweb.delete', ['id' => $id])}}" class="badge bg-danger">hapus</a>
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
                    Link Web Section 2
                </h5>
                <form action="{{route('admin.landingpage.linkweb.add')}}" method="post" class="row" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="file">Icon</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <label for="Link">Link</label>
                        <input type="text" name="link" id="link" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">Submit</button>
                    </div>
                    <input type="hidden" name="media_type_of" value="icon_link_section_2">
                </form>
                <table class="table table-md-6">
                    <tr>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Action</th>

                    </tr>
                    @foreach($link_web_section_2 as $data)
                    <tr>
                        <td class="w-25">
                        
                        
                            
                        <img src="{{asset('/uploads').'/' .$data->media['filename']}}" class="d-block w-100 img-fluid"  alt="swiss"> 
                           
                           
                        </td>
                        <td>{{$data['name']}}</td>
                        <td><a href="{{$data['link']}}">Link {{$data['name']}}</a></td>
                        <td>
                            @php
                            $id = $data['id'];
                            @endphp
                            <a href="{{route('admin.landingpage.linkweb.delete', ['id' => $id])}}" class="badge bg-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
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
