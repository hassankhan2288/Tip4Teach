@extends('layouts.admin')

@section('content')
    <section id="pricing" class="pricing">

        <div class="section-title">
            <p class="text-center"></p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <form method="post" action="{{ route('admin.student.submit') }}">
                        @csrf
                        @if (isset($users->id))
                            <input type="hidden" name="id" value="{{ $users->id }}">
                        @endif
                        <div class="card-body">
                            <div class="card-title">Student</div>

                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                    <label for="first_name">First Name</label>
                                    <input id="first_name" type="text"
                                        class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                        value="{{ old('first_name') ?? ($users->first_name ?? '') }}" required
                                        autocomplete="first_name" autofocus>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group p-2">
                                    <label for="last_name">Last Name</label>
                                    <input id="last_name" type="text"
                                        class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                        value="{{ old('last_name') ?? ($users->last_name ?? '') }}" required
                                        autocomplete="last_name" autofocus>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                    <label for="email">Email Address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') ?? ($users->email ?? '') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group p-2">
                                    <label for="phone">Phone Number</label>
                                    <input id="phone" type="number"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') ?? ($users->phone ?? '') }}" required>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">De-Active</option>
                                    </select>

                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group p-2">
                                    <label for="occupation">Occupation</label>
                                    <input id="occupation" type="text"
                                        class="form-control @error('occupation') is-invalid @enderror" name="occupation"
                                        value="{{ old('occupation') ?? ($users->occupation ?? '') }}">
    
                                    @error('occupation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                <label for="city">City</label>
                                <input id="city" type="text"
                                    class="form-control @error('city') is-invalid @enderror" name="city"
                                    value="{{ old('city') ?? ($users->city ?? '') }}">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="col-md-6 form-group p-2">
                                <label for="state">State</label>
                                <input id="state" type="text"
                                    class="form-control @error('state') is-invalid @enderror" name="state"
                                    value="{{ old('state') ?? ($users->state ?? '') }}">

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                <label for="country">Country</label>
                                <input id="country" type="text"
                                    class="form-control @error('country') is-invalid @enderror" name="country"
                                    value="{{ old('country') ?? ($users->country ?? '') }}">

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="col-md-6 form-group p-2">
                                <label for="postal_code">Postal Code</label>
                                <input id="postal_code" type="text"
                                    class="form-control @error('postal_code') is-invalid @enderror" name="postal_code"
                                    value="{{ old('postal_code') ?? ($users->postal_code ?? '') }}">

                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group p-2">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <input type="submit" class="btn btn-primary ladda-button float-right mr-4 mb-4"
                                    value="Submit" />

                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </section>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('app/css/plugins/ladda-themeless.min.css') }}" />
@endsection

@section('scripts')
    <script src="{{ asset('app/js/plugins/spin.min.js') }}"></script>
    <script src="{{ asset('app/js/plugins/ladda.min.js') }}"></script>
@endsection
