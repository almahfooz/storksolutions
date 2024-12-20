@extends('backend.admin-master')
@section('site-title')
    {{__('Image Gallery')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                @include('backend/partials/message')
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('All items in Image gallery')}}</h4>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @php $a=0; @endphp
                            @foreach($galleries as $key => $slider)

                            <li class="nav-item">
                                <a class="nav-link @if($a == 0) active @endif"  data-toggle="tab" href="#slider_tab_{{$key}}" role="tab" aria-controls="home" aria-selected="true">{{get_language_by_slug($key)}}</a>
                            </li>
                                @php $a++; @endphp
                            @endforeach
                        </ul>
                        <div class="tab-content margin-top-40" id="myTabContent">
                            @php $b=0; @endphp
                            @foreach($galleries as $key => $slider)
                            <div class="tab-pane fade @if($b == 0) show active @endif" id="slider_tab_{{$key}}" role="tabpanel" >
                                <table class="table table-default">
                                    <thead>
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Image')}}</th>
                                    <th>{{__('Title')}}</th>
                                    <th>{{__('Description')}}</th>
                                    <th>{{__('Language')}}</th>
                                    <th>{{__('Action')}}</th>
                                    </thead>
                                    <tbody>
                                    @foreach($slider as $data)
                                        @php $img_url =''; @endphp
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>
                                                @if(file_exists('assets/uploads/gallery-images/gallery-image-'.$data->id.'.'.$data->image))
                                                    <img style="max-width: 80px" src="{{asset('assets/uploads/gallery-images/gallery-image-'.$data->id.'.'.$data->image)}}" alt="{{__($data->name)}}">
                                                    @php $img_url = asset('assets/uploads/gallery-images/gallery-image-'.$data->id.'.'.$data->image) @endphp
                                                @else
                                                    <img style="max-width: 80px" src="{{asset('assets/uploads/no-image.png')}}" alt="no image available">
                                                @endif
                                            </td>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->description}}</td>
                                            <td>{{get_language_by_slug($data->lang)}}</td>
                                            <td>
                                                <a tabindex="0" class="btn btn-lg btn-danger btn-sm mb-3 mr-1"
                                                   role="button"
                                                   data-toggle="popover"
                                                   data-trigger="focus"
                                                   data-html="true"
                                                   title=""
                                                   data-content="
                                               <h6>Are you sure to delete this item from image gallery?</h6>
                                               <form method='post' action='{{route('admin.galleries.delete',$data->id)}}'>
                                               <input type='hidden' name='_token' value='{{csrf_token()}}'>
                                               <br>
                                                <input type='submit' class='btn btn-danger btn-sm' value='Yes,Delete'>
                                                </form>
                                                ">
                                                    <i class="ti-trash"></i>
                                                </a>
                                                <a href="#"
                                                   data-toggle="modal"
                                                   data-target="#header_slider_item_edit_modal"
                                                   class="btn btn-lg btn-primary btn-sm mb-3 mr-1 header_slider_edit_btn"
                                                   data-id="{{$data->id}}"
                                                   data-title="{{$data->title}}"
                                                   data-image="{{$img_url}}"
                                                   data-lang="{{$data->lang}}"
                                                   data-description="{{$data->description}}"
                                                >
                                                    <i class="ti-pencil"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                                @php $b++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('New Gallery Item')}}</h4>
                        <form action="{{route('admin.galleries')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="language"><h6><strong>{{__('Languages')}}</strong></h6></label>
                                <select name="lang" id="language" class="form-control">
                                    @foreach($all_language as $data)
                                    <option value="{{$data->slug}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                                <small>{{__("select language for make this text multilingual")}}</small>
                            </div>
                            <div class="form-group">
                                <label for="title">{{__('Title')}}</label>
                                <input type="text" class="form-control"  id="title"  name="title" placeholder="{{__('Title')}}">
                            </div>
                            <div class="form-group">
                                <label for="description">{{__('Description')}}</label>
                                <textarea class="form-control max-height-150"  id="description"  name="description" placeholder="{{__('Description')}}" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">{{__('Image')}}</label>
                                <input type="file" class="form-control"  id="image"  name="image">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Add  New Item')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="header_slider_item_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Edit Gallery Item')}}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="{{route('admin.galleries.update')}}" id="header_slider_edit_modal_form"  method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="header_slider_id" value="">
                        <div class="form-group">
                            <label for="edit_language"><h6><strong>{{__('Languages')}}</strong></h6></label>
                            <select name="lang" id="edit_language" class="form-control">
                                @foreach($all_language as $data)
                                    <option value="{{$data->slug}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                            <small>{{__("select language for make this text multilingual")}}</small>
                        </div>
                        <div class="form-group">
                            <label for="edit_title">{{__('Title')}}</label>
                            <input type="text" class="form-control"  id="edit_title"  name="title" placeholder="{{__('Title')}}">
                            <small>{{__("{color} color Text {/color}. user this for color text in header title")}}</small>
                        </div>
                        <div class="form-group">
                            <label for="edit_description">{{__('Description')}}</label>
                            <textarea class="form-control max-height-150"  id="edit_description"  name="description" placeholder="{{__('Description')}}" cols="30" rows="10"></textarea>
                        </div>
                        <div class="img-wrapper">
                            <img src="" style="max-width: 100px" id="preview_image" alt="">
                        </div>
                        <div class="form-group">
                            <label for="image">{{__('Image')}}</label>
                            <input type="file" class="form-control"  id="edit_image"  name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                        <button type="submit" class="btn btn-primary">{{__('Save Changes')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script>
        $(document).ready(function () {
            $(document).on('click','.header_slider_edit_btn',function(){
                var el = $(this);
                var id = el.data('id');
                var action = el.data('action');
                var image = el.data('image');
                var form = $('#header_slider_edit_modal_form');
                form.attr('action',action);
                form.find('#header_slider_id').val(id);
                form.find('#edit_title').val(el.data('title'));
                form.find('#edit_description').val(el.data('description'));
                form.find('#preview_image').attr('src',image);
                form.find('#edit_language option[value='+el.data("lang")+']').attr('selected',true);//lang

            });
        });
    </script>
@endsection
