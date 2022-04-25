
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=email], input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  outline: none;
}
input[type=email]:focus{
  border: 3px solid #ADD8E6;

}
input[type=password]:focus {
  border: 3px solid #ADD8E6;
}
button {
  background-color: #0082ca83;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
   width: 50%;
  border-radius: 10px;
  text-align: center;
}

button:hover {
  opacity: 0.8;
}

fieldset {
  display: block;
  margin-left: 2px;
  margin-right: 2px;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 2px groove (internal value);
}

legend {
  background-color:  #B7B7B7;
  color: white;
  padding: 5px 10px;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;

}

img.avatar {
  width: 80%;
  border-radius: 25%;
}

.container {
  padding: 16px;
  width: 30%;
  margin-left: 35%;
  text-align: center;
}

.invalid-feedback {
    margin-top: 0.25rem;
    font-size: 70%;
    color: #dc3545;
}

span.psw {
    display: block;
    position: relative;
    text-align: center;
}

@media screen and (max-width: 475px) {
  span.psw {
     display: block;
     float: none;
     margin-right: 0%;
  }
  .cancelbtn {
     width: 100%;
  }
  .container {
    padding: 16px;
    width: 85%;
    margin-left: 0%;
}
img.avatar {
    width: 70%;
    border-radius: 25%;
}
.invalid-feedback {
    margin-top: 0.25rem;
    font-size: 60%;
    color: #dc3545;
}

}
</style>
</head>
<body >


<form  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
@csrf



  <div class="container">
  <div class="imgcontainer">
    <img src="https://yt3.ggpht.com/ytc/AKedOLTJqrAATdatWpVRH9sm2rvZV8eJa1X1Mjfeyp9-5g=s900-c-k-c0x00ffffff-no-rj" alt="Avatar" class="avatar">
  </div>
  <h1 class="section-title bold">
      Welcome
  </h1>
  <fieldset>
  <legend>Login</legend>
    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
    placeholder="Email address"
    name="email" value="{{ old('email') }}" required autofocus>

    @if ($errors->has('email'))
    <br>
      <span class="invalid-feedback" role="alert">
      <strong class="bold" style="color:red;border:none;">
{{ $errors->first('email') }}</strong>
      </span>
      <br>
      @endif

    <input id="password" type="password"      placeholder="Password"
    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
      </span>
    @endif
    <button  type="submit">Sign in</button>
    </fieldset>

  </div>
  <div class="container" >
  <span class="psw">Don't have an account? <a class="sign-upx" href="/register">  Sign up here</a></span>

  </div>

</form>

</body>
</html>
