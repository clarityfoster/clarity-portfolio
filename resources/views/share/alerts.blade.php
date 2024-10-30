@if (session('message-contact'))
    <div class="alert alert-info mt-2 mb-4">
        <ul class="list-unstyled">
            @foreach (session('message-contact') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-warning">
        <ol>
            @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ol>
    </div>
@endif