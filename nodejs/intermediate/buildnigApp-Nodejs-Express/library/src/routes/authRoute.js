const express = require('express');
const debug = require('debug')('app:authRoute');
const {
  MongoClient,
} = require('mongodb');
const passport = require('passport');

debug.log = console.log.bind(console);

const authRoute = express.Router();

function route(nav) {
  authRoute.route('/signUp')
    .post((req, res) => {
      // create the user --> login from passport.initialize()

      const {
        username,
        password,
      } = req.body;

      const url = 'mongodb://localhost:27017';
      const dbName = 'library';

      (async function addUser() {
        let client;
        try {
          client = await MongoClient.connect(url);
          debug.log('Connected');

          const db = client.db(dbName);

          const col = db.collection('users');
          const user = {
            username,
            password,
          };
          const results = await col.insertOne(user);

          req.login(results.ops[0], () => {
            res.redirect('/auth/profile');
          });
        } catch (err) {
          debug.log(err.stack);
        }
      }());
    });

  authRoute.route('/signin')
    .get((req, res) => {
      res.render('signin', {
        nav,
        title: 'Sign in',
      });
    })
    .post(passport.authenticate('local', {
      successRedirect: '/auth/profile',
      failureRedirect: '/',
    }));

  authRoute.route('/profile')
    .all((req, res, next) => {
      if (req.user) {
        next();
      } else {
        res.redirect('/');
      }
    })
    .get((req, res) => {
      res.json(req.user);
    });

  authRoute.route('/logout').get((req, res) => {
    if (req.user) {
      req.logout();
      res.redirect('/');
    } else {
      res.send('You are not logged in!');
    }
  });
  return authRoute;
}

module.exports = route;
