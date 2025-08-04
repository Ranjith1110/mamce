<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RozerPay Example</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
   <style>
      #rzp-button1{
         visibility:hidden;
      }
      </style>
   </head>

<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                            <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> <span class="success-message"></span>
                            </div>
                        {{ Session::forget('success') }}
                        <!-- {{$amount}} -->
                        <!-- <div class="card card-default">
                            <div class="card-header">
                                Razorpay Example
                            </div>

                            <div class="card-body text-center">
                                <div class="form-group mt-1 mb-1">
                                    <input type="text" name="amount" class="form-control amount" placeholder="Enter Amount">
                                </div>
                               
                            </div>
                        </div> -->
                        <button id="rzp-button1" class="btn btn-success btn-lg">Pay</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
          $(document).ready(function () {
        console.log(jQuery().jquery);

        // ✅ Set CSRF token for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Automatically click the hidden Razorpay button
        document.getElementById('rzp-button1').click();
    });

        $('body').on('click','#rzp-button1',function(e){
            e.preventDefault();
            var amount = '{{$amount}}';
            var total_amount = amount;

            // alert(total_amount);
            // return false;

            var options = {
                "key": "{{ $key }}", // Enter the Key ID generated from the Dashboard
                "key_secret": "{{ $keysecret }}", // Enter the Key ID generated from the Dashboard
                "amount": "45000", // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "INR",
                "name": "Colleaze",
                "description": "Buy Subscription plan",
                "image": "https://colleaze.com/assets/website/logo.png",
                "order_id": "{{$orderid}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1

                "handler": function (response){
                   
                    $.ajax({
                        type:'POST',
                        dataType: "json",
                        url:"{{ route('razorpay.payment') }}",
                        data:{razorpay_payment_id:response.razorpay_payment_id,amount:total_amount},
                        success:function(response){
                            console.log(response);
                            // $('.success-message').text(data.success);
                            // $('.success-alert').fadeIn('slow', function(){
                            //    $('.success-alert').delay(5000).fadeOut(); 
                            // });
                            // $('.amount').val('');
                            if (response.success == 1 || response.success == '1') {
                                swal({
                                title: "Success",
                                text: response.msg,
                                icon: "success",
                                dangerMode: true,
                                })
                                .then(willDelete => {
                                if (willDelete) {
                                    window.location.href ="{{route('index')}}";
                                }
                                });
                            
                            } else {
                                alert('something went wrong');
                            //redirect_url = '/thnx-you-paid.html';
                            }
                             
                            },error(err){
                                
                                // swal("Failed!", err.responseJSON.msg, "error");
                                swal({
                                title: "Error - Unable to book",
                                text: err.responseJSON.msg+'  - Amount will be refunded to your payment method, Go back to home!',
                                icon: "error",
                                dangerMode: true,
                                })
                                .then(willDelete => {
                                if (willDelete) {
                                     window.location.href ="{{route('index')}}";
                                }
                                });
                            }
                    });
                },
                "prefill": {
                    "name": "Param sss",
                    "email": "param@mamce.com",
                    "contact": "8186011100"
                },
                "notes": {
                    "address": "test test"
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            // console.log(options);
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    </script>
</body>
</html>