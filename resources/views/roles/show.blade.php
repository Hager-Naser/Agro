@extends('layouts.main-body')
@section('css')
    <!--Internal  Font Awesome -->
    <link href="{{ URL::asset('assets/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!--Internal  treeview -->
    <link href="{{ URL::asset('assets/plugins/treeview/treeview-rtl.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="view_products">
    <div class="container">
        <div class="heading">
            <h2>Show Role</h2>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>
        <div class="boxes d-flex justify-content-start align-items-center flex-wrap">

            <div class="box">
                <ul id="treeview1">
                    <li><a href="#">{{ $role->name }}</a>
                        <ul>
                            @if (!empty($rolePermissions))
                                @foreach ($rolePermissions as $v)
                                    <li>{{ $v->name }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ URL::asset('assets/plugins/treeview/treeview.js') }}"></script>
@endsection
