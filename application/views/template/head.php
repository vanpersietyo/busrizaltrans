<!DOCTYPE html>
<html>
  <head>
    <title>Rizal Trans - <?php echo $title ?> Sewa Bus Pariwisata Sidoarjo</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <link rel="icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <meta name="keywords" content="sewa bus, bus pariwisata, bus sidoarjo, tour, travel, sewa bus surabaya" />
      <meta name="author" content="Rizal Trans" />
      <meta property="og:title" content="Sewa Bus Pariwisata Rizal Trans"/>
      <meta property="og:image" content="<?=base_url('assets/images/rizaltrans/tour-3.jpg')?>"/>
      <meta property="og:url" content="http://www.busrizaltrans.com"/>
      <meta property="og:site_name" content="http://www.busrizaltrans.com"/>
      <meta property="og:description" content="Sewa Bus Pariwisata Sidoarjo. Enjoy Your Holiday Low Price. Hubungi 081357874401"/>


      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

        <!-- Font Awesome 5.5 -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

      <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
      <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>">
      <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
      <link rel="stylesheet" href="<?=base_url('assets/css/atomic.css')?>">
      <link rel="stylesheet" href="<?=base_url('assets/css/responsive.css')?>">
      <link rel="stylesheet" href="<?=base_url('assets/css/datepicker.css')?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" href="<?=base_url('assets/css/custom.css?v=1.7')?>">
      <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>

      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script> -->

      <!-- sweetalert --> 
      <link rel="stylesheet"  href="<?=base_url('assets/third_party/').'sweetalert/dist/sweetalert2.css'?>">
      <meta name="google-site-verification" content="6nweJFcWVVR09WBMlH3a7HPaUpqDF6sfPs66pHwkozY" />
  </head>


  <style>
      #fountainG{
          position:relative;
          width:234px;
          height:28px;
          margin:auto;
      }

      .fountainG{
          position:absolute;
          top:0;
          background-color:rgb(0,0,0);
          width:28px;
          height:28px;
          animation-name:bounce_fountainG;
          -o-animation-name:bounce_fountainG;
          -ms-animation-name:bounce_fountainG;
          -webkit-animation-name:bounce_fountainG;
          -moz-animation-name:bounce_fountainG;
          animation-duration:1.5s;
          -o-animation-duration:1.5s;
          -ms-animation-duration:1.5s;
          -webkit-animation-duration:1.5s;
          -moz-animation-duration:1.5s;
          animation-iteration-count:infinite;
          -o-animation-iteration-count:infinite;
          -ms-animation-iteration-count:infinite;
          -webkit-animation-iteration-count:infinite;
          -moz-animation-iteration-count:infinite;
          animation-direction:normal;
          -o-animation-direction:normal;
          -ms-animation-direction:normal;
          -webkit-animation-direction:normal;
          -moz-animation-direction:normal;
          transform:scale(.3);
          -o-transform:scale(.3);
          -ms-transform:scale(.3);
          -webkit-transform:scale(.3);
          -moz-transform:scale(.3);
          border-radius:19px;
          -o-border-radius:19px;
          -ms-border-radius:19px;
          -webkit-border-radius:19px;
          -moz-border-radius:19px;
      }

      #fountainG_1{
          left:0;
          animation-delay:0.6s;
          -o-animation-delay:0.6s;
          -ms-animation-delay:0.6s;
          -webkit-animation-delay:0.6s;
          -moz-animation-delay:0.6s;
      }

      #fountainG_2{
          left:29px;
          animation-delay:0.75s;
          -o-animation-delay:0.75s;
          -ms-animation-delay:0.75s;
          -webkit-animation-delay:0.75s;
          -moz-animation-delay:0.75s;
      }

      #fountainG_3{
          left:58px;
          animation-delay:0.9s;
          -o-animation-delay:0.9s;
          -ms-animation-delay:0.9s;
          -webkit-animation-delay:0.9s;
          -moz-animation-delay:0.9s;
      }

      #fountainG_4{
          left:88px;
          animation-delay:1.05s;
          -o-animation-delay:1.05s;
          -ms-animation-delay:1.05s;
          -webkit-animation-delay:1.05s;
          -moz-animation-delay:1.05s;
      }

      #fountainG_5{
          left:117px;
          animation-delay:1.2s;
          -o-animation-delay:1.2s;
          -ms-animation-delay:1.2s;
          -webkit-animation-delay:1.2s;
          -moz-animation-delay:1.2s;
      }

      #fountainG_6{
          left:146px;
          animation-delay:1.35s;
          -o-animation-delay:1.35s;
          -ms-animation-delay:1.35s;
          -webkit-animation-delay:1.35s;
          -moz-animation-delay:1.35s;
      }

      #fountainG_7{
          left:175px;
          animation-delay:1.5s;
          -o-animation-delay:1.5s;
          -ms-animation-delay:1.5s;
          -webkit-animation-delay:1.5s;
          -moz-animation-delay:1.5s;
      }

      #fountainG_8{
          left:205px;
          animation-delay:1.64s;
          -o-animation-delay:1.64s;
          -ms-animation-delay:1.64s;
          -webkit-animation-delay:1.64s;
          -moz-animation-delay:1.64s;
      }

      @keyframes bounce_fountainG{
          0%{
              transform:scale(1);
              background-color:rgb(0,0,0);
          }

          100%{
              transform:scale(.3);
              background-color:rgb(255,255,255);
          }
      }

      @-o-keyframes bounce_fountainG{
          0%{
              -o-transform:scale(1);
              background-color:rgb(0,0,0);
          }

          100%{
              -o-transform:scale(.3);
              background-color:rgb(255,255,255);
          }
      }

      @-ms-keyframes bounce_fountainG{
          0%{
              -ms-transform:scale(1);
              background-color:rgb(0,0,0);
          }

          100%{
              -ms-transform:scale(.3);
              background-color:rgb(255,255,255);
          }
      }

      @-webkit-keyframes bounce_fountainG{
          0%{
              -webkit-transform:scale(1);
              background-color:rgb(0,0,0);
          }

          100%{
              -webkit-transform:scale(.3);
              background-color:rgb(255,255,255);
          }
      }

      @-moz-keyframes bounce_fountainG{
          0%{
              -moz-transform:scale(1);
              background-color:rgb(0,0,0);
          }

          100%{
              -moz-transform:scale(.3);
              background-color:rgb(255,255,255);
          }
      }
  </style>


  <body>
    
    <!--====== LOADER =====-->
    <div class="loader"></div>

