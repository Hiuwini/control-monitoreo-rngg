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
                <h2>Conocer el número de participantes en los eventos</h2>
                <table>
                    <tr>
                        <th>Cantidad</th>
                        <th>Evento</th>
                    </tr>
                    <tr>
                        <td>{{ $participantes->cantidad }}</td>
                        <td>{{ $participantes->nombre }}</td>

                        
                    </tr>
                </table>
                </body>