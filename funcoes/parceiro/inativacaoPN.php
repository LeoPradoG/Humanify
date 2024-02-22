<?php

        include '../../conexao_sqlsrv.php';

        $consulta = "SELECT T200.* FROM(
            SELECT T100.*,
            DATEDIFF(MONTH,T100.ultima_compra,GETDATE()) AS 'Meses',
            CONVERT(VARCHAR(10), T100.ultima_compra, 120) AS 'ultima_compra_formatted'
                                    
            FROM (SELECT T0.CardCode 'Codigo_cliente',
                    T0.CardName 'Nome_Cliente',
            (SELECT T2.DocDate AS 'Ultimo_Pedido'
            FROM ORDR T2
            WHERE T2.CardCode = T0.CardCode
            AND T2.DocEntry IN(SELECT MAX(T3.DocEntry) AS 'ULT_DOC'
                                FROM ORDR T3
                                WHERE T3.CardCode = T2.CardCode))  AS 'ultima_compra'
            FROM OCRD T0
            WHERE T0.CardCode LIKE '%C%') T100)T200
            WHERE T200.Meses >= 6
            ORDER BY T200.ultima_compra DESC, T200.Codigo_cliente ASC";

        $result = sqlsrv_query($conn, $consulta);

        echo '<div style="width: 100%; background-color: #f8f6f6; min-height: 100%; padding: 2% 5% 5% 10%;">';

        echo '<table class="table table-striped " style="text-align: center;" id="pn_not_sales">';

                echo '<thead>';

                        echo '<th style="text-align: center; background-color:#46606e;"> Codigo Cliente</th>';
                        echo '<th style="text-align: center; background-color:#46606e;"> Nome Cliente</th;>';
                        echo '<th style="text-align: center; background-color:#46606e;"> Ultima Compra</th>';
                        echo '<th style="text-align: center; background-color:#46606e;"> Meses</th>';

                       echo '<th style="text-align: center; background-color:#46606e;"><input type="checkbox" id="checked_pn"> </th>';

                echo '</thead>';


                echo '<tbody>';

                        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){

                                echo '<tr style="text-align: center;">';

                                echo '<td class="align-middle" style="text-align: center;">'. $row['Codigo_cliente'] . '</td>';
                                echo '<td class="align-middle" style="text-align: center;">'. $row['Nome_Cliente'] . '</td>';
                                echo '<td class="align-middle" style="text-align: center;">'. $row['ultima_compra_formatted']. '</td>';
                                echo '<td class="align-middle" style="text-align: center;">'. $row['Meses'] . '</td>';
                                echo '<td class="align-middle" style="text-align: center;"><input type="checkbox" id="checked_parceiro_'.$row['Codigo_cliente'].'" onclick="checked_pn(\''.$row['Codigo_cliente'].'\')"></td>';

                                
                                echo '</tr>';

                        }
                      

                echo '</tbody>';
                
       echo '</table>';


        echo '</div>';

?>

<script>

    $(document).ready( function () {

        $('#pn_not_sales').DataTable({

            pageLength: 15,
            colReorder: true, // Ativa a funcionalidade ColReorder
            dom: 'Bfrtip', // Define os elementos a serem exibidos: botões de exportação
            buttons: [
                {
                    extend: 'excel', // Botão de exportação em Excel
                    text: '<i class="fas fa-file-excel"></i>', // Texto com ícone
                    title: 'Parceiros',
                    attr: {
                        id: 'excel-button'
                    }
                }
            ],

            order: [[4, 'desc']],
            columnDefs: [{
            targets: -1, // Última coluna
            orderable: false // Desativa a ordenação
            }],
                
            language: {

                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Pesquisar:",
                "paginate": {

                    "first": "Primeira",
                    "last": "Última",
                    "next": "<i class='fa-solid fa-angles-right'></i>",
                    "previous": "<i class='fa-solid fa-angles-left'></i>"
                    
                }
            }


        });



    } );

</script>


