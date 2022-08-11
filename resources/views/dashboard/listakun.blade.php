@extends('dashboard.layouts.dashboardmain')

@section('listakun')active @endsection

@section('title')List Akun @endsection

@section('dashboardcontents')

<div class="d-flex flex-row border-bottom pt-3 mb-3">
    <h1 class="h2">List Akun</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">List Akun</li>
    </ol>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="list-akun" class="table table-striped align-middle table-sm">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script>
    let tableListAkun;
    $(document).ready( function() {
        tableListAkun = $("#list-akun").DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url : "{{ route('listakun.index') }}",
                type: "GET"
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', title: '#', "searchable": false, 'orderable': false,},
                {data: 'name', title: 'Nama User'},
                {data: 'email', title: 'Email'},
                {data: 'is_admin', title: 'Status'},
                {data: 'created_at', title: 'Dibuat'},
                {data: 'action', title: 'Action', 'searchable': false, 'orderable': false},
            ],
            order: [[1, 'asc']],
        });
    });
</script>
@endsection