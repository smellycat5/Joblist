<!DOCTYPE html>
<html>
  <head>
    <title>Create Job</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="my-5">Create Job</h1>
      <a class="btn btn-primary" href="{{ route('job.index') }}">back</a>
      <form action="{{ route('job.store') }}" method="POST" class="p-4 bg-light">
        <!-- CSRF token field -->
        @csrf
        <div class="form-group">
          <label for="title">Job Title</label>
          <input type="text" id="title" name="title" class="form-control">
          @if ($errors->has('title'))
          <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
      
        <div class="form-group">
          <label for="description">Job Description</label>
          <textarea id="description" name="description" class="form-control"></textarea>
          @if ($errors->has('description'))
          <span class="text-danger">{{ $errors->first('description') }}</span>
          @endif
        </div>
      
        <div class="form-group">
          <label for="salary">Salary</label>
          
          <input type="number" id="salary" name="salary" class="form-control">
          @if ($errors->has('salary'))
          <span class="text-danger">{{ $errors->first('salary') }}</span>
          @endif
        </div>
      
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" id="location" name="location" class="form-control">
          @if ($errors->has('location'))
          <span class="text-danger">{{ $errors->first('location') }}</span>
            @endif
        </div>
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Organizations</label>
            <select name="organization_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected value="#">Choose...</option>
              @foreach ($organizations as $organization)
              <option value="{{$organization->id}}" >{{ $organization->name }}</option>
             @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Create Job</button>
        </div>
      </form>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
