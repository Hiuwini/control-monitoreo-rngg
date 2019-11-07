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
                <h2>Nombres de cada actividad</h2>
                <table>
                    <tr>
                        <th>Nombre</th>                   
                    </tr>
                   @foreach($actividades as $actividad)
                    <tr>
                        <td>{{ $actividad->nombre }}</td>
                    </tr>
                    @endforeach
                </table>
                </body>
