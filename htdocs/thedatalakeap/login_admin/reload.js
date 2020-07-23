var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "thedatalakeap"
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM articles", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});

$("#containerdiv").load(location.href+" #containerdiv>*","")
  