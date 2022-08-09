@extends("layouts.main")

@section('contents')
  <!-- ======= Fasilitas Section ======= -->
  <section id="tiket" class="fasilitas">
  <div class="container mt-5" data-aos="fade-up">

    <div class="section-title">
      <h2>Tiketing</h2>
      <p>Wisata Puncak Badean mempunyai beberapa fasilitas gratis dan berbayar yang dapat digunakan oleh pengunjung</p>
    </div>

    <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="fasilitas-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Gratis</li>
          <li data-filter=".filter-web">Berbayar</li>
        </ul>
      </div>
    </div> -->
    <form action="{{ route('booking-tiket.store') }}" method="POST">
      @csrf
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" data-bv-emailaddress-message="The value is not a valid email address" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    {{-- <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div> --}}

    <div class="form-row">
        <!-- <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
        </div> -->

        <div class="form-group col-md-6">
            <label for="tipe_kendaraan">Jenis Kendaraan</label>
            <select id="tipe_kendaraan" name="tipe_kendaraan" class="form-control" required>
                <option selected disabled value="">Pilih Jenis Kendaraan...</option>
              @foreach ($tipetiket as $item)
                <option value="{{ $item->id }}">{{ $item->tipe_kendaraan }}</option>
              @endforeach
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="datepicker">Tanggal Kadaluarsa Tiket</label>
            <input type="text" name="kadaluarsa" class="form-control" id="datepicker" readonly="">
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</section><!-- End Portfolio Section -->

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script>
  const current = new Date();
  current.setDate(current.getDate() + 1);
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: "yy-mm-dd",
      minDate : 1
    });
    $( "#datepicker" ).datepicker("setDate", current);
  });

  </script>
@endsection