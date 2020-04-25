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
 
           
          <div class="table-responsive">
          	<a class="btn btn-primary" href="/tickets/create" role="button">Add New Ticket</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Tickets</th>
                  <th>Summary</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Actions</th>
                   
                </tr>
              </thead>
              <tbody>
              	@foreach($tickets as $ticket)
	                <tr>
	                  <td>{{$ticket->id}}</td>
	                  <td>{{$ticket->summary}}</td>
	                  <td>{{$ticket->description}}</td>
	                  <td>{{$ticket->status}}</td>

	                  <td>
                      <a href="/tickets/{{$ticket->id}}" class="btn btn-success">update</a>
                      {{-- <a class="btn btn-warning" href="/tickets/delete/" role="button">Delete</a> --}}
	                   
                    </td>
                    <td>
                      <form action="{{ url('tickets/'.$ticket->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                     </td>
	                   
	                </tr>
                 @endforeach
              </tbody>
            </table>
          </div>
        </main>
@endsection