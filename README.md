# bot SIGTAP
Rotina que automatiza o download do arquivo ZIP inerente à última competência do SIGTAP (Tabela de Procedimentos do SUS), pública e disponibilizada mensalmente pelo Ministério da Saúde na [página oficial do sistema.](http://sigtap.datasus.gov.br/tabela-unificada/app/sec/inicio.jsp)

## Instalação
<ul>
  <li>Clone ou baixe o repositório;</li>
  <li>Abra a pasta do projeto no VS Code;</li>
  <li>No terminal digite o comando:</li>  
</ul>

```composer
  composer update
```

No terminal do VS Code acesse a pasta do projeto (..\bot-sigtap) e inicie o servidor web embutido (utilizado apenas para teste):

```php
  php -S localhost:8000
```

## Teste
Abra o browser e na barra de navegação digite:

```link
  http://localhost:8000
```

Será exibida uma página inicial, clique no botão <strong>"start"</strong>.
<br/>
Os arquivos baixados e descomprimidos serão salvos em <strong> ..\bot-sigtap\files\ </strong>

## Licença

[MIT](http://www.opensource.org/licenses/MIT)

