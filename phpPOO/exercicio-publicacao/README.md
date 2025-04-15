# 📚 Exercício: Publicação de Livros

Este exercício simula o gerenciamento de informações de livros utilizando conceitos de Programação Orientada a Objetos em PHP. O projeto envolve o uso de uma classe `Livro` para armazenar dados sobre livros, como título, autor, número total de páginas, e o leitor responsável pela leitura. Além disso, há a classe `Pessoa` para representar o leitor e a classe `Publicacao` como interface para garantir que os métodos sejam implementados nas classes relacionadas.

---

## 🧠 Conceitos abordados

- Programação Orientada a Objetos (POO) em PHP
- Encapsulamento de atributos (getters e setters)
- Uso de interfaces em PHP
- Método mágico `__toString` para conversão de objetos em strings
- Interação entre PHP e HTML para exibição de dados
- Manipulação de objetos para simular a leitura de livros
- Estilo visual com CSS para apresentação dos dados

---

## 📄 Estrutura dos arquivos

- `Pessoa.php`: Define a classe `Pessoa`, que representa o leitor do livro.
- `Livro.php`: Define a classe `Livro`, que contém atributos e métodos para manipular os dados dos livros.
- `Publicacao.php`: Define a interface `Publicacao`, garantindo que as classes relacionadas implementem métodos como abrir, fechar, folhear e detalhar o livro.
- `index.php`: Arquivo principal que instancia objetos `Livro` e `Pessoa`, exibe as informações dos livros e do leitor.
- `style.css`: Arquivo de estilo para a formatação visual das informações dos livros e do leitor.

---

## 💻 Demonstração do funcionamento

Ao acessar o `index.php`, o navegador exibirá as informações dos livros e seus respectivos leitores, como título, autor, páginas e o estado do livro (aberto ou fechado):

- Exibe a ficha completa do livro e do leitor.
- Permite interagir com o livro (abrir, fechar, folhear).
- Aplica um estilo visual com cores e formatação atraente.

Exemplo básico de como utilizar a classe `Livro`:

```php
<?php
// Implementando Classes
require_once 'Livro.php';
require_once 'Pessoa.php';

// Criando um leitor
$leitor = new Pessoa("João", 25, "Masculino");

// Criando um livro
$livro = new Livro("Aprendendo PHP", "José da Silva", 300, $leitor);

// Exibindo as informações do livro
$livro->abrir();
$livro->folhear(50);
$livro->detalhes();
?>
```

---

## 📌 Como executar localmente

1. **Instale um servidor local**  
   - [XAMPP](https://www.apachefriends.org/pt_br/index.html) (recomendado)  
   - [WAMP](https://www.wampserver.com/en/)

2. **Verifique se o PHP está instalado**
   Certifique-se de que o PHP está instalado corretamente pelo terminal digitando:
   ```bash
   php -v
   ```

3. **Escolha um editor de código**  
   - [Visual Studio Code](https://code.visualstudio.com/) (recomendado)  
   - [Sublime Text](https://www.sublimetext.com/)  
   - [PHPStorm](https://www.jetbrains.com/phpstorm/)

4. **Coloque os arquivos no diretório do servidor local**  
   Exemplo com XAMPP:  
   `C:\xampp\htdocs\exercicio-publicacao`

5. **Inicie o Apache no XAMPP**

6. **Acesse no navegador:**  
   `http://localhost/php/phpPOO/exercicio-publicacao`

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.cursoemvideo.com/curso/php-poo/)
