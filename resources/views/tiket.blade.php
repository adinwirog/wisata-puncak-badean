@extends("layouts.main")

@section('contents')
  <!-- ======= Fasilitas Section ======= -->
  <section id="fasilitas" class="fasilitas">
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
    <form>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="form-row">
        <!-- <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
        </div> -->

        <div class="form-group col-md-6">
            <label for="inputState">Jenis Kendaraan</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="inputZip">Jumlah penumpang</label>
            <input type="text" class="form-control" id="inputZip" aria-describedby="penumpangHelp">
            <small id="penumpangHelp" class="form-text text-muted">/Kendaraan</small>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</section><!-- End Portfolio Section -->
@endsection