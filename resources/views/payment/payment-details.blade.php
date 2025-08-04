<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body class="jumbotron text-center">
<div >
  <h1 style="color: #f26838">Thank You {{$_SESSION['student_name']}} !</h1>
  <h1 class="display-3" style="color: green">{{$_SESSION['payment_status']}}.</h1>
    <p class="lead"> Kindly note : Your Transaction ID is   <span  style="font-weight: 600">{{$_SESSION['Unique_Ref_Number']}}</span>.</p>
    <p>For Queries regarding online Payments Contact:  8015211313, 7305092313</p>
  <hr>
  <p>
   if any issues occur during Fee Payment, Kindly send your details ( Register Number, Dept, Name of the Student & Payment made, etc.. )  to <a href="mailto: webteam@mamce.org"> accountsmamce@mamce.org</a>
  </p>
<p>ICICI Fee Payment Helpline:  18601206699</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="https://mamce.org/" role="button">Continue to homepage</a>
  </p>
  <a href="https://mamce.org/"><img alt="" src="https://mamce.org/public/images/mamce-logo.png" style="height: 100px;border-radius: 100px;"></a>
</div>
</body>