<!DOCTYPE html>
<html lang="pl-PL">
    @include('partials.head')
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Edytuj moduł statku</h2>
    <form class="form-inline" action="<?=config("app.url"); ?>/modulecrew/update/{{$crew->id}}" method="post">
    @csrf
    <p>
        <label for="id">ID</label>
        <input type="text" name="id" id="id" size="25" value="{{$crew->id}}" readonly />
    </p>
    <p>
        <label for="ship_module_id">ID modułu statku</label>
        <input type="text" name="ship_module_id" id="ship_module_id" size="25" value="{{$crew->ship_module_id}}" required />
    </p>
    <p>
        <label for="nick">Nazwa</label>
        <input type="text" name="nick" id="nick" size="25" value="{{$crew->nick}}" required />
    </p>
    <p>
        <label for="gender">Płeć</label>
        <input type="text" name="gender" id="gender" size="25" value="{{$crew->gender}}" required />
    </p>
    <p>
        <label for="age">Wiek</label>
        <input type="text" name="age" id="age" size="25" value="{{$crew->age}}" required />
    </p>
        <p>
            <button type="submit" class="btn btn-primary mb-2">Aktualizuj</button>
        </p>
    </form>
    <p>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    </p>
</body>
</html>