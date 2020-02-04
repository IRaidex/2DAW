<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="handle_soap_request.php">
            <label for="num1">Primer Numero: </label>
            <input type="text" name="num1" id="num1">
            <label for="num2">Segundo Numero: </label>
            <input type="text" name="num2" id="num2">
            <select name="action" id="opcion">
                <option value="dividir">Dividir</option>
                <option value="resta">Resta</option>
                <option value="suma">Suma</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="raiz">Raiz</option>
                <option value="seno">Seno</option>
                <option value="coseno">Coseno</option>
                <option value="tangente">Tangente</option>
            </select>
            <input type="submit">
        </form>
    </body>
</html>