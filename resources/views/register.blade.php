<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/CSS/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/JS/main.js') }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira Sans" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('node_modules\flatpickr\dist\flatpickr.min.css') }}">
    <script src="{{ asset('node_modules\flatpickr\dist\flatpickr.min.js') }}"></script>
</head>
<body style="background: rgba(37, 37, 37, 0.40);">
    <form method="POST" action="{{ route('form.submit') }}" class="center layout button">
    @csrf
    {{ csrf_field() }}
        <div class="unit">
            <div class="unit-a">
                <div class="unit-b">
                    <div class="unit-c">
                        <div class="unit-d">
                            <div id="close-button" class="close-button" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" style="position: relative; left: 20px; top: -1px;" height="25px" viewBox="0 0 384 512"><style>svg{fill:#848484}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                            <span aria-hidden="true">&times;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="center top">
            <div class="top-1">
                <div class="regis">Register</div>
                <div class="regis-1">Register so you can choose and request our talent</div>
            </div>
            <div class="regis-2">
                <div class="regis-3">
                    <div class="regis-4">
                        <div class="regis-5">
                            <input id="firstName" name="firstName" class="name @error('firstName') is-invalid @enderror" placeholder="First Name" value="{{ old('firstName') }}">
                            @error('firstName')
                                <div class="error-message-a">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="regis-5">
                            <input id="lastName" name="lastName" value="{{ old('lastName') }}" class="name-last @error('lastName') is-invalid @enderror" placeholder="Last Name">
                            @error('lastName')
                                <div class="error-message-a">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form">
                        <input id="email" name="email" value="{{ old('email') }}" class="email-style @error('email') is-invalid @enderror" type="email" placeholder="Email">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-1">
                        <div class="form-p">
                            <input id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="{{ old('password') }}" class="form-dup @error('password') is-invalid @enderror" type="password" autocomplete="off" placeholder="Password">
                            @error('password')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                            <span id="passwordDisplay"></span>
                            <div onclick="changeIcon(this)" onclick="togglePasswordVisibility()" id="myBtn">
                                <i id="faPlus" class="far fa-eye icon fa-regular fa-eye fa-sm" style="position: absolute; left: 450px; top: 311px; color: #848484;"></i>
                            </div>
                        </div>
                        <span></span>
                        <div class="pw-again">
                            <div class="password-validate">
                                <div class="form-7">
                                    <div class="form-6">
                                        <i id="icon1" class="fa-solid fa-times fa-sm invalid" style="position: relative; left: 1px; top: -3px;"></i>
                                    </div>
                                </div>
                                <div id="length"  class="checkbox invalid">Password is at least 8 characters long</div>
                            </div>
                            <div class="password-validate">
                                <div class="form-4">
                                    <div class="form-5">
                                        <i id="icon2" class="fa-solid fa-times fa-sm invalid" style="position: relative; left: 1px; top: -3px;"></i>
                                    </div>
                                </div>
                                <div id="letterNumber" class="checkbox invalid">Password contains at least one letter and one number</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-1">
                        <div class="form-p">
                            <input id="passwordAgain" name="passwordAgain" class="form-dup @error('passwordAgain') is-invalid @enderror" type="password" value="{{ old('passwordAgain') }}" oninput="maskPassword()" autocomplete="off"  placeholder="Type in your password again">
                            @error('passwordAgain')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                            <div onclick="changeIcon2(this)" id="myBtn">
                                <i id="faPlus" class="fa-regular fa-eye fa-sm" style="position: absolute; left: 450px; top: 430px; height: 10px; color: #848484;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="gender-b">
                        <div class="gender-a">
                            <div class="gender">Gender</div>
                            <div class="gender">
                            <div class="bch">
                                    <div class="bch-a">
                                        <input class="bch-b" type="radio" name="gender" value="Male">
                                    </div>
                                    <div style="color: #848484; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word; padding-top: 5px">Male</div>
                                </div>
                                <div class="bch">
                                    <div class="bch-a">
                                        <input class="bch-b" type="radio" name="gender" value="female">
                                    </div>
                                    <div style="color: #848484; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word; padding-top: 5px;">Female</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="back-box">
                        <input type="date" id="dateBirth" name="dateBirth" value="{{ old('dateBirth') }}" class="box @error('dateBirth') is-invalid @enderror" placeholder="Date of birth">
                        @error('dateBirth')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                        <script>
                            flatpickr("#dateBirth", {
                                allowInput: true,
                                dateFormat: "d/m/Y",
                            });
                        </script>
                        <div style="width: 15px; height: 14px; position: absolute; left: 450px; top: 555px;">
                            <div style="">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="select-position">
                        <label class="select-position-a">
                            <select id="slct" name="slct" value="{{ old('slct') }}" class="select-position-b @error('slct') is-invalid @enderror" style="flex: 1 1 0; font-size: 14px; font-family: Inter; font-weight: 450; word-wrap: break-word;" required="required">
                                <option value="" disabled="disabled" selected="selected">Client Position</option>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="1">HRD (Human Resources Director)</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="2">Manager</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="3">Supervisor</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="4">Staff</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="5">Executive</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="6">Consultant</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="7">Accountant</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="8">Marketing</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="9">Analyst</option>
                                </span>
                                <span>
                                    <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="10">Employee</option>
                                </span>
                            </select>
                            <svg>
                                <use xlink:href="#select-arrow-down"></use>
                            </svg>
                            <!-- SVG Sprites-->
                            <svg class="">
                                <symbol id="select-arrow-down" viewbox="0 0 10 6">
                                    <polyline points="1 1 5 5 9 1"></polyline>
                                </symbol>
                            </svg>
                        </label>
                        @error('slct')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="agency-n">
                        <input id="agencyName" name="agencyName" class="email-style @error('agencyName') is-invalid @enderror" placeholder="Agency Name" value="{{ old('agencyName') }}">
                        @error('agencyName')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="agency-a">
                        <textarea id="agencyAddress" name="agencyAddress" class="agency-o @error('agencyAddress') is-invalid @enderror" placeholder="Agency Address" value="{{ old('agencyAddress') }}"></textarea>
                        @error('agencyAddress')
                            <div class="error-message-a">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="bg-button">
                <div class="bg-button-a">
                    <button class="button-regis" type="submit">
                        <div class="regis-style">Register</div>
                    </button>
                </div>
                <div class="under-regis"></div>
                <div style="align-self: center; width: 445px; height: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 15px; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
                        <a style="flex: 1 1 0; height: 30px; padding-left: 20px; padding-right: 20px; padding-top: 7px; padding-bottom: 7px; border-radius: 5px; overflow: hidden; border: 1px #848484 solid; justify-content: center; align-items: center; gap: 7px; display: flex">
                            <svg xmlns="http://www.w3.org/2000/svg" height="13px" viewBox="0 0 488 512"><style>svg{fill:#848484}</style><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                            <div style="color: #848484; font-size: 14px; font-family: Inter; font-weight: 600; word-wrap: break-word">Continue with Google</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div style="align-self: stretch; padding-top: 45px; justify-content: center; align-items: flex-end; gap: 5px; display: inline-flex">
            <div style="text-align: center; color: #212121; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">Already have an Account?</div>
            <a href="#" style="text-align: center; color: #2C8AD3; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">Sign In Here</a>
        </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="JS/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function changeIcon(anchor) {
            var icon = anchor.querySelector("i");
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');

            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        function changeIcon2(anchor) {
            var icon = anchor.querySelector("i");
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');

            var y = document.getElementById("passwordAgain");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>

    <script>
        function togglePasswordVisibility() {
            var x = document.getElementById("myInput");
            var displayElement = document.getElementById("passwordDisplay");

            // Toggle the password input type
            if (x.type === "password") {
                x.type = "text";
                displayElement.textContent = x.value;
            } else {
                x.type = "password";
                displayElement.textContent = '';
            }
        }
    </script>

    <script>
        const passwordInput = document.getElementById('password');
        const icon1 = document.getElementById('icon1');
        const icon2 = document.getElementById('icon2');

        passwordInput.addEventListener('input', function() {
            const password = this.value;

            const containsLetter = /[a-zA-Z]/.test(password);
            const containsNumber = /\d/.test(password);

            // Misalnya, validasi sederhana: jika panjang password lebih dari 8 karakter
            if (password.length >= 8) {
                // Ganti kelas ikon Font Awesome jika password dianggap benar
                icon1.classList.remove('fa-times');
                icon1.classList.add('fa-check');
                icon1.classList.remove("invalid");
                icon1.classList.add("valid");
            } else {
                // Jika tidak memenuhi syarat, tampilkan ikon default
                icon1.classList.remove('fa-check');
                icon1.classList.add('fa-times');
                icon1.classList.remove("valid");
                icon1.classList.add("invalid");
            }

            if (containsLetter && containsNumber) {
                // Ganti kelas ikon Font Awesome jika password dianggap benar
                icon2.classList.remove('fa-times');
                icon2.classList.add('fa-check');
                icon2.classList.remove("invalid");
                icon2.classList.add("valid");
            } else {
                // Jika tidak memenuhi syarat, tampilkan ikon default
                icon2.classList.remove('fa-check');
                icon2.classList.add('fa-times');
                icon2.classList.remove("valid");
                icon2.classList.add("invalid");
            }
        });
    </script>

    <script>
        var myInput = document.getElementById("password");
        var letterNumber = document.getElementById("letterNumber");
        var length = document.getElementById("length");

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {

            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(myInput.value.match(lowerCaseLetters)) {
                letterNumber.classList.remove("invalid");
                letterNumber.classList.add("valid");
            } else {
                letterNumber.classList.remove("valid");
                letterNumber.classList.add("invalid");
            }
            // Validate numbers
            var numbers = /[0-9]/g;
            if(myInput.value.match(numbers)) {
                letterNumber.classList.remove("invalid");
                letterNumber.classList.add("valid");
            } else {
                letterNumber.classList.remove("valid");
                letterNumber.classList.add("invalid");
            }
            
            // Validate length
            if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>

    @include('sweetalert::alert')

</body>
</html>