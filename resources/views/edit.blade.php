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
                    <td>Message Text</td>
                    <td>Operations</td>
                    </thead>
                    <form action="{{route('update',[$message->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <tr>
                            <td>
                                <input type="text" class="w-100" value="{{$message->text}}" name="text"/>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif

                            </td>
                            <td>
                                <button type="submit" class="btn btn-info">Update</button>
                            </td>
                    </form>
                    <form action="{{route('show')}}" method="get">
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </form>

                </table>
            </div>
        </div>
    </div>
@endsection
