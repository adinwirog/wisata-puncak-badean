@extends('dashboard.layouts.dashboardmain')

@section('post')active @endsection

@section('title')Post Konten @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Event Post</h1>
</div>

{{-- Tempatnya Alert --}}
<div id="the-flash">
</div>

<div class="table-responsive mt-5">
    <div class="d-flex flex-row-reverse mb-3">
        <a class="btn btn-primary" href="/postcreate" role="button">Buat Event Post Baru</a>   
    </div>
        <table id="data-event" class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Judul</th>
              <th scope="col">Konten</th>
              <th scope="col">Author</th>
              <th scope="col">Tanggal Dibuat</th>
              <th scope="col">Tanggal Diupdate</th>
              <th scope="col">Is Visible</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>

        {{-- {!! $dataTable->table() !!} --}}
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
        <p>Apakah anda yakin ingin menghapus Postingan?<span id="idval"></span> </p>
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

<!-- <script src="/assets/js/dashboard.js"></script> -->


<script>

  const alertPlaceholder = document.getElementById('the-flash');

 
  $(document).ready( function () {
    $("#data-event").DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: {
        url : "{{ route('post.index') }}",
        type: "GET"
      },
      columns: [
          {data: 'id', name: 'id'},
          {data: 'file_name', name: 'file_name'},
          {data: 'title', name: 'title'},
          {data: 'contents', name: 'contents'},
          {data: 'user.name', name: 'user.name'},
          {data: 'created_at', name: 'created_at'},
          {data: 'updated_at', name: 'updated_at'},
          {data: 'is_visible', name: 'is_visible'},
          {data: 'action', name: 'action', 'searchable': false},
      ],
      order: [[6, 'desc']],
      });
  });

//Show modal delete
  $(document).on('click', '.delete', function () {
      dataId = $(this).attr('id');
      $('#idval').text(dataId);
      $('#modal-delete').modal('show');
  });

  $('#tombol-hapus').click(function () {
      $.ajax({
          headers: {
            'X-CSRF-TOKEN': "{{csrf_token()}}",
          },
          url: "post/" + dataId, //eksekusi ajax ke url ini
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
              window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                  $(this).remove(); 
                });
              }, 5000);
              theAlert('Nice, you triggered this alert message!', 'success')
          }
      })
  });

  function theAlert (message, type) {
    const wrapper = document.createElement('div')
    wrapper.innerHTML = [
      `<div class="alert alert-${type} alert-dismissible" role="alert">`,
      `   <div>${message}</div>`,
      '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
      '</div>'
    ].join('')

    alertPlaceholder.append(wrapper)
}


$(document).on('click', '.publish', function () {
      dataId = $(this).attr('id');
      $.ajax({
          headers: {
            'X-CSRF-TOKEN': "{{csrf_token()}}",
          },
          url: "post/" + dataId, //eksekusi ajax ke url ini
          type: 'put',
          // beforeSend: function () {
          //     $('#tombol-hapus').text('Delete'); //set text untuk tombol hapus
          // },
          success: function (data) { //jika sukses
              setTimeout(function () {
                  // $('#modal-delete').modal('hide'); //sembunyikan konfirmasi modal
                  var oTable = $('#data-event').dataTable();
                  oTable.fnDraw(false); //reset datatable
              });
          }
      })
});

$(document).on('click', '.unpublish', function () {
      dataId = $(this).attr('id');
      $.ajax({
          headers: {
            'X-CSRF-TOKEN': "{{csrf_token()}}",
          },
          url: "post/" + dataId, //eksekusi ajax ke url ini
          type: 'put',
          // beforeSend: function () {
          //     $('#tombol-hapus').text('Delete'); //set text untuk tombol hapus
          // },
          success: function (data) { //jika sukses
              setTimeout(function () {
                  // $('#modal-delete').modal('hide'); //sembunyikan konfirmasi modal
                  var oTable = $('#data-event').dataTable();
                  oTable.fnDraw(false); //reset datatable
              });
          }
      })
});


</script>
@endsection