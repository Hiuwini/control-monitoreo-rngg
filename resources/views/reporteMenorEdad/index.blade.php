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
                <h2>Cantidad de Beneficiarios que son menores de edad</h2>
                <table>
                    <tr>
                        <th>Cantidad</th>
                    </tr>
                    <tr>
                        <td>{{ $beneficiarios->cantidad }}</td>
                    </tr>
                </table>
                </body>