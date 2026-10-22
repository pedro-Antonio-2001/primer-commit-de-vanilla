<?php
  function horasRestantes(int $horasTotales, int $horasCursadas): int
  {
      return $horasTotales - $horasCursadas;
  }

  $pendientes = horasRestantes(2000, 1350);   // 650
  echo '<p>Horas restantes: ', $pendientes, '</p>';
?>

<?php
  function titulacion(string $grado = 'Superior'): string
  {
      return match ($grado) {
          'Superior' => 'Técnico Superior',
          'Medio'    => 'Técnico',
          default    => 'Titulación desconocida',
      };
  }

  echo titulacion();          // Técnico Superior
  echo titulacion('Medio');   // Técnico
?>

<?php
  function enlaceVideo(?string $video): string
  {
      if ($video === null || $video === '') {
          return 'Sin vídeo';
      }
      return '<a href="' . $video . '">vídeo</a>';
  }
?>

<?php

function nombresAlumnos(array $curriculos): array
 {
     return array_map(fn(array $curriculo): string => $curriculo['alumno'], $curriculos);
 }
?>

<?php
 function curriculosDeCiclo(array $curriculos, string $codCiclo): array
 {
     return array_values(array_filter(
         $curriculos,
         fn(array $curriculo): bool => $curriculo['ciclo'] === $codCiclo
     ));
 }

?>


<?php
 function ordenarPorAlumno(array $curriculos): array
 {
     usort($curriculos, fn(array $a, array $b): int => $a['alumno'] <=> $b['alumno']);
     return $curriculos;
 }
?>