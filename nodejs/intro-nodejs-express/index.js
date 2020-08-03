const express = require('express');
const path = require('path');

const app = express();

app.set('views', path.join(__dirname, '/views')); // views directory
app.set('view engine', 'mustache'); //view engine
app.engine('mustache', require('hogan-middleware').__express) // to enable mustache
app.use(express.static(path.join(__dirname, 'public')));

const indexRouter = require('./routes/index')

app.use('/', indexRouter)

app.listen(3000, () => {
  console.log('Running on port 3000')
})
