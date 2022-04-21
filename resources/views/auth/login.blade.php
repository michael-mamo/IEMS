@include('admin.body.header')
@include('admin.body.script')
<body class="hold-transition login-page dark-mode">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index.php" class="h1"><b>IEMS</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{ route('login')}}" method="POST">
            @csrf
          <div class="input-group mb-1">
            <input id = "email" type="email" name = "email" class="form-control"  placeholder="Type your username here">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @error('email')
           <span class = "text-sm text-danger"> {{ $message }}</span>
           @enderror
          <div class="input-group mb-1">
            <input id = "password" type="password" name = "password" class="form-control" placeholder="Type your password here">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @error('password')
          <span class = "text-sm text-danger"> {{ $message }}</span>
          @enderror
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" name = "rememberMe" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name = "btnSignin" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-1">
          <a href="{{route('password.request')}}">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="{{route('register')}}" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  <!-- include general scripts here -->
  @include('admin.body.script')
</body>
<!-- script for validation -->
<script>
  // Displya message when the username field is empty
$('#username').on('change invalid', function() {
    var textfield = $(this).get(0);
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('please enter your username');  
    }
});
</script>
<script type="text/javascript" src="{{asset('backend/js/toastr.js')}}"></script>
	<script>
	@if(Session::has('message'))
	var type = "{{ Session::get('alert-type','info') }}"
	switch(type){
		case 'info':
		toastr.info(" {{ Session::get('message') }} ");
		break;

		case 'success':
		toastr.success(" {{ Session::get('message') }} ");
		break;

		case 'warning':
		toastr.warning(" {{ Session::get('message') }} ");
		break;

		case 'error':
		toastr.error(" {{ Session::get('message') }} ");
		break; 
	}
	@endif 
	</script>
</html>