@extends("base")
@section("content")
<!-- start feature box section -->
<section class="p-0 wow animate__fadeIn bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col cover-background md-h-500px sm-h-350px wow animate__fadeIn" style="background-image:url({{ asset('/web/images/citizen/survey/survey1.svg') }});">
                <div class="sm-h-400px"></div>
            </div>
            <div class="col d-flex align-items-center wow animate__fadeInRight last-paragraph-no-margin text-center text-lg-start">
                <div class="w-100 padding-fifteen-all xl-padding-twelve-all lg-padding-ten-all md-padding-90px-all sm-padding-40px-tb sm-no-padding-lr">
                    <span class="text-medium margin-20px-bottom d-block alt-font">{{ $survey->questions->first()->name }}</span>
                    <h4 class="alt-font text-light-gray">{{ $survey->name }}</h4>
                    {{ html()->form('POST', route('survey.save', str_replace(' ', '-', $survey->name)))->open() }}
                    <input type="hidden" name="survey_id" value="{{ encrypt($survey->id) }}" />
                    <input type="hidden" name="question_id" value="{{ encrypt($survey->questions->first()->id) }}" />
                    <div class="row">
                        <div class="col text-center">
                            <label>NDA</label>
                            {{ html()->radio('option_id', '1')->class('radio')->attribute('value', '1') }}
                        </div>
                        <div class="col text-center">
                            <label>INDI Alliance</label>
                            {{ html()->radio('option_id')->class('radio')->attribute('value', '2') }}
                        </div>
                        <div class="col-md-12">
                            {{ html()->text('name')->class('bg-transparent border-color-medium-dark-gray medium-input required')->placeholder('Name *')->required() }}
                            @error('name')
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            {{ html()->email('email')->class('bg-transparent border-color-medium-dark-gray medium-input required')->placeholder('Email *')->required() }}
                            @error('email')
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            {{ html()->number('age', '', '18', '100', 1)->class('bg-transparent border-color-medium-dark-gray medium-input required')->placeholder('Age *')->required() }}
                            @error('age')
                            <small class="text-danger">{{ $errors->first('age') }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            {{ html()->select('gender', array('Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other'))->class('bg-transparent mb-0 required')->placeholder('Gender *')->required() }}
                            @error('gender')
                            <small class="text-danger">{{ $errors->first('gender') }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 text-end">
                            {{ html()->submit('Submit')->class('btn btn-submit btn-small btn-transparent-white text-small border-radius-4 lg-margin-15px-bottom margin-35px-top') }}
                        </div>
                    </div>
                    {{ html()->form()->close() }}
                    <div class="text-medium margin-20px-bottom d-block alt-font">Total Polls: {{ 3750 + $count }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end feature box section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 last-paragraph-no-margin">
                <p class="w-85 lg-w-100 xl-w-95">{{ $survey->description }}</p>
                <h6 class="text-extra-dark-gray alt-font w-95 text-center mt-3">Survey will end at {{ $survey->to_date->format('d, M Y h:i a') }}</h6>
                <p class="w-85 lg-w-100 xl-w-95">Result will be published on this portal immediately after ending the survey.</p>
            </div>
        </div>
    </div>
</section>
@endsection