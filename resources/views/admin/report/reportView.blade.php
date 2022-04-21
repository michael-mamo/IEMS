@extends('admin.adminMaster')
@section('content')
<body class="hold-transition sidebar-mini dark-mode">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Include the navbar and the sidebar here -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Report</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="adminDashboard.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Report</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Genetal expense widgets -->
                <!-- row -->
                <div class="row text-sm">
                    <div class="col-md-12 col-12 callout callout-info">
                        <h5 class="text-center"><i class="fas fa-info"></i> Select Date and Click Generate Report </h5>
                        <div class="row">
                            <div class="col-6 from-group">
                                <label class="text-center" for="fromDate">From</label>
                                <input type="date" id="fromDate" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label class="text-center" for="toDate">To</label>
                                <input type="date" id="toDate" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-success btn-block btn-lg">Generate Report</button>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-6">
                        <h2>FROM </h2>
                        <button class="btn btn-sm btn-outline-info  disabled"><h4>12-November-2018</h4></button>
                        <h2>TO </h2>
                        <button class="btn btn-sm btn-outline-info  disabled"><h4>12-November-2021</h4></button>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Total Income:</th>
                                    <td>{{number_format($totalIncome, 2)}}</td>
                                </tr>
                                <tr>
                                    <th>Total Expense: </th>
                                    <td>{{number_format($totalExpense, 2)}}</td>
                                </tr>
                                <tr>
                                    <th>Net Income: </th>
                                    <td>{{number_format($netIncome, 2)}}</td>
                                </tr>
                                <tr>
                                    <th>Total Saving:</th>
                                    <td>{{number_format($totalSaving, 2)}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12 text-sm">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">MY INCOME</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- list of registered roles in table -->
                                <table id="myIncome" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Date</th>
                                            <th>Income Type</th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($myIncome as $key=>$income)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$income->date}}</td>
                                            <td>{{$income->incometypeid}}</td>
                                            <td>{{$income->amount}} Birr</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <th colspan="3">Total</th>
                                            <th>120,111</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-12 text-sm">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">MY EXPENSE</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- list of registered roles in table -->
                                <table id="myExpense" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Date</th>
                                            <th>Expense Type</th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/13/14</td>
                                            <td>House Expense</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Total</th>
                                            <th>12,111</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-12 text-sm">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">My Saving</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- list of registered roles in table -->
                                <table id="mySaving" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Saving For</th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>House</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            <th>120,111</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-sm">
                        <div class="card">
                            <div class="card-header text-center">
                                <h3 class="text-center">Saving Withdrawal</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- list of registered roles in table -->
                                <table id="savingWithdrawal" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Withdrawal Date</th>
                                            <th>Withdrawal From</th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <th>12/3/12</th>
                                            <td>House</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Total</th>
                                            <th>120,111</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-sm">
                        <div class="card">
                            <div class="card-header card-header">
                                <h3 class="text-center">Saving Deposit</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- list of registered roles in table -->
                                <table id="savingDeposit" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Withdrawal Date</th>
                                            <th>Deposit to</th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <th>12/3/12</th>
                                            <td>House</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Total</th>
                                            <th>120,111</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-sm">
                        <div class="card">
                            <div class="card-header card-header">
                                <h3 class="text-center">AS OF EXPENSE TYPE</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- list of registered roles in table -->
                                <table id="expenseType" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Expense Type</th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            <th>120,111</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-sm">
                        <div class="card">
                            <div class="card-header card-header">
                                <h3 class="text-center">AS OF INCOME TYPE</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- list of registered roles in table -->
                                <table id="incomeType" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Income Type</th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Salary</td>
                                            <td>12.40 Birr</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            <th>120,111</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <!-- Include the footer here -->
    </div>
    <!-- ./wrapper -->
    <script>
        $(function () {
            $("#myExpense").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "pageLength": 3,
                "paginationButtonCount": 3,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#myExpense_wrapper .col-md-6:eq(0)');
        });
        $(function () {
            $("#myIncome").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "pageLength": 3,
                "paginationButtonCount": 3,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#myIncome_wrapper .col-md-6:eq(0)');
        });
        $(function () {
            $("#mySaving").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "pageLength": 3,
                "paginationButtonCount": 3,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#mySaving_wrapper .col-md-6:eq(0)');
        });
        $(function () {
            $("#expenseType").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "pageLength": 1,
                "pagingType": "numbers",
                "paginationButtonCount": 3,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#expenseType_wrapper .col-md-6:eq(0)');
        });
        $(function () {
            $("#incomeType").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "pageLength": 1,
                "pagingType": "numbers",
                "paginationButtonCount": 3,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#incomeType_wrapper .col-md-6:eq(0)');
        });
        $(function () {
            $("#savingWithdrawal").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "pageLength": 1,
                "pagingType": "numbers",
                "paginationButtonCount": 3,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#savingWithdrawal_wrapper .col-md-6:eq(0)');
        });
        $(function () {
            $("#savingDeposit").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "pageLength": 1,
                "pagingType": "numbers",
                "paginationButtonCount": 3,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#savingDeposit_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>
@endsection