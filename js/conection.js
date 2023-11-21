const { Connection, Request } = require('tedious');

// Configura la conexión a tu base de datos
const config = {
  authentication: {
    options: {
        userName: "YEFERSON VELASQUEZ GARCES",
        password: "55181872",
    },
    type: 'default',
  },
  server: "testdevops-unimagdalena.database.windows.net",
  options: {
    database: "test",
    encrypt: true,
  },
};

const connection = new Connection(config);

// Intenta conectarte
connection.on('connect', (err) => {
  if (err) {
    console.log('Error:');
    console.error('Error al intentar conectarse a la base de datos:', err.message);
  } else {
    console.log('Error base de datos:');
    console.log('Conexión exitosa a la base de datos de Azure SQL');
    // Aquí puedes ejecutar consultas a la base de datos para verificar más la conexión
    executeStatement();
  }
});

// Función para ejecutar una consulta simple
function executeStatement() {
  const request = new Request('SELECT 1', (err) => {
    if (err) {
      console.error('Error al ejecutar la consulta:', err.message);
    } else {
      console.log('Consulta ejecutada con éxito.');
    }
    connection.close();
  });

  request.on('row', (columns) => {
    columns.forEach((column) => {
      console.log(column.value);
    });
  });

  connection.execSql(request);
}
