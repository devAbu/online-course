var express = require('express')
var chalk = require('chalk') //give a color to log messages
var debug = require('debug')('app') // run only in debug mode - not in production => set DEBUG=*(or file_name) & nodemon (or node) file_name
var morgan = require('morgan')
var path = require('path') // fix the path

var app = express()

app.use(morgan('tiny')) //combined for more info

app.use(express.static(path.join(__dirname, 'public')))

app.use('/css', express.static(path.join(__dirname, 'node_modules/bootstrap/dist/css')))
app.use('/js', express.static(path.join(__dirname, 'node_modules/bootstrap/dist/js')))
app.use('/js', express.static(path.join(__dirname, 'node_modules/jquery/dist/')))

app.get('/', function (req, res) {
    /* res.sendFile(__dirname + '/views/index.html') */
    res.sendFile(path.join(__dirname, 'views/index.html'))
    /* res.sendFile(path.join(__dirname, 'views', 'index.html')) */
})

app.listen(3000, function () {
    debug(`Listening on port ${chalk.green('3000')}`)
})