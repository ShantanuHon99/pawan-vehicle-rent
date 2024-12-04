@section('title', content: 'Login')

<div class="container" style="margin-top: 50px; display: flex; justify-content: center; align-items: center;">
    <div class="row justify-content-center" style="width: 100%; max-width: 450px;">
        <div class="col-md-12">
            <div class="card" style="border-radius: 10px; border: none; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
                
                <!-- Header with Pawan Travels -->
                <div class="card-header" style="background-color: #4b0082; color: white; border-top-left-radius: 10px; border-top-right-radius: 10px; text-align: center; padding: 20px;">
                    <h1 style="margin: 0; font-size: 3rem; font-weight: bold;">Pawan Travels</h1>
                </div>

                <!-- Login Form -->
                <div class="card-body" style="background-color: white; padding: 30px; border-radius: 10px;">

                    <!-- Success Message -->
                   

                    <h4 class="text-center" style="color: #4b0082; margin-bottom: 20px; font-size: 2rem; font-weight: bold;">Login</h4>

                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="email" class="col-form-label" style="font-weight: bold; color: #333; font-size: 1.2rem;">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus style="border-radius: 5px; border-color: #ddd; padding: 12px; font-size: 1rem; width: 100%;">

                            @error('email')
                                <span class="invalid-feedback" role="alert" style="color: red; font-size: 0.9rem;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="password" class="col-form-label" style="font-weight: bold; color: #333; font-size: 1.2rem;">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required style="border-radius: 5px; border-color: #ddd; padding: 12px; font-size: 1rem; width: 100%;">

                            @error('password')
                                <span class="invalid-feedback" role="alert" style="color: red; font-size: 0.9rem;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0" style="text-align: center;">
                            <button type="submit" class="btn" style="background-color: #4b0082; color: white; border-color: #4b0082; padding: 14px 30px; border-radius: 5px; width: 100%; font-size: 1.2rem;">
                                Login
                            </button>
                        </div>
                        <div class="text-center" style="margin-top: 10px;">
    <p style="font-size: 1rem; color: #555;">
        Don't have an Account ?
        <a href="{{ route('admin.register') }}" style="color: #4b0082; font-weight: bold; text-decoration: none;">Register</a>
    </p>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media (max-width: 767px) {
        .container {
            margin-top: 20px;
        }
        .card {
            margin: 0 auto;
        }
        .card-header h1 {
            font-size: 2.5rem;
        }
        .card-body h4 {
            font-size: 1.5rem;
        }
    }
</style>

