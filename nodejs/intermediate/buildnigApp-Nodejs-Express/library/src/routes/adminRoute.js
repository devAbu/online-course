const express = require('express');
const debug = require('debug')('app:admin');
/* const MongoClient = require('mongodb').MongoClient; */
const {
  MongoClient,
} = require('mongodb');

debug.log = console.log.bind(console);

const adminRouter = express.Router();

const books = [{
    title: 'Mongo',
    genre: 'juhu',
    author: 'Abu',
    read: false,
  },
  {
    title: 'Juhu',
    genre: 'HUJU',
    author: 'Abu',
    read: false,
  },
  {
    title: 'Super lose',
    genre: 'juhu huju',
    author: 'ljepotan',
    read: false,
  },
];

function router(nav) {
  adminRouter.route('/')
    .get((req, res) => {
      const url = 'mongodb://localhost:27017';
      const dbName = 'library';

      (async function mongo() {
        let client;
        try {
          client = await MongoClient.connect(url);
          debug.log('Connected');
          const db = client.db(dbName);
          const response = await db.collection('books').insertMany(books);
          res.json(response);
        } catch (err) {
          debug.log(err.stack);
        }

        client.close();
      }());
    });
  return adminRouter;
}

module.exports = router;
