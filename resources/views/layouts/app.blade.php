<!doctype html>
<html lang="en">
@section('htmlheader')
  @include('layouts.partials.htmlheader')
@endsection

<body>
@section('sidebar')
    @include('layouts.partials.sidebar')
@endsection


@yield('main-content')

@section('footer')
    @include('layouts.partials.footer')
@endsection
</body>
</html>