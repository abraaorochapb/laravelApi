# Documentação da API

## Visão Geral
Esta API foi construída utilizando o framework Laravel e o banco de dados PostgreSQL. Ela fornece endpoints para gerenciar vagas de emprego.

## Tecnologias Utilizadas
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/)
- [PostgreSQL](https://www.postgresql.org/)

## Instalação
1. Certifique-se de ter o PHP e o Composer instalados em seu sistema.
2. Clone este repositório para sua máquina local.
3. Instale as dependências do Composer executando o comando:
   ```
   composer install
   ```
4. Configure o arquivo `.env` com as informações do banco de dados PostgreSQL.
5. Execute as migrações para criar as tabelas do banco de dados com o comando:
   ```
   php artisan migrate
   ```
6. Inicie o servidor local com o comando:
   ```
   php artisan serve
   ```
7. Acesse a API através da URL fornecida pelo servidor local.

## Endpoints

### 1. Criar uma Vaga
- **URL:** `POST /vaga/post`
- **Descrição:** Cria uma nova vaga de emprego.
- **Corpo da Solicitação (Request Body):**
  ```json
  {
      "titulo": "Desenvolvedor Full Stack",
      "descricao": "Descrição da vaga...",
      "local": "São Paulo-SP",
      "salario": "3.500",
      "remoto": "Presencial",
  }
  ```
- **Código de Resposta:** 201 Created
- **Exemplo de Resposta:**
  ```json
  {
      "id": 1,
      "titulo": "Desenvolvedor Full Stack",
      "descricao": "Descrição da vaga...",
      "local": "São Paulo-SP",
      "salario": "3.500",
      "remoto": "Presencial",
      "created_at": "2024-02-11T12:00:00.000000Z",
      "updated_at": "2024-02-11T12:00:00.000000Z"
  }
  ```

### 2. Obter uma Vaga
- **URL:** `GET /vaga/{id}`
- **Descrição:** Retorna os detalhes de uma vaga específica.
- **Parâmetros da URL:**
  - `{id}`: ID da vaga desejada.
- **Código de Resposta:** 200 OK
- **Exemplo de Resposta:**
  ```json
  {
      "id": 1,
      "titulo": "Desenvolvedor Full Stack",
      "descricao": "Descrição da vaga...",
      "local": "São Paulo-SP",
      "salario": "3.500",
      "remoto": "Presencial",
      "created_at": "2024-02-11T12:00:00.000000Z",
      "updated_at": "2024-02-11T12:00:00.000000Z"
  }
  ```

### 3. Atualizar uma Vaga
- **URL:** `PUT /vaga/{id}`
- **Descrição:** Atualiza os detalhes de uma vaga específica.
- **Parâmetros da URL:**
  - `{id}`: ID da vaga a ser atualizada.
- **Corpo da Solicitação (Request Body):**
  ```json
  {
      "titulo": "Desenvolvedor Frontend",
      "descricao": "Nova descrição da vaga...",
      "remoto": "Remoto"
  }
  ```
- **Código de Resposta:** 200 OK
- **Exemplo de Resposta:**
  ```json
  {
      "id": 1,
      "titulo": "Desenvolvedor Frontend",
      "descricao": "Descrição da vaga...",
      "local": "São Paulo-SP",
      "salario": "3.500",
      "remoto": "Remoto",
      "created_at": "2024-02-11T12:00:00.000000Z",
      "updated_at": "2024-02-11T12:00:00.000000Z"
  }
  ```

### 4. Excluir uma Vaga
- **URL:** `DELETE /vaga/{id}`
- **Descrição:** Exclui uma vaga específica.
- **Parâmetros da URL:**
  - `{id}`: ID da vaga a ser excluída.
- **Código de Resposta:** 200 Excluida com sucesso

## Considerações Finais
Esta documentação fornece uma visão geral dos endpoints disponíveis nesta API. Certifique-se de utilizar os métodos HTTP corretos e fornecer os parâmetros necessários para interagir com a API de maneira adequada.
