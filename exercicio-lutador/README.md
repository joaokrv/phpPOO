# 🥊 Exercício: Projeto Lutadores

Este exercício simula o gerenciamento de informações de lutadores utilizando conceitos de Programação Orientada a Objetos em PHP. O projeto envolve o uso de uma classe `Lutador` para armazenar dados sobre lutadores, como nome, idade, vitórias, derrotas, e calcular uma avaliação de desempenho.

---

## 🧠 Conceitos abordados

- Programação Orientada a Objetos (POO) em PHP
- Encapsulamento de atributos (getters e setters)
- Estrutura condicional para avaliação de desempenho
- Interação entre PHP e HTML para exibição de dados
- Estilo visual com CSS para apresentação dos dados

---

## 📄 Estrutura dos arquivos

- `Lutador.php`: Define a classe `Lutador`, com atributos e métodos para manipular dados dos lutadores.
- `index.php`: Arquivo principal que instancia objetos `Lutador`, exibe suas informações e calculam sua avaliação de desempenho.
- `style.css`: Arquivo de estilo para a formatação visual das informações dos lutadores.

---

## 💻 Demonstração do funcionamento

Ao acessar o `index.php`, o navegador exibirá as informações dos lutadores, como nome, idade, vitórias, derrotas, e avaliação (S, A, B, C ou D), de acordo com seu desempenho:

- Exibe a ficha completa do lutador.
- Calcula a avaliação baseada em vitórias e derrotas.
- Aplica um estilo visual com cores para cada avaliação.

Exemplo básico de como utilizar a classe `Lutador`:

```php
<?php
require_once 'Lutador.php';


// Criando uma instância de lutador
$lutador1 = new Lutador("Carlos Silva", "Brasil", 28, 1.75, 75.5);
$lutador1->setVitorias(10);
$lutador1->setDerrotas(3);
$lutador1->setEmpates(1);

// Exibindo as informações do lutador
echo $lutador1->apresentar();
?>
```

---

## 📌 Como executar localmente

1. **Instale um servidor local**  
   - [XAMPP](https://www.apachefriends.org/pt_br/index.html) (recomendado)  
   - [WAMP](https://www.wampserver.com/en/)

2. **Verifique se o PHP está instalado**

3. **Escolha um editor de código**  
   - [Visual Studio Code](https://code.visualstudio.com/) (recomendado)  
   - [Sublime Text](https://www.sublimetext.com/)  
   - [PHPStorm](https://www.jetbrains.com/phpstorm/)

4. **Coloque os arquivos no diretório do servidor local**  
   Exemplo com XAMPP:  
   `C:\xampp\htdocs\projeto-lutadores`

5. **Inicie o Apache no XAMPP**

6. **Acesse no navegador:**  
   `http://localhost/projeto-lutadores`

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)
