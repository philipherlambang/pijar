<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <form class="my-4" action="{{ route('cardTitle') }}" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Card Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title"
                        name="title">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>

            <div class="row">
                @foreach ($container as $card)
                    <div class="card mb-4 col-md-6">
                        @include('components.card.card-header', ['card' => $card])
                        @include('components.card.task-list', ['card' => $card])
                        @include('components.card.card-footer', ['card' => $card])
                    </div>
                    @include('components.modal.modal-add-task', ['card' => $card])
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
