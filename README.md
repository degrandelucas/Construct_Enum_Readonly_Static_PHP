# Projeto - Gerenciamento de Garagem de Veículos

Este projeto é uma aplicação simples de gerenciamento de garagem de veículos, desenvolvida em **PHP**. Ele permite adicionar carros e motos à garagem, verificar o espaço disponível e exibir informações sobre os veículos.

---

## Funcionalidades Principais

1.  **Adicionar Veículo:**
    * Verifica se há espaço disponível na garagem antes de adicionar um novo veículo (carro ou moto).
    * Exibe uma mensagem informando se o veículo foi adicionado ou se a garagem está cheia.

2.  **Verificar Espaço:**
    * Exibe o número de vagas disponíveis na garagem.

3.  **Exibir Informações do Veículo:**
    * Exibe o nome da marca do veículo.
    * Exibe o número associado à marca do veículo.
    * Exibe o nome completo da marca do veículo.

---

## Estrutura do Código

### Arquivos e Suas Responsabilidades

* **`Index.php`**
    * Ponto de entrada da aplicação.
    * Importa os arquivos `Marcas.php`, `Automoveis.php`, `Carros.php` e `Motos.php`.
    * Cria um novo carro e uma nova moto, exibindo informações sobre eles.
    * Verifica o espaço disponível na garagem antes de adicionar cada veículo.

* **`Models/Automoveis.php`**
    * Define a classe abstrata `Automoveis` com propriedades para marca, cor e ano.
    * Implementa métodos estáticos para verificar o espaço disponível na garagem (`verificarEspaco`) e obter o espaço disponível (`espacoNaGaragem`).

* **`Class/Carros.php`**
    * Define a classe `Carros` que estende `Automoveis`, com uma propriedade adicional para o modelo do carro.

* **`Class/Motos.php`**
    * Define a classe `Motos` que estende `Automoveis`, com uma propriedade adicional para o estilo da moto.

* **`Class/Marcas.php`**
    * Define o enum `Marcas` com casos para Fiat, Ford, Chevrolet, Hyundai e Honda.
    * Implementa um método para obter o nome completo da marca (`getNomeCompleto`).

---

## Como Executar o Projeto

1.  **Clone o repositório.**

2.  **Certifique-se de ter o PHP instalado (versão 8.1 ou superior).**

3.  **Execute o arquivo `Index.php` no terminal ou no navegador.**

    ```bash
    php Index.php
    ```

4.  **Visualize as informações exibidas no console ou no navegador.**

---

## Tecnologias Utilizadas

* **PHP 8.1+:** Lógica da aplicação e manipulação de objetos.

---

## Autor

Lucas Degrande