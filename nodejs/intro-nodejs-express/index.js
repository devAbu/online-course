const express = require('express');
const path = require('path');
var bodyParser = require('body-parser')

const app = express();

app.set('views', path.join(__dirname, '/views')); // views directory
app.set('view engine', 'mustache'); //view engine
app.engine('mustache', require('hogan-middleware').__express) // to enable mustache
app.use(express.static(path.join(__dirname, 'public')));

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({
  extended: false
}))

// parse application/json
app.use(bodyParser.json())

// middleware

/* app.use((req, res, next) => {
  req.timestamp = new Date()
  next()
}) */

const timestamp = (req, res, next) => {
  req.timestamp = new Date()
  next()
}

app.use(timestamp)


const indexRouter = require('./routes/index')

app.use('/', indexRouter)

app.listen(3000, () => {
  console.log('Running on port 3000')
})
