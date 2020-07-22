/* eslint-disable linebreak-style */
const express = require('express');
const chalk = require('chalk'); // give a color to log messages
const debug = require('debug')('app'); // run only in debug mode - not in production => set DEBUG=*(or file_name) & nodemon (or node) file_name
const morgan = require('morgan');
const path = require('path'); // fix the path

const app = express();

const port = process.env.PORT || 3000;

app.use(morgan('tiny')); // combined for more info

app.use(express.static(path.join(__dirname, 'public')));

app.use('/css', express.static(path.join(__dirname, 'node_modules/bootstrap/dist/css')));
app.use('/js', express.static(path.join(__dirname, 'node_modules/bootstrap/dist/js')));
app.use('/js', express.static(path.join(__dirname, 'node_modules/jquery/dist/')));

app.set('views', './src/views');
app.set('view engine', 'pug');

app.get('/', (req, res) => {
  /* res.sendFile(__dirname + '/views/index.html') */
  /* res.sendFile(path.join(__dirname, 'views/index.html')); */
  /* res.sendFile(path.join(__dirname, 'views', 'index.html')) */
  res.render('index', {
    title: 'My Library',
    list: ['a', 'b', 'c'],
  });
});

app.listen(port, () => {
  debug(`Listening on port ${chalk.green(port)}`);
});
