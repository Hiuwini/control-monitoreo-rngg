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
                <h2>Reporte de estado de los beneficiarios</h2>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Estado</th>                        
                    </tr>
                   @foreach($beneficiarios as $beneficiario)
                    <tr>
                        <td>{{ $beneficiario->nombrebeneficiario }}</td>
                        <td>{{ $beneficiario->apellidobeneficiario }}</td>
                        <td>{{ $beneficiario->estado }}</td>
                    </tr>
                    @endforeach
                </table>
                </body>

