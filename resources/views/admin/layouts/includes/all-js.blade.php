<!-- JavaScript files-->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
<script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/js/charts-home.js') }}"></script>
<script src="{{ asset('admin/js/front.js') }}"></script>

{{-- Toastr --}}
<script src="{{ asset('admin/js/toastr.min.js') }}"></script>

<script>
  $(function () {
        toastr.options.closeButton = true;
        @foreach(['success', 'warning', 'error', 'info'] as $item)
            @if(session($item))
            toastr['{{ $item }}']('{{ session($item) }}');
        @endif
        @endforeach
    });
</script>
