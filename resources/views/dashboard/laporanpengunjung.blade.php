@extends('dashboard.layouts.dashboardmain')

@section('post')active @endsection

@section('title')Laporan Pengunjung @endsection

@section('dashboardcontents') 

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan Pengunjung</h1>
</div>

<div class="d-flex flex-row mb-3">
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="row" id="jqueryExample">
            <div class="col">
              <input type="text" class="form-control date start" placeholder="Awal Tanggal" name="date_start">
            </div>
            <div class="col">
              <input type="text" class="form-control date end" placeholder="Akhir Tanggal" name="date_end">
            </div>
            <div class="col">
                <button type="button" class="btn btn-outline-primary">Klik</button>
            </div>
            {{-- <div class="col">
                <button type="button" class="btn btn-success">Print Laporan</button>
            </div> --}}
          </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <canvas class="my-4 w-100" id="chart-pengunjung" width="900" height="380"></canvas>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.js" integrity="sha512-17lKwKi7MLRVxOz4ttjSYkwp92tbZNNr2iFyEd22hSZpQr/OnPopmgH8ayN4kkSqHlqMmefHmQU43sjeJDWGKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="\assets\js\datepair.js"></script>
<script src="\assets\js\jquery.datepair.js"></script>
<script>
    $('#jqueryExample .date').datepicker({
        'format': 'yyyy-m-d',
        'autoclose': true
    });

    // initialize datepair
    $('#jqueryExample').datepair();

    let pengunjung = {!! $data !!};
    let labels = {!! $labels !!};

    const data = {
        labels: labels,
        datasets: [{
            label: 'Pengunjung',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: pengunjung,
        }]
    };

    
    const ctx = document.getElementById('chart-pengunjung').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        precision: 0
                    }
                }]
            }
        }
    });

</script>
@endsection