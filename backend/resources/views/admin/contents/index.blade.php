@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="app-wrapper">
  @include('admin.layouts.sidebar')
  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">Menu Content List</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              Menu Content List
              </li>
            </ol>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-end">
              <a href="javascript:void()" onclick="permissions('contents','1');" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</a>
              <a href="javascript:void()" onclick="permissions('contents','0');" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Disapproved</a>
              <a href="javascript:void()" onclick="deletedata('masterdelete','contents');" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
              <a href="{{ route('contents.create') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Banner</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="app-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4">
              <div class="card-body">
                <form id="form_check">
                  <table id="responsive-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th width="4%"><input name="checkbox" onclick='checkedAll();' type="checkbox" readonly="readonly" /></th>
                        <th>Title</th>
                        <th>Menu Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 0; ?>
                      @foreach($contents as $content)
                      <?php $i++;
                      ?>

                      <tr id="tablerow<?php echo $content->id; ?>" class="tablerow">
                        <td><input type="checkbox" name="summe_code[]" id="summe_code<?php echo $i; ?>" value="{{ $content->id }}" /></td>
                        <td>{{ $content->title }}</td>
                        <td>{{ \App\Models\Menu::where(['id' => $content->menu_id])->pluck('title')->first() }}</td>
                        <td>{{ $content->created_at }}</td>
                        <td>{{ $content->updated_at }}</td>
                        <td align="right">
                          <div style="width:50%; float:left">
                            <a href="{{ route('contents.edit', $content->id) }}" class="btn btn-warning" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-edit"></i></a>
                          </div>
                          <div style="width:50%; float:left">
                            <button type="button" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"
                              onclick="deleteSingle('<?php echo $content->id; ?>','masterdelete','contents')"><i class="fa fa-trash"></i></button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      {{ $contents->links('pagination::bootstrap-4') }}
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="card-footer clearfix">
                {{ $contents->links() }}
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </main>
</div>
@endsection