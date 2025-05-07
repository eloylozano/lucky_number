
# Lucky Number - Symfony 7

Bienvenido al proyecto **Lucky Number** desarrollado con **Symfony 7**. Este proyecto es una aplicación simple que genera un número aleatorio "afortunado" cada vez que se accede a una página. Es ideal para familiarizarte con Symfony y aprender conceptos básicos como rutas, controladores y vistas.

## Requisitos

Para ejecutar este proyecto, asegúrate de tener los siguientes requisitos:

- PHP 8.1 o superior
- Composer
- Symfony 7.x
- Un servidor web (por ejemplo, Apache o Nginx) o usar el servidor integrado de Symfony

## Instalación

### 1. Clona el repositorio

```bash
git clone https://github.com/tu-usuario/lucky-number.git
cd lucky-number
```

### 2. Instala las dependencias con Composer

```bash
composer install
```

### 3. Configura el entorno

Si es la primera vez que ejecutas el proyecto, asegúrate de configurar tu archivo `.env` para el entorno de desarrollo.

```bash
cp .env .env.local
```

### 4. Ejecuta el servidor web de Symfony (opcional)

Si deseas probar el proyecto localmente sin configurar un servidor web, puedes usar el servidor web integrado de Symfony.

```bash
symfony server:start
```

Accede a la aplicación en tu navegador visitando `http://localhost:8000`.

## Uso

Al acceder a la ruta principal `/` de la aplicación, Symfony generará y mostrará un "número afortunado" aleatorio en pantalla.

### Ruta

- **GET /**: Genera y muestra un número aleatorio en la página.

## Estructura del Proyecto

La estructura básica del proyecto es la siguiente:

```
lucky-number/
├── config/                # Archivos de configuración de Symfony
├── public/                # Archivos públicos, como index.php y recursos estáticos
│   └── index.php          # Punto de entrada de la aplicación
├── src/                   # Código fuente de la aplicación
│   └── Controller/        # Controladores de Symfony
│       └── LuckyController.php
├── templates/             # Plantillas de Twig
│   └── lucky/             # Plantilla para mostrar el número afortunado
│       └── index.html.twig
├── translations/          # Archivos de traducción (si es necesario)
├── var/                   # Archivos generados, como logs y cachés
├── vendor/                # Dependencias instaladas por Composer
└── .env                   # Configuración de entorno
```

## Controlador

El controlador principal de la aplicación es `LuckyController.php`, el cual contiene la lógica para generar el número afortunado y pasarlo a la vista.

```php
// src/Controller/LuckyController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    #[Route('/', name: 'app_lucky')]
    public function index(): Response
    {
        $luckyNumber = rand(1, 100); // Genera un número aleatorio entre 1 y 100

        return $this->render('lucky/index.html.twig', [
            'lucky_number' => $luckyNumber,
        ]);
    }
}
```

## Vista

La vista `index.html.twig` muestra el número afortunado generado por el controlador.

```twig
{# templates/lucky/index.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <title>Lucky Number</title>
</head>
<body>
    <h1>Your Lucky Number is: {{ lucky_number }}</h1>
</body>
</html>
```

## Contribuciones

Si deseas contribuir a este proyecto, por favor abre un *pull request* con tus cambios y mejoras.

## Licencia

Este proyecto está bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
