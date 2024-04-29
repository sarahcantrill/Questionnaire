<!-- @extends('layouts.app') -->
<!-- css is in app.blade.php-->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Questionnaire:') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="all-questions">
                            <label for="question_1" class="question_!"><b>{{ __('Question 1') }}</b></label> <!-- short text question -->
                                <p>What colour hair do you have?</p>
                            <div class="col-md-6">
                                <input id="question_1" type="text" class="question_1 @error('question_1') is-invalid @enderror" name="question_1" value="{{ old('question_1') }}" required maxlength="10" required autocomplete="question_1" autofocus>

                                @error('question_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="all-questions">
                            <label for="question_2" class="question_2"><b>{{ __('Question 2') }}</b></label><!-- long text question -->
                                <p>How was your holiday?</p>
                            <div class="col-md-6">
                                <textarea id="question_2" type="text" class="question_2 @error('question_2') is-invalid @enderror" name="question_2  required maxlength="100" required autocomplete="cquestion_2" autofocus>{{ old('question_2') }}</textarea>

                                @error('question_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                    <small class="text-muted">Maximum 100 characters.</small>
                            </div>
                        </div>

                        <div class="all-questions">
                            <label for="question_3" class="question_3"><b>{{ __('Question 3') }}</b></label><!-- select answer text question, col-md-4 col-form-label text-md-right -->
                                <p> I have gone for a walk today</p>
                            <div class="col-md-6">
                               <input type="radio" id="question_3_yes" name="question_3" value="yes" required>
                                <label for="question_3_yes">Yes</label><br>
                                <input type="radio" id="question_3_no" name="question_3" value="no" required>
                                <label for="question_3_no">No</label><br>

                                @error('question_3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="all-questions">
                            <label for="question_4" class="question_4"><b>{{ __('Question 4') }}</b></label> <!-- number  question, col-md-4 col-form-label text-md-right -->
                                <p>How many driving tests have you done?</p>
                            <div class="col-md-6">
                                <input id="question_4" type="number" class="question_4 @error('question_4') is-invalid @enderror" name="question_4" value="{{ old('question_4') }}" min="0" max="15" required autocomplete="cquestion_4" autofocus>

                                @error('question_4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="all-questions">
                            <label for="question_5" class="question_5"><b>{{ __('Question 5') }}</b></label><!-- scale 1-5 question -->

                            <!--
                            <div class="col-md-6">
                                <input id="question_5" type="text" class="question_5 @error('question_5') is-invalid @enderror" name="question_5" value="{{ old('question_5') }}" required maxlength="100" required autocomplete="cquestion_5" autofocus>
                            -->
                                <ul class="likert">
                                    <li class="likert"> Very Good <input id="radGoodStart" type="radio" name="Good" value="1" />
                                    <li class="likert"><input type="radio" name="Good" value="2" />
                                    <li class="likert"><input type="radio" name="Good" value="3" />
                                    <li class="likert"><input type="radio" name="Good" value="4" />
                                    <li class="likert"><input id="radGoodEnd" type="radio" name="Good" value="5" /> Very Bad
                                </ul>

                                @error('question_5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br><div class="tandc">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('I agree to the Terms and Conditions....') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="final-button">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="submit-button">
                                    {{ __('Submit') }}
                                </button>

                                <!--
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection