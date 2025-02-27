# Projeto - Gerenciamento de Garagem de Carros

Este projeto é uma aplicação simples de gerenciamento de garagem de carros, desenvolvida em **PHP**. Ele permite adicionar carros à garagem, verificar o espaço disponível e exibir informações sobre os carros.

---

## Funcionalidades Principais

1.  **Adicionar Carro:**
    * Verifica se há espaço disponível na garagem antes de adicionar um novo carro.
    * Exibe uma mensagem informando se o carro foi adicionado ou se a garagem está cheia.

2.  **Verificar Espaço:**
    * Exibe o número de vagas disponíveis na garagem.

3.  **Exibir Informações do Carro:**
    * Exibe o nome da marca do carro.
    * Exibe o número associado à marca do carro.
    * Exibe o nome completo da marca do carro.

---

## Estrutura do Código

### Arquivos e Suas Responsabilidades

* **`Index.php`**
    * Ponto de entrada da aplicação.
    * Importa os arquivos `Marcas.php` e `Carros.php`.
    * Cria um novo carro e exibe informações sobre ele.
    * Verifica o espaço disponível na garagem.

* **`Class/Carros.php`**
    * Define a classe `Carros` com propriedades para marca, modelo, cor e ano.
    * Implementa métodos para verificar o espaço disponível na garagem (`verificarEspaco`), obter o espaço disponível (`espacoNaGaragem`) e obter o número total de carros na garagem.

* **`Class/Marcas.php`**
    * Define o enum `Marcas` com casos para Fiat, Ford, Chevrolet e Hyundai.
    * Implementa um método para obter o nome completo da marca (`getNomeCompleto`).

---

## Como Executar o Projeto

1.  **Clone o repositório.**

2.  **Certifique-se de ter o PHP instalado.**

3.  **Abra o arquivo `Index.php` no seu navegador ou execute-o através da linha de comando com o interpretador PHP.**

4.  **Visualize as informações exibidas no console ou no navegador.**

---

## Tecnologias Utilizadas

* **PHP 8.1+:** Lógica da aplicação e manipulação de objetos.

---

## Autor

Lucas Degrande