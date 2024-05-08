<style>
    .custom-alert {
    padding: 10px;
    margin: 10px 0;
    border: 1px solid transparent;
    border-radius: 4px;
}

.custom-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}

.custom-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}

</style>
@if(session('success'))
    <div class="custom-alert custom-success">
        {{session('success')}}
    </div>
@endif
@if($errors->any())
    <div class="custom-alert custom-danger">
        @foreach($errors->all() as $error)
            <p class="mb-0">{{$error}}</p>
        @endforeach
    </div>
@endif

@if (session('status'))
    <div class="custom-alert custom-success">
        {{session('status')}}
    </div>
@endif

