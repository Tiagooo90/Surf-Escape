<?php include 'header.php';

?>

<html>
  <body>
<section class="gallery min-vh-100">
  <div class="container-lg">
    <h2 class="gallery">Galeria</h2>
      <p class="gallery">A galeria apresenta uma coleção impressionante de imagens que capturam a essência do surf.
         Cada imagem reflete o que os nossos alunos sentem e disfrutam connosco. 
         Desde as magníficas paisagens costeiras até as manobras radicais dos surfistas, cada foto transmite a energia e a beleza desse esporte apaixonante. 
        Explore a galeria e deixe-se envolver pela magia da Surf Escape, através dessas imagens inspiradoras.</p>

    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
      <div class="col">
        <img src="imagens/surf_imagem10.png" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem2.png" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem25.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem23.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem7.png" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem6.png" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem5.png" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem11.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem14.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem19.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem13.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem18.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem26.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem27.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="col">
        <img src="imagens/surf_imagem28.jpg" class="gallery-item" alt="gallery">
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <img src="imagens/surf_imagem2.png" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div>
</body>

<script>
  $(document).ready(function() {
    $('.gallery-item').click(function() {
      var src = $(this).attr('src');
      $('.modal-img').attr('src', src);
      $('#gallery-modal').modal('show');
    });
  });
</script>

<html>
<?php include 'footer.php'; ?>






