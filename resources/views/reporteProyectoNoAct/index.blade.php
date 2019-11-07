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
                <h2>Reporte de Proyectos</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha inicio</th>
                        <th>Fecha Final</th>
                        
                    </tr>
                   @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->date_begin }}</td>
                        <td>{{ $project->date_end }}</td>
                    </tr>
                    @endforeach
                </table>
                </body>