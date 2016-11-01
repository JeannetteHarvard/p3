<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">

            <div class="content">
                <div class="title m-b-md">
                    Developer's Best Friend
                </div>

                <div class="links">
                    <a href="/lorem-ipsum">Lorem Ipsum Generator</a>
                    <a href="/random-user">Random User Generator</a>
                </div>

                @if(Route::current()->getName() == 'HomePage')
                  Hello This is HomePage
                @endif

        </div>

      </div>

      <!-- <div class="container-fluid">

        <div class="row">
            <div class="col-xs-6">
              <p>Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            </div>
            <div class="col-xs-6">
              <p>Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
          </div>
        </div>

      </div>

      <div class="row">
       <section class="col-sm-6">
         <h3>General Health</h3>
         <p>Wellness and senior exams, ultrasound, x-ray, and dental cleanings are just a few of our general health services.</p>
       </section>
       <section class="col-sm-6">
         <h3>Nutrition</h3>
         <p>Let our nutrition experts review your pet's diet and prescribe a custom nutrition plan for optimum health and disease prevention.</p>
       </section>
     </div> -->

    </body>
</html>
