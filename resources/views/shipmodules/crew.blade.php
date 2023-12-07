<!DOCTYPE html>
<html lang="pl-PL">
    @include('partials.head')
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Lista załogantów: {{$shipmodule->module_name}}</h2>
    <table>
        <thead>
            <tr> <th>ID</th> <th>Imię</th>  </tr>
        </thead>
        <tbody>
            @foreach($crew as $el)
            <tr> 
                <td>{{$el->id}}</td> 
                <td>{{$el->nick}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>