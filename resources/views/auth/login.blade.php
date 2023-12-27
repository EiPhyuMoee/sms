<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student_Management_System</title>
    <link rel="shortcut icon" href="sms/uni_logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    .gradient-custom-2 {

        background-image: url("/sms/dev.jpg");
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
</style>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="/sms/uni_logo.jpg" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Computer University(Pang Long)</h4>
                                    </div>

                                    <form action="{{ route('admin.dashboard') }}" method="POST">
                                        @csrf
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="" class="form-control"
                                                placeholder="Phone number or email address" />
                                            <label class="form-label" for="form2Example11" name ="email">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="" class="form-control" />
                                            <label class="form-label" for="form2Example22" name="password">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5">
                                            <button class="btn btn-primary btn-block fa-lg mb-3" type="submit">Log
                                                in</button>
                                        </div>



                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4"></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
