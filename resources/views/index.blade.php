@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('response'))
                    <div id="flash-message" class="align-content-center badge-info">
                        {{ session('response') }}
                    </div>

                    <script>
                        // Wait 3 seconds, then fade out the message
                        setTimeout(function () {
                            var flash = document.getElementById('flash-message');
                            if (flash) {
                                flash.style.transition = 'opacity 0.5s ease-out';
                                flash.style.opacity = '0';
                                setTimeout(function () {
                                    flash.style.display = 'none';
                                }, 500); // Remove from DOM after fade-out
                            }
                        }, 3000); // 3 seconds
                    </script>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-striped-columns">
                    <thead class="card-header">
                    <td>Username</td>
                    <td>Message Text</td>
                    <td>Message Time</td>
                    <td>Operations</td>
                    </thead>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$username}}</td>
                            <td>{{$message->text}}</td>
                            <td>{{$message->time}}</td>
                            <td class="d-flex">
                                <form action="{{route('delete',[$message->id])}}" method="post" class="mr-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <form action="{{route('edit',[$message->id])}}" method="get">
                                    <button type="submit" class="btn btn-info">Edit</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-12 d-flex justify-content-center fixed-bottom mb-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                <form id="" action="{{route('insert')}}" method="post" style="width: 85%;" class="ml-5" >
                    @csrf
                    <input type="text" id="chat_dialogue" name="text">
                    <input type="submit" class="btn btn-primary" value="submit">
                </form>
                @endsection

            </div>
        </div>
    </div>
