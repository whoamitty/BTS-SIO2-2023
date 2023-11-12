const express = require('express')

const app = express()
const port = 3000

app.get('/', (req,res)=> res.send('Hello again, Express ! 👋'))

app.get('/api/pockemons/:id', (req, res) => { 
    const id = req.params.id
    res.send(`Vous avez demandé le pokémon n°${id}`)

})

app.listen(port, () => console.log(`Notre application Node est démarré sur : http://localhost:${port}`))