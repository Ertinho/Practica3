
# Backend

## IMPORTANTE
Debe tener previamente instalado composer y PHP >= 8.1.12 v para evitar futuros errores u problemas, una vez haya clonado el proyecto.

## Instalación

Ejecuta el siguiente comando para poder instalar composer en el proyecto.
```bash
composer install
```
Debemos copiar el archivo .env para poder establecer la conexión con nuestra base de datos.
```bash
copy .env.example .env
```
Este comando establecera la APP_KEY en nuestro archivo .env
```bash
php artisan key:generate
```
Cambiamos los siguientes parámetros:
```bash
DB_PORT = Depende del puerto asigando por usted en la configuración de su base de datos(default: 3306)
DB_DATABASE = Aqui va el nombre de la base de datos creada en nuestro administrador de base de datos preferido.
DB_USERNAME = root
DB_PASSWORD = Es la contraseña que nosotros asignamos en la instalación, en caso de utilizar Xampp, Laragon, etc.. Este campo se debe dejar vacio.
```
Este comando ejecutara las migraciones del proyecto y una vez creada las tablas en la base de datos, dara paso a ejecutar los seeders que forman parte del estado predeterminado del sistema.
```bash
php artisan migrate --seed
```
En caso de que no funcione la migración, actualize el archivo .env con los siguientes comandos.
```bash
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```
Ahora procederemos a ejecutar el Sistema Web con los siguientes comandos:
```bash
php artisan serve
```



# Frontend

>**Note**: Make sure you have completed the [React Native - Environment Setup](https://reactnative.dev/docs/environment-setup) instructions till "Creating a new application" step, before proceeding.

## Step 1: Instal to Node Package Manager

```bash
# using npm
npm install
```

## Step 2: Start your Application (CLI)

Let Metro Bundler run in its _own_ terminal. Open a _new_ terminal from the _root_ of your React Native project. Run the following command to start your _Android_ or _iOS_ app:

### For Android

```bash
# using npm
npx react-native run android
```
### For iOS

```bash
# using npm
npm run ios
```
```bash
# OR using Yarn
yarn ios
```

If everything is set up _correctly_, you should see your new app running in your _Android Emulator_ or _iOS Simulator_ shortly provided you have set up your emulator/simulator correctly.

This is one way to run your app — you can also run it directly from within Android Studio and Xcode respectively.

## Step 3: Modifying your App

Now that you have successfully run the app, let's modify it.

1. Open `App.tsx` in your text editor of choice and edit some lines.
2. For **Android**: Press the <kbd>R</kbd> key twice or select **"Reload"** from the **Developer Menu** (<kbd>Ctrl</kbd> + <kbd>M</kbd> (on Window and Linux) or <kbd>Cmd ⌘</kbd> + <kbd>M</kbd> (on macOS)) to see your changes!

   For **iOS**: Hit <kbd>Cmd ⌘</kbd> + <kbd>R</kbd> in your iOS Simulator to reload the app and see your changes!
