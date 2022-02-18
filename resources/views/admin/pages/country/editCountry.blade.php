@extends('./admin/master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tập phim
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Sửa tập phim</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sửa tập phim</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('editEpisode.post') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputName">ID Tập phim</label>
                  <input name="idEpisode" type="text" class="form-control" id="inputName" value="{{ $episode->id }}" readonly>
                </div>
                <div class="form-group">
                  <label for="inputName">Tên Tập phim</label>
                  <input name="nameEpisode" type="text" class="form-control" id="inputName" value="{{ $Episode->name }}">
                </div>
                <div class="form-group">
                  <label for="inputDesc">Mô tả Tập phim</label>
                  <textarea name="descEpisode" type="text" class="form-control" id="inputDesc">{{ $Episode->description }}</textarea>
                </div>
                <div class="form-group">
                  <label for="inputSlug">slug</label>
                  <input name="slugEpisode" type="text" class="form-control" id="inputSlug" value="{{ $Episode->slug }}">
                </div>
                <div class="form-group">
                  <label>Trạng thái</label>
                  <select name="statusEpisode" class="form-control">
                    @if ($Episode->status == 1)
                      <option value="1" selected>Bật</option>
                      <option value="0">Tắt</option>
                    @else
                      <option value="1">Bật</option>
                      <option value="0" selected>Tắt</option>
                    @endif
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
