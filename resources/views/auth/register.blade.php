<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;500;600;700&family=Fahkwang:wght@200;300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <style>
    body{
      margin: 0;
      font-family: 'Roboto', sans-serif;
    }
    .container {
      background-color: #172228;
      width: 100%;
      height: 100vh;

      display: flex;
      justify-content: center;
      align-items: center;
    }
    .box-container {
      background-color: white;
      width: 35rem;
      height: 25rem;
      border-radius: 2.5rem;
      display: flex;
    }

    .content {
      width: 60%;
      margin: 2rem;
    }
    .content h2{
      margin: 1rem 0 1.2rem 0;
    }
    .content .form-wrapper form {
      position: relative;
      display: flex;
      flex-direction: column;
    } 
    .content .form-wrapper form .input {
      display: flex;
      flex-direction: column;
    }
    .content .form-wrapper form .input label {
      margin-bottom: 0.3rem;
      font-size: 0.9rem;
    }
    .content .form-wrapper form .input input {
      height: 1.8rem;
      padding: 0.3rem 0.5rem;
      margin-bottom: 0.8rem;
      border-radius: 0.8rem;
      border: 0.1rem solid black;
    }
    .content .form-wrapper form .pass input {
      margin-bottom: 0.2rem;
    }
    .content .form-wrapper form a {
      color: #515151;
      text-decoration: none;
      font-size: 0.8rem;
      width: 100%;
      margin:  0 0 1.5rem 0;
      text-align: right;
    }
    .content .form-wrapper form .agree {
      flex-direction: row;
      align-items: center;
      margin: 0.5rem 0;
    }
    .content .form-wrapper form .agree label {
      margin: 0 0 0 0.3rem;
    }
    .content .form-wrapper form .agree input {
      margin: 0 0 0 0.3rem;
    }
    .content .form-wrapper form button {
      height: 2.4rem;
      border-radius: 0.8rem;
      border: none;
      background-color: #00B2FF;
      color: white;
      font-size: 1rem;
    }
    .content p {
      font-size: 0.8rem;
    }
    .content p a {
      text-decoration: none;
      color: #515151;
    }

    .quote {
      position: relative;
      background-color: #E9E9E9;
      width: 30%;
      border-radius: 0 2.5rem 2.5rem 0;
      font-size: 0.9rem;

    }
    .quote .text {
      position: absolute;
      top: 9rem;
    }
    .quote p {
      margin: 0;
      padding: 0 0.5rem;
    }
    .quote .by {
      margin: 0.2rem 0;
      text-align: right;
    }


  </style>
</head>
<body>
  <div class="container">
    <div class="box-container">
      <div class="content">
        <h2>Register ke Ranfa</h2>

        <div class="form-wrapper">
          <form action="">
            <div class="input email">
              <label for="">Email</label>
              <input type="email" placeholder="your email address">
            </div>
            <div class="input pass">
              <label for="">Password</label>
              <input type="password" placeholder="your password">
            </div>
            <div class="input agree">
              <input type="checkbox" name="agreement" id="agreement">
              <label for="agreement">I agree with terms and conditions</label>
            </div>
            <button>Register</button>
          </form>
        </div>
        <p>Already have an account? <a href="/auth/login">Login</a></p>
      </div>
      <div class="quote">
        <div class="text">
          <p>some quote from someone important</p>
          <p class="by">- someone</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>