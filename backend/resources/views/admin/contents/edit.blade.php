@extends('admin.layouts.app') @section('title', 'Dashboard') @section('content') <div class="app-wrapper"> @include('admin.layouts.sidebar') <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Add New Menu</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"> Menu List </li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <a href="{{ route('menu.index') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> View Menu List </a>
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
                                <div class="card-title">Link Information</div>
                            </div>
                            <form method="POST" action="{{ route('menu.update', [$menu->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Link Title</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ $menu->name }}" required>
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Logo/Image</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="inputGroupFile02" name="image">
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                <img src="{{ asset('uploads/menu/'.$menu->image) }}" style="width:100px; height:auto" />
                                            </div>
                                            @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                            @endif
                                            <div id="emailHelp" class="form-text"> Size shluld be - Width: 300px X Height: 300px </div>
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">URL</label>
                                            <input id="url" type="url" class="form-control" name="url" value="{{ $menu->url }}">
                                            @if ($errors->has('url'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('url') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        

                                        <div class="col-sm-6 mt-4">
                                            <label for="exampleInputEmail1" class="form-label">Sequence</label>
                                            <input id="sequence" type="number" class="form-control" name="sequence" value="{{ $menu->sequence }}" required style="width:30%">
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
                                    <input id="stillthumb" type="hidden" class="form-control" name="stillthumb" value="{{ $menu->image }}">
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