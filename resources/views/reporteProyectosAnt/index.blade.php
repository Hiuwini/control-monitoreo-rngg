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
                <h2>Listado de proyectos anteriores</h2>
                <table>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                   @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                    </tr>
                    @endforeach
                </table>
                </body>
