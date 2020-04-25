@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tickets</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
 
           
          <form action="{{route('tickets.store')}}" method="POST">
            @csrf

            <div class="form-group">
              <label for="summary">Summary</label>
              <input type="text" name="summary" id="summary" class="form-control {{$errors->has('summary') ? 'is-invalid':''}}">
              @if ($errors->has('summary'))
                  <span class="form-text">
                    <strong>{{$errors->first('summary')}}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" id="description" class="form-control {{$errors->has('description') ? 'is-invalid':''}}">
              @if ($errors->has('description'))
                  <span class="form-text">
                    <strong>{{$errors->first('description')}}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select   class="form-control {{$errors->has('status') ? 'is-invalid':''}}" name="status" id="status" >
                <option value="open">Open</option>
                <option value="in progress">In progress</option>
                <option value="closed">Closed</option>
              </select>
            </div>

            <button class="btn btn-primary" type="submit">Add ticket</button>
            <a href="{{route('tickets.index')}}" class="btn btn-secondary">Back</a>
          </form>
        </main>
@endsection