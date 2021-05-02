@if ($errors->any())
<div class="notification is-danger">
    <button class="delete"></button>
         <div>
            <div>{{ 'Ups! Algo salió mal.' }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
</div>
@endif
@if(session('message'))
<div class="notification is-success">
    <button class="delete"></button>
         <div>
            <div>{{ 'Mensaje' }}</div>
            <p>{{session('message')}}</p>
        </div>
</div>
@endif


