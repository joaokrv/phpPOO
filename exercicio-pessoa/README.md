# 👨‍🏫 Exercício: Herança com Pessoa, Aluno, Professor e Funcionário

Este exercício simula um sistema de cadastro de pessoas utilizando **Programação Orientada a Objetos (POO)** em PHP. O projeto envolve a criação de uma **classe base `Pessoa`**, e três subclasses: `Aluno`, `Professor` e `Funcionario`, cada uma com seus atributos e comportamentos específicos. Também foi aplicado um tema escuro moderno com CSS para tornar a exibição mais organizada e agradável.

---

## 🧠 Conceitos abordados

- Programação Orientada a Objetos (POO) em PHP
- Herança de classes
- Encapsulamento de atributos (getters e setters)
- Polimorfismo através de métodos personalizados
- Criação e uso de métodos específicos para cada classe
- Separação entre lógica (PHP) e apresentação (HTML + CSS)
- Estilização com CSS no tema escuro
- Organização de dados por seções

---

## 📄 Estrutura dos arquivos

- `Pessoa.php`: Classe base com atributos comuns como nome, idade e sexo.
- `Aluno.php`: Herda de `Pessoa` e inclui atributos como matrícula e curso, além de métodos como `estudar()` e `cancelarMatricula()`.
- `Professor.php`: Herda de `Pessoa` e adiciona especialidade e salário, com método `receberAumento()`.
- `Funcionario.php`: Herda de `Pessoa` e possui setor e status de trabalho, com métodos como `mudarSetor()` e `voltarTrabalho()`.
- `index.php`: Instancia e testa os objetos, exibindo seus status e executando métodos.
- `style.css`: Arquivo de estilo com tema escuro e layout organizado para exibição dos dados.

---

## 💻 Demonstração do funcionamento

Ao acessar o `index.php` no navegador, você verá seções separadas para:

- Aluno estudando no curso de Engenharia
- Professor recebendo aumento de salário
- Funcionário sendo transferido de setor e começando a trabalhar

Cada seção exibe os dados da pessoa com **espaçamento, organização e cores específicas**, além de mensagens personalizadas para os métodos executados.

Exemplo de saída:
```text
Nome: João  
Idade: 20  
Sexo: Masculino  
Matrícula: 12345  
Curso: Engenharia  
João está estudando no curso de Engenharia.
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
   `C:\xampp\htdocs\exercicio-pessoa`

5. **Inicie o Apache no XAMPP**

6. **Acesse no navegador:**  
   `http://localhost/php/phpPOO/exercicio-pessoa`

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.cursoemvideo.com/curso/php-poo/)