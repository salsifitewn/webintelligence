@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session::get('success'))
            <div class="alert alert-success" role="alert">
                Formulaire Envoyé! Vous pouvez eventuellement éditer votre message
            </div>
        @endif
        @if (Session::get('edit'))
            <div class="alert alert-warning" role="alert">
                Formulaire Edité !
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Contact Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf

                            <x-forms.input for="email" type="email" name="email" label="E-Mail Address"
                                :value="old('email')" :errors="$errors" />
                            <x-forms.input for="lastName" type="text" name="last_name" label="Last Name"
                                :value="old('last_name')" :errors="$errors" />
                            <x-forms.input for="firstName" type="text" name="first_name" label="First Name"
                                :value="old('first_name')" :errors="$errors" />
                            <x-forms.input for="phone" type="tel" name="phone" label="Phone" :value="old('phone')"
                                :errors="$errors" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" />
                            <x-forms.input for="address" type="text" name="address" label="Address" :value="old('address')"
                                :errors="$errors" />
                            <x-forms.input for="zipCode" type="text" name="zip_code" label="Zip Code"
                                :value="old('zip_code')" :errors="$errors" pattern="[0-9]{5}" />
                            <x-forms.input for="city" type="text" name="city" label="City" :value="old('city')"
                                :errors="$errors" />

                            <div class="form-group row">
                                <label for="comments"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Comments') }}</label>

                                <div class="col-md-6">
                                    <textarea id="comments" class="form-control" name="comments" required
                                        value="{{ old('comments') }}"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
