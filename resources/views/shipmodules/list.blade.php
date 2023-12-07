<!DOCTYPE html>
<html lang="pl-PL">
    @include('partials.head')
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Lista modułów statku</h2>
    <table>
        <thead>
            <tr> <th>ID</th> <th>Nazwa Modułu</th> <th>Czy działa?</th> </tr>
        </thead>
        <tbody>
            @foreach($ship_modules as $el)
            <tr> 
                <td>{{$el->id}}</td> 
                <td><a href="<?=config('app.url'); ?>/shipmodules/crew/{{$el->id}}">{{$el->module_name}}</a></td> 
                <td>
                    @if($el->is_workable === TRUE)
                        Tak
                    @else
                        Nie
                    @endif
                </td> 
                <td><a href="<?=config('app.url'); ?>/shipmodules/edit/{{$el->id}}">Edytuj</a></td>
                <td><a href="<?=config('app.url'); ?>/shipmodules/show/{{$el->id}}">Usuń</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>