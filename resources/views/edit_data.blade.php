@extends('master')

@section('judul_halaman', 'Input Data')

@section('body')
    
    <form action="/update/{{ $data->id }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $data->id }}">
        <div class="form-group row">
            <label for="staticName" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" name="nama" required="required" class="form-control"  id="staticName" placeholder="masukkan nama ..." value="{{$data->nama}}">
            @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama')}}
                </div>
            @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="staticAge" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
            <input type="number" name="umur" required="required" class="form-control"  id="staticAge" placeholder="masukkan umur ..." value="{{$data->umur}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticAge" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki - Laki" {{ $data->jenis_kelamin == "Laki - Laki" ? "checked" : null }}>
                    <label class="form-check-label" for="laki">
                        Laki - Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ $data->jenis_kelamin == "Perempuan" ? "checked" : null }}>
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
                @if($errors->has('jenis_kelamin'))
                    <div class="text-danger">
                        {{ $errors->first('jenis_kelamin')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="staticName" class="col-sm-2 col-form-label">Perusahaan</label>
            <div class="col-sm-10">
            <input type="text" name="perusahaan" required="required" class="form-control"  id="staticName" placeholder="masukkan nama perusahaan ..." value="{{$data->perusahaan}}">
            @if($errors->has('perusahaan'))
                <div class="text-danger">
                    {{ $errors->first('perusahaan')}}
                </div>
            @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="staticAge" class="col-sm-2 col-form-label">Posisi</label>
            <div class="col-sm-10">
                <select class="custom-select" id="validationCustom04" required name="posisi">
                    <option value="{{$data->posisi}}" selected>{{$data->posisi}}</option>
                    <option disabled value="">pilih posisi ...</option>
                    <option value="Frontend Engineer">Frontend Engineer</option>
                    <option value="Backend Engineer">Backend Engineer</option>
                    <option value="IT Support">IT Support</option>
                </select>
                @if($errors->has('posisi'))
                    <div class="text-danger">
                        {{ $errors->first('posisi')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="staticAge" class="col-sm-2 col-form-label">Masa Kerja</label>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <input id="tgl_mulai" placeholder="masukkan tanggal mulai" type="text" class="form-control datepicker" name="tgl_mulai" required value="{{$data->tgl_mulai}}">
                    </div>
                    @if($errors->has('tgl_mulai'))
                        <div class="text-danger">
                            {{ $errors->first('tgl_mulai')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Tanggal Akhir</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <input id="tgl_akhir" placeholder="masukkan tanggal akhir" type="text" class="form-control datepicker" name="tgl_akhir" required value="{{$data->tgl_akhir}}">
                    </div>
                    @if($errors->has('tgl_akhir'))
                        <div class="text-danger">
                            {{ $errors->first('tgl_akhir')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="submit"  class="btn btn-primary" value="Edit Data">
            </div>
        </div>
    </form>
   
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#tgl_mulai").datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                autoclose: true,
                todayHighlight: true,
            });
            $("#tgl_akhir").datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                autoclose: true,
                todayHighlight: true,
            });
            $("#tgl_mulai").on('change',function(e){
                if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
                $("#tgl_akhir").val($("#tgl_mulai").val());
                }
            });
            $("#tgl_akhir").on('change',function(e){
                if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
                $("#tgl_mulai").val($("#tgl_akhir").val());
                }
            });
            
        });
    </script>
@endsection