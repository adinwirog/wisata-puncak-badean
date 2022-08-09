@extends('dashboard.layouts.dashboardmain')

@section('verified')active @endsection

@section('title')Verifikasi Tiket @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Verifikasi Tiket</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Ticketting Manajemen</a></li>
    <li class="breadcrumb-item active">Verifikasi Tiket</li>
  </ol>
</nav>

<div class="card">
    <div class="card-body">
        {{-- <div class="d-flex justify-content-evenly mb-3">
            <div class="row g-3">
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Masukkan Kode" aria-label="First name">
              </div>
              <div class="col">
                <button class="btn btn-primary" type="submit">Cek Kode</button>
              </div>
            </div>
        </div>

        <div class="card text-center text-bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title">Kode 1902142141 Ditemukan</h5>
            <p class="card-text">Atas nama:</p>
            <p class="card-text">Atas nama:</p>
            <p class="card-text">Atas nama:</p>
          </div>
        </div> --}}

        <div class="table-responsive">
          <table id="list-verifikasi-tiket" class="table table-striped align-middle table-sm">
          </table>
        </div>

    </div>
</div>

{{-- Modal Detail --}}
<div class="modal fade" tabindex="-1" id="modal-detail">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Pengunjung</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <h1>Wisata Puncak Badean</h1>
          </div>

          <hr />
          
          <form action="{{ route('verifikasitiket.store') }}" method="POST" target="_blank">
          @csrf
          <div class="row">

            <div class="col">
              <div class="row">

                <div class="col-4 float-start">
                  <p>Email Pengunjung</p>
                </div>
                <div class="col-1 p-0 me-0 text-end">
                  <p>:</p>
                </div>
                <div class="col ps-1 text-start">
                  <p><span id="email-1"></span></p>
                  <input type="hidden" name="email" id="email" >
                </div>

              </div>

              <div class="row">

                <div class="col-4 float-start">
                  <p>Tipe Kendaraan</p>
                </div>
                <div class="col-1 p-0 me-0 text-end">
                  <p>:</p>
                </div>
                <div class="col ps-1 text-start">
                  <p><span id="tipe_kendaraan-1"></span></p>
                  <input type="hidden" name="tipe_kendaraan" id="tipe_kendaraan">
                </div>
                
              </div>

              <div class="row">

                <div class="col-4 float-start">
                  <p>Berlaku Sampai</p>
                </div>
                <div class="col-1 p-0 me-0 text-end">
                  <p>:</p>
                </div>
                <div class="col ps-1 text-start">
                  <p><span id="due_date-1"></span></p>
                  <input type="hidden" name="due_date" id="due_date">
                </div>
                
              </div>

              <div class="row">

                <div class="col-4 float-start">
                  <p>Kode Tiket</p>
                </div>
                <div class="col-1 p-0 me-0 text-end">
                  <p>:</p>
                </div>
                <div class="col ps-1 text-start">
                  <p><span id="unique_string-1"></span></p>
                  <input type="hidden" name="unique_string" id="unique_string">
                </div>

              </div>
            
            </div>
            
          </div>

          <hr />

          <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
              <strong>fkjhsfopshfspfh</strong>
            </div>
            <div class="col-4"></div>
          </div>

          <hr />

          <div class="row">
            <div class="col"></div>
            <div class="col-8 text-end">
              <h4><strong>Total : Rp. <span id="harga_tiket-1"></span></strong></h4>
              <input type="hidden" name="harga_tiket" id="harga_tiket">
            </div>
          </div>

        
          <div class="row">
            <div class="col"></div>
            <div class="col-8 text-end">
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" id="bayar" name="bayar" aria-describedby="emailHelp" placeholder="Masukkan Pembayaran...">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col"></div>
            <div class="col-8 text-end">
              <h4> <strong>Kembalian : Rp. <span id="kembalian-1"></span></strong> </h4>
            </div>
          </div>
          {{-- <input type="hidden" name="id" value=""> --}}
          <input type="hidden" name="kembalian" value="" id="kembalian">

        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script>
  let tableListTiketBaru;
    $(document).ready( function() {
        tableListTiketBaru = $("#list-verifikasi-tiket").DataTable({
            // paging: false,
            ordering: false,
            info: false,
            pageLength : 1,
            lengthMenu: [1, 10, 20],
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url : "{{ route('verifikasitiket.index') }}",
                type: "GET"
            },
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Masukkan Kode Di sini"
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', title: '', "searchable": false, 'orderable': false,},
                {data: 'action', title: '', "searchable": false},
                // {data: 'visitor.email', title: 'Atas Email', "searchable": false},
                {data: 'tiket.unique_string', name: 'tiket.unique_string', title: 'Kode Unik'},
                {data: 'tiket.tipe_tiket.tipe_kendaraan', title: 'Tipe Kendaraan', "searchable": false},
                {data: 'tiket.tipe_tiket.harga_tiket', title: 'Harga Tiket', "searchable": false},
                {data: 'book_date', title: 'Tanggal Kadaluarsa', "searchable": false},
            ],
            order: [[2, 'asc']],
        });

        $('div.dataTables_filter input', tableListTiketBaru.table().container()).focus();

        $(document).on('click', '.detail', function () {
          dataId = $(this).attr('id');
          $.ajax({
            headers: {
            'X-CSRF-TOKEN': "{{csrf_token()}}",
            },
            url: "verifikasitiket/" + dataId,
            type: "GET",
            success: function (response) {
              $('#email-1').text(response.visitor.email);
              $('#email').val(response.visitor.email);
              $('#tipe_kendaraan-1').text(response.tiket.tipe_tiket.tipe_kendaraan);
              $('#tipe_kendaraan').val(response.tiket.tipe_tiket.tipe_kendaraan);
              $('#due_date-1').text(response.created_at);
              $('#due_date').val(response.created_at);
              $('#unique_string-1').text(response.tiket.unique_string);
              $('#unique_string').val(response.created_at);
              $('#harga_tiket-1').text(response.tiket.tipe_tiket.harga_tiket);
              $('#harga_tiket').val(response.tiket.tipe_tiket.harga_tiket);
              $('#modal-detail').modal('show');
            }
          })
          
        });


        $('#bayar').keyup(function() {
          let valBayar = $(this).val();
          let valHarga = $('#harga_tiket').val()
          $('#kembalian-1').text(valBayar-valHarga);
          $('#kembalian').val(valBayar-valHarga);
        });


    });
</script>
@endsection