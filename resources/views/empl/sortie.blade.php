@extends("layouts.mmaster")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url("point/".$point->id)}}" method="post" >
        <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
                <label for="">date</label>
                <div class="form-group">
                <label for="">date</label>
                <input type="date" name="date" class="form-control">
                </div>
                <label for="">sortie</label>
                <select name="status" id="">
                <option value="sortie" name="status">sortie</option>
                </select> <br>
                <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value="enrigster">
                </div>
            </form>
        </div>
    </div>
  </div>
@endsection