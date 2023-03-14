<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="{{asset('css/formstyle.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Register</div>
    <div class="content">
      <form action="" method="POST">
        @csrf
        <div class="user-details">
            <div class="input-box">
                <span class="details">Username</span>
                <input type="text" placeholder="Enter your name" name="name" required>
              </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="something@example.com" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your number" name="password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
          
        </div>

               <div class="sub-page">
          <a class="" href="/">Home</a>
          <p>Already Signup? <a href="{{route('login')}}">Login</a></p>
          
        </div>
      </form>
    </div>
  </div>
@include('sweetalert::alert')
</body>
</html>
