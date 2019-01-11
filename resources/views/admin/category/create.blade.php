@extends('layouts.app')

@section('title','slider')

@push('css')



@endpush

@section('content')

	   <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">ADD Category</h4>
                  
                </div>
                  <div class="card-body">
                  <div class="card-content">
                    <form method="POST" action="{{ route('category.store') }}" >

                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group label-floating">
                            <label class="control-label">Category Name</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                        </div>
                      </div>

                       <div class="row">
                        <div class="col-md-12">
                          <div class="form-group label-floating">
                            <label class="control-label">Slug</label>
                            <input type="text" class="form-control" name="slug">
                          </div>
                        </div>
                      </div>

                      

                      <a href="{{route('category.index')}}" class="btn btn-success">Back</a>
                      <button type="submit" class="btn btn-primary">Save</button>
                    
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>


@endsection

@push('scripts')



@endpush