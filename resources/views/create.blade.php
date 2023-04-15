@extends('layouts.index')

@section('title','Sell')

@section('content')
    <form action="/create/upload" method="post">
        @csrf
        <div class="mb-3">
            <label for="file" class="form-label">Image</label>
            <input type="file" class="form-control" id="file" name="file" required>
            </div>
        <div class="mb-3">
        <label for="nameProduct" class="form-label">Name Product</label>
        <input type="text" class="form-control" id="nameProduct" name="nameProduct" required>
        </div>
        <div class="mb-3">
            <label for="descProduct" class="form-label">Description Product</label>
            <input type="text" class="form-control" id="descProduct" name="descProduct" required>
        </div>
        <div class="mb-3">
            <label for="valueProduct" class="form-label">Value Product</label>
            <input type="number" class="form-control" id="valueProduct" name="valueProduct" required>
        </div>
        <a href="/" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection