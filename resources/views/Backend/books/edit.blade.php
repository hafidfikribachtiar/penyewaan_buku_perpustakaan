@extends('layout.app')
@section('content')

<div class="content-wrapper">
<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create books</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>

        <form action="{{url('admin/books/edit')}}" method="POST">
          @csrf
        <input style="display: none;" type="text" name="id" value="{{$books->id}}">
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Title</label>
              <input required  type="text" id="inputName" class="form-control"
                                 name="title" placeholder="Title" 
                                 value="{{ $books->title }}">
            </div>
            <div class="form-group">
              <label for="inputDescription">Description</label>
              <textarea required id="inputDescription" class="form-control" rows="4"
                        name="description" placeholder="Description" 
                        >{{ $books->description  }}</textarea>
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Price</label>
              <input required type="number" id="inputClientCompany" class="form-control"
                     name="price" placeholder="Price" 
                     value="{{ $books->price }}">
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <a href="#" class="btn btn-secondary">Cancel</a>
        <!-- /.card -->
        <div class="row">
          <div class="col-12 float-right">
            <input type="submit" value="Create new Porject" class="btn btn-success float-right-mb-3">
        </div>
        </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
      </div>
    </div>
  </section>

  @endsection