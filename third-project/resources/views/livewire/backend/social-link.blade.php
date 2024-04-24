{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-info pb-0">
                <p class="text-white">Add Social Link</p>
            </div>
            <div class="card-body">
                @if (session('SoclAdMsg'))
                <div class="alert alert-success">{{ session('SoclAdMsg') }}</div>
                @endif
                <form class="forms-sample" wire:submit.prevent="social_link_insert">
                    <div class="mb-2">
                        <label class="form-label">Click To Select Icon</label>
                        <style>
                            .icon_block i {
                                width: 40px;
                                height: 40px;
                                text-align: center;
                                line-height: 40px;
                                color: #fff;
                                background-color: green;
                                margin: 0 4px;
                                display: inline-block;
                            }
                        </style>
                        <div class="icon_block">
                            <i class="fab fa-behance" wire:click="bring_icon('fab fa-behance')"></i>
                            <i class="fab fa-facebook-f" wire:click="bring_icon('fab fa-facebook-f')"></i>
                            <i class="fab fa-twitter" wire:click="bring_icon('fab fa-twitter')"></i>
                            <i class="fab fa-linkedin-in" wire:click="bring_icon('fab fa-linkedin-in')"></i>
                            <i class="fab fa-pinterest" wire:click="bring_icon('fab fa-pinterest')"></i>
                            <i class="fab fa-youtube" wire:click="bring_icon('fab fa-youtube')"></i>
                            <i class="fab fa-telegram-plane" wire:click="bring_icon('fab fa-telegram-plane')"></i>
                        </div>
                        <input type="text" wire:model="link_icon" class="form-control" id="link_icon" placeholder="Click Above">
                        @error('link_icon')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputName1" class="form-label">Following Link</label>
                        <input type="text" wire:model="following_link" placeholder="URL To Follow" class="form-control" id="exampleInputName1">
                        @error('following_link')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>SL</th>
                            <th>Link Icon</th>
                            <th>Following Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($media_links as $media_link)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><i class="{{ $media_link->link_icon }}"></i>
                            </td>
                            <td>{{ $media_link->following_link }}</td>
                            <td>
                                <button wire:click="delete_social({{ $media_link->id }})" class="btn btn-danger btn-sm">Delete</button>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $media_link->id }}" wire:click="edit_icon({{ $media_link->id }})">
                                Edit
                                </button>

                                <!-- Modal -->
                                <div wire:ignore.self class="modal fade" id="exampleModal{{ $media_link->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Social Link</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @if (session('SoclEdtMsg'))
                                                <div class="alert alert-success">{{ session('SoclEdtMsg') }}</div>
                                                @endif
                                            <form class="forms-sample"
                                            wire:submit.prevent="social_link_update({{ $media_link->id }})">
                                                <div class="mb-2">
                                                    <label class="form-label">Click To Select Icon</label>
                                                    <div class="icon_block">
                                                        <i class="fab fa-behance" wire:click="bring_icon('fab fa-behance')"></i>
                                                        <i class="fab fa-facebook-f" wire:click="bring_icon('fab fa-facebook-f')"></i>
                                                        <i class="fab fa-twitter" wire:click="bring_icon('fab fa-twitter')"></i>
                                                        <i class="fab fa-linkedin-in" wire:click="bring_icon('fab fa-linkedin-in')"></i>
                                                        <i class="fab fa-pinterest" wire:click="bring_icon('fab fa-pinterest')"></i>
                                                        <i class="fab fa-youtube" wire:click="bring_icon('fab fa-youtube')"></i>
                                                        <i class="fab fa-telegram-plane" wire:click="bring_icon('fab fa-telegram-plane')"></i>
                                                    </div>
                                                    <input type="text" wire:model="link_icon" class="form-control" id="link_icon" placeholder="Click Above">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="exampleInputName1" class="form-label">Following Link</label>
                                                    <input type="text" wire:model="following_link" placeholder="URL To Follow" class="form-control" id="exampleInputName1">
                                                </div>
                                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- <script>
const icon_block = document.querySelector(".icon_block");
const link_icon = document.querySelector("#link_icon");
icon_block.addEventListener('click', function (e) {
    link_icon.value = e.target.attributes.class.nodeValue;
});
</script> --}}
