@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Tickets {{$ticket->id}}</h1>
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
 
           
          <form action="{{route('tickets.update',$ticket->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label for="summary">Summary</label>
              <input type="text" name="summary" id="summary" value="{{ $ticket->summary}}" class="form-control {{$errors->has('summary') ? 'is-invalid':''}}">
                @if ($errors->has('summary'))
                    <span class="form-text">
                    <strong>{{$errors->first('summary')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" id="description" value="{{$ticket->description}}" class="form-control {{$errors->has('description') ? 'is-invalid':''}}">
              @if ($errors->has('description'))
                  <span class="form-text">
                  <strong>{{$errors->first('description')}}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
             
              
              <div class="form-group">
                <label for="status">Status</label>
                <select   class="form-control {{$errors->has('status') ? 'is-invalid':''}}" name="status" id="status" value="{{$ticket->status}}">
                  <option value="open" {{$ticket->status =="open" ? "selected" : ""}}>Open</option>
                  <option value="in progress" {{$ticket->status =="in progress" ? "selected" : ""}}>In progress</option>
                  <option value="closed" {{$ticket->status =="closed" ? "selected" : ""}}>Closed</option>
                </select>
              </div>
            </div>

            <button class="btn btn-success" type="submit">Update ticket</button>
          </form>
        </main>
@endsection