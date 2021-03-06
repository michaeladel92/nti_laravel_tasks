<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
  <style>
    body{background-color:#f9f9fa}.padding{padding:3rem!important}.user-card-full{overflow:hidden}.card{border-radius:5px;-webkit-box-shadow:0 1px 20px 0 rgba(69,90,100,.08);box-shadow:0 1px 20px 0 rgba(69,90,100,.08);border:none;margin-bottom:30px}.m-r-0{margin-right:0}.m-l-0{margin-left:0}.user-card-full .user-profile{border-radius:5px 0 0 5px}.bg-c-lite-green{background:-webkit-gradient(linear,left top,right top,from(#f29263),to(#ee5a6f));background:linear-gradient(to right,#ee5a6f,#f29263)}.user-profile{padding:20px 0}.card-block{padding:1.25rem}.m-b-25{margin-bottom:25px}.img-radius{border-radius:5px}h6{font-size:14px}.card .card-block p{line-height:25px}@media only screen and (min-width:1400px){p{font-size:14px}}.card-block{padding:1.25rem}.b-b-default{border-bottom:1px solid #e0e0e0}.m-b-20{margin-bottom:20px}.p-b-5{padding-bottom:5px!important}.card .card-block p{line-height:25px}.m-b-10{margin-bottom:10px}.text-muted{color:#919aa3!important}.b-b-default{border-bottom:1px solid #e0e0e0}.f-w-600{font-weight:600}.m-b-20{margin-bottom:20px}.m-t-40{margin-top:20px}.p-b-5{padding-bottom:5px!important}.m-b-10{margin-bottom:10px}.m-t-40{margin-top:20px}.user-card-full .social-link li{display:inline-block}.user-card-full .social-link li a{font-size:20px;margin:0 10px 0 0;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}
  </style>
  <div class="container col-md-12">
    <div class="page-content page-container" id="page-content">
      <div class="padding">
          <div class="row container d-flex justify-content-center">
              <div class="col-xl-6 col-md-12">
                  <div class="card user-card-full col-md-12">
                      <div class="row m-l-0 m-r-0">
                          <div class="col-sm-4 bg-c-lite-green user-profile">
                              <div class="card-block text-center text-white">
                                  <div style="overflow: hidden" class="m-b-25"> <img style="object-fit: cover;max-width:100px;max-height:100px;" src="{{asset('images/'.$newImageName)}}" class="img-radius" alt="User-Profile-Image"> </div>
                                  <h6 class="f-w-600">{{$data['name']}}</h6>
                                  
                              </div>
                          </div>
                          <div class="col-sm-8">
                              <div class="card-block">
                                  <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">Email</p>
                                          <h6 class="text-muted f-w-400">{{$data['email']}}</h6>
                                      </div>
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">Address</p>
                                          <h6 class="text-muted f-w-400">{{$data['address']}}</h6>
                                      </div>
                                  </div>
                                  <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">More</h6>
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">gender</p>
                                          <h6 class="text-muted f-w-400">{{$data['gender']}}</h6>
                                      </div>
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">linkdin</p>
                                          <h6 class="text-muted f-w-400">{{$data['linkdin']}}</h6>
                                      </div>
                                  </div>
                           
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  </div>
</body>
</html>