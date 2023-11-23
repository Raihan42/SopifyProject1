@extends('shopify-app::layouts.default')

@section('content')
    <H1>Welcome</H1>
    <p><a href="{{route('products.index')}}">product</p>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection