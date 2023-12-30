
# Aaxis Test - English

API Project for Aaxis.

## Documentation

[Test Documentation](https://docs.google.com/document/d/1KMTRaQOsoqaaTJoEuyUFsWwss-jZVKJAQOyLi4LdPtY/edit?usp=sharing)

[Postman Request](https://drive.google.com/file/d/10zgLlTpJ42ExJ6kjyy3bn7Cs2hs-dVO3/view?usp=sharing)


## Requirements

This project requires:

- PHP 8.2
- Symfony 7
- MySQL 8.0


## Run Locally

Clone the project

```bash
  git clone https://link-to-project
```

Go to the project directory

```bash
  cd AaxisTest
```

Create a .env.local file and fill it with the correct credentials

```bash
  DATABASE_URL="mysql://user:password@host:port/databasename?serverVersion=8.0.32&charset=utf8mb4"
```

Create the database

```bash
  php bin/console doctrine:database:create
```

Run the migrations

```bash
  php bin/console doctrine:migrations:migrate
```

Deploy the proyect

```bash
  symfony serve:start
```


## API Reference

#### Get all products

```http
  GET /api/products
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `X-AUTH-TOKEN` | `string` | **Required**. Your API key |

#### Create a product

```http
  POST /api/product/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `X-AUTH-TOKEN` | `string` | **Required**. Your API key |
| `Content-Type` | `string` | application/json |

##### Json

```
[
    {   
        "sku" : "Sku",
        "name" : "Name",
        "description" : "Description"
    }
]
```

#### Edit a product

```http
  PUT /api/product/edit
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `X-AUTH-TOKEN` | `string` | **Required**. Your API key |
| `Content-Type` | `string` | application/json |

##### Json

```
[
    {   
        "sku" : "Sku",
        "name" : "Name",
        "description" : "Description"
    }
]
```

#### Edit a product

```http
  PAT /api/product/edit
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `X-AUTH-TOKEN` | `string` | **Required**. Your API key |
| `Content-Type` | `string` | application/json |

##### Json

```
[
    {   
        "sku" : "Sku",
        "name" : "Name",
    }
]
```
## Token

To make any request, you need the X-AUTH-TOKEN

`A4x1sT3st`

***

# Aaxis Test - Español

Proyecto de API para Aaxis.

## Documentación

[Documentación de la prueba](https://docs.google.com/document/d/1KMTRaQOsoqaaTJoEuyUFsWwss-jZVKJAQOyLi4LdPtY/edit?usp=sharing)

[Solicitud de Postman](https://drive.google.com/file/d/10zgLlTpJ42ExJ6kjyy3bn7Cs2hs-dVO3/view?usp=sharing)


## Requisitos

Este proyecto requiere:

- PHP 8.2
- Symfony 7
- MySQL 8.0


## Ejecutar localmente

Clona el proyecto

```bash
  git clone https://link-to-project
```

Ve al directorio del proyecto

```bash
  cd AaxisTest
```

Crea un archivo .env.local y complétalo con las credenciales correctas

```bash
  DATABASE_URL="mysql://user:password@host:port/databasename?serverVersion=8.0.32&charset=utf8mb4"
```

Crea la base de datos

```bash
  php bin/console doctrine:database:create
```

Ejecuta las migraciones

```bash
  php bin/console doctrine:migrations:migrate
```

Despliega el proyecto

```bash
  symfony serve:start
```


## Referencia de la API

#### Obtener todos los productos

```http
  GET /api/products
```

| Parámetro | Tipo     | Descripción                |
| :-------- | :------- | :------------------------- |
| `X-AUTH-TOKEN` | `string` | **Requerido**. Tu clave API |

#### Crear un producto

```http
  POST /api/product/create
```

| Parámetro | Tipo     | Descripción                       |
| :-------- | :------- | :-------------------------------- |
| `X-AUTH-TOKEN` | `string` | **Requerido**. Tu clave API |
| `Content-Type` | `string` | application/json |

##### Json

```
[
    {   
        "sku" : "Sku",
        "name" : "Nombre",
        "description" : "Descripción"
    }
]
```

#### Editar un producto

```http
  PUT /api/product/edit
```

| Parámetro | Tipo     | Descripción                       |
| :-------- | :------- | :-------------------------------- |
| `X-AUTH-TOKEN` | `string` | **Requerido**. Tu clave API |
| `Content-Type` | `string` | application/json |

##### Json

```
[
    {   
        "sku" : "Sku",
        "name" : "Nombre",
        "description" : "Descripción"
    }
]
```

#### Editar un producto

```http
  PAT /api/product/edit
```

| Parámetro | Tipo     | Descripción                       |
| :-------- | :------- | :-------------------------------- |
| `X-AUTH-TOKEN` | `string` | **Requerido**. Tu clave API |
| `Content-Type` | `string` | application/json |

##### Json

```
[
    {   
        "sku" : "Sku",
        "name" : "Nombre",
    }
]
```
## Token

Para realizar cualquier solicitud, necesitas el X-AUTH-TOKEN

`A4x1sT3st`
