@extends('layouts.homelayout')


@section('content')
    <div class="container-fluid">
        <h2 class="text-uppercase text-primary">bidder registration</h2>

        <div class="row p-5">
            <div class="col-md-3">
                <h3>Form Sections</h3>
                <a href="">Login Information</a>
            </div>
            <div class="col-md-9">
                <form action="{{ route('register.form')}}" method="post" class="">
                    @csrf
                    <div class="row border rounded shadow">
                        <div class="col-12 align-items-center p-5">

                            <div class="form-input-group mb-4">
                                <h3>Registration Type</h3>
                                <div class="form-check">
                                    @error('type')
                                        <script>
                                            iziToast.error({
                                                title: 'Error',
                                                message: '{{ $message }}',
                                                position: 'topRight'
                                            });
                                        </script>
                                    @enderror
                                    <input class="form-check-input p-2 rounded" type="radio" name="type" id="individual"
                                        value="individual">
                                    <label class="form-check-label fs-5 ms-2" for="individual">
                                        Individual
                                    </label>
                                </div>
                                <div class="form-check mt-1">
                                    <input class="form-check-input p-2 rounded" type="radio" name="type" id="company"
                                        value="company">
                                    <label class="form-check-label fs-5 ms-2" for="company">
                                        Company
                                    </label>
                                </div>

                            </div>
                            <div class="form-input-group mb-4 w-50">
                                @error('username')
                                    <script>
                                        iziToast.error({
                                            title: 'Error',
                                            message: '{{ $message }}',
                                            position: 'topRight'
                                        });
                                    </script>
                                @enderror
                                <label for="form-label fw-bold text-black">User Name</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Enter a username" value="{{ old('username') }}">
                                <span class="text-muted">Limit: 15 Character</span>
                            </div>
                            <div class="form-input-group mb-4 w-75">
                                @error('securityquestion')
                                    <script>
                                        iziToast.error({
                                            title: 'Error',
                                            message: '{{ $message }}',
                                            position: 'topRight'
                                        });
                                    </script>
                                @enderror
                                <label for="form-label fw-bold text-black">Security Question</label>
                                <input type="text" name="securityquestion" class="form-control" id="securityquestion"
                                    value="{{ old('securityquestion') }}">
                                <span class="text-muted">Security Questions must be at least 7 characters long.</span>
                            </div>
                            <div class="form-input-group mb-4 w-75">
                                @error('securityanswer')
                                    <script>
                                        iziToast.error({
                                            title: 'Error',
                                            message: '{{ $message }}',
                                            position: 'topRight'
                                        });
                                    </script>
                                @enderror
                                <label for="form-label fw-bold text-black">Answer</label>
                                <input type="text" name="securityanswer" class="form-control" id="securityanswer"
                                    value="{{ old('securityanswer') }}">
                                <span class="text-muted">Answers must be at least 5 characters and cannot be same as
                                    security question.</span>
                            </div>
                            <div class="">
                                <button class="bg-secondary btn fw-bold text-white ms-auto d-block p-3" id="confirmBtn"
                                    disabled role="button" type="button">Confirm Login Information</button>
                            </div>
                        </div>
                    </div>
                    <div class="row border rounded shadow p-0 mt-2 d-none" id="terms">
                        <div class="col-12 align-items-center p-0">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne" role="button" type="button">
                                            <i class="bi bi-dash text-black fw-bold d-inline-flex align-items-center justify-content-center fs-3"
                                                style="vertical-align: middle;"></i>
                                            Terms and Condition
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad
                                        squid.
                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                        single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore
                                        wes
                                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard
                                        of them accusamus labore sustainable VHS.
                                    </div>
                                    <div>
                                        <input type="checkbox" id="checkboxterms"> Agree to terms
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row border rounded shadow p-0 mt-2 d-none" id="personalinformation">
                        <div class="col-12 align-items-center p-0">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="true" aria-controls="collapseTwo" role="button" type="button">
                                            <i class="bi bi-dash text-black fw-bold d-inline-flex align-items-center justify-content-center fs-3"
                                                style="vertical-align: middle;"></i>
                                            Personal Information
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                @error('firstname')
                                                    <script>
                                                        iziToast.error({
                                                            title: 'Error',
                                                            message: '{{ $message }}',
                                                            position: 'topRight'
                                                        });
                                                    </script>
                                                @enderror
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">First Name</label>
                                                    <input type="text" name="firstname" class="form-control" id="firstname"
                                                        value="{{ old('firstname') }}">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Middle Name</label>
                                                    <input type="text" name="middlename" class="form-control"
                                                        id="middlename">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                @error('lastname')
                                                    <script>
                                                        iziToast.error({
                                                            title: 'Error',
                                                            message: '{{ $message }}',
                                                            position: 'topRight'
                                                        });
                                                    </script>
                                                @enderror
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Last Name</label>
                                                    <input type="text" name="lastname" class="form-control" id="lastname"
                                                        value="{{ old('lastname') }}">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                @error('email')
                                                    <script>
                                                        iziToast.error({
                                                            title: 'Error',
                                                            message: '{{ $message }}',
                                                            position: 'topRight'
                                                        });
                                                    </script>
                                                @enderror
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Email Address</label>
                                                    <input type="text" name="email" class="form-control" id="email"
                                                        value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Confirm Email Address</label>
                                                    <input type="text" name="email_confirmation" class="form-control"
                                                        id="confirmemail">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                @error('date')
                                                    <script>
                                                        iziToast.error({
                                                            title: 'Error',
                                                            message: '{{ $message }}',
                                                            position: 'topRight'
                                                        });
                                                    </script>
                                                @enderror
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Date of Birth</label>
                                                    <input type="date" name="date" class="form-control" id="date">
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="form-input-group mb-4">
                                                        @error('citizen')
                                                            <script>
                                                                iziToast.error({
                                                                    title: 'Error',
                                                                    message: '{{ $message }}',
                                                                    position: 'topRight'
                                                                });
                                                            </script>
                                                        @enderror
                                                        <label for="form-label fw-bold text-black">Are you a citizen of the
                                                            United State of America?</label>
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input p-2 rounded" type="radio"
                                                                    name="citizen" id="individual" value="yes">
                                                                <label class="form-check-label ms-2" for="">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input p-2 rounded" type="radio"
                                                                    name="citizen" id="individual" value="no">
                                                                <label class="form-check-label ms-2" for="">
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-input-group mb-4">
                                                        @error('country')
                                                            <script>
                                                                iziToast.error({
                                                                    title: 'Error',
                                                                    message: '{{ $message }}',
                                                                    position: 'topRight'
                                                                });
                                                            </script>
                                                        @enderror
                                                        <label for="form-label fw-bold text-black">Country of Residence
                                                            Address</label>
                                                        <select name="country" class="form-control" id="">
                                                            @include('includes.countries')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-group mb-4">
                                                    @error('socialsecuritynumber')
                                                        <script>
                                                            iziToast.error({
                                                                title: 'Error',
                                                                message: '{{ $message }}',
                                                                position: 'topRight'
                                                            });
                                                        </script>
                                                    @enderror
                                                    <label for="form-label fw-bold text-black">Social Security
                                                        Number</label>
                                                    <input type="text" name="socialsecuritynumber" class="form-control"
                                                        id="socialsecuritynumber" value="{{ old('socialsecuritynumber') }}">
                                                    <span class="text-muted">Social security number must be 9 digits</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Confirm Social Security
                                                        Number</label>
                                                    <input type="text" name="socialsecuritynumber_confirmation"
                                                        class="form-control" id="confirmesocialsecuritynumber">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row border rounded shadow p-0 mt-2 d-none" id="personaladdressinformation">
                        <div class="col-12 align-items-center p-0">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree" role="button" type="button">
                                            <i class="bi bi-dash text-black fw-bold d-inline-flex align-items-center justify-content-center fs-3"
                                                style="vertical-align: middle;"></i>
                                            Personal Address Information
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-input-group mb-4">
                                                    @error('mailbox')
                                                        <script>
                                                            iziToast.error({
                                                                title: 'Error',
                                                                message: '{{ $message }}',
                                                                position: 'topRight'
                                                            });
                                                        </script>
                                                    @enderror
                                                    <label for="form-label fw-bold text-black">Is your primary/mailing
                                                        address a PO Box or Personal MailBox?</label>
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input p-2 rounded" type="radio"
                                                                name="mailbox" id="mailboxyes" value="yes">
                                                            <label class="form-check-label ms-2" for="">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input p-2 rounded" type="radio"
                                                                name="mailbox" id="mailboxno" value="no">
                                                            <label class="form-check-label ms-2" for="">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-md-6">
                                                    <div class="form-input-group mb-4">
                                                        @error('address1')
                                                            <script>
                                                                iziToast.error({
                                                                    title: 'Error',
                                                                    message: '{{ $message }}',
                                                                    position: 'topRight'
                                                                });
                                                            </script>
                                                        @enderror
                                                        <label for="form-label fw-bold text-black">Address Line 1</label>
                                                        <input type="text" name="address1" class="form-control"
                                                            id="address1" value="{{ old('address1') }}">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-md-6">
                                                    <div class="form-input-group mb-4">
                                                        <label for="form-label fw-bold text-black">Address Line 2
                                                            (optional)</label>
                                                        <input type="text" name="address2" class="form-control"
                                                            id="address2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-md-6">
                                                    <div class="form-input-group mb-4">
                                                        <label for="form-label fw-bold text-black">Address Line 3
                                                            (optional)</label>
                                                        <input type="text" name="address3" class="form-control"
                                                            id="address3">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-group mb-4">
                                                    @error('city')
                                                        <script>
                                                            iziToast.error({
                                                                title: 'Error',
                                                                message: '{{ $message }}',
                                                                position: 'topRight'
                                                            });
                                                        </script>
                                                    @enderror
                                                    <label for="form-label fw-bold text-black">City</label>
                                                    <input type="text" name="city" class="form-control" id="city"
                                                        value="{{ old('city') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-group mb-4">
                                                    @error('state')
                                                        <script>
                                                            iziToast.error({
                                                                title: 'Error',
                                                                message: '{{ $message }}',
                                                                position: 'topRight'
                                                            });
                                                        </script>
                                                    @enderror
                                                    <label for="form-label fw-bold text-black">State</label>
                                                    <input type="text" name="state" class="form-control" id="state"
                                                        value="{{ old('state') }}">

                                                </div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div class="form-input-group mb-4">
                                                    @error('zipcode')
                                                        <script>
                                                            iziToast.error({
                                                                title: 'Error',
                                                                message: '{{ $message }}',
                                                                position: 'topRight'
                                                            });
                                                        </script>
                                                    @enderror
                                                    <label for="form-label fw-bold text-black">Zip Code</label>
                                                    <input type="text" name="zipcode" class="form-control" id="zipcode"
                                                        value="{{ old('zipcode') }}">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Zip Ext. (optional)</label>
                                                    <input type="text" name="zipcodeext" class="form-control"
                                                        id="zipcodeext">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row border rounded shadow p-0 mt-2 d-none" id="contactinformation">
                        <div class="col-12 align-items-center p-0">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn" data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                            aria-expanded="true" aria-controls="collapsefour" role="button" type="button">
                                            <i class="bi bi-dash text-black fw-bold d-inline-flex align-items-center justify-content-center fs-3"
                                                style="vertical-align: middle;"></i>
                                            Contact Information
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-7">
                                                <div class="form-input-group mb-4">
                                                    @error('daytimephone')
                                                        <script>
                                                            iziToast.error({
                                                                title: 'Error',
                                                                message: '{{ $message }}',
                                                                position: 'topRight'
                                                            });
                                                        </script>
                                                    @enderror
                                                    <label for="form-label fw-bold text-black">Daytime Phone</label>
                                                    <input type="text" name="daytimephone" class="form-control"
                                                        id="daytimephone" value="{{ old('daytimephone') }}">
                                                    <span class="text-muted">Limit: 10 digits</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Phone Ext:
                                                        (optional)</label>
                                                    <input type="text" name="daytimephoneext" class="form-control"
                                                        id="daytimephone">
                                                    <span class="text-muted">Limit: 7 digits</span>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-input-group mb-4">
                                                    @error('eveningtimephone')
                                                        <script>
                                                            iziToast.error({
                                                                title: 'Error',
                                                                message: '{{ $message }}',
                                                                position: 'topRight'
                                                            });
                                                        </script>
                                                    @enderror
                                                    <label for="form-label fw-bold text-black">Eveningtime Phone</label>
                                                    <input type="text" name="eveningtimephone" class="form-control"
                                                        id="daytimephone" value="{{ old('eveningtimephone') }}">
                                                    <span class="text-muted">Limit: 10 digits</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input-group mb-4">
                                                    <label for="form-label fw-bold text-black">Phone Ext:
                                                        (optional)</label>
                                                    <input type="text" name="eveningtimephoneext" class="form-control"
                                                        id="daytimephone">
                                                    <span class="text-muted">Limit: 7 digits</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row border rounded shadow p-0 mt-2 d-none" id="accountpreference">
                        <div class="col-12 align-items-center p-0">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                            aria-expanded="true" aria-controls="collapsefive" role="button" type="button">
                                            <i class="bi bi-dash text-black fw-bold d-inline-flex align-items-center justify-content-center fs-3"
                                                style="vertical-align: middle;"></i>
                                            Account Preference
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsefive" class="collapse show" aria-labelledby="headingfive"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-input-group mb-4">

                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input p-2 rounded" type="radio"
                                                                name="auction" id="mailboxyes" value="yes">
                                                            <label class="form-check-label ms-2" for="">
                                                                Notify me when i don't win an auction
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input p-2 rounded" type="radio"
                                                                name="bid" id="mailboxyes" value="yes">
                                                            <label class="form-check-label ms-2" for="">
                                                                Notify me when i am out bid for an item
                                                            </label>
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

                    <div class="mt-2">
                        <button class="btn btn-secondary text-white border border-3 px-5 py-3 shadow text-bold mb-4"
                            disabled id="submitBtn" type="submit">Submit</button>
                        <button
                            class="btn btn-primary text-white border  border-3 px-5 py-3 shadow text-bold mb-4">Cancel</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <script>
        const username = document.getElementById("username");
        const security = document.getElementById("securityquestion");
        const answer = document.getElementById("securityanswer");
        const confirmBtn = document.getElementById("confirmBtn");
        const submitBtn = document.getElementById("submitBtn");
        const terms = document.getElementById("terms");
        const checkboxterms = document.getElementById("checkboxterms");
        const personalinformation = document.getElementById("personalinformation");
        const personaladdressinformation = document.getElementById("personaladdressinformation");
        const contactinformation = document.getElementById("contactinformation");
        const accountpreference = document.getElementById("accountpreference");

        function checkForm() {
            const accountType = document.querySelector('input[name="type"]:checked');
            // alert(accountType.value);
            if (
                // accountType.value.trim() !== "" &&
                username.value.trim() !== "" &&
                security.value.trim() !== "" &&
                answer.value.trim() !== ""
            ) {
                confirmBtn.disabled = false; // enable button
                confirmBtn.classList.add('btn-primary');
                confirmBtn.classList.remove('bg-secondary');
            } else {
                confirmBtn.disabled = true;  // keep disabled
                confirmBtn.classList.remove('btn-primary');
                confirmBtn.classList.add('bg-secondary');
            }
        }
        window.addEventListener("DOMContentLoaded", checkForm);

        // Attach events

        username.addEventListener('input', checkForm);
        security.addEventListener('change', checkForm);
        answer.addEventListener('input', checkForm);
        confirmBtn.addEventListener('click', function () {
            terms.classList.remove('d-none');
        });
        checkboxterms.addEventListener('click', function () {
            personalinformation.classList.remove('d-none');
            personaladdressinformation.classList.remove('d-none');
            contactinformation.classList.remove('d-none');
            accountpreference.classList.remove('d-none');
            submitBtn.disabled = false; // enable button
            submitBtn.classList.add('btn-primary');
            submitBtn.classList.remove('btn-secondary');
        });
        document.getElementById('username').addEventListener('input', function (e) {
            this.value = this.value.replace(/\s/g, '');
        });
    </script>

@endsection