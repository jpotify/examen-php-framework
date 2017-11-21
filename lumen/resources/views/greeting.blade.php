<html>
    <body>
        <table>
            <thead>
                <th>Codigo</th>
                <th>Usuario</th>
                <th>Edad</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->getId() }}</td>
                        <td>{{ $user->getUserName()->get() }}</td>
                        <td>{{ $user->getAge()->get() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>