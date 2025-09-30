@extends('layouts.homelayout')


@section('content')
    <div class="container">
        <div class="row p-5">
            <span class="text-primary border shadow rounded p-3">This is a <strong>U.S. General Services Administration
                    Federal Government</strong>computer system that is <strong>FOR OFFICIAL USE ONLY</strong>. This system
                is subject to monitoring. Individuals found performing unauthorized activities are subject to disciplinary
                action including criminal prosecution.</span>
            <div class="col-12 rounded shadow mt-5">
                <div class="row border rounded ">
                    <div class="col-md-6 align-items-center p-5">
                        <form action="" method="post">
                            <div class="form-input-group mb-4">
                                <label for="form-label">Enter your email address</label>
                                <input type="text" name="email" class="form-control" id="">
                            </div>
                            <div class="form-input-group mb-4">
                                <label for="form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="">
                            </div>
                            <div class="form-input-group mb-4">

                                <input type="checkbox" name="email" class="p-2 me-1 my-3" id=""><span>Remember me</span>
                            </div>
                            <button
                                class="btn text-primary border border-primary border-3 px-5 py-2 shadow text-bold mb-4">Login</button>
                            <a href="" class="text-muted d-block ">Forgot password</a>
                        </form>
                    </div>
                    <div class="col-md-6 bg-primary rounded-end">
                        <h2 class="mt-5 text-white px-3">Welcome to <span>GSA Auctions</span></h2>
                        <div class="">
                            <ul class="list-group flex-column border-0 px-3">
                                <li class="list-group-item bg-primary border-0">
                                    <a href="#" class="text-white text-decoration-none ">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" role="img" aria-label="lock" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg> GSAuth Login (for GSA users only)
                                    </a>
                                </li>
                                <li class="list-group-item bg-primary border-0">
                                    <a href="#" class="text-white text-decoration-none ">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" role="img" aria-label="infoCircle" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg>About GSA Auctions
                                    </a>
                                </li>
                                <li class="list-group-item bg-primary border-0">
                                    <a href="#" class="text-white text-decoration-none ">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" role="img" aria-label="comment" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z"></path></svg> Login FAQs
                                    </a>
                                </li>
                                <li class="list-group-item bg-primary border-0">
                                    <a href="#" class="text-white text-decoration-none ">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" role="img" aria-label="question" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M202.021 0C122.202 0 70.503 32.703 29.914 91.026c-7.363 10.58-5.093 25.086 5.178 32.874l43.138 32.709c10.373 7.865 25.132 6.026 33.253-4.148 25.049-31.381 43.63-49.449 82.757-49.449 30.764 0 68.816 19.799 68.816 49.631 0 22.552-18.617 34.134-48.993 51.164-35.423 19.86-82.299 44.576-82.299 106.405V320c0 13.255 10.745 24 24 24h72.471c13.255 0 24-10.745 24-24v-5.773c0-42.86 125.268-44.645 125.268-160.627C377.504 66.256 286.902 0 202.021 0zM192 373.459c-38.196 0-69.271 31.075-69.271 69.271 0 38.195 31.075 69.27 69.271 69.27s69.271-31.075 69.271-69.271-31.075-69.27-69.271-69.27z"></path></svg> Login Help
                                    </a>
                                </li>
                                <li class="list-group-item bg-primary border-0">
                                    <a href="#" class="text-white text-decoration-none ">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" role="img" aria-label="user plus" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>  Register for GSA Auctions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection