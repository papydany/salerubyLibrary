@extends('layouts.app')

@section('content')
<div class="container">
    
        <div class="row">
          <div class="col">
            <div class="card">
                <div class="card-body">
                    <p><b>Book Title :</b>{{$b->title}}</p>
                    <p><b>Authored By  :</b>{{$b->author->FirstName}} {{$b->author->LastName}}</p>
                    <p><b>Book Pages :</b>{{$b->page}}</p>
                </div>
            </div>
          </div>
        </div>
</div>
@endsection