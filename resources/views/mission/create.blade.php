@extends('layouts.unite')

@section('contenu')
@if(count($errors) > 0)
        <div class=" alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>    
      
                @endforeach
            </ul>
        </div>
        @endif
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enregistrez chef de mission') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('missions.create') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Intitule') }}</label>

                            <div class="col-md-6">
                                <input id="intitule" type="text" class="form-control @error('intitule') is-invalid @enderror" name="intitule" value="{{ old('matricule') }}" required autocomplete="matricule" autofocus>

                                @error('intitule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lieu" class="col-md-4 col-form-label text-md-end">{{ __('Lieu') }}</label>

                            <div class="col-md-6">
                                <input id="lieu" type="text" class="form-control @error('lieu') is-invalid @enderror" name="lieu" value="{{ old('lieu') }}" required autocomplete="grade" autofocus>

                                @error('lieu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duree" class="col-md-4 col-form-label text-md-end">{{ __('Duree') }}</label>

                            <div class="col-md-6">
                                <input id="duree" type="text" class="form-control @error('duree') is-invalid @enderror" name="duree" value="{{ old('corps') }}" required autocomplete="corps" autofocus>

                                @error('duree')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_depart" class="col-md-4 col-form-label text-md-end">{{ __('Date_depart') }}</label>

                            <div class="col-md-6">
                                <input id="date_depart" type="text" class="form-control @error('date_depart') is-invalid @enderror" name="date_depart" value="{{ old('date_depart') }}" required autocomplete="nom" autofocus>

                                @error('date_depart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_retour" class="col-md-4 col-form-label text-md-end">{{ __('Date_retour') }}</label>

                            <div class="col-md-6">
                                <input id="date_retour" type="text" class="form-control @error('date_retour') is-invalid @enderror" name="date_retour" value="{{ old('date_retour') }}" required autocomplete="prenom" autofocus>

                                @error('date_retour')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="number" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Chef mission') }}</label>

                            <div class="col-md-6">
                                <select name="chefmission" id="chefmission">
                                    @foreach('chefmission as chefmission')
                                    <option value="{{chefmission->id}}">{{chefmission->matricule}}</option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Chef mission') }}</label>

                            <div class="col-md-6">
                                <select name="chefmission" id="chefmission">
                                    @foreach('chefmission as chefmission')
                                    <option value="{{chefmission->id}}">{{chefmission->matricule}}</option>
                                </select>
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
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
