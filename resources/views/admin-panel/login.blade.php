<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Login Dashboard </title>

  <!-- Bootstrap -->
  <link href="{{asset("admin-panel/css/bootstrap.min.css")}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="{{asset('admin-panel/css/custom.min.css')}}" rel="stylesheet">

  <!-- <style>
  body.login {
    background-color: #2A6F46; /* Change this to your desired background color */
  }
</style> -->

</head>

<body class="login">


  <div class="login_wrapper ">
    <div class="animate form login_form">
      <section class="login_content">
        <form action="{{route('admin.login')}}" method="POST">
          @csrf

          <h1>Login Form</h1>
          @include('error-messages')
          <div>
            <input type="email" class="form-control" name="email" placeholder="email" required />
          </div>
          <div>
            <input type="password" class="form-control" name="password" placeholder="Password" required />
          </div>
          <div>
            <button class="btn btn-primary" type="submit">Log in</button>
            <a class="reset_pass" href="#">Lost your password?</a>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">New to site?
              <a href="{{route('admin.register')}}" class="to_register"> Create Account </a>
            </p>

            <div class="clearfix"></div>
            <br />


          </div>
        </form>
      </section>
    </div>


  </div>

</body>

</html>