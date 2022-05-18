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
      margin: 0
    }
    #navbar{
      position: absolute;
      top: 0;
      z-index: 2;

      width: calc(100% - 16rem);
      height: fit-content;
      padding: 1rem 8rem;

      display: flex;
      justify-content: space-between;
      align-items: center;

      background-color: rgba(31, 31, 31, 0.5);
      -webkit-backdrop-filter: blur(4px);
      -o-backdrop-filter: blur(4px);
      -moz-backdrop-filter: blur(4px);

      backdrop-filter: blur(4px);
    }
    #navbar .brand-name{
      text-decoration: none;
      color: white;
      font-size: 2rem;
      font-family: 'Roboto', sans-serif;
      font-weight: 600;
    }
    #navbar .auth{
      width: 14rem;
      display: flex;
      justify-content: space-between
    }
    #navbar .auth .btn{
      width: 6.5rem;
      height: 1.8rem;
      color: white;
      border-radius: 0.7rem;
      border: 0;
      cursor: pointer;
      line-height: 1.8rem;
      text-align: center;
    } 
    #navbar .auth .btn a{
      color: white;
      text-decoration: none;
      font-family: 'Roboto', sans-serif;
    }
    #navbar .auth .login{
      background-color: #00B2FF;
    }
    #navbar .auth .register{
      background-color: transparent;
      border: 0.1rem solid white;
    }
  </style>
</head>
<body>
  <div id="navbar">
    <div class="brand">
      <a href="/" class="brand-name">Ranfa</a>
    </div>
    <div class="auth">
      <div class="btn login">
        <a href="/auth/login">Login</a>
      </div>
      <div class="btn register">
        <a href="">Register</a>  
      </div>  
    </div>  
  </div> 
</body>
</html>