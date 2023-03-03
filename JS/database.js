var mysql =require("mysql");
var conexion = mysql.createConnection({
    host:'sql9.freemysqlhosting.net',
    database:'sql9601255',
    user:' sql9601255',
    password:'wnJU3xaVef',
    port:'3306'
});
conexion.connect(function(error){
    if (error){
        throw(error);
    }else{
        console.log("Conexion exitosa");
    }

})
conexion.end();