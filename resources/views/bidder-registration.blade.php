@extends('layouts.homelayout')


@section('content')
    <div class="container" style="height: 50vh;">
        <div class="row p-3" >
            <div class="bg-primary bg-opacity-10 border border-primary p-4">
                <span class="text-dark fw-bold py-3 d-block">Additional information required:</span>
                <p>
                    Your registration requires additional approval before activating your account.
                    Please send an email to
                    <a href="mailto:{{ config('mail.from.address') }}" class="fw-bold text-primary">
                        {{ config('mail.from.address') }}
                    </a>
                    and include the username you created. Thank you.
                </p>
            </div>


        </div>

    </div>

@endsection