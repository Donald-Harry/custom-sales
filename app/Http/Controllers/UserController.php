<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        if (!$request->auction) {
            $auction = 'no';
        } else {
            $auction = 'yes';
        }
        if (!$request->bid) {
            $bid = 'no';
        } else {
            $bid = 'yes';
        }


        $rules = [
            'type' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'securityquestion' => 'required|string|min:7',
            'securityanswer' => 'required|string|min:5',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|confirmed|unique:users,email',
            'date' => 'required|string',
            'country' => 'required|string',
            'socialsecuritynumber' => 'required|digits:9|confirmed',
            'address1' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'required|string',
            'daytimephone' => 'required|string',
            'eveningtimephone' => 'required|string',

        ];
        $messages = [
            'type.required' => 'Please select an account type.',
            'username.required' => 'Username is required.',
            'username.unique' => 'This username is already taken. Please choose another.',
            'securityquestion.required' => 'You must choose a security question.',
            'securityquestion.min' => 'Security question must be at least 7 characters.',
            'securityanswer.required' => 'Please provide an answer to your security question.',
            'securityanswer.min' => 'Security answer must be at least 5 characters.',
            'firstname.required' => 'First name is required.',
            'lastname.required' => 'Last name is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.confirmed' => 'Email confirmation does not match.',
            'email.unique' => 'This email is already registered.',
            'date.required' => 'Date of birth is required.',
            'country.required' => 'Country is required.',
            'socialsecuritynumber.required' => 'Social Security Number is required.',
            'socialsecuritynumber.digits' => 'Social Security Number must be exactly 9 digits.',
            'socialsecuritynumber.confirmed' => 'Social Security Number confirmation does not match.',
            'address1.required' => 'Address is required.',
            'city.required' => 'City is required.',
            'state.required' => 'State is required.',
            'zipcode.required' => 'Zip code is required.',
            'daytimephone.required' => 'Daytime phone number is required.',
            'eveningtimephone.required' => 'Evening phone number is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if ($request->middlename) {

                $fullname = $request->firstname . ' ' . $request->middlename . ' ' . $request->lastname;
            } else {
                $fullname = $request->firstname . ' ' . $request->lastname;
            }
            if ($request->address2) {
                $address = $request->address1 . ', ' . $request->address2;
            } else if ($request->address3) {
                $address = $request->address1 . ', ' . $request->address3;
            } elseif ($request->address2 && $request->address3) {
                $address = $request->address1 . ', ' . $request->address2 . ', ' . $request->address3;
            } else {
                $address = $request->address1;
            }
            $user = User::create([
                'type' => $request->type,
                'username' => $request->username,
                'securityquestion' => $request->securityquestion,
                'securityanswer' => $request->securityanswer,
                'fullname' => $fullname,
                'email' => $request->email,
                'date' => $request->date,
                'citizen' => $request->citizen,
                'country' => $request->country,
                'socialsecuritynumber' => $request->socialsecuritynumber,
                'mailbox' => $request->mailbox,
                'address' => $address,
                'city' => $request->city,
                'state' => $request->state,
                'zipcode' => $request->zipcode,
                'daytimephone' => $request->daytimephone,
                'eveningtimephone' => $request->eveningtimephone,
                'auction' => $auction,
                'bid' => $bid,
                'password' => '',
            ]);

            if ($user) {
                // dd($user);
                Mail::to($user->email)->send(new RegistrationMail($user));
                return redirect()->route('bidder.registration');
            } else {
                return redirect()->back()->with('error', 'failed to register. Retry!');
            }

        }
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'
        ];

        $messages = [
            'email.required' => 'Email address is required.',
            'email.string' => 'Email must be a valid string.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be a valid string.',
            'password.min' => 'Password must be at least 6 characters long.'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $user = User::where('email', $request->email)->first();
            if ($user) {
                if ($user->password == $request->password) {
                    if ($user->email == 'admin@gsaauction.com') {
                        return 'admin';

                    } else {
                        return 'users';
                    }
                } else {
                    return redirect()->back()->with('error', 'Invalid login details. Retry!');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid login details. Retry!');
            }
        }
    }
}
