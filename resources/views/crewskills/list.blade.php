<!DOCTYPE html>
<html lang="pl-PL">
    @include('partials.head')
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Lista umiejętności drużyny</h2>
    <table>
        <thead>
            <tr> <th>ID</th> <th>ID modułu drużyny</th> <th>Nazwa</th></tr>
        </thead>
        <tbody>
            @foreach($crew_skills as $el)
            <tr> 
                <td>{{$el->id}}</td> 
                <td>{{$el->module_crew_id}}</td> 
                <td>{{$el->name}}</td> 
                <td><a href="<?=config('app.url'); ?>/crewskills/edit/{{$el->id}}">Edytuj</a></td>
                <td><a href="<?=config('app.url'); ?>/crewskills/show/{{$el->id}}">Usuń</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>