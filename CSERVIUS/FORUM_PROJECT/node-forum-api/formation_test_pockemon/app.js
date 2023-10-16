const express = require('express')

const app = express()
const port = 3000

app.get('/', (req,res)=> res.send('Hello again, Express ! 👋'))

app.get('/api/pockemons/1', (req, res) => res.send('Hello, Bulbizarre !'))

app.listen(port, () => console.log(`Notre application Node est démarré sur : http://localhost:${port}`))
