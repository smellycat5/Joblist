<!DOCTYPE html>
<html lang="en">
<!doctype html>
<html lang="en">

<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #1f2029;
        }
    
        a {
            position: relative;
            padding: 20px 50px;
            display: block;
            text-decoration: none;
            text-transform: uppercase;
            width: 200px;
            overflow: hidden;
            border-radius: 40px;
        }
    
        a span {
            position: relative;
            color: #000;
            font-size: 15px;
            font-family:  'Poppins', sans-serif;
            letter-spacing: 1px;
            z-index: 1;
            font-weight: bold;
        }
    
        a .liquid {
            position: absolute;
            top: -50px;
            left: 0px;
            width: 200px;
            height: 200px;
            background: #ffeba7;
            box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
            transition: 1s;
        }
    
        a .liquid::after,
        a .liquid::before {
            content: '';
            width: 200%;
            height: 200%;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -75%);
            background: #2b2e38;
        }
    
        a .liquid::before {
    
            border-radius: 45%;
            background: #2b2e38;
            animation: animate 5s linear infinite;
        }
    
        a .liquid::after {
    
            border-radius: 40%;
            background: rgba(20, 20, 20, .5);
            animation: animate 10s linear infinite;
        }
    
        a:hover .liquid {
            top: -105px;
        }
    
        @keyframes animate {
            0% {
                transform: translate(-50%, -75%) rotate(0deg);
            }
    
            100% {
                transform: translate(-50%, -75%) rotate(360deg);
            }
        }
    </style>

</head>

<body>
    <ul>
        <a href="{{ route('user.login')}}">
            <span>search job</span>
            <div class="liquid"></div>
        </a>
    </ul>
    <ul>
      <a href="#">
          <span>add job to List</span>
          <div class="liquid"></div>
      </a>
  </ul>
</body>

</html>
