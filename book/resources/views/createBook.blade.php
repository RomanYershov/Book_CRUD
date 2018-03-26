
@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Book
                </div>

                <div class="panel-body">

                    <form action="/books" method="POST" class="form-horizontal">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Author</label>
                            <div class="col-sm-6">
                                <input type="text" name="author" id="task-name" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Year</label>
                            <div class="col-sm-6">
                                <input type="text" name="issueDate" id="task-name" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Pages</label>
                            <div class="col-sm-6">
                                <input type="text" name="numOfPages" id="task-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add book
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection