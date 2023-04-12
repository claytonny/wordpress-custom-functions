<?php
function resumo_personalizado() {
  $resumo = substr(wp_trim_words(get_the_content(), 50, ' […]' ), 0, 50);
  $resumo_estilizado = '<spam class="resumo-style">' . $resumo . '</spam>';
  return $resumo_estilizado;
}
?>
