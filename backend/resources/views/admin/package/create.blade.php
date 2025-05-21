@extends('admin.layouts.app') @section('title', 'Dashboard') @section('content') <div class="app-wrapper"> @include('admin.layouts.sidebar') <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Add New package</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"> package List </li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <a href="{{ route('package.index') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> View package List </a>
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
                                <div class="card-title">package Information</div>
                            </div>
                            <form method="POST" action="{{ route('package.store') }}" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-6 mt-4">
                                            <label for="package_name" class="form-label">Category Name</label>
                                            <select name="category" class="form-control select2-single">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 mt-4">
                                            <label for="package_name" class="form-label">Package Name</label>
                                            <input id="package_name" type="text" class="form-control" name="package_name" value="{{ old('package_name') }}" required>
                                            @error('package_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="price" class="form-label">Price</label>
                                            <input id="price" type="number" step="0.01" class="form-control" name="price" value="{{ old('price') }}" required>
                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="currency" class="form-label">Currency</label>
                                            <select id="currency" name="currency" class="form-control" required>
                                                <option value="USD" {{ old('currency') == 'USD' ? 'selected' : '' }}>USD</option>
                                                <option value="Taka" {{ old('currency') == 'Taka' ? 'selected' : '' }}>Taka</option>
                                            </select>
                                            @error('currency')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="duration" class="form-label">Duration</label>
                                            <input id="duration" type="text" class="form-control" name="duration" value="{{ old('duration') }}" required>
                                            @error('duration')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="status" class="form-label">Status</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-sm-12 mt-4">
                                            <label for="features" class="form-label">Features</label>
                                            <textarea id="features" name="features" class="form-control ckeditor" required>{{ old('features') }}</textarea>
                                            @error('features')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 mt-4">
                                            <label for="features" class="form-label">Details</label>
                                            <textarea id="description" name="description" class="form-control ckeditor" required>{{ old('description') }}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        
                                    </div>
                                </div>
                                <div class="card-footer">
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