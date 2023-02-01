<TABLE border="1">
    <thead>
    <tr>
      <th>Pais</th>
      <th>Fecha Consulta</th>
      <th>Fecha Ultima Consulta </th><!-- comment -->
      <th>Total Casos registrados </th>
      <th>Nuevos casos </th>
    </tr>
  </thead>
    <?php 
          echo "<tr><td>" .$paisApi->getPais() .  "</td>"
          . "<td>" . $fechaHoy . "</td>"
              . "<td>".$paisAnterior->getUltimaModificacion() ."</td>"
              . "<td>". $paisApi->getTotalCasos() ."</td>"
              . "<td>". $nuevosCasos ."</td></tr>";
        ?>
</TABLE>

<button style="margin-top:30px"><a href="../index.php" style="text-decoration:none">Volver a consultar otro pais</a></button>