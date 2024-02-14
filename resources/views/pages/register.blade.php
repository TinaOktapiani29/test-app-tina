@extends('layouts/contentLayoutMaster')

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" class="user">
                            @csrf
                                <div class="form-group">    
                                    <input type="text" class="form-control form-control-user" id="Name" name="name" placeholder="Name"> 
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror  
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="Email" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">    
                                    <input type="password" class="form-control form-control-user" id="Password" name="password" placeholder="Password">   
                                </div>
                                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                
                            </form>
                            
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>