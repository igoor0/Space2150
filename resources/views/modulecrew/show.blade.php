<!DOCTYPE html>
<html lang="pl-PL">
    @include('partials.head')
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Potwierdzenie usunięcia - ID: {{$crew->id}}</h2>
    <form class="form-inline" action="<?=config("app.url"); ?>/modulecrew/delete/{{$crew->id}}" method="post">
    @csrf
    <p>
        <label for="id">ID</label>
        <input type="text" name="id" id="id" size="25" value="{{$crew->id}}" readonly />
    </p>
    <p>
        <label for="ship_module_id">ID modułu statku</label>
        <input type="text" name="ship_module_id" id="ship_module_id" size="25" 
        value="{{$crew->ship_module_id}}" required readonly/>
    </p>
    <p>
        <label for="nick">Nazwa</label>
        <input type="text" name="nick" id="nick" size="25" 
        value="{{$crew->nick}}" required readonly/>
    </p>
    <p>
        <label for="gender">Płeć</label>
        <input type="text" name="gender" id="gender" size="25" 
        value="{{$crew->gender}}" required readonly/>
    </p>
    <p>
        <label for="age">Wiek</label>
        <input type="text" name="age" id="age" size="25" 
        value="{{$crew->age}}" required readonly/>
    </p>
        <p>
            <button type="submit" class="btn btn-primary mb-2">Usuń</button>
        </p>
    </form>
    </div>
</body>
</html>