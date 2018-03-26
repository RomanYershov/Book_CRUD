@extends('layouts.app')
@section('content')

    <div class="container">
        <a href="/books/create" class="btn btn-success">Add book</a>
        <div class="row">
            @foreach($books as $book)

                  <div class="content">
                      <div class="col-md-4">
                          <div class="card">
                              <h4>{{$book->name}} {{$book->issueDate}}г</h4>
                              <p>{{$book->author}}</p>
                              <p>{{$book->numOfPages}} стр</p>
                              <form action="{{url('books/'.$book->id)}}" method="post">
                                  {{csrf_field()}}
                                  {{method_field("DELETE")}}
                                  <a href="/books/{{$book->id}}/edit" class="btn btn-info">Edit</a>
                                  <button type="submit" class="btn btn-danger">Del</button>
                              </form>
                          </div>
                      </div>
                  </div>



            @endforeach
        </div>

    </div>

@endsection

<style>



    .content a{
        color: black;
    }
    .content .card{
        background-color: #FFFFFF;
        padding:15px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius:4px;
        box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);

    }
    .content .card:hover{
        box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
        color:black;
    }

    .content .card h4{
        margin:20px;
    }
    .content .card p{
        margin:20px;
        opacity: 0.65;
    }

</style>