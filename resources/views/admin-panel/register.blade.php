<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Register </title>

  <!-- Bootstrap -->
  <link href="{{asset("admin-panel/css/bootstrap.min.css")}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="{{asset('admin-panel/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
  <div>
  

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="{{route('admin.store')}}" method="POST">
            @csrf
            <h1>Register Form</h1>
            <div>
              <input type="text" class="form-control" name="name" placeholder="name" required="" />
            </div>
            <div>
              <input type="text" class="form-control" name="email" placeholder="email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Password" required="" />
            </div>
            <button class="btn btn-primary" type="submit">Register</button>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already Have an account?
                <a href="{{route('login')}}" class="to_register"> Login </a>
              </p>

              <div class="clearfix"></div>
              <br />
            </div>
          </form>
        </section>
      </div>


    </div>
  </div>
  
</body>

</html>