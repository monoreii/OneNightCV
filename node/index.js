// import express dengan menggunkan konstanta express = require('express')

// import file router dengan konstanta router
const express = require('express')
const router = require('./router')

const cors = require('cors')

const app = express()
const port = process.env.PORT || 3000

app.use(cors())
app.use(express.json())
app.use(router)

app.listen(port, () => {}) // Buat perintah supaya muncul pesan bahwa server sudah berjalan di port yang sudah ditentukan sebelumnya
    

