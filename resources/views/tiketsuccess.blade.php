@extends("layouts.main")

@section('contents')
  <!-- ======= Fasilitas Section ======= -->
  <section id="tiket" class="fasilitas">
  <div class="container mt-5" data-aos="fade-up">

    <div class="section-title">
      <h2>Tiketing</h2>
      <p>Tiket Parkir Berhasil Di-Booking</p>
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

    <div class="row">
        <div class="col text-center">
            <form action="{{ route('display.tiket') }}" method="post" target="_blank">
                @csrf
                <input type="hidden" name="id" value="{{ session()->get('ticket') }}">
                <button type="submit" class="btn btn-success">Cetak / Download Di Sini</button>
            </form>
        </div>
    </div>

  </div>
</section><!-- End Portfolio Section -->

@endsection