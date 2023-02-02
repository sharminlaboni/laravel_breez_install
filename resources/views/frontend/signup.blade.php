<!-- <x-frontend.master>
  
    <main>
        <div class="card bg-light" style="margin: 5% 32%; border-radius: 1rem;">
            <div class="text-center my-4">
                <h5 style="font-size: 30px;">REGISTRATION</h5>
            </div>
            <form action="login.html" class="mx-4 mb-3">

                <div class="row">                       
                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName"required>
                        </div>
                    </div>

                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                       
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address"required>
                </div>

                <div class="row">                       
                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone number</label>
                            <input type="number" class="form-control" id="phoneNumber" required>
                        </div>
                    </div>

                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="nationalId" class="form-label">National ID</label>
                            <input type="number" class="form-control" id="nationalId" required>
                        </div>
                    </div>
                </div>

                <div class="row">                       
                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city"required>
                        </div>
                    </div>

                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="postalCode" class="form-label">Postal code</label>
                            <input type="number" class="form-control" id="postalCode" required>
                        </div>
                    </div>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-3 py-2">
            
                    <h6 class="me-4">Gender: </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input ml-2" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="option2" />
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                        value="option1" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                    </div>                        

                    <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                        value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
                    </div>

                </div>
                    
                <div class="row">                       
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="comment" class="form-label">Massage</label>
                    <textarea name="comment" id="comment" class="form-control form-control-lg"></textarea>
                </div>

                <div class="mb-3">
                    <input type="file" id="myFile" name="filename">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>

                <div class="text-center">
                    <a class="btn btn-info btn-outline-light border-info" href="login.html" style="padding: 6px 190px;";>Sign in</a>
                </div>
            </form>

            <div class="mb-1">
                <p style="margin-left: 25px;">By clicking Register, I agree that I have read and accepted <br><a class="btn text-primary" href="#">Terms of Use and</a>
                    <a class="btn text-primary" href="#">Privacy Policy</a> </p>
                <p style="margin-left: 25px;">Already have account please login?<a class="btn text-primary" href="login.html">Sign in</a></p>
            </div>
        </div>
    </main>

</x-frontend.master> -->
<x-frontend.master>
    <x-slot name="title">
        registration Home
    </x-slot>

    <main>
        <div class="card bg-light" style="margin: 5% 32%; border-radius: 1rem;">
            <div class="text-center my-4">
                <h5 style="font-size: 30px;">REGISTRATION</h5>
            </div>
            <form class="mx-4 mb-3" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="firstName" class="form-label">Full Name</label>
                    <input name="name" type="text" class="form-control" id="firstName" required>
                    <x-input-error :messages="$errors->get('name')" class="text-danger" />
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                        <x-input-error :messages="$errors->get('email')" class="text-danger" />
                </div>

                <div class="mb-3">
                    <label for="present_address" class="form-label">Present Address</label>
                    <input name="present_address" type="text" class="form-control" id="present_address" required>
                    <x-input-error :messages="$errors->get('present_address')" class="text-danger" />
                </div>

                <div class="mb-3">
                    <label for="permanent_address" class="form-label">Permanent Address</label>
                    <input name="permanent_address" type="text" class="form-control" id="permanent_address" required>
                    <x-input-error :messages="$errors->get('permanent_address')" class="text-danger" />
                </div>


                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone number</label>
                    <input name="phone_number" type="number" class="form-control" id="phoneNumber" required>
                    <x-input-error :messages="$errors->get('phone_number')" class="text-danger" />
                </div>


                <div class="d-md-flex justify-content-start align-items-center mb-3 py-2">

                    <h6 class="me-4">Gender: </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input ml-2" type="radio" name="gender" id="maleGender"
                            value="male" />
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="female" />
                        <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
                    <x-input-error :messages="$errors->get('gender')" class="text-danger" />
                </div>

                <div class="mb-3">
                    <label for="birth_date" class="form-label">Brith Date</label>
                    <input name="dob" type="date" class="form-control" id="birth_date" required>
                    <x-input-error :messages="$errors->get('dob')" class="text-danger" />
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                            <x-input-error :messages="$errors->get('password')" class="text-danger" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" required>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger" />
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-outline-light border-info" style="width: 100%">Sign Up</button>
                </div>
            </form>

            <div class="mb-1">
                <p style="margin-left: 25px;">Already have an account?<a class="text-primary"
                        href="{{ route('login') }}">Sign in</a></p>
            </div>
        </div>
    </main>

</x-frontend.master>