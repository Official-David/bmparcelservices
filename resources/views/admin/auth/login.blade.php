@extends('admin.auth.layouts.app')
@section('title', 'Login')
@section('content')

    <body class="bg-primary h-screen w-screen flex justify-center items-center">
        <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
            <div class="card overflow-hidden sm:rounded-md rounded-none">
                <div class="px-6 py-8">
                    <a class='flex justify-center mb-8' href='index.html'>
                        <img class="h-6" src="assets/images/logo-dark.png" alt="">
                    </a>
                    <form action="{{ route('login') }}" method="post">
						@csrf
                        <div class="mb-4">
                            <label class="mb-2" for="LoggingEmailAddress">Email Address</label>
                            <input id="LoggingEmailAddress" class="form-input" name="email" type="email"
                                placeholder="Enter your email">
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-2">
                                <label for="loggingPassword">Password</label>
                                {{-- <a class='text-sm text-primary' href='auth-recoverpw.html'>Forget Password ?</a> --}}
                            </div>
                            <input id="loggingPassword" class="form-input" name="password" type="password"
                                placeholder="Enter your password">
                        </div>

                        <div class="flex items-center mb-4">
                            <input type="checkbox" class="form-checkbox rounded" id="checkbox-signin">
                            <label class="ms-2" for="checkbox-signin">Remember me</label>
                        </div>

                        <div class="flex justify-center mb-3">
                            <button type="submit" class="btn w-full text-white bg-primary"> Sign In </button>
                        </div>
                    </form>
                </div>
            </div>

            <p class="text-white text-center mt-8">Create an Account ?<a class='font-medium ms-1'
                    href='auth-register.html'>Register</a></p>
        </div>
    </body>

@endsection
