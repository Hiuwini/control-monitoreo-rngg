
<h2>Reporte de Usuarios</h2>
<table>
	<thead>
		<tr>
			<th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nombre Usuario</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
        	<td>{{ $user->id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->status }}</td>
            <td>{{ $user->job }}</td>
        </tr>
        @endforeach
    </tbody>
</body>