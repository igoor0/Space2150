<!DOCTYPE html>
<html lang="pl-PL">
    @include('partials.head')
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Dodaj moduł drużyny</h2>
    <form class="form-inline" action="<?=config("app.url"); ?>/modulecrew/save" method="post">
    @csrf
    <p>
        <label for="ship_module_id">ID modułu statku</label>
        <input type="text" name="ship_module_id" id="ship_module_id" size="25" required />
    </p>
    <p>
        <label for="nick">Nazwa</label>
        <input type="text" name="nick" id="nick" size="25" required />
    </p>
    <p>
        <label for="gender">Płeć</label>
        <input type="text" name="gender" id="gender" size="25" required />
    </p>
    <p>
        <label for="age">Wiek</label>
        <input type="text" name="age" id="age" size="25" required />
    </p>
    <p>
        <button type="submit" class="btn btn-primary mb-2">Zapisz</button>
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