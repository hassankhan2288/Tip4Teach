@extends('layouts.admin')

@section('content')
    <section id="pricing" class="pricing">

        <div class="section-title">
            <p class="text-center"></p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <form method="post" action="{{ route('admin.teacher.submit') }}">
                        @csrf
                        @if (isset($teacher->id))
                            <input type="hidden" name="id" value="{{ $teacher->id }}">
                        @endif
                        <div class="card-body">
                            <div class="card-title">Teacher</div>

                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                <label for="first_name">First Name</label>
                                <input id="first_name" type="text"
                                    class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                    value="{{ old('first_name') ?? ($teacher->first_name ?? '') }}" required
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
                                    value="{{ old('last_name') ?? ($teacher->last_name ?? '') }}" required
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
                                    value="{{ old('email') ?? ($teacher->email ?? '') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="col-md-6 form-group p-2">
                                <label for="banking_detail">Banking Detail</label>
                                <input id="banking_detail" type="text"
                                    class="form-control @error('banking_detail') is-invalid @enderror" name="banking_detail"
                                    value="{{ old('banking_detail') ?? ($teacher->banking_detail ?? '') }}">

                                @error('banking_detail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                <label for="school">School</label>
                                <input id="school" type="text"
                                    class="form-control @error('school') is-invalid @enderror" name="school"
                                    value="{{ old('school') ?? ($teacher->school ?? '') }}">

                                @error('school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="col-md-6 form-group p-2">
                                <label for="subject">Subject</label>
                                <input id="subject" type="text"
                                    class="form-control @error('subject') is-invalid @enderror" name="subject"
                                    value="{{ old('subject') ?? ($teacher->subject ?? '') }}">

                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                <label for="experience">Experience</label>
                                <input id="experience" type="text"
                                    class="form-control @error('experience') is-invalid @enderror" name="experience"
                                    value="{{ old('experience') ?? ($teacher->experience ?? '') }}">

                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="col-md-6 form-group p-2">
                                <label for="phone">Phone</label>
                                <input id="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') ?? ($teacher->phone ?? '') }}">

                                @error('phone')
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
                                    value="{{ old('city') ?? ($teacher->city ?? '') }}">

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
                                    value="{{ old('state') ?? ($teacher->state ?? '') }}">

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
                                    value="{{ old('country') ?? ($teacher->country ?? '') }}">

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
                                    value="{{ old('postal_code') ?? ($teacher->postal_code ?? '') }}">

                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 form-group p-2">
                                <label for="teacher_status">Teacher Status</label>
                                <select id="teacher_status" name="teacher_status" class="form-control" required>
                                    <option value="">Select Teacher Status</option>
                                    <option value="1">Current Teacher</option>
                                    <option value="0">Former Teacher</option>
                                </select>

                                @error('teacher_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="col-md-6 form-group p-2">
                                <label for="is_active">Status</label>
                                <select id="is_active" name="status" class="form-control" required>
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">De-Active</option>
                                </select>

                                @error('is_active')
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
