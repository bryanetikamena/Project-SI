@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Update</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/updatekriteriatanggungjawab/{{ $data_kriteria_tanggung_jawab->id }}">
        @csrf
        <div class="mb-3">
          <p> </p>
          <label for="id_kriteria_tanggung_jawab" class="form-label">Id Kriteria Tanggung Jawab</label>
          <input type="text" name="id_kriteria_tanggung_jawab" class="form-control" id="id_kriteria_tanggung_jawab" value="{{ $data_kriteria_tanggung_jawab->id_kriteria_tanggung_jawab, old('id_kriteria_tanggung_jawab') }}">
        </div>
        <div class="mb-3">
            <p> </p>
            <label for="id_karyawan" class="form-label">Id Karyawan</label>
            <input type="text" name="id_karyawan" class="form-control" id="id_karyawan" value="{{ $data_kriteria_tanggung_jawab->id_karyawan, old('id_karyawan') }}">
        </div>
        <div class="mb-3">
          <label for="id_bobot_kriteria" class="form-label">Id Bobot Kriteria</label>
          <input type="text" name="id_bobot_kriteria" class="form-control" id="id_bobot_kriteria" value="{{ $data_kriteria_tanggung_jawab->id_bobot_kriteria, old('id_bobot_kriteria') }}">
      </div>
      <div class="mb-3">
          <label for="poin_penilaian" class="form-label">Poin Penilaian</label>
          <input type="text" name="poin_penilaian" class="form-control" id="poin_penilaian" value="{{ $data_kriteria_tanggung_jawab->poin_penilaian, old('poin_penilaian') }}">
      </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



@endsection