{{-- If your happiness depends on money, you will never be happy with yourself. --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box mt-4">
                @if (session('CtgrAdMsg'))
                <div class="alert bg-success text-white">{{ session('CtgrAdMsg') }}</div>
                @endif
                <form role="form" wire:submit.prevent="subject_insert">
                    <div class="form-group">
                        <label for="exampleInputName1">Add Subject Name</label>
                        <input type="text" wire:model="subject_name" class="form-control" id="exampleInputName1" placeholder="Subject Name">
                        @error('subject_name')
                        <div class="alert bg-danger text-white">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Subject Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ $subject->created_at }}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{ $subject->id }}" wire:click="edit_subject({{ $subject->id }})">
                                    Edit
                                    </button>
                                    <!-- Modal -->
                                    <div wire:ignore.self class="modal fade" id="exampleModal{{ $subject->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    @if (session('ctgrUpdtMsg'))
                                                        <div class="alert bg-success text-white">
                                                            {{ session('ctgrUpdtMsg') }}
                                                        </div>
                                                    @endif
                                                    <form role="form" wire:submit.prevent="subject_update({{ $subject->id }})">
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Add Subject Name</label>
                                                            <input type="text" wire:model="subject_name" class="form-control" id="exampleInputName1" placeholder="Subject Name">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button href="#" class="btn btn-danger" wire:click="delete_subject({{ $subject->id }})" wire:confirm="Are you sure you want to delete this subject?">Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
