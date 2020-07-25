const express = require('express');
/* const mssql = require('mssql'); */
const {
  MongoClient,
  ObjectID,
} = require('mongodb');
const debug = require('debug')('app:admin');

debug.log = console.log.bind(console);
const bookRouter = express.Router();

function router(nav) {
  bookRouter.use((req, res, next) => {
    if (req.user) {
      next();
    } else {
      res.redirect('/');
    }
  });

  bookRouter.route('/').get((req, res) => {
    const url = 'mongodb://localhost:27017';
    const dbName = 'library';

    (async function mongo() {
      let client;
      try {
        client = await MongoClient.connect(url);
        debug.log('Connected');
        const db = client.db(dbName);
        const collection = await db.collection('books');

        const books = await collection.find().toArray();

        res.render('books', {
          title: 'Books',
          nav,
          books,
        });

        /* books.then((response) => {
          res.render('books', {
            title: 'Books',
            nav,
            books: response,
          });
        }); */
      } catch (err) {
        debug.log(err.stack);
      }

      client.close();
    }());
    /* (async function query() {
      const request = new mssql.Request();

      const result = await request.query('select * from books');

      res.render('books', {
        title: 'Books',
        nav,
        books: result.recordset,
      });
    }()); */
  });

  bookRouter.route('/single/:id').get((req, res) => {
    const {
      id,
    } = req.params;
    const url = 'mongodb://localhost:27017';
    const dbName = 'library';

    (async function mongo() {
      let client;
      try {
        client = await MongoClient.connect(url);
        debug.log('Connected');
        const db = client.db(dbName);
        const collection = await db.collection('books');

        const book = await collection.findOne({
          _id: new ObjectID(id),
        });

        res.render('book', {
          title: 'Books',
          nav,
          book,
        });

        /* book.then((response) => {
          res.render('book', {
            title: 'Books',
            nav,
            book: response,
          });
        }); */
      } catch (err) {
        debug.log(err.stack);
      }

      client.close();
    }());
  });
  /* .all((req, res, next) => {
    (async function query() {
      const {
        id,
      } = req.params;
      const request = new mssql.Request();

      const result = await request.query(`select * from books where id = ${id}`);
      /* await request.input('id', sql.Int, id).query('select * from books where id = @id') */

  /* req.bookId = result.recordset[0]; *
        [req.bookId] = result.recordset;
        next();
      }());
    })
    .get((req, res) => {
      res.render('book', {
        title: 'Books',
        nav,
        book: req.bookId,
      });
    }); */

  return bookRouter;
}

module.exports = router;
