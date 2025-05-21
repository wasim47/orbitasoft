@extends('admin.layouts.app') @section('title', 'Dashboard') @section('content') <div class="app-wrapper"> @include('admin.layouts.sidebar') <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Add New Service</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"> Service List </li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <a href="{{ route('service.index') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> View Service List </a>
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
                                <div class="card-title">service Information</div>
                            </div>
                            <form method="POST" action="{{ route('service.update', [$service->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 mt-4">

                                            <div class="form-group row">
                                                <label for="exampleInputEmail1" class="form-label">Category</span></label>
                                                <select name="cat_id" class="form-control select2-single">
                                                    <option value="">Select a Category</option>
                                                    @foreach ($categories as $menu)
                                                    <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('cat_id'))
                                                <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                                                    {{ $errors->first('cat_id') }}
                                                </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Project Name</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ $service->name }}" required>
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Image</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="inputGroupFile02" name="image">
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                <img src="{{ asset('uploads/service/'.$service->image) }}" style="width:150px; height:auto" />
                                            </div>
                                            @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                            @endif
                                            <div id="emailHelp" class="form-text"> Size shluld be - Width: 300px X Height: 300px </div>
                                        </div>

                                        <!-- <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">URL</label>
                                            <input id="url" type="url" class="form-control" name="url" value="{{ $service->url }}">
                                            @if ($errors->has('url'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('url') }}</strong>
                                            </span>
                                            @endif
                                        </div> -->

                                        <div class="col-sm-12 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Project Details</label>
                                            <textarea name="details" class="form-control ckeditor" required>{{ $service->details }}</textarea>
                                            @if ($errors->has('details'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('details') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Meta Details</label>
                                            <input id="meta_details" type="text" class="form-control" name="meta_details" value="{{  $service->meta_details }}" required>
                                            @if ($errors->has('meta_details'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('meta_details') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Meta Keyword</label>
                                            <input id="keywords" type="text" class="form-control" name="keywords" value="{{  $service->keywords }}" required>
                                            @if ($errors->has('keywords'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('keywords') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Sequence</label>
                                            <input id="sequence" type="number" class="form-control" name="sequence" value="{{ $service->sequence }}" required style="width:30%">
                                            @if ($errors->has('sequence'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sequence') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1">Publish</option>
                                                <option value="0">Not Publish</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <input id="stillthumb" type="hidden" class="form-control" name="stillthumb" value="{{ $service->image }}">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div> @endsection