<div class="modal fade" id="modalCreateTask{{ $card->id }}" tabindex="-1"
    aria-labelledby="modalCreateTask{{ $card->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateTask{{ $card->id }}Label">{{ $card->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('taskTitle')}}" method="POST">
                    @csrf
                    <input type="hidden" name="card_id" value="{{$card->id}}" />
                    <input type="text" name="title" class="form-control mb-3" />
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
