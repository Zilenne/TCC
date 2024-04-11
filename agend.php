<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agendar</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        form {
            max-width: 400px;
            padding: 20px;
            background-color: #4b5320; /* Verde Militar */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #ffffff;
        }
        input[type="text"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #ffffff;
            color: #4b5320; /* Verde Militar */
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10,11}" placeholder="Apenas números" required>

        <label for="servico">Serviço:</label>
        <select id="servico" name="servico" required>
            <option value="">Escolha o serviço</option>
            <option value="barbeiro">Barbeiro</option>
            <option value="cabelereiro">Cabeleireiro</option>
            <option value="manicure">Manicure</option>
            <option value="spa">Spa</option>
        </select>

        <label for="dia">Dia:</label>
        <input type="date" id="dia" name="dia" required>

        <label for="horario">Horário:</label>
        <input type="time" id="horario" name="horario" required>

        <input type="submit" value="Agendar">
    </form>
</body>
</html>
