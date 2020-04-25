@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Delete Ticket {{$ticket->ticket}}</h1>
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
 
           
          <form action="" method="POST">
            @csrf

            <div class="form-group">
              <label for="summary">Summary</label>
              <input type="text" name="summary" id="summary" value="{{ $ticket->summary}}" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" id="description" value="{{$ticket->description}}" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" name="status" id="status" value="{{$ticket->status}}" class="form-control" disabled>
            </div>

            <button class="btn btn-success" type="submit">Delete ticket</button>
             <a href="{{route('tickets.index')}}" class="btn btn-secondary">Back</a>
          </form>
        </main>
@endsection