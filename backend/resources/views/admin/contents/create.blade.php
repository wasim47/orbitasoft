@extends('admin.layouts.app') @section('title', 'Dashboard') @section('content') <div class="app-wrapper"> @include('admin.layouts.sidebar') <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Add New Menu Content</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"> Menu Content List </li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <a href="{{ route('contents.index') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> View Menu Content List </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">
                <div class="row g-4">
                    <div class="col-md-10 offset-1 mt-5">
                        <div class="card card-primary card-outline mb-4">
                            <div class="card-header">
                                <div class="card-title">Menu Information</div>
                            </div>
                            <form method="POST" action="{{ route('contents.store') }}" class="form-horizontal"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="card-body">
                                    <div class="col-sm-12" style="margin-bottom:10px;">

                                        <div class="form-group row">
                                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="menu">Menu</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="menu_id" class="form-control select2-single">
                                                    <option value="">Select a Menu Item</option>
                                                    @foreach ($adminMenu as $menu)
                                                    <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('menu_id'))
                                            <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                                                {{ $errors->first('menu_id') }}
                                            </label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="margin-bottom:10px;">
                                        <div class="form-group row">
                                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="title">Title <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="title" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            @if ($errors->has('title'))
                                            <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                                                {{ $errors->first('title') }}
                                            </label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12" style="margin-bottom:10px;">
                                        <div class="form-group row">
                                            <label class="control-label col-md-1 col-sm-1 col-xs-12"
                                                for="content">Content </span>
                                            </label>
                                            <div class="col-md-10 col-sm-10 col-xs-12">
                                                <textarea name="content" class="form-control ckeditor"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-1 col-form-label text-md-right">{{ __('Image') }}</label>
                                        <div class="col-md-8">
                                            <input id="image" type="file" class="form-control" name="image">
                                            @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                            @endif
                                            <small class="text-danger">Size should be Width: 640 x Height: 425</small>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script>
    function ajaxSearch(id) {
        var surl = "{{ route('menus.ajaxmenu') }}";
        $.ajax({
            type: "GET",
            url: surl,
            data: {
                'colid': id
            },
            cache: false,
            success: function(response) {
                $('#subparentid').html(response);
            },
            error: function(xhr, status) {
                alert('Unknown error ' + status);
            }
        });
    }
</script>
@endsection