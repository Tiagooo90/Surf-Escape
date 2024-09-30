<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Jogo do Galo</title>
</head>
<body>

<body>
<div class="container">
  <section>
  <h2>Jogo do Galo</h2>
</section>
  <div class="row">
    <div class="col-md-6">
      <div class="regras">
        <h5>Regras:</h5>
        <ul>
          <li>Número de Jogadores: 2.</li>
          <li>As regras para o Jogo do Galo são as seguintes:</li><br>
          <ul>
            <li>Os jogadores colocam, alternadamente, as suas peças de forma a construírem uma linha com 3 peças iguais em tabuleiros 3 × 3.</li>
            <li>A linha de peças iguais pode ser construída na vertical, na horizontal ou na diagonal.</li>
            <li>O jogador deve jogar tendo em conta as seguintes prioridades:</li>
            <ul><br>
              <li>Ganhar, completando a linha.</li>
              <li>Bloquear para impedir que o adversário complete a sua linha.</li>
              <li>Bloquear jogadas que proporcionem ao adversário mais do que uma posição de vantagem.</li>
              <li>Jogar no centro.</li>
              <li>Jogar no canto oposto ao do adversário.</li>
              <li>Jogar no canto vazio.</li>
            </ul>
          </ul>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <div class="board">
        <div class="cell" onclick="makeMove(0)"></div>
        <div class="cell" onclick="makeMove(1)"></div>
        <div class="cell" onclick="makeMove(2)"></div>
        <div class="cell" onclick="makeMove(3)"></div>
        <div class="cell" onclick="makeMove(4)"></div>
        <div class="cell" onclick="makeMove(5)"></div>
        <div class="cell" onclick="makeMove(6)"></div>
        <div class="cell" onclick="makeMove(7)"></div>
        <div class="cell" onclick="makeMove(8)"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="btn-container">
      <button class="btn btn-info"><a href="contacts.php" button="btn btn-info" style="text-decoration: none; color:black;">Voltar Atrás</a></button>
        <button class="btn btn-info" onclick="resetBoard()">Reiniciar</button>
      </div>
    </div>
  </div>
</div>


  <script>
    // Obter as células do tabuleiro
    const cells = document.querySelectorAll('.cell');

   // Jogadores
const players = ["Prancha Branca", "Prancha Negra"];


    // Jogador atual (X começa)
    let currentPlayer = 0;

    // Tabuleiro de jogo
    const board = ['', '', '', '', '', '', '', '', ''];

    // Adicionar eventos de clique a todas as células
    cells.forEach((cell, index) => {
      cell.addEventListener('click', () => {
        makeMove(index);
      });
    });

    // Fazer uma jogada
    function makeMove(index) {
      // Verificar se a célula está vazia e o jogo não acabou
      if (board[index] === '' && !checkWinner()) {
        // Atualizar o tabuleiro
        board[index] = players[currentPlayer];
        cell = cells[index];
        cell.innerHTML = `<img src="${getImageUrl(players[currentPlayer])}" alt="${players[currentPlayer]}">`;

        // Verificar se há um vencedor
        if (checkWinner()) {
          alert(`Jogador ${players[currentPlayer]} ganhou!`);
        } else if (!board.includes('')) {
          alert('Empate!');
        } else {
          // Alternar para o próximo jogador
          currentPlayer = (currentPlayer + 1) % players.length;

          // Fazer a jogada automática do oponente após um pequeno atraso
          setTimeout(makeOpponentMove, 500);
        }
      }
    }


    // Verificar se há um vencedor
    function checkWinner() {
      const winningCombinations = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
      ];

      for (let i = 0; i < winningCombinations.length; i++) {
        const [a, b, c] = winningCombinations[i];

        if (board[a] && board[a] === board[b] && board[a] === board[c]) {
          return true;
        }
      }

      return false;
    }

    // Reiniciar o tabuleiro
    function resetBoard() {
      board.fill('');
      cells.forEach(cell => {
        cell.innerHTML = '';
      });
      currentPlayer = 0;
    }

    // Obter a URL da imagem com base no jogador
    function getImageUrl(player) {
  if (player === "Prancha Branca") {
    return 'imagens/surfboard.png'; // jogador X
  } else if (player === "Prancha Negra") {
    return 'imagens/surfing-board.png'; //  jogador O
  }
}

</script>


<style>

  </style>
</body>
</html>

