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
                <h2>Reporte sobre el estado de los Indicadores</h2>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                    </tr>
                   @foreach($indicators as $indicator)
                    <tr>
                        <td>{{ $indicator->name }}</td>
                        <td>{{ $indicator->status }}</td>
                    </tr>
                    @endforeach
                </table>
                </body>