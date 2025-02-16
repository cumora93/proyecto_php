<!DOCTYPE html>
<html>
<head>
    <title>Crear Equipo</title>
</head>
<body>
    <h1>Nuevo Equipo</h1>
    <form method="POST" action="index.php?controller=equipo&action=create">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Ciudad:</label>
        <input type="text" name="ciudad">
        <br>
        <label>Deporte:</label>
        <select name="deporte">
            <option value="futbol">Futbol</option>
            <option value="baloncesto">Baloncesto</option>
            <option value="tenis">Tenis</option>
            <option value="balonmano">Balonmano</option>
        </select>
        <br>
        <label>Fecha de creación:</label>
        <input type="date" name="date_add" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>