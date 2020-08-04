@extends('layouts.app')

@section('content')
<div class="container">
    
        <div class="row">
          <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{('authors')}}" >
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="formGroupExampleInput">First Name</label>
                          <input type="text" class="form-control" name='firstname'  placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput2">Last Name</label>
                          <input type="text" class="form-control" name="lastname"  placeholder="Last Name" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="text" class="form-control" name="email"  placeholder="Last Name" required>
                          </div>
                          <div class="form-group">
                          
                            <input type="submit" class="btn btn-primary" value="Add Author">
                          </div>

                      </form>
                </div>
              </div>   
          </div>
          <div class="col">
            <div class="card">
                <div class="card-body">
              @if(isset($a))
              @if(count($a) != 0)
              <?php $i = 0; ?>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($a as $item)
                    <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$item->FirstName}}</td>
                    <td>{{$item->LastName}}</td>
                    <td>{{$item->email}}</td>
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