@if (Session::has('flash_message'))
    <div class="alert alert-info">
        {{ Session::get('flash_message') }}
    </div>
@endif