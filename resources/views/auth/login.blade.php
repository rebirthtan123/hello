<!doctype html>
<html lang="en">
  <head>
    <title>Restaurant Ordering System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <style>
    html,body {
    min-height: 100%;
    }
    
    body {
      background-image: url(../images/wallpaper.png);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      font-family: "Poppins", sans-serif;
      height: 100vh;
    }
    
    .row{
        background-color: lightblue;
        width: 30%;
        border-width: 10px;
        border-style: solid;
        border-color: wheat;
    }
    
    h4{
        text-align: center;
    }
    
    .form-control{
        margin-left: 3%;
        font-size: 20px;
    }
    
    .btn {
        margin-left: 3%;
    
    }
    
    a {
      color: #92badd;
      display:inline-block;
      text-decoration: none;
      font-weight: 400;
    }
    
    h2 {
      text-align: center;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
      display:inline-block;
      margin: 40px 8px 10px 8px; 
      color: #cccccc;
    }
    
    /* STRUCTURE */
    
    .wrapper {
      display: flex;
      align-items: left;
      flex-direction: column; 
      justify-content: center;
      width: 100%;
      min-height: 100%;
      padding: 20px;
    }
    
    #formContent {
      -webkit-border-radius: 10px 10px 10px 10px;
      border-radius: 10px 10px 10px 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 350px;
      position: relative;
      padding: 0px;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      text-align: center;
    }
    
    #formFooter {
      background-color: #f6f6f6;
      border-top: 1px solid #dce8f1;
      padding: 25px;
      text-align: center;
      -webkit-border-radius: 0 0 10px 10px;
      border-radius: 0 0 10px 10px;
    }
    
    /* TABS */
    
    h2.inactive {
      color: #cccccc;
    }
    
    h2.active {
      color: #0d0d0d;
      border-bottom: 2px solid #5fbae9;
    }
    
    /* FORM TYPOGRAPHY*/
    
    input[type=button], input[type=submit], input[type=reset]  {
      background-color: #56baed;
      border: none;
      color: white;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
      box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      margin: 5px 20px 40px 20px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }
    
    input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
      background-color: #39ace7;
    }
    
    input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
      -moz-transform: scale(0.95);
      -webkit-transform: scale(0.95);
      -o-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
    }
    
    input[type=text], input[type=password] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #f6f6f6;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
    }
    
    input[type=text]:focus , input[type=password]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }
    
    input[type=text]:placeholder , input[type=password]:placeholder {
      color: #cccccc;
    }
    
    /* ANIMATIONS */
    
    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }
    
    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }
      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }
    
    @keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }
      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }
    
    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    
    .fadeIn {
      opacity:0;
      -webkit-animation:fadeIn ease-in 1;
      -moz-animation:fadeIn ease-in 1;
      animation:fadeIn ease-in 1;
    
      -webkit-animation-fill-mode:forwards;
      -moz-animation-fill-mode:forwards;
      animation-fill-mode:forwards;
    
      -webkit-animation-duration:1s;
      -moz-animation-duration:1s;
      animation-duration:1s;
    }
    
    .fadeIn.first {
      -webkit-animation-delay: 0.4s;
      -moz-animation-delay: 0.4s;
      animation-delay: 0.4s;
    }
    
    .fadeIn.second {
      -webkit-animation-delay: 0.6s;
      -moz-animation-delay: 0.6s;
      animation-delay: 0.6s;
    }
    
    .fadeIn.third {
      -webkit-animation-delay: 0.8s;
      -moz-animation-delay: 0.8s;
      animation-delay: 0.8s;
    }
    
    .fadeIn.fourth {
      -webkit-animation-delay: 1s;
      -moz-animation-delay: 1s;
      animation-delay: 1s;
    }
    
    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
      display: block;
      left: 0;
      bottom: -10px;
      width: 0;
      height: 2px;
      background-color: #56baed;
      content: "";
      transition: width 0.2s;
    }
    
    .underlineHover:hover {
      color: #0d0d0d;
    }
    
    .underlineHover:hover:after{
      width: 100%;
    }
    
    
    
    /* OTHERS */
    
    *:focus {
        outline: none;
    } 
    
    #icon {
      width:60%;
    }
    
    * {
      box-sizing: border-box;
    }
    
    </style>



  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In - Staff </h2>
      <!-- Icon -->
      <div class="fadeIn first">
        Welcome
      </div>
  
      <!-- Login Form -->
      <form action="{{ route('auth.check') }}" method="POST">
        @if(Session::get('fail'))
        <div class="alert alert-danger">
        {{ Session::get('fail') }}
        </div>
        @endif
        @csrf

        <div class="form-group">
            <input type="text" id="login"  class="fadeIn second" name="username" placeholder="Enter Username" required>
            <span class="text-danger">@error('username'){{ $message }}           
            @enderror</span>
        </div>

        <div class="form-group">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter Password" required>
            <span class="text-danger">@error('password'){{ $message }}           
                @enderror</span>
        </div>

        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
  
      
      <div id="formFooter">

        <a href="{{ asset('auth/loginAdmin') }}">Login as Admin </a>
        &nbsp &nbsp
        <a href="{{ asset('auth/loginChef') }}">Login as Chef </a>


      </div>
  
    </div>
  </div>


</body>
</html>