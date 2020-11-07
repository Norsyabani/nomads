@extends('layouts.profile')
    
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <Main style="height: 72vh;">
    <div class="row">
      <div class="col-sm-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{ Auth::user()->username }} Profiles</h6>
          </div>
          <div class="card-body">
            <div class="col">
              @if (Auth::user()->avatar  == 'avatar.png')   
                <img src="{{ url('/backend/img/avatar.png')}}" height="200" class="avatar rounded-circle mx-auto d-block">
              @else
                <img src="{{ asset('/storage/images/'. Auth::user()->avatar) }}" height="200" class="avatar rounded-circle mx-auto d-block">
              @endif
            </div>
            <div class="col-sm-6 col-lg-8">
              <div class="table-responsive">
                <table class="table-borderless mt-4 table-sm table-responsive-sm my-3" width="100%">
                  <tr>
                    <th scope="col">Fullname</th>
                    <td>{{ Auth::user()->name }}</td>
                  </tr>
                  <tr>
                    <th scope="col">Email</th>
                    <td>{{ Auth::user()->email }}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Profile Image</h6>
            <i class="far fa-id-badge"></i>
          </div>
          <div class="card-body">
            <form action="{{ route('upload_avatar_user') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <label for="image">Upload Profile Image</label>
              <label for="fileUpload" class="file-upload btn btn-primary btn-block shadow btn-sm"><i class="fa fa-upload mr-2"></i>Browse for file ...</label>
            <div class="input-group mb-3">
              <input type="file" name="image" class="form-control file-image mt-2" id="fileUpload" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary btn-upload mt-2" type="submit" id="button-addon2">Upload</button>
              </div>
            </div>
            </form>
            <form action="{{ route('remove_avatar_user') }}" method="PUT" class="d-inline">
              @csrf
              @method('delete')
              <button class="btn btn-danger btn-sm btn-block mt-4">
                  <i class="fas fa-trash fa-sm mr-2"></i>Remove Profile Image
              </button>
          </form>
          </div>
        </div>
      </div>
    </div>
</Main>
  <!-- /.container-fluid -->
@endsection