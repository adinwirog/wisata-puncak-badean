@extends('dashboard.layouts.dashboardmain')

@section('ticket')active @endsection

@section('title')Manajemen Tiket @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Manajemen Tiket</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('typeticket.index') }}">Products</a></li>
        <li class="breadcrumb-item active">Tambah Produk</li>
    </ol>
</nav>

<div class="d-flex flex-row justify-content-between mb-3 mt-3">
    <button class="btn btn-primary" id="tambah-tiket-baru">Tambah Tiket Baru</button>
    <a class="btn btn-primary" href="{{ route('typeticket.index') }}" role="button">Daftar List Tiket</a>
</div>

<div class="table-responsive">
    <table id="list-tiket-baru" class="table table-striped align-middle table-sm">
    </table>
</div>

<div class="table-responsive">
    <table id="list-tiket-dibooking" class="table table-striped align-middle table-sm">
    </table>
</div>

<div class="table-responsive">
    <table id="list-tiket-belumdibook" class="table table-striped align-middle table-sm">
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Tiket</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-tambah-tiket" name="form-tambah-tiket" class="form-horizontal">
                <select class="form-select" aria-label="Default select example" name="tipe_tiket_id">
                    <option hidden>Choose Category</option>
                    @foreach ($tipetiket as $item)
                    <option value="{{ $item->id }}">{{ $item->tipe_kendaraan }}</option>
                    @endforeach
                </select>

                <div class="mb-3 mt-3">
                    <label class="form-label" for="typeNumber">Number input</label>
                    <input type="number" id="typeNumber" class="form-control" name="jumlah_tiket" min="1">
                </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="tombol-tambah">Tambah</button>
            </div>
            </form>
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
        tableListTiketBaru = $("#list-tiket-baru").DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url : "{{ route('ticketting.index') }}",
                type: "GET"
            },
            columns: [
                {data: 'id', title: '#'},
                {data: 'unique_string', title: 'Kode Unik'},
                {data: 'tipe_kendaraan', title: 'Tipe Kendaraan'},
                {data: 'harga_tiket', title: 'Harga Tiket'},
                {data: 'created_at', title: 'Dibuat'},
            ],
            order: [[2, 'asc']],
        });
    });

    $('#tambah-tiket-baru').click(function () {
        $('#modal-tambah').modal('show');
    });

    $('#form-tambah-tiket').validate({
        submitHandler: function (form){
            $('#tombol-tambah').html('Sending..');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}",
                },
                data: $('#form-tambah-tiket').serialize(),
                url: "{{ route('ticketting.store') }}",
                type: "POST",
                dataType: "json",
                success: function (data) {
                    $('#form-tambah-tiket').trigger("reset");
                    $('#modal-tambah').modal('hide');
                    let oTable = $('#list-tiket-baru').dataTable(); //inialisasi datatable
                    oTable.fnDraw(false);
                },
                error: function (xhr, error) {
                    $('#form-tambah-tiket').trigger("reset");
                    $('#modal-tambah').modal('hide');
                    alert(xhr.responseText);
                }
            });
        }
    });
</script>
@endsection