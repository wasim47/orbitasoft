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
            <h3 class="mb-0">Feedback List</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Feedback List
              </li>
            </ol>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-end">
              <a href="javascript:void()" onclick="permissions('feedbacks','1');" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</a>
              <a href="javascript:void()" onclick="permissions('feedbacks','0');" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Disapproved</a>
              <a href="javascript:void()" onclick="deletedata('masterdelete','feedbacks');" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
              <a href="{{ route('feedback.create') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New feedback</a>
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
                        <th width="4%"><input name="checkbox" onclick="checkedAll();" type="checkbox" readonly="readonly" /></th>
                        <th width="20%">Name</th>
                        <th width="20%">designation</th>
                        <th width="20%">Email</th>
                        <th width="15%">Rating</th>
                        <th width="30%">Feedback</th>
                        <th width="10%">Status</th>
                        <th width="20%" align="right">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 0; ?>
                      @foreach($allfeedback as $feedback)
                      <?php $i++;
                      // Display the status with different styles
                      $statusdis = ($feedback->status == 1)
                        ? '<span style="background:#006600; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i class="fa fa-check"></i> </span>'
                        : '<span style="background:#D91021; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i class="fa fa-times"></i> </span>';
                      ?>
                      <tr id="tablerow{{ $feedback->id }}" class="tablerow">
                        <td><input type="checkbox" name="feedback_code[]" id="feedback_code{{ $i }}" value="{{ $feedback->id }}" /></td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->designation }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->rating }}</td>
                        <td>{{ $feedback->feedback }}</td>
                        <td width="10%" align="center">{!! $statusdis !!}</td>
                        <td align="center">
                          <a href="{{ route('feedback.edit', $feedback->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                          <button type="button" class="btn btn-danger btn-sm" onclick="deleteSingle('{{ $feedback->id }}', 'masterdelete', 'feedbacks')"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </form>
              </div>
              <div class="card-footer clearfix">
                {{ $allfeedback->links() }}
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </main>
</div>
@endsection