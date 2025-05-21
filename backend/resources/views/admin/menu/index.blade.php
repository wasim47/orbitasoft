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
            <h3 class="mb-0">Menu List</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              Menu List
              </li>
            </ol>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-end">
              <a href="javascript:void()" onclick="permissions('menus','1');" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</a>
              <a href="javascript:void()" onclick="permissions('menus','0');" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Disapproved</a>
              <a href="javascript:void()" onclick="deletedata('masterdelete','menus');" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
              <a href="{{ route('menu.create') }}" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Banner</a>
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
                        <th width="2%"><input name="checkbox" onclick='checkedAll();' type="checkbox" /></th>
                        <th>Menu Name</th>
                        <th>Menu Type</th>
                        <th>Page Type</th>
                        <th>Sequence</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($adminMenu as $menu)
                    <?php $i++;
                            if($menu->status!="" && $menu->status==1){
                                $statusdis = '<span style="background:#006600; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i class="fa fa-check"></i> </span>';
                            }
                            else{
                                $statusdis = '<span style="background:#D91021; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i class="fa fa-times"></i> </span>';
                            }
                        ?>
                    <tr id="tablerow{{ $menu->id }}">
                        <td><input type="checkbox" name="summe_code[]" value="{{ $menu->id }}" /></td>
                        <td>{{ $menu->title }}</td>
                        <td>{{ $menu->menu_type }}</td>
                        <td>{{ ucfirst($menu->page_structure) }}</td>
                        <td>{{ ucfirst($menu->sequence) }}</td>
                        <th align="center"><?php echo $statusdis; ?></th>
                        <td>
                            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-danger btn-sm" onclick="deleteSingle('{{ $menu->id }}', 'masterdelete', 'menus')"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </form>
              </div> 
              <div class="card-footer clearfix">
                {{ $adminMenu->links() }}
              </div>
            </div> 
            
          </div> 
         
        </div> 
      </div> 
    </div> 
  </main>
</div>
@endsection