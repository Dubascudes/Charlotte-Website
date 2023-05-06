const { createServer } = require("http");
const { exec } = require("child_process");

createServer((req, res) => {
  exec(`php ./main.php`, (error, stdout, stderr) => {
    if (error) {
      res.statusCode = 500;
      res.setHeader("Content-Type", "text/plain");
      res.end(`Error: ${error.message}`);
      return;
    }
    res.statusCode = 200;
    res.setHeader("Content-Type", "text/plain");
    res.end(stdout);
  });
}).listen();