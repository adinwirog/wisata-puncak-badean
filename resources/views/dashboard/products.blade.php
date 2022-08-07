@extends('dashboard.layouts.dashboardmain')

@section('product')active @endsection

@section('title')List Produk @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Daftar Konten Produk</h1>
</div>
<div class="table-responsive mt-5">
    <div class="d-flex flex-row-reverse mb-3">
        <a class="btn btn-primary" href="{{ route('products.create') }}" role="button">Tambah Produk Baru</a>
    </div>   
    <div class="table-responsive">
        <table id="data-event" class="table table-striped align-middle table-sm">
          <thead>
            {{-- <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Harga Produk</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Dibuat</th>
              <th scope="col">Diupdate</th>
              <th scope="col">Action</th>
            </tr> --}}
          </thead>
          <tbody>
          </tbody>
        </table>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus Produk <strong><span id="namval"></span></strong> ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="tombol-hapus" id="tombol-hapus">Delete</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
  let tableProduct;
  $(document).ready( function () {
    tableProduct = $("#data-event").DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: {
        url : "{{ route('products.index') }}",
        type: "GET"
      },
      columns: [
          {data: 'id', name: 'id', title: '#'},
          {data: 'file_name', name: 'file_name', title: 'Gambar'},
          {data: 'title', name: 'title', title: 'Nama Produk'},
          {data: 'price', name: 'price', title: 'Harga'},
          {data: 'description', name: 'description', title: 'Deskripsi'},
          {data: 'created_at', name: 'created_at', title: 'Dibuat'},
          {data: 'updated_at', name: 'updated_at', title: 'Diubah'},
          {data: 'action', name: 'action', 'searchable': false, title: 'Action'},
      ],
      // columnDefs:[{
      //   targets: [3],
      //   render: function (data) {
      //     return new Intl.NumberFormat("id-ID", { style: "currency", currency: "IDR" }).format(data);
      //   }
      // }],
      order: [[2, 'asc']],
      });
  });

  $(document).on('click', '.delete', function () {
      dataId = $(this).attr('id');
      data = tableProduct.row( $(this).closest('tr') ).data()
      $('#namval').text(data.title);
      $('#modal-delete').modal('show');
  });

  $('#tombol-hapus').click(function () {
      $.ajax({
          headers: {
            'X-CSRF-TOKEN': "{{csrf_token()}}",
          },
          url: "products/" + dataId, //eksekusi ajax ke url ini
          type: 'delete',
          // beforeSend: function () {
          //     $('#tombol-hapus').text('Delete'); //set text untuk tombol hapus
          // },
          success: function (data) { //jika sukses
              setTimeout(function () {
                  $('#modal-delete').modal('hide'); //sembunyikan konfirmasi modal
                  var oTable = $('#data-event').dataTable();
                  oTable.fnDraw(false); //reset datatable
              });
          }
      })
  });
</script>

@endsection