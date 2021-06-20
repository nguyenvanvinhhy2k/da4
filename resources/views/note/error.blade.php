@if (Session::has('error'))
    <span class='alert alert-danger' style="margin-left:15px;width:95% !important;color:red">{{ Session::get('error') }}</span>
@endif
