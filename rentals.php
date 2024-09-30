 <?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>

<body>
<section>
    <div class="container">
  <h2 class="rentals">Packs e Aluguer</h2>
  <p class="rentals" style="align-self:center;">Selecione o pack que mais lhe agrade. Em caso de dúvidas, não hesite em entrar em contato conosco. Estamos aqui para ajudá-lo e teremos todo o prazer em fornecer todas as informações necessárias.</p>
</div>
</section>
<main>
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Pack Iniciante</label>
  
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Pack Progressão</label>
  
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Pack Intensivo</label>
  
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">Pack Familia</label>
  
  <input id="tab5" type="radio" name="tabs">
  <label for="tab5">Aluguer</label>
  
  <input id="tab6" type="radio" name="tabs">
  <label for="tab6">Video Aulas</label>
  
  <section id="content1">
    <div class="pack-content">
      <h4>Pack Iniciante</h4>
      <p class="packs">5 aulas de surf para iniciantes. Instrutores experientes para orientar e ensinar as técnicas básicas. Pranchas e equipamentos incluídos. Ideal para aqueles que estão começando a surfar e desejam construir uma base sólida no surf.</p>
      <br>
      <button class="booknow btn btn-info" onclick="redirectToContacts('Pack Iniciante')">Reservar</button>
    </div>
  </section>
  
  <section id="content2">
    <div class="pack-content">
      <h4>Pack Progressão</h4>
      <p class="packs">10 aulas de surf para todos os níveis. Instrutores qualificados para ajudar a aprimorar as habilidades existentes, pranchas e equipamentos incluídos. Perfeito para surfistas intermediários que desejam evoluir e progredir nas suas habilidades de surf.</p>
      <br>
      <button class="booknow btn btn-info"onclick="redirectToContacts('Pack Progressão')">Reservar</button>
    </div>
  </section>
  
  <section id="content3">
    <div class="pack-content">
      <h4>Pack Intensivo</h4>
      <p class="packs">3 dias consecutivos de aulas intensivas de surf. Foco no desenvolvimento rápido e intensivo de técnicas avançadas. Aulas personalizadas e instrutores dedicados. Inclui pranchas de alto desempenho e equipamentos especializados.</p>
      <br>
      <button class="booknow btn btn-info" onclick="redirectToContacts('Pack Intensivo')">Reservar</button>
    </div>
  </section>
  
  <section id="content4">
    <div class="pack-content">
      <h4>Pack Familia</h4>
      <p class="packs">5 aulas de surf para toda a família (até 4 pessoas). Instrutores experientes e adaptáveis a diferentes idades e níveis de habilidade. Pranchas e equipamentos adequados. Uma ótima maneira de desfrutar do surf em família e criar memórias.</p>
      <br>
      <button class="booknow btn btn-info" onclick="redirectToContacts('Pack Familia')">Reservar</button>
    </div>
  </section>
  
  <section id="content5">
    <div class="pack-content">
      <h4>Aluguer</h4>
      <p class="packs">Aluguer de pranchas e equipamentos de surf. Disponível para todos os níveis. Aproveite o surf sem a necessidade de ter o seu próprio equipamento.</p>
      <br>
      <button class="booknow btn btn-info" onclick="redirectToContacts('Aluguer')">Reservar</button>
    </div>
  </section>
  
  <section id="content6">
    <div class="pack-content">
      <h4>Video Aulas</h4>
      <p class="packs">Desfrute de videoaulas de surf com instrutores experientes. Aprenda técnicas avançadas e aprimore suas habilidades de surf a partir do conforto da sua casa.</p>
      <br>
      <button class="booknow btn btn-info" onclick="redirectToContacts('Video Aulas')">Reservar</button>
    </div>
  </section>
</main>


</body>

<script>
  function redirectToContacts(package) {
    window.location.href = 'contacts.php?subject=' + encodeURIComponent(package);

   
  function redirectToContacts(package) {
    const people = prompt('Enter the number of people:');
    const date = prompt('Choose a date:');
    const encodedPackage = encodeURIComponent(package);
    const encodedPeople = encodeURIComponent(people);
    const encodedDate = encodeURIComponent(date);
    window.location.href = `contacts.php?subject=${encodedPackage}&people=${encodedPeople}&date=${encodedDate}`;
  }

  }
</script>

</html>

<?php
include 'footer.php';
?> 