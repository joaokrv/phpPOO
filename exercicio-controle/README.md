# 🕹️ Exercício: Projeto Controle Remoto

Este exercício simula o funcionamento de um controle remoto utilizando conceitos de Programação Orientada a Objetos em PHP. O projeto utiliza uma interface para definir o comportamento esperado e uma classe concreta que implementa todas as funcionalidades de um controle remoto real.

---

## 🧠 Conceitos abordados

- Interfaces em PHP
- Encapsulamento de atributos (getters e setters)
- Implementação de métodos obrigatórios
- Estrutura condicional para simulação de ações
- Interação entre código PHP e HTML

---

## 📄 Estrutura dos arquivos

- `Controlador.php`: Define a interface `Controlador`, que contém os métodos que o controle remoto deve implementar.
- `ControleRemoto.php`: Classe que implementa a interface `Controlador`, com os comportamentos típicos de um controle remoto.
- `index.php`: Arquivo principal que instancia e manipula o objeto `ControleRemoto`, simulando ações como ligar, aumentar volume, tocar, pausar e exibir o menu.

---

## 💻 Demonstração do funcionamento

Ao acessar o `index.php`, o navegador exibirá uma sequência de ações realizadas pelo controle remoto:

- Ligar o controle
- Abrir menu e exibir status
- Aumentar e diminuir o volume
- Tocar e pausar
- Fechar o menu

Essas ações são controladas por chamadas de métodos que interagem com os estados internos do objeto.

Abaixo está um exemplo básico de como utilizar a classe `ControleRemoto`:

```php
<?php
require_once 'ControleRemoto.php';

// Criando uma instância do controle remoto
$controle = new ControleRemoto();

// Ligando o controle
$controle->ligar();

// Aumentando o volume
$controle->maisVolume();
$controle->maisVolume();

// Reproduzindo
$controle->play();

// Exibindo o menu
$controle->abrirMenu();
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
   `C:\xampp\htdocs\exercicio-controle`

5. **Inicie o Apache no XAMPP**

6. **Acesse no navegador:**  
   `http://localhost/exercicio-controle`

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.cursoemvideo.com/curso/php-poo/)
