const { response } = require('express')
const express = require('express')
// import file database dengan konstanta connection
const connection = require('./database')

// buatlah router express dengan konstanta router 
const router = new express.Router()

router.get('/', (req, res) => {
})

router.get('/getReview', (req, res) => {
    connection.query('SELECT * FROM review', (error, rows, fields) => {
        if (error) {
            res.status(500).send(error)
        } else {
            res.status(200).json({ msg: rows.length + " Data retrived", status: 200, data: rows })
        }
    })
})


module.exports = router
