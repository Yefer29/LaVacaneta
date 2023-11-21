const { Connection, Request } = require("tedious");

// Configura la conexión a tu base de datos
const config = {
  authentication: {
    options: {
      userName: "dev_user",
      password: "55181872",
    },
    type: "default",
  },
  server: "testdevops-unimagdalena.database.windows.net",
  options: {
    database: "test",
    encrypt: true,
  },
};

const connection = new Connection(config);

// Intenta conectarte
connection.on("connect", (err) => {
  if (err) {
    console.error(err.message);
  } else {
    console.log("Conectado a la base de datos de Azure SQL");
    // Aquí puedes ejecutar consultas a la base de datos
  }
});
