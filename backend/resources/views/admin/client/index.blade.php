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
            <h3 class="mb-0">Client List</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Client List
              </li>
            </ol>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-end">
              <a href="javascript:void()" onclick="permissions('clients','1');" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</a>
              <a href="javascript:void()" onclick="permissions('clients','0');" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Disapproved</a>
              <a href="javascript:void()" onclick="deletedata('masterdelete','clients');" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
              <a href="{{ route('clients.create') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Client</a>
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
                    <th width="25%">Name</th>
                    <th width="25%">URL</th>
                    <th width="15%">Image</th>
                    <th width="10%">Sequence</th>
                    <th width="10%">Status</th>
                    <th width="20%" align="right">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 0; ?>
                  @foreach($allclient as $client)
                  <?php $i++;

                  if ($client->status != "" && $client->status == 1) {
                    $statusdis = '<span style="background:#006600; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i class="fa fa-check"></i> </span>';
                  } else {
                    $statusdis = '<span style="background:#D91021; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i class="fa fa-times"></i> </span>';
                  }
                  ?>

                  <tr id="tablerow<?php echo $client->id; ?>" class="tablerow">
                    <td><input type="checkbox" name="summe_code[]" id="summe_code<?php echo $i; ?>" value="{{ $client->id }}" /></td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->url }}</td>
                    <td><img src="{{ asset('uploads/client/'.$client->image) }}" style="width:100px; height:auto" /></td>
                    <td>{{ $client->sequence }}</td>
                    <th width="10%" align="center"><?php echo $statusdis; ?></th>
                    <td align="center">
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <button type="button" class="btn btn-danger btn-sm"
                          onclick="deleteSingle('<?php echo $client->id; ?>','masterdelete','clients')"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </form>
              </div> 
              <div class="card-footer clearfix">
               <!--  <ul class="pagination pagination-sm m-0 float-end">
                  <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                  <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                  <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                  <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                  <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                </ul> -->
                {{ $allclient->links() }}
              </div>
            </div> 
            
          </div> 
         
        </div> 
      </div> 
    </div> 
  </main>
</div>
@endsection