<!-- It is never too late to be what you might have been. - George Eliot -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>User List <span style="float:right;">Total {{ $total_user }}</span></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Records</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <form action="{{ route('user.status', $user->id) }}" method="POST">
                                    @csrf
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                            Action button
                                        </button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" name="role" value="canceled" type="submit">Cancel</button>
                                            <button class="dropdown-item" name="role" value="member" type="submit">Renew</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td><a href="{{ route('user.records',$user->id) }}" class="btn btn-success">Book Records</a></td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $users->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
