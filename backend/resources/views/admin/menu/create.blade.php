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
                                <div class="card-title">Menu Information</div>
                            </div>
                            <form method="POST" action="{{ route('menu.store') }}" class="form-horizontal form-label-left">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 mt-4">
                                            <label for="title">Menu Name <span class="required">*</span></label>
                                            <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="parent_id">Parent Menu <span class="required">*</span></label>
                                            <select name="parent_id" id="parent_id" class="form-control" onchange="ajaxSearch(this.value)">
                                                <option value="">Select Parent Menu</option>
                                                @foreach ($parentsMenu as $menu)
                                                <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="sparent_id">Sub Parent Menu <span class="required">*</span></label>
                                            <div id="subparentid">
                                                <select name="sparent_id" id="sparent_id" class="form-control">
                                                    <option value="">Select Sub Parent Menu</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="page_structure">Page Structure <span class="required">*</span></label>
                                            <select name="page_structure" id="page_structure" class="form-control">
                                                <option value="Text">Text</option>
                                                <option value="videos">Video Gallery</option>
                                                <option value="photos">Photo Gallery</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="menu_type">Menu Type <span class="required">*</span></label>
                                            <select name="menu_type" id="menu_type" class="form-control">
                                                <option value="top_menu">Top Menu</option>
                                                <option value="main_menu">Main Menu</option>
                                                <option value="footer_menu">Footer Menu</option>
                                                <option value="others">Others Menu</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6 mt-4">
                                            <label for="sequence">Sequence <span class="required">*</span></label>
                                            <input id="sequence" type="number" name="sequence" class="form-control" value="{{ old('sequence') }}" style="width: 30%;">
                                            @if ($errors->has('sequence'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sequence') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-actions  mt-4">
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