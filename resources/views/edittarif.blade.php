@extends('dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Data Tarif</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tarif') }}">Tarif</a></li>
                    <li class="breadcrumb-item active">Edit tarif</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Isi data - data dibawah ini dengan benar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('updatetarif', $id = $data->id) }}" id="quickForm">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="daya">Daya</label>
                  <input type="text" value="{{ $data->daya }}" name="daya" class="form-control" id="daya" placeholder="Masukkan Daya Listrik" value={{$data->daya}}>
                </div>
                <div class="form-group">
                  <label for="harga">Tarif Per Kwh</label>
                  <input type="text" value="{{ $data->tarifperkwh }}" name="tarifperkwh" class="form-control" id="harga" placeholder="Masukkan Tarif Daya" value={{$data->tarifperkwh}}>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection