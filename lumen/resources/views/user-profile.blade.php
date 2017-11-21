<html>
    <body>
        <table>
            <thead>
                <th>Codigo</th>
                <th>Usuario</th>
                <th>Edad</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->getId() }}</td>
                    <td>{{ $user->getUserName()->get() }}</td>
                    <td>{{ $user->getAge()->get() }}</td>
                </tr>
            </tbody>
        </table>
        <h3>Usuarios favoritos</h3>
        <table>
            <thead>
                <th>Codigo</th>
                <th>Usuario</th>
            </thead>
            <tbody>
                @foreach ($user->getFavoriteUsers() as $favUser)
                    <tr>
                        <td>{{ $favUser->getId() }}</td>
                        <td>{{ $favUser->getUserName()->get() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Pagos</h3>
        <table>
            <thead>
                <th>Codigo</th>
                <th>Importe</th>
                <th>Fecha</th>
            </thead>
            <tbody>
                @foreach ($user->getPayments() as $payment)
                    <tr>
                        <td>{{ $payment->getId() }}</td>
                        <td>{{ $payment->getAmount()->get() }}</td>
                        <td>{{ $payment->getDate()->format("Y-m-d") }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>