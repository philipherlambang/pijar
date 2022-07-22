<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <div class=" container rounded-3 border border-2 border-dark my-5 bg-white" style="height:auto;">
            <div>
            <h1 class=" h1">To Do List</h1> 
            <div class="row">
                <form action="/task" method="POST">
                    @csrf
                    <div class=" col-8">
                        <input class=" py-3 form-control shadow" placeholder="input your task" type="text" name="task" /> 
                    </div>
                    <div class="col-2">
                        <input type="submit" class=" mt-2 btn btn-dark" />
                    </div>
                </form>
            </div>
        </div>
            <hr>
        <div class="row rounded bg-white">
            <div class=" col-12"> 
            <ul class=" list-group" id="list">
                @foreach ($Tasks as $task)
                    <li>task {{ $task->nama }}</li>
                @endforeach
            </ul>
            </div> 
        </div> 
    </div>   
    </body>
</html>
