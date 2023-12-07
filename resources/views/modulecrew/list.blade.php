<!DOCTYPE html>
<html lang="pl-PL">
    @include('partials.head')
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Lista modułów drużyny</h2>
    <table>
        <thead>
            <tr> <th>ID</th> <th>ID modułu statku</th> <th>Nazwa</th> <th>Płeć</th> <th>Wiek</th></tr>
        </thead>
        <tbody>
            @foreach($moduleCrew as $el)
            <tr> 
                <td>{{$el->id}}</td> 
                <td>{{$el->ship_module_id}}</td> 
                <td>{{$el->nick}}</td> 
                <td>{{$el->gender}}</td>
                <td>{{$el->age}}</td>
                <td><a href="<?=config('app.url'); ?>/modulecrew/edit/{{$el->id}}">Edytuj</a></td>
                <td><a href="<?=config('app.url'); ?>/modulecrew/show/{{$el->id}}">Usuń</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>