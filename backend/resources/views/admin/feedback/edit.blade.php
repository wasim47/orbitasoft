@extends('admin.layouts.app') @section('title', 'Dashboard') @section('content') <div class="app-wrapper"> @include('admin.layouts.sidebar') <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Add New Feedback</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"> Feedback List </li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <a href="{{ route('feedback.index') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> View Feedback List </a>
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
                                <div class="card-title">feedback Information</div>
                            </div>
                            <form method="POST" action="{{ route('feedback.update', [$feedback->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Name -->
                                        <div class="col-sm-6 mt-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $feedback->name) }}" required />
                                        </div>

                                       
                                        <div class="col-sm-6 mt-4">
                                            <label for="designation" class="form-label">Designation</label>
                                            <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation', $feedback->email) }}" />
                                        </div>


                                        <div class="col-sm-6 mt-4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $feedback->email) }}" />
                                        </div>

                                        <!-- Rating -->
                                        <div class="col-sm-6 mt-4">
                                            <label for="rating" class="form-label">Rating</label>
                                            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" value="{{ old('rating', $feedback->rating) }}" />
                                        </div>

                                        <!-- Feedback -->
                                        <div class="col-sm-12 mt-4">
                                            <label for="feedback" class="form-label">Feedback</label>
                                            <textarea class="form-control" id="feedback" name="feedback" rows="4" required>{{ old('feedback', $feedback->feedback) }}</textarea>
                                        </div>

                                        <!-- Status -->
                                        <div class="col-sm-6 mt-4">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="1" {{ $feedback->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $feedback->status == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="text-right mt-4">
                                        <button type="submit" class="btn btn-success">Update Feedback</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div> @endsection