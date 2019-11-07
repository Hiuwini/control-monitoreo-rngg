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
                <h2>Conocer responsables de cada actividad</h2>
                <table>
                    <tr>
                        <th>Nombre Responsable</th>
                        <th>Nombre Evento</th>
                    </tr>
                   @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->User }}</td>
                        <td>{{ $project->Act }}</td>
                    </tr>
                    @endforeach
                </table>
                </body>
