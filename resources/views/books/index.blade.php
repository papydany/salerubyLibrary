@extends('layouts.app')

@section('content')
<div class="container">
    
        <div class="row">
          <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{('books')}}" >
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="formGroupExampleInput">Title Of book</label>
                          <input type="text" class="form-control" name='title'  placeholder="book Title" required>
                        </div>
                        <div class="form-group">
                        <select class="custom-select"  name="author_id" required>
                            <option selected>Select Author</option>
                            @if(isset($a))
                            @if(count($a) != 0)
                            @foreach ($a as $item)
                            <option value="{{$item->id}}">{{$item->FirstName}}  {{$item->LastName}}</option>   
                            @endforeach
                            @endif
                            @endif
                          </select>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput2">Pages Of Books</label>
                            <input type="number" class="form-control" name="page"  placeholder="pages of books" required>
                          </div>
                          <div class="form-group">
                          
                            <input type="submit" class="btn btn-primary" value="Add Book">
                          </div>

                      </form>
                </div>
              </div>   
          </div>
          <div class="col">
            <div class="card">
                <div class="card-body">
              @if(isset($b))
              @if(count($b) != 0)
              <?php $i = 0; ?>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Title of books</th>
                    <th scope="col">Authored By</th>
                    <th scope="col">Number of pages</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($b as $item)
                    <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->author->FirstName}}  {{$item->author->LastName}}</td>
                    <td>{{$item->page}}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Action
                            </a>
                          
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="{{url('viewbook',$item->id)}}">View</a>
                              <a class="dropdown-item" href="{{url('deletebook',$item->id)}}">Delete</a>
                             
                            </div>
                          </div>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @else
              <div class="col-sm-12 alert alert-danger" role="alert"> No records available</div>
    
              @endif
              @endif
          </div>
        </div>
          </div>
        </div>
       
   
   
</div>

@endsection