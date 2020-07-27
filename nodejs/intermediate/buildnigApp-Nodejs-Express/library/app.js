const express = require('express');
const chalk = require('chalk'); // give a color to log messages
const debug = require('debug')('app'); // run only in debug mode - not in production => set DEBUG=*(or file_name) & nodemon (or node) file_name
const morgan = require('morgan');
const path = require('path'); // fix the path
const mssql = require('mssql');
const bodyParser = require('body-parser');
const passport = require('passport');
const cookieParser = require('cookie-parser');
const session = require('express-session');

const app = express();
const port = process.env.PORT || 3000;

debug.log = console.log.bind(console);

const config = {
  user: 'abu',
  password: 'aburefko159753',
  server: 'DESKTOP-RSE60UO',
  database: 'library',

  options: {
    encrypt: true,
  },
};

mssql.connect(config).catch((err) => debug.log(err));

app.use(morgan('tiny')); // combined for more info

app.use(bodyParser.json()); // for post
app.use(bodyParser.urlencoded({
  extended: false,
}));

app.use(cookieParser());
app.use(session({
  secret: 'library',
}));

require('./src/config/passport.js')(app);

app.use((req, res, next) => {
  debug.log('middleware function');
  next();
});

app.use(express.static(path.join(__dirname, 'public')));

app.use('/css', express.static(path.join(__dirname, 'node_modules/bootstrap/dist/css')));
app.use('/js', express.static(path.join(__dirname, 'node_modules/bootstrap/dist/js')));
app.use('/js', express.static(path.join(__dirname, 'node_modules/jquery/dist/')));

app.set('views', './src/views');
/* app.set('view engine', 'pug'); */
app.set('view engine', 'ejs');

const nav = [{
    link: '/books',
    title: 'Books',
  },
  {
    link: '/authors',
    title: 'Authors',
  },
];

const bookRouter = require('./src/routes/bookRoute')(nav);
const adminRouter = require('./src/routes/adminRoute')(nav);
const authRouter = require('./src/routes/authRoute')(nav);

app.use('/books', bookRouter);
app.use('/admin', adminRouter);
app.use('/auth', authRouter);

app.get('/', (req, res) => {
  /* res.sendFile(__dirname + '/views/index.html') */
  /* res.sendFile(path.join(__dirname, 'views/index.html')); */
  /* res.sendFile(path.join(__dirname, 'views', 'index.html')) */
  res.render('index', {
    title: 'My Library',
    nav: [{
      link: '/books',
      title: 'Books',
    }, {
      link: '/authors',
      title: 'Authors',
    }],
  });
});

app.listen(port, () => {
  debug.log(`Listening on port ${chalk.green(port)}`);
});
