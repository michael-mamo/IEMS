@extends('admin.adminMaster')

@section('content')
@if(Auth::User()->isactive == '1')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>My Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">My Dashboard</a></li>
            <li class="breadcrumb-item active">My Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{number_format($thisYearTotalIncome, 2)}}<i class="float-right fa fa-money-check-alt"></i></h3>
              <p>Total Income ({{$year}})</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('myIncome.view')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{number_format($thisYearTotalExpense, 2)}}<span class="fas fa-money-check-alt float-right"></span></h3>
              <p>Total Expense ({{$year}})</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('myExpense.view')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner"> 
              <h4>{{number_format($thisYearTotalSaving, 2)}}<span class="text-primary fas fa-piggy-bank float-right"></span></h4>
              <p>Total Savings ({{$year}})</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h4>{{number_format($thisYearSavingCompleted)}}<span class="text-success fas fa-check float-right"></span></h4>
              <p>Saving Plan Completed ({{$year}})</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4>{{isset($topFiveIncomeTypes[0])?$topFiveIncomeTypes[0]:'None So Far'}}<span class="fa fa-wallet float-right"></span></h4>
              <p>Highest Income Type ({{$year}})</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h4>{{isset($topFiveExpenseTypes[0])?$topFiveExpenseTypes[0]:'None So Far'}}<span class="text-danger fa fa-shopping-cart float-right"></span></h4>
              <p>Highest Expense Type ({{$year}})</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <section>
    <div class="row container-fluid">
      <!-- /.col-md-6 -->
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card text-white">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h4 class="card-title">This Year Income and Expense</h4>
              <a href="javascript:void(0);">More</a>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span>Income({{$year}}): {{number_format($thisYearTotalIncome)}} </span>
                <span>Expense({{$year}}): {{number_format($thisYearTotalExpense)}}</span>
              </p>
              @if($thisYearDifference >= 0)
                <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                  <i class="fas fa-arrow-up"></i> {{number_format($thisYearDifference,2)}}%
                </span>
                <span class="text-muted">Income Higher than Expense</span>
              </p>
              @else
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-danger">
                  <i class="fas fa-arrow-down"></i> {{number_format($thisYearDifference,2)}}%
                </span>
                <span class="text-muted">Income Lower than Expense</span>
              </p>
              @endif
            </div>
            <!-- /.d-flex -->

            <div class="position-relative mb-4">
              <canvas id="sales-chart1" height="200"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-green"></i> Income
              </span>

              <span>
                <i class="fas fa-square text-red"></i> Expense
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card text-white">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h4 class="card-title">Last Year Income and Expense</h4>
              <a href="javascript:void(0);">More</a>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span>Income({{$lastYear}}): {{number_format($lastYearTotalIncome)}} </span>
                <span>Expense({{$lastYear}}): {{number_format($lastYearTotalExpense)}}</span>
              </p>
              @if($lastYearDifference >= 0)
                <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                  <i class="fas fa-arrow-up"></i> {{number_format($lastYearDifference,2)}}%
                </span>
                <span class="text-muted">Income Higher than Expense</span>
              </p>
              @else
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-danger">
                  <i class="fas fa-arrow-down"></i> {{number_format($lastYearDifference,2)}}%
                </span>
                <span class="text-muted">Income Lower than Expense</span>
              </p>
              @endif
            </div>
            <!-- /.d-flex -->
            <div class="position-relative mb-4">
              <canvas id="sales-chart2" height="200"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-green"></i> Income
              </span>

              <span>
                <i class="fas fa-square text-red"></i> Expense
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!-- DONUT CHART -->
        <div class="card">
          <div class="card-header">
          <h4 class="card-title">Top 5 Income Categories ({{$year}})</h4>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="donutChart1"></canvas>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!-- DONUT CHART -->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Top 5 Expense Categories ({{$year}})</h4>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="donutChart2"></canvas>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
</div>
<!-- plugin for the charts -->
<script src="{{asset('backend/assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Script file for the charts -->
<script type="text/javascript">
  $(function () {

    'use strict'

    var ticksStyle = {
      fontColor: '#495057',
      fontStyle: 'bold'
    }

    var mode = 'index'
    var intersect = true

    var $salesChart1 = $('#sales-chart1')

    // chart 1
    var salesChart1 = new Chart($salesChart1, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
          {
            backgroundColor: 'green',
            borderColor: 'green',
            data: [@foreach($thisYearIncomeData as $key=>$value)
            {{ $value }},
            @endforeach]
          },
          {
            backgroundColor: 'red',
            borderColor: 'red',
            data: [@foreach($thisYearExpenseData as $key=>$value)
            {{ $value }},
            @endforeach]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,

              // Include a dollar sign in the ticks
              callback: function (value) {
                if (value >= 1000) {
                  value /= 1000
                  value += '  K'
                }

                return value
              }
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })
    // Chart two
    var $salesChart2 = $('#sales-chart2')

    // eslint-disable-next-line no-unused-vars
    var salesChart2 = new Chart($salesChart2, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
          {
            backgroundColor: 'green',
            borderColor: 'green',
            data: [@foreach($lastYearIncomeData as $key=>$value)
            {{ $value }},
            @endforeach]
          },
          {
            backgroundColor: 'red',
            borderColor: 'red',
            data: [@foreach($lastYearExpenseData as $key=>$value)
            {{ $value }},
            @endforeach]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,

              // Include a dollar sign in the ticks
              callback: function (value) {
                if (value >= 1000) {
                  value /= 1000
                  value += '  K'
                }

                return value
              }
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })
    // Donut 1
    var donutChartCanvas1 = $('#donutChart1').get(0).getContext('2d')
    var donutData = {
      labels: [
        @foreach($topFiveIncomeTypes as $key=>$value)
        '{{$value}}',
        @endforeach
      ],
      datasets: [
        {
          data: [@foreach($topFiveIncomeAmounts as $key=>$value)
              '{{$value}}',
              @endforeach],
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', 'White'],
        }
      ]
    }
    var donutOptions = {
      maintainAspectRatio: false,
      responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas1, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  // Donut 2
  var donutChartCanvas2 = $('#donutChart2').get(0).getContext('2d')
    var donutData = {
      labels: [
        @foreach($topFiveExpenseTypes as $key=>$value)
        '{{$value}}',
        @endforeach
      ],
      datasets: [
        {
          data: [@foreach($topFiveExpenseAmounts as $key=>$value)
              '{{$value}}',
              @endforeach],
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', 'White'],
        }
      ]
    }
    var donutOptions = {
      maintainAspectRatio: false,
      responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas2, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
</script>
@else
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Opps Sorry!</h4>
  <p>Unfortunatelly, this user has been restricted from accesing the systen for somereason!! <a class="text-primary" href="{{route('logout')}}">Logout</a></p>
  <hr>
  <p class="mb-0">Please <a class="text-warning" href="">CONTACT ADMIN</a> for support</p>
</div>
@endif
@endsection