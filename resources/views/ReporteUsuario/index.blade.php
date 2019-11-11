                <head>
                    <style>
                        table 
                        {
                            font-family: arial, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                        }

                        td, th
                        {
                            border: 1px solid #dddddd;
                            text-alig: left;
                            pedding: 8px;
                        }

                        tr:nth-child(even)
                        {
                            background-color: #dddddd;
                        }

                    </style>
                </head>
                <body>
                <h2>Reporte de Usuarios</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nombre Usuario</th>
                    </tr>
                   @foreach($beneficiarios AS $beneficiario)
                    <tr>
                        <td>{{ $beneficiario->nombrebeneficiario }}</td>
                        <td>{{ $beneficiario->apellidobeneficiario }}</td>
                        <td>{{ $beneficiario->dpicui }}</td>
                        <td>{{ $beneficiario->telefono }}</td>
                    </tr>
                    @endforeach
                </table>
                </body>

                        





