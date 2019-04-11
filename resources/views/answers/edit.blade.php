@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
    <div class="col-md-12">
            <div class="card">
                 <div class="card-body">
                <div class="card-title">
                   <h1>Editing answer for question: <strong>{{ $question->title }}</strong></h1>
                   </div>
                   <hr>
                  <form action="{{ route('questions.answers.update', [$question->id, $answer->id]) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                      <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="7" name="body">{{ old('body', $answer->body) }}</textarea>
                     <div class="invalid-feedback">
                      <strong>@if ($errors->has('body'))</strong>
                     </div>
                      @endif
                    </div> <br>
                    <div class="form-group">
                     <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection