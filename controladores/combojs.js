const express = require('express')
const cors = require('cors')
const app = express()
const port = 3000

//Conexion a SQL 
const rest = new (require('rest-mssql-nodejs'))({
    user: "dent",
    password: "123456",
    server: "DESKTOP-HOTSFIC",
    database: "dental_love",
    port: 1433
});

//metodo use para crear urlencoded
app.use(
    express.urlencoded({
        extended: true
    })
)

//Usa formato json para los datos que solicita
app.use(express.json({
    type: "*/*"
}))

//Se usa cors no se pa que
app.use(cors());

// API get para esta cosa jajaja 
// http://localhost:3000/prueba
app.get('/prueba', (req, res) => {
    setTimeout(async()=>{
        const resultado = await rest.executeQuery('select * from Servicios inner join medico on servicios.ID_medico = medico.ID_medico inner join Sucursal on medico.ID_sucursal = Sucursal.ID_sucursal')
        res.send(resultado)
    }, 150);
})

// API get para citas todas
// http://localhost:3000/citas
app.get('/citas', (req, res) => {
    setTimeout(async()=>{
        const citas = await rest.executeQuery('select citas.mes, citas.dia, citas.Hora, servicios.ID_servicios, servicios.ID_medico, medico.NombreMed from citas inner join servicios on citas.ID_servicio = servicios.ID_servicios inner join medico on servicios.ID_medico = medico.ID_medico')
        res.send(citas)
    }, 150);
})

// API get para el ultimo id de citas
// http://localhost:3000/id
app.get('/id', (req, res) => {
    setTimeout(async()=>{
        const id = await rest.executeQuery('select MAX(ID_citas) as "Max" from citas')
        res.send(id)
    }, 150);
})

//aplicacion escucha para el puerto 3000
app.listen(port, () => {
    console.log('Estoy ejecutandome en http://localhost:' + port)
})
